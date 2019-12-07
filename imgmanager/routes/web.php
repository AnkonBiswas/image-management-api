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
Route::get('/apicate', "ApiController@getCate");
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/image', 'ImageController@index')->name('image.index');
Route::get('/image/add', 'ImageController@add')->name('image.add');
Route::post('/image/add', 'ImageController@store');
Route::get('/image/rotate/{id}', 'ImageController@rotate')->name('image.rotate');
Route::get('/image/resize/{id}', 'ImageController@resize')->name('image.resize');

Route::get('/image/edit/{id}', 'ImageController@edit')->name('image.edit');

Route::get('/test', function()
{
    $img = Image::make('upload/blackfriday.png')->resize(100, 200);

    return $img->response('jpg');
});
