<?php
//file ini tidk pakai untuk mengarahkan ke admin
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.register');
    }

    public function allchat()
    {
        return view('admin.chat');
    }

    public function CityRadio()
    {
        $users = User::all()->except(Auth::id());
        return view('admin.CityRadio',compact('users'));
    }

    public function medan()
    {
        $users = User::all()->except(Auth::id());//iki arek tampilke user tapi ora karo arek login. iku la ndelok conto ne except(Auth::id)
        return view('admin.medan',compact('users'));
    }

    public function beranda()
    {
        return view('admin.index');
    }

    public function adminsuper()
    {
        return view('admin.AllChat'); 
    }

    public function register()
    {
        return view('admin.home');
    }

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showcity(User $users)
    {
      
        return view('admin.UserCity',compact('users'));
    }

    public function showmedan(USer $users)
    {
        return view('admin.UserMedan', compact('users'));
    }

    public function room()
    {
        return view('admin.room');
    }

    public function room_add()
    {
        return view('admin.room_add');
    }

    /**
     * Show the form for editing the specified resource.
     *zzz
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
}
