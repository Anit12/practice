<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [CategoryController::class, 'index']);
//Route::get('/', [ListController::class, 'categories.index']);

Route::get('/about', function () {
    return view('about');
})->name(name:'about');

Route::get('/service', function () {
    return view('service');
})->name(name:'service');

Route::get('/contact', function () {
    return view('contact');
})->name(name:'contact');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource( 'categories', ListController::Class);
