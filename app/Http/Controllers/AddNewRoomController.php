<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddNewRoom;
use Validator;//unutk validator  na jika form na kosong

class AddNewRoomController extends Controller
{
    public function addmore()
    {
        return view ('addmore');
    }

    public function addMorePost(Request $request)
    {
        $rules = [];


        foreach($request->input('name') as $key => $value) {
            $rules["name.{$key}"] = 'required';
        }


        $validator = Validator::make($request->all(), $rules);


        if ($validator->passes()) {


            foreach($request->input('name') as $key => $value) {
                AddNewRoom::create(['name'=>$value]);
            }


            return response()->json(['success'=>'done']);
        }


        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function tampil()
    {
       $newroom = AddNewRoom::all(); // adalah unutk membuat menampilkan keseluruhan data di tabel newroom pada database
      return view('admin.tampil',compact('newroom'));//admin.tampil adalah nama file na di folder admin dan dibawah na ada file tampil/compact adalah syntax yang digunakan unutk unutk menampilka penggabngan dari semua data table new room na 
    }

    public function DetailCityRadio(AddNewRoom $newroom)
    {
        return view('admin.ChatDetailNewRoomCityRadio',compact('newroom'));//unutk menampilkan dari databse
    }
}
