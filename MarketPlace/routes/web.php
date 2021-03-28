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
    return view('welcome');
});

Route::prefix('admin')->namespace('Admin')->group(function (){
    Route::prefix('stores')->group(function (){
        Route::get('/', 'StoreController@index')->name('admin.store.index');
        Route::get('/create', 'StoreController@create')->name('admin.store.create');
        Route::post('/store', 'StoreController@store')->name('admin.store.store');
        Route::get('/{store}/edit', 'StoreController@edit')->name('admin.store.edit');
        Route::post('update/{store}', 'StoreController@update')->name('admin.store.update');
        Route::get('destroy/{store}', 'StoreController@destroy')->name('admin.store.destroy');
    });
});
