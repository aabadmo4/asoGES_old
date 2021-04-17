<?php
use Illuminate\Support\Facades\Route;

Route::get("/","miController@index");
Route::get("/wellcome","notifnotread@configPage");
Route::get("/partners","sociosController@partners");
Route::get("/partners/create","sociosController@createPartner");
Route::get("/partners/view/{partner_id}","sociosController@info_socio");
Route::get("/partners/edit/{partner_id}","miController@edit_socio");

Route::get("/partners/delete/{partner_id}","miController@borrar_socio");

Route::get("/charters","chartersController@charters");
Route::get("/charters/create","chartersController@createCharter");

Route::get("/buscar","miController@buscar");
Route::get("/profile/","profileController@profile");
Route::get("/profile/config","profileController@miperfil_config");
Route::get("/profile/resetPassword","profileController@resetPassword");
Route::get("/profile/resetPassword/newToken","profileController@resetPassword");


Route::get("/logout","sessionController@logout");
Route::get("/login","sessionController@loginPage");
Route::get("/_login","sessionController@logado");
Route::post("/_login_test","sessionController@logado_test");
Route::get("/info","miController@info");
Route::post('/subir','profileController@subirArchivo')->name('subir');
Route::get("/documents/pdf_viewer","documentsController@pdf_viewer");

Route::get('formulario', 'StorageController@index');
Route::post('newdoc', 'StorageController@save');
Route::get('primaryOrders', 'primaryOrdersController@getOrders');
Route::get('primaryOrders/getOrderInfoById', 'primaryOrdersController@getOrderInfoById');

//--accidental borrado de la clase usersController
Route::get("/users","usersController@users");
Route::get("/users/view/{user_id}","usersController@users");
Route::get("/users/edit/{user_id}","usersController@users");
Route::get("/users/delete/{user_id}","usersController@users");
Route::get("/users/create","usersController@createPage");
Route::get("/users/createuser","usersController@createuser");
Route::get("/users/resetpassword/","usersController@resetPassword");
Route::get("/users/edit/{user_id}/status_to/{new_status}","usersController@setStatus");
//--

Route::get("/resetpassword/","resetPasswordController@resetPassword");
Route::get("/resetpassword/{user_id}","resetPasswordController@newToken");
Route::get("/resetpassword/setNewPassword/{user_id}/{pwd_token}","resetPasswordController@resetPasswordForm");
Route::get("/resetpassword/setNewPassword/conf","resetPasswordController@conf");
Route::get("/resetpassword/token/{user_id}/{newpass}/{pwd_token}","resetPasswordController@updatePassword");



Route::get("/config","pagesController@configPage");

Route::get("/miscript","notifnotread@configPage");