<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => '\App\Http\Controllers\User\Store'], function () {
    Route::get('/', 'IndexController')->name('user.store.index');
});

Auth::routes();

