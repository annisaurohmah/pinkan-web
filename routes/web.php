<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('index');})->name('beranda');
Route::get('/tentang', function () {return view('contact');})->name('tentang');
Route::get('/tutorial', function () {return view('bantuan');})->name('bantuan');
Route::get('/unduh', function () {return view('download');})->name('unduh');
Route::get('/login', function () {return view('auth.login');})->name('login');
Route::get('/detail-bantuan', function () {return view('bantuan-content');})->name('detail-bantuan');
Route::get('/register', function () {return view('auth.register');})->name('register');
Route::get('/lupa-password', function () {return view('auth.passwords.email');})->name('forgot-pass');
Route::get('/home', function () {return view('home');})->name('home');
Route::get('/baca', function () {return view('baca');})->name('baca');
Route::get('/baca-level', function () {return view('baca-level');})->name('baca-level');
Route::get('/baca-session', function () {return view('baca-session');})->name('baca-session');
Route::get('/baca-detail', function () {return view('baca-detail');})->name('baca-detail');


Route::get('/hitung', function () {return view('hitung');})->name('hitung');
Route::get('/hitung-session', function () {return view('hitung-session');})->name('hitung-session');


Route::get('/level', function () {return view('level');})->name('level');
Route::get('/profile', function () {return view('profile');})->name('profile');
Route::put('/profile', function() {return view('profile.update');})->name('profile.update');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/call-api', [ApiController::class, 'callCloudRunApi']);



