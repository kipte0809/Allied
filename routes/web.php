<?php

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

Route::get('auth/login', 'Web\AccountController@Show')->name('login');
Route::post('auth/login', 'Web\AccountController@Login');
Route::get('auth/logout', 'Web\AccountController@Logout');
Route::get('/', 'Web\DashboardController@show')->name('dashboard');
Route::get('/dashboard', 'Web\DashboardController@show')->name('dashboard');