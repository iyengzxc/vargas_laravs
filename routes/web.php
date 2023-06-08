<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;

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

Route::get('/',[LandingController::class,'index'])->name('landing');


Route::get('/home',[homeController::class,'index'])->name('home');
Route::get('/profile',[ProfileController::class,'index'])->middleware('auth')->name('profile');
Route::get('/events',[EventsController::class,'index'])->middleware('auth')->name('events');
Route::get('/news',[NewsController::class,'index'])->middleware('auth')->name('news');

Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::post('/contact/submit',[ContactController::class,'submit'])->name('contact.submit');

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.submit');