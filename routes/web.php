<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/login', function () {return view('auth.login');})->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('api-login');
Route::get('/bantuan-akun', function (){
    return view('/bantuan-details/bantuan-akun');})->name('bantuan-akun');
Route::get('/bantuan-sandi', function(){
    return view('./bantuan-details/bantuan-kata-sandi');})->name('bantuan-sandi');
Route::get('/bantuan-hapus', function(){
    return view('./bantuan-details/bantuan-hapus-akun');})->name('bantuan-hapus');
Route::get('/bantuan-instalasi', function(){
    return view('./bantuan-details/bantuan-instalasi');})->name('bantuan-instalasi');
Route::get('/bantuan-monitor', function(){
    return view('./bantuan-details/bantuan-monitor');})->name('bantuan-monitor');
Route::get('/bantuan-pantau', function(){
return view('/bantuan-details/bantuan-pantau');})->name('bantuan-pantau');

Route::get('/detail-bantuan', function () {return view('bantuan-content');})->name('detail-bantuan');
Route::get('/register', function () {return view('auth.register');})->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('api-register');
Route::get('/lupa-password', function () {return view('auth.passwords.email');})->name('forgot-pass');


Route::middleware(['auth-api'])->group(function () {
        Route::post('/logout', [LoginController::class, 'logout'])->name('api-logout');
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
       
});
Route::get('/call-api', [ApiController::class, 'callCloudRunApi']);



