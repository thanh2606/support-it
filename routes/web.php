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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::prefix('client')->middleware('auth')->group(function () {
    Route::resource('/subjects', 'SubjectController');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/groups', 'GroupController');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('home', function () {
        return view('admins.index');
    })->name('admins.index');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
    Route::resource('info-users', 'InfoUserController');
    Route::post('user-account', 'UserController@store')->name('user-account');
});
