<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    //form atau field yang akan diisi
    protected $fillable = ['text', 'email'];
   
   
    
}
