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

Route::get('/', 'PasteController@index');
Route::post('/', 'PasteController@submit');
Route::get('/{link}', 'PasteController@view')->where('link', '[a-zA-Z0-9]+');
Route::post('/{link}', 'PasteController@password')->where('link', '[a-zA-Z0-9]+');
Route::get('users/dashboard', 'UserController@dashboard');
Route::get('users/account', 'UserController@account');

// Ouais bon le raw il est useless
// Route::get('/{link}/raw', 'PasteController@raw')->where('link', '[a-zA-Z0-9]+');



Route::get('users/login', 'Auth\AuthController@showLoginForm');
Route::post('users/login', 'Auth\AuthController@login');
Route::get('users/logout', 'Auth\AuthController@logout');
Route::get('users/register', 'Auth\AuthController@showRegistrationForm');
Route::post('users/register', 'Auth\AuthController@register');
