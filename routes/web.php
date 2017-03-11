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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Auth::routes();

//Route::get('/home', 'HomeController@index');

Route::get('/', 'PostController@index')->name('home');

Route::get('/post/create', 'PostController@create');
Route::get('/post/{post}', 'PostController@show');
Route::post('/post', 'PostController@store');

Route::post('/post/{post}/comment', 'CommentController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');