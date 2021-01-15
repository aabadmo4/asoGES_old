<?php
use Illuminate\Support\Facades\Route;

Route::get("/","miController@index");
Route::get("/socios","miController@socios");
Route::get("/socios/crear","miController@create_socio");
Route::get("/socios/info_socio","sociosController@info_socio");
Route::get("/socios/borrar","miController@borrar_socio");
Route::get("/actas","miController@actas");
Route::get("/contacta","miController@contactar");
Route::get("/buscar","miController@buscar");
Route::get("/miperfil","profileController@miperfil");
Route::get("/miperfil/configuracion","profileController@miperfil_config");
Route::get("/logout","sessionController@logout");
Route::get("/login","sessionController@loginPage");
Route::get("/_login","sessionController@logado");
Route::get("/noticias","miController@noticias");
Route::get("/info","miController@info");