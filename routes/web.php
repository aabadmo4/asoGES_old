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
Route::get("/socios/crear","miController@create_socio");
Route::get("/socios/info/{id}","miController@info_socio");
Route::get("/socios/borrar/{id}","miController@borrar_socio");
Route::get("/actas","miController@actas");
Route::get("/contacta","miController@contactar");
Route::get("/buscar","miController@buscar");
Route::get("/miperfil","profileController@miperfil");
Route::get("/miperfil/configuracion","profileController@miperfil_config");
Route::get("/logout","sessionController@logout");
Route::get("/login","sessionController@loginPage");
Route::get("/_login","sessionController@logado");
Route::get("/noticias","miController@noticias");