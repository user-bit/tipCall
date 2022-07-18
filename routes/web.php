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
Route::get('/my-profile', function () {return view('my-profile');});
Route::get('/thank', function () {return view('thank');});
