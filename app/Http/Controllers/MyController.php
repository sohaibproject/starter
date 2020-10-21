<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showname(){
        return "hi/how are you";
    }
    public function showname2($id){
        return "hi/how are you";
    }
}
