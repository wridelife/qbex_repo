<?php

namespace App\Http\Controllers\Api\Provider;

use Auth;
use File;
use Config;
use QrCode;
use Setting;
use Exception;
use Socialite;
use Validator;
use Notification;
use App\Models\Provider;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use App\Models\RequestFilter;
use App\Models\ProviderDevice;
use App\Models\ProviderService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Notifications\ResetPasswordOTP;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Resource\ReferralResource;

class TokenController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        if ($request->referral_code != null) {
            $validate['referral_unique_id']=$request->referral_code;
            $validator                     = (new ReferralResource())->checkReferralCode($validate);
            if (!$validator->fails()) {
                $validator->errors()->add('referral_code', 'Invalid Referral Code');
                throw new \Illuminate\Validation\ValidationException($validator);
            }
        }

        $referral_unique_id=(new ReferralResource())->generateCode();

        $this->validate($request, [
            'device_id'    => 'required',
            'device_type'  => 'required|in:android,ios',
            'device_token' => 'required',
            'first_name'   => 'required|max:255',
            'last_name'    => 'max:255',
            'email'        => 'required|email|max:255|unique:providers',
            'country_code' => 'required',
            'mobile'       => 'required|unique:providers',
            'password'     => 'required|min:6|confirmed',
            //'service_model' => 'required'
        ]);

        try {
        $Provider = new Provider();

        if ($request->has('gender')) {
            if ($request->gender == 'Male' || $request->gender == 'male') {
                $Provider['gender'] = 'MALE';
            } else {
                $Provider['gender'] = 'FEMALE';
            }
        }
        $Provider['email']                 = $request->email;
        $Provider['first_name']            = $request->first_name;
        $Provider['last_name']             = $request->last_name;
        $Provider['country_code']          = $request->country_code;
        $Provider['mobile']                = $request->mobile;
        $Provider['password']              = bcrypt($request->password);
        $Provider['referral_unique_id']    = $referral_unique_id;

        $Provider->save();

        ProviderService::create([
        		'provider_id' => $Provider->id,
        		'service_type_id' => $request->service_type,
        		'service_number' => $request->service_number,
        		'service_model' => $request->service_model,
        	]);

        ProviderDevice::create([
            'provider_id' => $Provider->id,
            'udid'        => $request->device_id,
            'token'       => $request->device_token,
            'type'        => $request->device_type,
        ]);

        $ProviderUser=$this->authenticate($request);

        //			if(config('constants.send_email', 0) == 1) {
        //				// send welcome email here
        //				site_registermail($Provider);
        //			}

        //check user referrals
        if (config('constants.referral', 0) == 1) {
            if ($request->referral_code != null) {
                //call referral function
                (new ReferralResource())->create_referral($request->referral_code, $Provider);
            }
        }

        return $ProviderUser;
        } catch (QueryException $e) {
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json(['error' => trans('api.something_went_wrong')], 500);
            }
            return abort(500);
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'device_id'    => 'required',
            'device_type'  => 'required|in:android,ios',
            'device_token' => 'required',
            'email'        => 'required|exists:providers',
            'password'     => 'required',
        ]);

        //$login = $request->input('email');
        //$field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';
        //$request->merge([$field => $login]);
        $provider       = Provider::where('email', '=', $request->email)->orWhere('mobile', $request->email)->first();
        $request->email = $provider->email;
        //$request->merge(['email' => $request->email]);
        //return $request->only('email', 'password');
        //$request->merge([$field => $login]);
        $credentials = $request->only('email', 'password');
        if (!$provider || !Hash::check($request->password, $provider->password)) {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        \Auth::login($provider);
        //return auth()->user();
        $provider->tokens()->delete();
        $access_token = $provider->createToken('web')->plainTextToken;

        $User = Provider::with('service.service_type', 'device')->find(auth()->user()->id);

        $User->access_token = $access_token;
        $User->currency     = config('constants.currency');
        $User->sos          = config('constants.sos_number', '911');
        $User->measurement  = config('constants.distance', 'Kms');

        if ($User->device) {
            ProviderDevice::where('id', $User->device->id)->update([
                'udid'     => $request->device_id,
                'token'    => $request->device_token,
                'type'     => $request->device_type,
            ]);
        } else {
            ProviderDevice::create([
                'provider_id' => $User->id,
                'udid'        => $request->device_id,
                'token'       => $request->device_token,
                'type'        => $request->device_type,
            ]);
        }

        $User->services = ProviderService::select('service_types.name', 'service_number', 'service_model')
        ->leftjoin('service_types', 'service_types.id', '=', 'provider_services.service_type_id')
        ->where('provider_id', $User->id)->first();

            if ($User->status == 'approved') {
                foreach ($User->service as $post) {
                    //\Log::alert("on status to change ".$post);
                    $post->update(['status' => 'active']);
                    //\Log::alert("on status change ".$post);
                }
            }
        return response()->json($User);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        try {
            ProviderDevice::where('provider_id', $request->id)->update(['udid'=> '', 'token' => '']);
            $ridingStatus = ProviderService::where('provider_id', $request->id)->where('status', 'riding')->first();
            if (!$ridingStatus) {
                ProviderService::where('provider_id', $request->id)->update(['status' => 'offline']);
            }
            $provider          = $request->id;
            $LogoutOpenRequest = RequestFilter::with(['request.provider', 'request'])
                ->where('provider_id', $provider)
                ->whereHas('request', function ($query) use ($provider) {
                    $query->where('status', 'SEARCHING');
                    $query->where('current_provider_id', '<>', $provider);
                    $query->orWhereNull('current_provider_id');
                })->pluck('id');

            if (count($LogoutOpenRequest) > 0) {
                RequestFilter::whereIn('id', $LogoutOpenRequest)->delete();
            }

            $user = Provider::where('id', $request->id)->first();
            $user->tokens()->delete();
            return response()->json(['message' => trans('api.logout_success')]);
        } catch (Exception $e) {
            return response()->json(['error' => trans('api.something_went_wrong')], 500);
        }
    }

    /**
     * Forgot Password.
     *
     * @return \Illuminate\Http\Response
     */
    public function forgot_password(Request $request)
    {
        $this->validate($request, [
            'mobile' => 'required|exists:providers,mobile',
        ]);

        try {
            $provider = Provider::where('mobile', $request->mobile)->first();

            $otp = mt_rand(100000, 999999);

            $provider->otp = $otp;
            $provider->save();

            Notification::send($provider, new ResetPasswordOTP($otp));

            return response()->json([
                'message'  => 'Código de verificação enviado para seu e-mail!',
                'provider' => $provider,
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => trans('api.something_went_wrong')], 500);
        }
    }

    /**
     * Reset Password.
     *
     * @return \Illuminate\Http\Response
     */
    public function reset_password(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
            'id'       => 'required|numeric|exists:providers,id',
        ]);

        try {
            $Provider = Provider::findOrFail($request->id);

            $Provider->password = bcrypt($request->password);
            $Provider->save();
            if ($request->ajax()) {
                return response()->json(['message' => trans('api.provider.password_updated')]);
            }
        } catch (Exception $e) {
            if ($request->ajax()) {
                return response()->json(['error' => trans('api.something_went_wrong')], 500);
            }
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function facebookViaAPI(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'device_type'  => 'required|in:android,ios',
                'device_token' => 'required',
                'accessToken'  => 'required',
                //'mobile' => 'required',
                'device_id' => 'required',
                'login_by'  => 'required|in:manual,facebook,google',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['status'=>false, 'message' => $validator->messages()->all()]);
        }
        $user          = Socialite::driver('facebook')->stateless();
        $FacebookDrive = $user->userFromToken($request->accessToken);

        try {
            $FacebookSql = Provider::where('social_unique_id', $FacebookDrive->id);
            if ($FacebookDrive->email != '') {
                $FacebookSql->orWhere('email', $FacebookDrive->email);
            }

            $referral_unique_id=(new ReferralResource())->generateCode();

            $AuthUser = $FacebookSql->first();
            if ($AuthUser) {
                $AuthUser->social_unique_id  =$FacebookDrive->id;
                $AuthUser->login_by          ='facebook';
                $AuthUser->mobile            =$request->mobile ?: '';
                $AuthUser->country_code      =$request->country_code ?: '';
                $AuthUser->referral_unique_id=$referral_unique_id;
                $AuthUser->save();
            } else {
                if ($request->mobile != '') {
                    if ($request->country_code == '') {
                        return response()->json(['message' => trans('api.country_code')], 422);
                    }
                    $alreadyExits = Provider::where([['mobile', $request->mobile], ['country_code', $request->country_code]])->first();
                    if ($alreadyExits) {
                        return response()->json(['message' => trans('api.mobile_exist')], 422);
                    }
                }
                $AuthUser['email']           =$FacebookDrive->email;
                $name                        = explode(' ', $FacebookDrive->name, 2);
                $AuthUser['first_name']      =$name[0];
                $AuthUser['last_name']       =isset($name[1]) ? $name[1] : '';
                $AuthUser['password']        =bcrypt($FacebookDrive->id);
                $AuthUser['social_unique_id']=$FacebookDrive->id;
                // $AuthUser["avatar"]=$FacebookDrive->avatar;
                $fileContents = file_get_contents($FacebookDrive->getAvatar());
                File::put(public_path() . '/storage/provider/profile/' . $FacebookDrive->getId() . '.jpg', $fileContents);

                //To show picture
                $picture                       = 'provider/profile/' . $FacebookDrive->getId() . '.jpg';
                $AuthUser['avatar']            =$picture;
                $AuthUser['mobile']            =$request->mobile ?: '';
                $AuthUser['country_code']      =$request->country_code ?: '';
                $AuthUser['referral_unique_id']=$referral_unique_id;

                $AuthUser['login_by']='facebook';
                $AuthUser            = Provider::create($AuthUser);

                if (config('demo_mode', 0) == 1) {
                    //$AuthUser->update(['status' => 'approved']);
                    ProviderService::create([
                        'provider_id'     => $AuthUser->id,
                        'service_type_id' => '1',
                        'status'          => 'active',
                        'service_number'  => '4pp03ets',
                        'service_model'   => 'Audi R8',
                    ]);
                }

                //				if(config('constants.send_email', 0) == 1) {
//					// send welcome email here
//				site_registermail($AuthUser);
//				}
            }
            if ($AuthUser) {
                $userToken = $AuthUser->createToken('web')->plainTextToken;

                $User      = Provider::with('service', 'device')->find($AuthUser->id);
                if ($User->device) {
                    ProviderDevice::where('id', $User->device->id)->update([
                        'udid'  => $request->device_id,
                        'token' => $request->device_token,
                        'type'  => $request->device_type,
                    ]);
                } else {
                    ProviderDevice::create([
                        'provider_id' => $User->id,
                        'udid'        => $request->device_id,
                        'token'       => $request->device_token,
                        'type'        => $request->device_type,
                    ]);
                }
                return response()->json([
                    'status'       => true,
                    'token_type'   => 'Bearer',
                    'access_token' => $userToken,
                    'currency'     => config('constants.currency'),
                    'measurement'  => config('constants.distance', 'Kms'),
                    'sos'          => config('constants.sos_number', '911'),
                ]);
            } else {
                return response()->json(['status'=>false, 'message' => trans('api.invalid')]);
            }
        } catch (Exception $e) {
            return response()->json(['status'=>false, 'message' => trans('api.something_went_wrong')]);
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function googleViaAPI(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'device_type'  => 'required|in:android,ios',
                'device_token' => 'required',
                'accessToken'  => 'required',
                //'mobile' => 'required',
                'device_id' => 'required',
                'login_by'  => 'required|in:manual,facebook,google',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['status'=>false, 'message' => $validator->messages()->all()]);
        }
        $user = Socialite::driver('google')->stateless();

        $GoogleDrive = $user->userFromToken($request->accessToken);

        try {
            $GoogleSql = Provider::where('social_unique_id', $GoogleDrive->id);
            if ($GoogleDrive->email != '') {
                $GoogleSql->orWhere('email', $GoogleDrive->email);
            }

            $referral_unique_id=(new ReferralResource())->generateCode();

            $AuthUser = $GoogleSql->first();
            if ($AuthUser) {
                $AuthUser->social_unique_id  =$GoogleDrive->id;
                $AuthUser->mobile            =$request->mobile ?: '';
                $AuthUser->country_code      =$request->country_code ?: '';
                $AuthUser->referral_unique_id=$referral_unique_id;
                $AuthUser->login_by          ='google';
                $AuthUser->save();
            } else {
                if ($request->mobile != '') {
                    if ($request->country_code == '') {
                        return response()->json(['message' => trans('api.country_code')], 422);
                    }
                    $alreadyExits = Provider::where([['mobile', $request->mobile], ['country_code', $request->country_code]])->first();
                    if ($alreadyExits) {
                        return response()->json(['message' => trans('api.mobile_exist')], 422);
                    }
                }

                $AuthUser['email']           =$GoogleDrive->email;
                $name                        = explode(' ', $GoogleDrive->name, 2);
                $AuthUser['first_name']      =$name[0];
                $AuthUser['last_name']       =isset($name[1]) ? $name[1] : '';
                $AuthUser['password']        =($GoogleDrive->id);
                $AuthUser['social_unique_id']=$GoogleDrive->id;
                //$AuthUser["avatar"]=$GoogleDrive->avatar;
                $fileContents = file_get_contents($GoogleDrive->getAvatar());
                File::put(public_path() . '/storage/provider/profile/' . $GoogleDrive->getId() . '.jpg', $fileContents);

                //To show picture
                $picture                       = 'provider/profile/' . $GoogleDrive->getId() . '.jpg';
                $AuthUser['avatar']            =$picture;
                $AuthUser['mobile']            =$request->mobile ?: '';
                $AuthUser['country_code']      =$request->country_code ?: '';
                $AuthUser['referral_unique_id']=$referral_unique_id;

                $AuthUser['login_by']='google';
                $AuthUser            = Provider::create($AuthUser);

                if (config('demo_mode', 0) == 1) {
                    //$AuthUser->update(['status' => 'approved']);
                    ProviderService::create([
                        'provider_id'     => $AuthUser->id,
                        'service_type_id' => '1',
                        'status'          => 'active',
                        'service_number'  => '4pp03ets',
                        'service_model'   => 'Audi R8',
                    ]);
                }
                //				if(config('constants.send_email', 0) == 1) {
//					// send welcome email here
//					site_registermail($AuthUser);
//				}
            }
            if ($AuthUser) {
                $userToken = $AuthUser->createToken('web')->plainTextToken;

                $User      = Provider::with('service', 'device')->find($AuthUser->id);
                if ($User->device) {
                    ProviderDevice::where('id', $User->device->id)->update([
                        'udid'  => $request->device_id,
                        'token' => $request->device_token,
                        'type'  => $request->device_type,
                    ]);
                } else {
                    ProviderDevice::create([
                        'provider_id' => $User->id,
                        'udid'        => $request->device_id,
                        'token'       => $request->device_token,
                        'type'        => $request->device_type,
                    ]);
                }
                return response()->json([
                    'status'       => true,
                    'token_type'   => 'Bearer',
                    'access_token' => $userToken,
                    'currency'     => config('constants.currency'),
                    'measurement'  => config('constants.distance', 'Kms'),
                    'sos'          => config('constants.sos_number', '911'),
                ]);
            } else {
                return response()->json(['status'=>false, 'message' => trans('api.invalid')]);
            }
        } catch (Exception $e) {
            return response()->json(['status'=>false, 'message' => trans('api.something_went_wrong')]);
        }
    }

    /**
     * Show the email availability.
     *
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $request)
    {
        // $this->validate($request, [
        // 		'email' => 'required|email|max:255|unique:providers',
        // 	]);
        if ($request->email == '') {
            return response()->json(['message' =>'Please enter your email address'], 422);
        }

        $email_case = Provider::where('email', $request->email)->first();
        //Provider Already Exists
        if ($email_case) {
            return response()->json(['message' =>'E-mail already registered. Enter a new email'], 422);
        }

        try {
            return response()->json(['message' => trans('api.email_available')]);
        } catch (Exception $e) {
            return response()->json(['error' => trans('api.something_went_wrong')], 500);
        }
    }

    public function settings(Request $request)
    {
        if ($request->has('city_id')) {
            $serviceType = ServiceType::select('id', 'name')->where('status', 1)->whereHas('agent', function ($query) use ($request) {
                $query->where('city_id', $request->city_id);
            })->get();
        } else {
            $serviceType = ServiceType::select('id', 'name')->where('status', 1)->get();
        }

        $settings = [
            'serviceTypes' => $serviceType,
            'referral'     => [
                'referral' => config('constants.referral', 0),
                'count'    => config('constants.referral_count', 0),
                'amount'   => config('constants.referral_amount', 0),
                'ride_otp' => (int)config('constants.ride_otp'),
                'cancel_charge' => (int)config('constants.cancel_charge'),
            ],
        ];
        return response()->json($settings);
    }

        /**
     * Handle a OTP request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function otp(Request $request)
    {
        $this->validate($request, [
            'mobile'    => 'required',
            'device_id' => 'required',
        ]);
        if ($request->mobile == '1234567890'|| $request->mobile == '8126961804') 
            $newotp = 123456;
         else
            $newotp = rand(100000, 999999);
            
        $data['otp'] = $newotp;
        if (Provider::with('device')->where('mobile', $request['mobile'])->first()) {
            $user = Provider::with('device')->where('mobile', $request['mobile'])->first();
            if (empty($user->email)) {
                $user->email = $user->mobile;
            }
            if ($user->device_id == $request->device_id) {
                //$this->send_otp($request->mobile, $newotp);
                return response()->json([
                    'message'  => 'OTP not needed',
                    'verified' => true,
                    'user'     => $user,
                    'otp'      => $newotp,
                ], 200);
            } else {
                //$this->send_otp($request->mobile, $newotp);
                return response()->json([
                    'message'  => 'OTP Sent',
                    'verified' => false,
                    'user'     => $user,
                    'otp'      => $newotp,
                ], 200);
            }
        } else {
            //$this->send_otp($request->mobile, $newotp);
            return response()->json(['message' => 'OTP Sent redirect to register', 'verified' => false, 'otp' => $newotp]);
        }
    }
}
