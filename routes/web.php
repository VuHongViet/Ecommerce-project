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

Route::get('/','PageController@index')->name('index');
Route::group(['prefix' => 'admin'], function () {
    Route::resource('category','CategoryController');
    Route::resource('producttype','ProductTypeController');
    Route::resource('product','ProductController');

    Route::post('updatePro/{id}','ProductController@update');
    Route::post('updateCate/{id}','CategoryController@update');
    Route::post('updateProductype/{id}','ProducttypeController@update');
});

Route::get('getproducttype','AjaxController@getproducttype');
Route::get('callback/{social}','Login_SocicaliteController@handleProviderCallback');
Route::get('login/{social}','Login_SocicaliteController@redirectProvider')->name('login');
Route::get('logout','UserController@logout')->name('logout');
Route::post('register','UserController@register')->name('register');
Route::post('login','UserController@login')->name('formlogin');
Route::get('/{slug}','PageController@getdetails');
