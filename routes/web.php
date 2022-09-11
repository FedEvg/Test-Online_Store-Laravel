<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => '\App\Http\Controllers\User\Main'], function () {
    Route::get('/', 'IndexController')->name('user.main.index');
});

Route::group(['namespace' => '\App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}/', 'DestroyController')->name('admin.category.destroy');
    });
    Route::group(['namespace' => 'Color', 'prefix' => 'colors'], function () {
        Route::get('/', 'IndexController')->name('admin.color.index');
        Route::get('/create', 'CreateController')->name('admin.color.create');
        Route::post('/', 'StoreController')->name('admin.color.store');
        Route::get('/{color}', 'ShowController')->name('admin.color.show');
        Route::get('/{color}/edit', 'EditController')->name('admin.color.edit');
        Route::patch('/{color}', 'UpdateController')->name('admin.color.update');
        Route::delete('/{color}/', 'DestroyController')->name('admin.color.destroy');
    });
    Route::group(['namespace' => 'Brand', 'prefix' => 'brands'], function () {
        Route::get('/', 'IndexController')->name('admin.brand.index');
        Route::get('/create', 'CreateController')->name('admin.brand.create');
        Route::post('/', 'StoreController')->name('admin.brand.store');
        Route::get('/{brand}', 'ShowController')->name('admin.brand.show');
        Route::get('/{brand}/edit', 'EditController')->name('admin.brand.edit');
        Route::patch('/{brand}', 'UpdateController')->name('admin.brand.update');
        Route::delete('/{brand}/', 'DestroyController')->name('admin.brand.destroy');
    });
    Route::group(['namespace' => 'Size', 'prefix' => 'sizes'], function () {
        Route::get('/', 'IndexController')->name('admin.size.index');
        Route::get('/create', 'CreateController')->name('admin.size.create');
        Route::post('/', 'StoreController')->name('admin.size.store');
        Route::get('/{size}', 'ShowController')->name('admin.size.show');
        Route::get('/{size}/edit', 'EditController')->name('admin.size.edit');
        Route::patch('/{size}', 'UpdateController')->name('admin.size.update');
        Route::delete('/{size}/', 'DestroyController')->name('admin.size.destroy');
    });
    Route::group(['namespace' => 'Clothing', 'prefix' => 'clothes'], function () {
        Route::get('/', 'IndexController')->name('admin.clothing.index');
        Route::get('/create', 'CreateController')->name('admin.clothing.create');
        Route::post('/', 'StoreController')->name('admin.clothing.store');
        Route::get('/{clothing}', 'ShowController')->name('admin.clothing.show');
        Route::get('/{clothing}/edit', 'EditController')->name('admin.clothing.edit');
        Route::patch('/{clothing}', 'UpdateController')->name('admin.clothing.update');
        Route::delete('/{clothing}/', 'DestroyController')->name('admin.clothing.destroy');
    });
    Route::group(['namespace' => 'Image', 'prefix' => 'images'], function () {
        Route::get('/', 'IndexController')->name('admin.image.index');
        Route::get('/create', 'CreateController')->name('admin.image.create');
        Route::post('/', 'StoreController')->name('admin.image.store');
        Route::get('/{image}', 'ShowController')->name('admin.image.show');
        Route::get('/{image}/edit', 'EditController')->name('admin.image.edit');
        Route::patch('/{image}', 'UpdateController')->name('admin.image.update');
        Route::delete('/{image}/', 'DestroyController')->name('admin.image.destroy');
    });

});

Auth::routes();

