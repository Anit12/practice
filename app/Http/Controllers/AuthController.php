<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRegisterPostRequest;
use App\Models\Register;
class AuthController extends Controller
{
   public function visitor_index(){

    return view('visitor.index');

   }
   public function index_show(Request $request)
   {
      return view('visitor.index');
 
      
   }
   public function visitor_register(){
      
     
      //return view('registrations.index',compact('registrations'));
      // return view('registrations.index', compact('registrations'))->with('status','Added Successfully');
      return view('visitor.register');
     }
 
     public function register_store(StoreRegisterPostRequest $request)
     {
        //$register_store = Register::all();
        $register_store = new Register;
        $register_store->name = $request['name'];
        $register_store->password = $request['password'];
        $register_store->fname = $request['fname'];
        $register_store->email = $request['email'];
        $register_store->mobile = $request['mobile'];
        $register_store->address = $request['address'];
        $result = $register_store->save();
        if($result)
        {
             $register_store = Register::all();
            echo "<script>alert('you are Successfully Register')</script>";
        }
        else{
            echo "<script>alert('Not Done')</script>";
        }
        
     }
}
