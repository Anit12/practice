<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/registrations.index', function () {
    return view('registrations.index');
})->name(name:'registrations.index');



Route::get('/registrations.thankyou', function () {
    return view('registrations.thankyou');

})->name(name:'registrations.thankyou');
//Route::put('/regisrtrations',[RegistrationController::Class,'registrations.index']);
//Route::post('/', [RegistrationController::class, 'index']);
Route::resource( 'registrations', RegistrationController::Class);
//->middleware(middlewar: 'auth');


Route::get('/visitor.index',function(){
    return view('visitor.index');
});

Route::get('visitor_list/', [App\Http\Controllers\RegistrationController::class, 'index']);
Route::get('create_visitor/', [App\Http\Controllers\RegistrationController::class, 'create']);
Route::post('registrations_store', [App\Http\Controllers\RegistrationController::class, 'store']);


Route::get('edit_visitor/{id}', [App\Http\Controllers\RegistrationController::class, 'edit']);
Route::put('update_visitor/{id}', [App\Http\Controllers\RegistrationController::class, 'update']);
Route::delete('delete_visitor/{id}', [App\Http\Controllers\RegistrationController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
