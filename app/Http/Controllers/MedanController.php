<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MedanFmEvent;

class MedanController extends Controller
{
    public function medan()
    {
        return view('medan');
    }

    public function sendmedan(request $request)
    {
        event(new MedanFmEvent($request->message2));
    }
}
