<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/nosotros',function(){
    return view('nosotros');
})->name('nosotros');

Route::get('/servicios',function () {
    return view('servicios');
})->name('servicios');

Route::get('/purificadores',function () {
    return view('purificadores');
})->name('purificadores');

Route::post('/sendmail', 'PagesController@sendMail')->name('contact');



Auth::routes();

Route::get('/panel', 'HomeController@index')->name('panel');

Route::get('/password/{password}',function($password){
    return Hash::make($password);
});
