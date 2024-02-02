<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\authController;
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

Route::get('/', [homeController::class, 'index']);

Route::get('/register', [authController::class, 'form']);


Route::post('/welcome', [authController::class, 'kirim']);

route::get('/master', function(){
    return view('layout.master');
});
route::get('/tabel', function(){
    return view('packes.tabel');
});

route::get('/data-tabel', function(){
    return view('packes.data-tabel');
});
