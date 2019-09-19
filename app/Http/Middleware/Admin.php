<?php
// file ini untuk mengarahkan ke admin tidak di pakai
namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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
        if(Auth::check() && Auth::user()->isAdmin()){//isAdmin didapat dari User php function na mksd na adalah jika di cek ada admin na maka akan di arahkan ke selanjutna yaitu sesuai dengan web.php na 
            return $next($request);      
        } 
        return redirect('home');//jika bukan halaman admin atau admin maka akan kembali ke halaman ini /tergantung yang mana akan kita arahkan, dan jika kita arahkan ke redirect na ada , maka akan di lanjutkan ke arah yang kita buat di redirect tersebut  
    }
}
