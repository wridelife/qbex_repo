<?php

namespace App\Http\Middleware;

use App\Models\Document;
use App\Models\Provider;
use App\Models\ProviderService;
use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProviderSubscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user() != null) {
            if (config('demo_mode', 0) == 1) {
                $Provider = Provider::where('id', auth()->user()->id)->first();
                $total_documents = Document::count();
                if ($Provider->wallet_balance <= config('constants.minimum_negative_balance')) {
                    ProviderService::where('provider_id', $Provider->id)->update(['status' => 'balance']);
                    Provider::where('id', $Provider->id)->update(['status' => 'balance']);
                } else if ($Provider->active_documents() == $total_documents) {
                    Provider::where('id', $Provider->id)->update(['status' => 'approved']);
                    //ProviderService::where('provider_id', $Provider->id)->update(['status' => 'active']);
                } else {
                    Provider::where('id', $Provider->id)->update(['status' => 'document']);
                    ProviderService::where('provider_id', $Provider->id)->update(['status' => 'offline']);
                }
            }
            return $next($request);
        }
        return $next($request);
    }
}
