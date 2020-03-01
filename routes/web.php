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

Route::get('/getUserLogin', function() {
    return Auth::user();
});

Route::prefix('client')->middleware('auth')->group(function () {
    Route::resource('/subjects', 'SubjectController');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/groups', 'GroupController');
});

//Route::resource('messages', 'MessageController');
Route::get('messages/{group_id}', 'MessageController@index')->name('message.index');
Route::post('messages/{group_id}', 'MessageController@store')->name('message.store');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('home', function () {
        return view('admins.index');
    })->name('admins.home');
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
    Route::resource('info-users', 'InfoUserController');
    Route::post('user-account', 'UserController@store')->name('user-account');
    Route::resource('categories', 'CategoryController');

    Route::get('groups', 'GroupController@index')->name('admin.groups.index');
    Route::get('groups/create', 'GroupController@create')->name('admin.groups.create');
    Route::post('groups', 'GroupController@store')->name('admin.groups.store');
    Route::get('groups/{group}', 'GroupController@show')->name('admin.groups.show');
    Route::get('groups/{group}/edit', 'GroupController@edit')->name('admin.groups.edit');
    Route::put('groups/{group}', 'GroupController@update')->name('admin.groups.update');
    Route::delete('groups/{group}', 'GroupController@destroy')->name('admin.groups.delete');

    Route::get('subjects', 'SubjectController@index')->name('admin.subjects.index');
    Route::get('subjects/create', 'SubjectController@create')->name('admin.subjects.create');
    Route::post('subjects', 'SubjectController@store')->name('admin.subjects.store');
    Route::get('subjects/{subject}', 'SubjectController@show')->name('admin.subjects.show');
    Route::get('subjects/{subject}/edit', 'SubjectController@edit')->name('admin.subjects.edit');
    Route::put('subjects/{subject}', 'SubjectController@update')->name('admin.subjects.update');
    Route::delete('subjects/{subject}', 'SubjectController@destroy')->name('admin.subjects.delete');

});
