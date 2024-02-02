<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\authController;
use App\Http\Controllers\castController;
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

// CRUD cast

// create data
//magarahkan kehalaman form untuk menambah data cast
route::get('/cast/create',[castController::class,"create"]);
//untung menginput data cast kedalam database cast
route::post('/cast',[castController::class,"store"]);

// R-> Read Data
// Menampilkan seluruh data cast
route::get('/cast',[castController::class,"index"]);
//menampilkan detail data pemain film dengan id tertentu
route::get('/cast/{cast_id}',[castController::class,"show"]);
// U-> Updete
// menampilkan form untuk edit pemain film dengan id tertentu
route::get('/cast/{cast_id}/edit',[castController::class,"edit"]);
// menyimpan perubahan data pemain film (update) untuk id tertentu
route::put('/cast/{id}',[castController::class,"update"]);
// D-> Delete data
// menghapus data pemain film dengan id tertentu
route::delete('/cast/{id}',[castController::class,"destroy"]);