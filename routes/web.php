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

Route::get('/', 'AdminController@login')->name('login');

/*登入及登出*/
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

/*管理員*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('/'                , 'AdminController@home')->name('admin.dashboard.index');
    /*餐廳帳號*/
    Route::get('/restaurants'          , 'AdminController@index')->name('admin.restaurants.index');
    Route::get('/restaurants/create'   , 'AdminController@create')->name('admin.restaurants.create');
    Route::get('/restaurants/{restaurant}/edit', 'AdminController@edit')->name('admin.restaurants.edit');

    Route::get('/restaurants/{restaurant}/status'     , 'AdminController@status')->name('admin.restaurants.status');

    Route::patch('/restaurants/{restaurant}'   , 'AdminController@update')->name('admin.restaurants.update');
    Route::post('/restaurants'         , 'AdminController@store')->name('admin.restaurants.store');
    Route::delete('/restaurants/{restaurant}'  , 'AdminController@destroy')->name('admin.restaurants.destroy');
});