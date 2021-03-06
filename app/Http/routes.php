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

// ORIGINAL
//Route::get('home', 'HomeController@index');
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

Route::get('/', 'WelcomeController@index');
Route::get('/home', 'WelcomeController@index');
Route::get('/about', 'WelcomeController@about');
Route::get('/contact', 'WelcomeController@contact');
Route::get('/posts', 'WelcomeController@posts');
Route::get('/gallery', 'WelcomeController@gallery');