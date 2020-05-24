<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/** @var Auth */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'web'], function (){

    //Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('user', 		    'UserController');
    Route::resource('role', 		    'RoleController');
    Route::resource('shop', 		    'ShopController');

});
