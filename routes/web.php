<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('beranda');
Route::get('/tentang', function () {
    return view('contact');
})->name('tentang');
Route::get('/tutorial', function () {
    return view('blog-single');
})->name('tutorial');
Route::get('/unduh', function (){
    return view('download');
})->name('unduh');
