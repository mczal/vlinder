<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('admin', function () {
    return redirect('/admin/clients');
});
Route::get('contact',function(){
  return view('frontend.contact');
});
Route::get('features',function(){
  return view('frontend.feature');
});
Route::get('spirit',function(){
  return view('frontend.spirit');
});
Route::get('clients','Frontend\ClientController@index');
Route::get('galleries','Frontend\GalleryController@index');
Route::get('galleries/{id}','Frontend\GalleryController@show');
Route::get('provisions','Frontend\ProvisionController@index');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::resource('admin/clients','ClientController');
    Route::resource('admin/galleries','GalleryController');
    Route::resource('admin/provisions','ProvisionController');
    Route::resource('admin/images','ImageController');
});
