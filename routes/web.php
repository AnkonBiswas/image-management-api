<?php

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

Route::get('/api/{id}', "ApiController@index");
Route::get('/api/{id}/{cate}', "ApiController@cate");
Route::get('/api/{id}/{cate}/{sort}/{sv}', "ApiController@sort");


Route::get('/apicate', "ApiController@getCate");
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/image', 'ImageController@index')->name('image.index');
Route::get('/image/add', 'ImageController@add')->name('image.add');
Route::post('/image/add', 'ImageController@store');
Route::get('/image/edit/{id}', 'ImageController@edit')->name('image.edit');
Route::post('/image/edit/{id}', 'ImageController@editimage');

Route::get('/image/resize/{id}', 'ImageController@resize')->name('image.resize');
//Route::post('/image/resize/{id}', 'LoginController@makeresize');

Route::get('/image/rotate/{id}', 'ImageController@imagerotate')->name('image.rotate');
Route::post('/image/rotate/{id}', 'ImageController@rotateimage');
Route::get('/image/crop/{id}', 'ImageController@imagecrop')->name('image.crop');
Route::post('/image/crop/{id}', 'ImageController@cropimage');
Route::post('/image', 'ImageController@upload');


	Route::get('/register', 'HomeController@add')->name('home.add');
			Route::post('/register', 'HomeController@store');