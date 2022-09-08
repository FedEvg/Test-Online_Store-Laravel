<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => '\App\Http\Controllers\User\Store'], function () {
    Route::get('/', 'IndexController')->name('user.main.index');
});

Route::group(['namespace' => '\App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('user.main.index');
    });
});

Auth::routes();

