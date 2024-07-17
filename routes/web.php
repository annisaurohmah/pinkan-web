<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;

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
        Route::get('/home', [HomeController::class, 'home'])->name('home');
        Route::get('/baca', [IndexController::class, 'chapterBaca'])->name('baca');
        Route::get('/baca-level/{chapter_name}/{id_chapter}', [IndexController::class, 'levelBaca'])->name('baca-level');
        Route::get('/baca-session/{level_name}/{id_level}', [IndexController::class, 'sesiBaca'])->name('baca-session');
        Route::get('/detail/{count}/{id_session}/{id_level}', [IndexController::class, 'detailSesi'])->name('baca-detail');
        Route::get('/hitung', [IndexController::class, 'chapterHitung'])->name('hitung');
        Route::get('/hitung-session/{level_name}/{id_chapter}', [IndexController::class, 'sesiHitung'])->name('hitung-session');
        Route::get('/hitung-detail/{count}/{id_session}/{id_level}', [IndexController::class, 'detailSesi'])->name('hitung-detail');
        Route::get('/level', function () {return view('level');})->name('level');
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
       
});
Route::get('/call-api', [ApiController::class, 'callCloudRunApi']);



