<?php

Route::get('roles', '\App\Http\Controllers\Admin\RoleController@index');
Route::post('register', '\App\Http\Controllers\AuthController@postRegister')->name('auth.register.post');
Route::post('login', '\App\Http\Controllers\AuthController@postLogin')->name('auth.login.post');
Route::get('education', '\App\Http\Controllers\Admin\EducationController@index')->name('education.index');

Route::get('languages', '\App\Http\Controllers\Admin\LanguageController@index')->name('languages.index');

Route::group(['middleware' => 'jwt'], function() {
    Route::get('me', '\App\Http\Controllers\AuthController@me')->name('auth.login.me');
    Route::put('me/languages', '\App\Http\Controllers\ProfileController@saveLanguages')->name('user.languages.put');
    Route::post('general-info', '\App\Http\Controllers\ProfileController@postGeneralInfo')->name('profile.general-info.post');
});
