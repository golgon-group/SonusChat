<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddNewRoom extends Model
{
    protected $table='newroom';//unutk kearah nama table database na 
    protected $fillable=['name'];//unutk yang diisi dengan field na name di table database
}
