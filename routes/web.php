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

Route::get('/', function () {return view('index');});
Route::get('/sign', function () {return view('sign');});
Route::get('/login', function () {return view('login');});
Route::get('/dashboard', function () {return view('dashboard');});
Route::get('/dashboard-my-profile.blade', function () {return view('dashboard-my-profile.blade');});
Route::get('/thank', function () {return view('thank');});
Route::get('/my-plans', function () {return view('my-plans');});
Route::get('/my-plans-settings', function () {return view('my-plans-settings');});
Route::get('/my-page', function () {return view('my-page');});
Route::get('/my-page-public', function () {return view('my-page-public');});
Route::get('/my-profile', function () {return view('my-profile');});
Route::get('/billing', function () {return view('billing');});

