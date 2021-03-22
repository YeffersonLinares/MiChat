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

Route::get('/comidas', function () {
    return view('comidas');
})->name('comidas');

Route::get('/', function () {
    return view ('home');
})->name('home');

Route::get('/registrate',function(){
    return view('registrate');
})->name('registrate');

Route::get('/viajes', function () {
    return view('viajes');
})->name('viajes');

Route::get('/productos', function () {
    return view('productos');
})->name('productos');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/canjear', function () {
    return view('canjear_cupon');
});
