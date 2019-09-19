<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;//letakkan ini untuk membuat Auth na
use Illuminate\Http\Request;
use App\Chat;
use App\Events\ChatEvent;
use App\Events\CityRadioEvent;
use App\Events\MedanFmEvent;
use App\User;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index()//unutk menmpilkan data semua na
    {
        $chats = Chat::all();
        return view ('chat',compact('chats'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // untk bisa dikatakan untuk membuat form jika untuk form, dll
       return view('chat');// route ke chat yaitu untuk form na
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        //disini harus sama dengan class model
        $chat = new Chat();
        $chat->text = $request->text;
        $chat->nama=Auth::user()->name;
        $chat->save();    
        /* event(new Send($request->pesan)); */
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//show menampilkan satu data saja
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function push()
    {
        //
    }

    public function chat() {//chat dari chat.blade.php
        return view('chat');
    }

     public function send(request $request)//send chat.blade.php
    {  
      /*  return $request->all(); */
        
        $user = User::find(Auth::id());
        $this->stillsave($request);//diambil dari yang di bawah nama funtion na, letakkan kemari
        event(new ChatEvent($request->message,$user));
    } 

    public function sendcity(request $request)//CityRadio
    {
        $user = User::find(Auth::id());
        event(new CityRadioEvent($request->message1,$user));
    }

    public function CityRadio()//City Radio
    {
        return view('CityRadio');
    }

    public function medan()//Medan Fm
    {
        return view('medan');
    }

    public function sendmedan(request $request)//send Medan Fm
    {
        $user = User::find(Auth::id());
        event(new MedanFmEvent($request->message2,$user));
    }

    public function stillsave(request $request)
    {   
        session()->put('chat', $request->chat);
    }

    public function getOldMessage()  
    {
        return session('chat');
    }
    
   /*  public function send()
    {  $message='hai';
      
        
        $user = User::find(Auth::id());

        event(new ChatEvent($message,$user));
    } */
}
