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

Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::resource('companies', 'CompaniesController');
    Route::resource('employees', 'EmployeesController');
});

Auth::routes();
Route::get('/admin', 'HomeController@index');