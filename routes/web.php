<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
})->name(name:'about');

Route::get('/service', function () {
    return view('service');
})->name(name:'service');

Route::get('/contact', function () {
    return view('contact');
})->name(name:'contact');
