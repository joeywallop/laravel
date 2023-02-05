<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Redis;
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

Route::get('/store', function () {
    Redis::set('Bangkok','Krun thep maha nakon') ;
});

Route::get('/retrieve', function () {
    return Redis::get('Bangkok');
});

Route::get('/joey', function () {
    return view('welcome joey');
});

Route::get('/send-email', function () {
  Mail::to('joey.wallop@gmail.com')->send(new TestMail);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
