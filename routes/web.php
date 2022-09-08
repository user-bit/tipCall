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
Route::get('/preview', function () {return view('preview');});
Route::get('/faq', function () {return view('faq');});
Route::get('/calendar-import', function () {return view('calendar-import');});
Route::get('/my-availability', function () {return view('my-availability');});
Route::get('/meetings', function () {return view('meetings');});
Route::get('/dashboard-no-meeting', function () {return view('dashboard-no-meeting');});
Route::get('/video-call-room', function () {return view('video-call-room');});
Route::get('/video-call-ready', function () {return view('video-call-ready');});

Route::get('new/preview', function () {return view('new/preview');});
Route::get('new/step-1', function () {return view('new/step-1');});
Route::get('new/step-2', function () {return view('new/step-2');});
Route::get('new/step-3', function () {return view('new/step-3');});
Route::get('new/step-4', function () {return view('new/step-4');});
Route::get('new/step-5', function () {return view('new/step-5');});
Route::get('new/step-6', function () {return view('new/step-6');});
Route::get('new/step-7', function () {return view('new/step-7');});

