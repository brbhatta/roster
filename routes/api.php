<?php

Route::get('roles', '\App\Http\Controllers\Admin\RoleController@index');
Route::post('register', '\App\Http\Controllers\AuthController@postRegister')->name('auth.register.post');
Route::post('login', '\App\Http\Controllers\AuthController@postLogin')->name('auth.login.post');
Route::get('me', '\App\Http\Controllers\AuthController@me')->name('auth.login.me');
