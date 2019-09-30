<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Cache;
use Carbon\Carbon;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              

class UserOnline
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
             $expiresAt=Carbon::now()->addMinutes(500);  //untuk memberikan waktu atau jangka waktu,jika di box online user sudah log out ataupun masi online tetapi tidak chat atau mendiamkan saja maka di box online user user na akan hilang, begitu juga kalu sudah logout
            Cache::put('user-is-online-'.Auth::user()->id,true,$expiresAt);  // disini berarrti jika logout maupun tidak d gunakan chat na atau pun diam saja maka tidak akan keluar user na dari box online user na
        }
        return $next($request);
    }
}
 