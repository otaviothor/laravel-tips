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

Route::view('form', 'upload.form');

Route::post('upload', 'UploadController@upload')->name('upload');

Route::resource('produtos', 'ProductController')->names('products')->parameters(['produtos' => 'product']);
