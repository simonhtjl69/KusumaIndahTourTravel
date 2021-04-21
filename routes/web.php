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