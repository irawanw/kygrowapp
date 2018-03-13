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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mailservices', 'ChooseService@index')->name('mailservices');
Route::get('/service/{id}', 'ChooseService@service')->name('service');
Route::post('/check_service', 'ChooseService@check')->name('check');
Route::post('/service/save', 'ChooseService@save')->name('save_service');
Route::get('/list_goal', 'ChooseService@list_goal')->name('list_goal');
Route::post('/finish', 'ChooseService@finish')->name('finish');
Route::get('/integrate', 'ChooseService@integrate')->name('integrate');
Route::get('/token_test', 'ChooseService@token_test')->name('token_test');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
});
