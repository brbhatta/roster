<?php

use Illuminate\Support\Facades\Route;

Route::model('language', \App\Models\Language::class);

Route::get('dashboard', function (){

    return view('admin.dashboard.index');

});

Route::group(['middleware' => ['bindings', 'guest']], function ($router){

    $router->resources([
        '/languages' => Admin\LanguageController::class,
        '/education' => Admin\EducationController::class,
    ]);;
});




Route::group(['middleware' => 'verified'], function ($router){

    $router->get('info','\App\Http\Controllers\ProfileController@getGeneralInfo')->name('profile.profile');
    $router->post('info','\App\Http\Controllers\ProfileController@postGeneralInfo')->name('profile.profile.post');
});

