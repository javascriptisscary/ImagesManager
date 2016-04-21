<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('user/index', 'UserController@getEditIndex');
Route::get('validated/user', 'UserController@getEditProfile');
Route::post('validated/user', 'UserController@postEditProfile');


Route::get('validated/photos', 'PhotoController@getIndex');
Route::get('validated/photo/create', 'PhotoController@getCreatePhoto');
Route::get('validated/photo/edit', 'PhotoController@getEditPhoto');
Route::post('validated/photo/edit', 'PhotoController@postEditPhoto');
Route::post('validated/photo/create', 'PhotoController@postCreatePhoto');
Route::delete('validated/photo/delete', 'PhotoController@postDeletePhoto');


Route::get('validated/albums', 'AlbumController@getIndex');
Route::get('validated/album/create', 'AlbumController@getCreateAlbum');
Route::get('validated/album/edit', 'AlbumController@getEditAlbum');
Route::post('validated/album/edit', 'AlbumController@postEditAlbum');
Route::post('validated/album/create', 'AlbumController@postCreateAlbum');
Route::delete('validated/album/delete', 'AlbumController@postDeleteAlbum');
  
Route::get('auth/recover-password','Auth\AuthController@getRecoverPassword');


Route::get('/home', 'HomeController@index');
Route::get('/', 'WelcomeController@getIndex');