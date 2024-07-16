<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\Home\LandingController::class, 'index'])->name('welcome');

Route::get('/', [App\Http\Controllers\Home\HomeController::class, 'home'])->name('home');
Route::get('/tentang', [App\Http\Controllers\Home\HomeController::class, 'about'])->name('about');
Route::get('/sejarah', [App\Http\Controllers\Home\HomeController::class, 'sejarah'])->name('sejarah');
Route::get('/kontak', [App\Http\Controllers\Home\HomeController::class, 'contact'])->name('contact');
Route::get('/berita', [App\Http\Controllers\Home\HomeController::class, 'berita'])->name('berita');
Route::get('/agenda', [App\Http\Controllers\Home\HomeController::class, 'agenda'])->name('agenda');
Route::get('/pengumuman', [App\Http\Controllers\Home\HomeController::class, 'pengumuman'])->name('pengumuman');
