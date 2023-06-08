<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RouteController;
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

Route::get('/', [RouteController::class, 'home'])->name('home');
Route::get('/about', [RouteController::class, 'about'])->name('about');
//Route::get('/login', [RouteController::class, 'login'])->name('login');
//Route::get('/register', [RouteController::class, 'register'])->name('register');
Route::get('/today', [RouteController::class, 'today'])->middleware('auth')->name('today');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
