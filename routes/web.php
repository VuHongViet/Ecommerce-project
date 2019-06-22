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

// Route::get('/', function () {
//     return view('admin.pages.category.list');
// });
Route::group(['prefix' => 'admin'], function () {
    Route::resource('category','CategoryController');
    Route::resource('producttype','ProductTypeController');
    Route::resource('product','ProductController');
});

Route::get('getproducttype','AjaxController@getproducttype');
