<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Ro;
class SecondController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth')-> except ('showname2');
    }
 public function showname0(){
      return 'hello world0';
  }
  
  public function showname1(){
    return 'hello world0';
}
public function showname2(){
  return 'hello world0';
}
public function showname3(){
  return 'hello world0';
}


}
