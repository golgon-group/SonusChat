<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Events\CityRadioEvent;
use App\User;

class CityRadioController extends Controller
{
    public function CityRadio()
    {
        return view('CityRadio');
    }

    public function sendcity(request $request)
    {
        $user = User::find(Auth::id());
        event(new CityRadioEvent($request->message1));
    }
}
