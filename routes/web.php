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

Route::get("/","miController@index");
Route::get("/socios","miController@socios");
Route::get("/socios/crear","miController@create");
Route::get("/socios/info/{id}","miController@info_socio");
Route::get("/actas","miController@actas");
Route::get("/contacta","miController@contactar");
Route::get("/galeria","miController@galeria");

