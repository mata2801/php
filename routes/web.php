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

Route::get('/', 'AccountController@login');

Route::post('/accountController/login', 'AccountController@select');

Route::get('/accountController/register', 'AccountController@register');

Route::post('/accountController/register', 'AccountController@processRegister');

Route::get('/accountController/list', 'AccountController@getAllAccount');

Route::get('/accountController/accountController-detail/{id}', 'AccountController@getAccountById');

Route::resource('/game', 'GameController');

Route::get('/view, @AccountController@getlayout');
