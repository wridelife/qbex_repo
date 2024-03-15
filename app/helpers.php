<?php

    use App\Models\Setting;
    use App\Models\WalletRequest;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

    function getFooter()
    {
        $footer    = Setting::where('key', 'footerLine')->first();
        $extra     = 'Copyright ©' . date('Y') . ' All Rights Reserved by ' . env('APP_NAME');
        $extra     =  config('constants.site_copyright', 'All rights reserved © ThinkinDragon 2021');
        return ($footer ? $footer->value : $extra);
    }

    function generate_booking_id()
    {
        return config('constants.booking_prefix') . mt_rand(100000, 999999);
    }

    function send_otp($phone, $otp)
    {
        // https://teleduce.corefactors.in/sendsms/?key=794125eb-08ca-4d79-a723-48cc22384d57&text=<template>&route=0&from=CORFCT&to=[Mobile Number]

        //if(function_exists('shell_exec')) {
            $message = $otp.' is your OTP to complete the registration process. - Adnaks';
            //$url = 'https://dudusms.in/smsapi/send_sms?authkey=t58UunucF41ztPMrJsiRGf&mobiles='.$phone.'&message='.$message.'&sender=TRLOGI&route=14&templetid=1707168930672471164';
            $url = 'https://teleduce.corefactors.in/sendsms/?key=794125eb-08ca-4d79-a723-48cc22384d57&text='.$message.'&route=0&from=CORFCT&to=+91'.$phone;
            \Log::info($url);
            $client      = new Client();
            $response    = $client->get($url);
            //$response = Http::get($url);

            return $response;
        // } else {
        //     return "shell_exec is disabled";
        // }


        //return substr($phone, strlen($cc) + 1, strlen($phone) - 1);
    }

    function curl($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $return = curl_exec($ch);
        curl_close($ch);
        return $return;
    }

    function getPhoneNumber($phone, $cc)
    {
        return substr($phone, strlen($cc) + 1, strlen($phone) - 1);
    }

    function currency($value = '')
    {
        //	if($value == ""){
        //		return config('constants.currency').number_format(0, 2, '.', '');
        //	} else {
        //		return config('constants.currency').number_format($value, 2, '.', '');
        //	}

        if ($value == '') {
            return config('constants.currency', '$') . ' ' . number_format(0, 2, '.', '');
        } else {
            return config('constants.currency', '$') . ' ' . number_format($value, 2, '.', '');
        }
    }

    function is_in_polygon($points_polygon, $vertices_x, $vertices_y, $longitude_x, $latitude_y)
    {
        $i = $j = $c = 0;

        for ($i = 0, $j = $points_polygon - 1 ; $i < $points_polygon; $j = $i++) {
            if ((($vertices_y[$i] > $latitude_y != ($vertices_y[$j] > $latitude_y)) &&
        ($longitude_x < ($vertices_x[$j] - $vertices_x[$i]) * ($latitude_y - $vertices_y[$i]) / ($vertices_y[$j] - $vertices_y[$i]) + $vertices_x[$i]))) {
                $c = !$c;
            }
        }
        return $c;
    }
    //return '';

    function getAddress($latitude, $longitude)
    {
        if (!empty($latitude) && !empty($longitude)) {
            //Send request and receive json data by address
            $geocodeFromLatLong = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng=' . trim($latitude) . ',' . trim($longitude) . '&sensor=false&key=' . config('constants.server_map_key'));
            $output             = json_decode($geocodeFromLatLong);
            $status             = $output->status;
            //Get address from json data
            $address = ($status == 'OK') ? $output->results[0]->formatted_address : '';
            //Return address of the given latitude and longitude
            if (!empty($address)) {
                return $address;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    function upload_qrCode($phone, $file)
    {
        $file_name = time();
        $file_name .= rand();
        if ($file) {
            $fileName       = $file_name . '_' . $phone . '.png';
            file_put_contents(public_path() . '/uploads/' . $fileName, $file);
            $qrcode_url = 'uploads/' . $fileName;
            return $qrcode_url;
        }
        return '';
    }

    function generate_request_id($type)
    {
        if ($type == 'provider') {
            $tr_str='PSET';
        } else {
            $tr_str='FSET';
        }

        $typecount=WalletRequest::where('request_from', $type)->count();

        if (!empty($typecount)) {
            $next_id=$typecount + 1;
        } else {
            $next_id=1;
        }

        $alias_id=$tr_str . str_pad($next_id, 6, 0, STR_PAD_LEFT);

        return $alias_id;
    }

    function getTNC()
    {
        if (Setting::where('key', 'tnc')->first()) {
            return Setting::where('key', 'tnc')->first()->value;
        } else {
            return null;
        }
    }

    function getPrivacy()
    {
        if (Setting::where('key', 'privacy')->first()) {
            return Setting::where('key', 'privacy')->first()->value;
        } else {
            return null;
        }
    }

    function get_all_language()
    {
        $dir             = resource_path('lang');
        $files2          = array_diff(scandir($dir), ['..', '.']);
        $mappedLanguages = [];

        foreach ($files2 as $key => $language) {
            if (strlen($language) == 2) {
                $mappedLanguages[$language] =   $language;
            }
        }
        return ($mappedLanguages);//['en'=>'English', 'fr'=>'French', 'hi'=>'Hindi'];
    }

    function upload_picture($picture)
    {
        $file_name = time();
        $file_name .= rand();
        $file_name = sha1($file_name);
        if ($picture) {
            $ext = $picture->getClientOriginalExtension();
            $picture->move(public_path() . '/uploads', $file_name . '.' . $ext);
            $local_url = $file_name . '.' . $ext;

            $s3_url = url('/') . '/uploads/' . $local_url;

            return $s3_url;
        }
        return '';
    }

    function delete_picture($picture)
    {
        File::delete(public_path() . '/uploads/' . basename($picture));
        return true;
    }

    function directionGoogle($s_latitude,$s_longitude,$d_latitude,$d_longitude)
    {
        $tag = number_format((float)$s_latitude, 7, '.', '');
        $tag2 = number_format((float)$d_latitude, 7, '.', '');

            $final=$tag . $tag2 . auth()->id();
        $test = \Cache::remember(
            $final.'Location',
            15,
            function () use ($s_latitude,$s_longitude,$d_latitude,$d_longitude,$final,$tag2) {
                $fn_response=['data'=>null, 'errors'=>null];
                $location   = null;
                try {
                    $s_latitude  = $s_latitude;
                    $s_longitude = $s_longitude;
                    $d_latitude  = empty($d_latitude) ? $s_latitude : $d_latitude;
                    $d_longitude = empty($d_longitude) ? $s_longitude : $d_longitude;
                    $apiurl      = 'https://maps.googleapis.com/maps/api/directions/json?origin=' . $s_latitude . ',' . $s_longitude . '&destination=' . $d_latitude . ',' . $d_longitude . '&mode=driving&sensor=false&units=imperial&key='.config('constants.server_map_key');
                    \Log::alert($final." cache created Location");
                    $client      = new Client();
                    $location    = $client->post($apiurl);
                    $location    = json_decode($location->getBody(), true);
                    \Log::alert($location);
                    if (!empty($location['rows'][0]['elements'][0]['status']) && $location['rows'][0]['elements'][0]['status'] == 'ZERO_RESULTS') {
                        \Cache::forget($final.'Location');
                        throw new Exception('Out of service area', 1);
                    }
                    $fn_response['meter']  =$location['rows'][0]['elements'][0]['distance']['value'];
                    $fn_response['time']   =$location['rows'][0]['elements'][0]['duration']['text'];
                    $fn_response['seconds']=$location['rows'][0]['elements'][0]['duration']['value'];
                } catch (Exception $e) {
                    $fn_response['errors']=$e;
                }
                //return round($fn_response['meter'] / 1000, 1);//RETORNA QUILÔMETROS
                return $location;
            }
        );
        return $test;
    }
    function directionGoogleWaypoint($Waypoint,$s_latitude,$s_longitude,$d_latitude,$d_longitude)
    {
                    // Prepare the waypoints parameter based on the trip_address input
                $waypoints = '';
                $waypoints = json_decode($Waypoint, true);

                $arrr = implode('|', array_map(function ($point) {
                $latitude = number_format((float)$point['latitude'], 7);
                $longitude = number_format((float)$point['longitude'], 7);
                    return "{$latitude},{$longitude}";
                }, $waypoints));
                \Log::alert($arrr);
                if (isset($arrr)) {
                    $waypoints = 'optimize:true|via:' .  $arrr;
                }
                \Log::alert($waypoints);

                //return $wayArray;
                $tag = number_format((float)$s_latitude, 7, '.', '');
                $tag2 = number_format((float)$d_latitude, 7, '.', '');
        
                    $final=$tag . $tag2 . auth()->id();
                $test = \Cache::remember(
                    $final.'Location',
                    15,
                    function () use ($s_latitude,$s_longitude,$d_latitude,$d_longitude,$final,$tag2,$waypoints) {
                $fn_response=['data'=>null, 'errors'=>null];
                $location   = null;
                try {
                    $s_latitude  = number_format((float)$s_latitude, 7);
                    $s_longitude = number_format((float)$s_longitude, 7);
                    $d_latitude  = number_format((float)empty($d_latitude) ? $s_latitude : $d_latitude, 7);
                    $d_longitude = number_format((float)empty($d_longitude) ? $s_longitude : $d_longitude, 7);
                    $params = [
                        'origin'      => "{$s_latitude},{$s_longitude}",
                        'destination' => "{$d_latitude},{$d_longitude}",
                        'waypoints'   => $waypoints,
                        'key'         => config('constants.server_map_key'),
                    ];
                    $baseUrl = 'https://maps.googleapis.com/maps/api/directions/json?';
                    $dat = $baseUrl . http_build_query($params);
                    \Log::alert(urldecode($dat));

                    $apiurl = Http::get($dat);
                    
                    //= //'https://maps.googleapis.com/maps/api/directions/json?origin=' . $s_latitude . ',' . $s_longitude . '&destination=' . $d_latitude . ',' . $d_longitude .'&waypoints=' . $wayArray  . '&mode=driving&sensor=false&units=imperial&key='.;
                    \Log::alert($final." cache created Location");
                    \Log::alert($apiurl);
                    //$response = Http::get($baseUrl . http_build_query($params));

                    $location    = $apiurl->json();//json_decode($location->getBody(), true);
                    \Log::alert($location);
                    if (!empty($location['rows'][0]['elements'][0]['status']) && $location['rows'][0]['elements'][0]['status'] == 'ZERO_RESULTS') {
                        \Cache::forget($final.'Location');
                        throw new Exception('Out of service area', 1);
                    }
                    $fn_response['meter']  =$location['rows'][0]['elements'][0]['distance']['value'];
                    $fn_response['time']   =$location['rows'][0]['elements'][0]['duration']['text'];
                    $fn_response['seconds']=$location['rows'][0]['elements'][0]['duration']['value'];
                } catch (Exception $e) {
                    $fn_response['errors']=$e;
                }
                //return round($fn_response['meter'] / 1000, 1);//RETORNA QUILÔMETROS
                return $location;
            }
        );
        return $test;
    }
    
    // function getLanguages() {
    //     return Arr::flatten(
    //         json_decode(
    //             json_encode(
    //                 DB::table('ltm_translations')
    //                     ->select('locale')
    //                     ->groupBy('locale')
    //                     ->get()
    //                     ->toArray()
    //             ), true
    //         )
    //     );
    // }

    // function getAvailableCurrencies() {
    //     return array_keys(json_decode(CurrenciesUpdate::latest()->first()->values, true));
    // }

    // function toINR() {
    //     $values = json_decode(CurrenciesUpdate::latest()->first()->values, true);

    //     if(auth()->guard('web')->user()) { // If user is authenticated
    //         $conversionFactor = 1/$values[auth()->guard('web')->user()->currency];
    //     }
    //     else {
    //         if(session()->has('currency')) { // Else if user session have a defined currency
    //             $conversionFactor = 1/$values[session('currency')];
    //         }
    //         else{ // else take INR
    //             $conversionFactor = 1;
    //         }
    //     }

    //     return $conversionFactor;
    // }

    // function fromINR() {
    //     $values = json_decode(CurrenciesUpdate::latest()->first()->values, true);

    //     if(auth()->guard('web')->user()) { // If user is authenticated
    //         $conversionFactor = $values[auth()->guard('web')->user()->currency];
    //     }
    //     else {
    //         if(auth()->guard('admins')->user()) { // Else if admin is authenticated
    //             if(request()->user()) // If user is admin
    //                 $conversionFactor = $values[auth()->guard('admins')->user()->currency];
    //             else // Else user is web
    //                 $conversionFactor = 1;
    //         }
    //         else if(session()->has('currency')) {
    //             return $values[session()->get('currency')];
    //         }
    //         else{ // else take INR
    //             $conversionFactor = 1;
    //         }
    //     }

    //     return $conversionFactor;
    // }
