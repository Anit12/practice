<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $allCategories= Category::all();
        $allproducts= Product::all();
        return view('index',['categories'=> $allCategories,'products'=>$allproducts]);
       // return view('index',compact(varname: 'categories'));
        
    }
}
