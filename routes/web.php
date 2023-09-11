<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

 Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => '', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index');
});

Route::group(['prefix' => 'user_role','namespace' => 'Admin'], function () {
    Route::get('/class/create', 'UserRoleController@create')->name('admin.User_role.create');
    Route::post('/class/store', 'UserRoleController@store')->name('admin.User_role.store');
    Route::get('/class/view', 'UserRoleController@view')->name('admin.User_role.view');
    Route::get('/class/edit/{id}', 'UserRoleController@edit')->name('admin.User_role.edit');
    Route::post('/class/update/{id}', 'UserRoleController@update')->name('admin.User_role.update');
    Route::get('/class/delete/{id}', 'UserRoleController@delete')->name('admin.User_role.delete');
});

Route::group(['prefix' => 'user_role','namespace' => 'Product'], function () {
    Route::get('/class/create', 'ProductController@create')->name('admin.product.create');
    Route::post('/class/store', 'ProductController@store')->name('admin.product.store');
    Route::get('/class/view', 'ProductController@view')->name('admin.product.view');
    Route::get('/class/edit/{id}', 'ProductController@edit')->name('admin.product.edit');
    Route::post('/class/update/{id}', 'ProductController@update')->name('admin.product.update');
    Route::get('/class/delete/{id}', 'ProductController@delete')->name('admin.product.delete');
});