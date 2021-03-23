<?php

use Illuminate\Support\Facades\Route;

/*Главная*/
Route::get('/', 'PageController@home')->name('home');

/*Регистрация/Авторизация/Выход*/
Route::get('/register', 'AuthController@showRegister')->name('register_show');
Route::post('/register', 'AuthController@doRegister')->name('register_do');

Route::get('/login', 'AuthController@showLogin')->name('login');
Route::post('/login', 'AuthController@doLogin')->name('login_do');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/logout', 'AuthController@logout')->name('logout');

    Route::get('/chat/{id}', 'MessageController@show')->name('show');
    Route::get('/chat/{id}/get', 'MessageController@get')->name('get');
    Route::post('/chat/{id}/send', 'MessageController@send')->name('send');
});

