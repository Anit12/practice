<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function index(){
    return view('visitor.index');
   }
   public function register_view(){
      return view('visitor.register');
     }
}
