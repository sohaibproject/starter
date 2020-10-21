<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class Usercontroller extends Controller
{
public function Showadminname(){

    return "sohaib boukraa";
}
public function getindex(){

   /* $obj =new \stdClass();
    $obj -> name ='sohaib';
    $obj -> id = 5;
    $obj -> gender = 'male';
    
    $data['name']='sohaib';
    $data['id']=23;*/
    $data=['sohaib','akram','moh'];
    return view('welcome',compact('data'));
}


}