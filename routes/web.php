<?php

use Illuminate\Support\Facades\Auth;
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
    return view('layouts/index');
});

Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->middleware('verified');
Route::resource('frauds', 'FraudsController');
Route::get('/rules', 'RulesController@index');
Route::get('/advices', 'AdvicesController@index');
Route::get('/fraud/create', 'FraudsController@create');

Auth::routes();

Route::resource('contacts', 'ContactController');
Route::get('captcha-form', 'CaptchaController@captchForm');
Route::post('store-captcha-form', 'CaptchaController@storeCaptchaForm');
