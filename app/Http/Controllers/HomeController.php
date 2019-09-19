<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check() && Auth::user()->isAdmin()){//isAdmin didapat dari User php function na mksd na adalah jika di cek ada admin na maka akan di arahkan ke selanjutna yaitu sesuai dengan web.php na 
            return view('admin.index');      
        } 
        return view('home');//jika bukan halaman admin atau admin maka akan kembali ke halaman ini /tergantung yang mana akan kita arahkan, dan jika kita arahkan ke redirect na ada , maka akan di lanjutkan ke arah yang kita buat di redirect tersebut 
        
    } 

    public function welcome()
    {
        return view('welcome');
    }
}
