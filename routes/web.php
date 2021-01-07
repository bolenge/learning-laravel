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
    return view('index');
});

Route::get('/users', 'UsersController@getInfos');
Route::post('/users', 'UsersController@postInfos');

Route::get('/contact', 'ContactController@getForm');
Route::post('/contact', 'ContactController@postForm');

Route::get('/photo', 'PhotoController@getForm');
Route::post('/photo', 'PhotoController@postForm');

// Emailing routes
Route::get('/email', 'EmailController@getForm');
Route::post('/email', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);