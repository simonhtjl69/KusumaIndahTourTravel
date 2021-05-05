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
    return view('welcome');
});
Route::get('admin/', function () {
    return view('admin.index');
});

Route::get('/kota', 'KotaController@index');
Route::post('/create/kota', 'KotaController@createkota');
Route::get('/delete/{id}/kota', 'KotaController@delete');
Route::post('/edit/{id}/kota', 'KotaController@edit');
Route::get('/artikel', 'ArtikelController@index');

//panduan
Route::get('/panduan', 'PanduanController@index');
Route::post('panduan/tambah', 'PanduanController@tambahPanduan');
Route::get('panduan/hapus/{id}', 'PanduanController@hapusPanduan');
Route::post('panduan/edit/{id}', 'PanduanController@editPanduan');
//search belum

//travel_reguler
Route::get('/travel_reguler', 'TRegulerController@index');
Route::post('/travel_reguler/tambah', 'TRegulerController@tambah');
Route::get('/travel_reguler/hapus/{id}', 'TRegulerController@hapus');
Route::get('travel_reguler/cari', 'TRegulerController@cari');
Route::post('travel_reguler/edit/{id}', 'TRegulerController@edit');

//Artikel
Route::post('/create/artikel', 'ArtikelController@create');