<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Auth::routes();

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/', [App\Http\Controllers\Home\HomeController::class, 'home'])->name('home');
Route::get('/tentang', [App\Http\Controllers\Home\HomeController::class, 'about'])->name('about');
Route::get('/sejarah', [App\Http\Controllers\Home\HomeController::class, 'sejarah'])->name('sejarah');
Route::get('/kontak', [App\Http\Controllers\Home\HomeController::class, 'contact'])->name('contact');
Route::get('/berita', [App\Http\Controllers\Home\HomeController::class, 'berita'])->name('berita');
Route::get('/agenda', [App\Http\Controllers\Home\HomeController::class, 'agenda'])->name('agenda');
Route::get('/pengumuman', [App\Http\Controllers\Home\HomeController::class, 'pengumuman'])->name('pengumuman');
Route::get('/struktur', [App\Http\Controllers\Home\HomeController::class, 'struktur'])->name('struktur');
Route::get('/demografi', [App\Http\Controllers\Home\HomeController::class, 'demografi'])->name('demografi');
Route::get('/visimisi', [App\Http\Controllers\Home\HomeController::class, 'visimisi'])->name('visi-misi');
Route::get('/geografis', [App\Http\Controllers\Home\HomeController::class, 'geografis'])->name('geografis');
Route::get('/berita/{slug}', [App\Http\Controllers\Home\HomeController::class, 'beritaShow'])->name('berita.show');
Route::get('/pengumuman/{slug}', [App\Http\Controllers\Home\HomeController::class, 'pengumumanShow'])->name('pengumuman.show');
Route::get('/agenda/{slug}', [App\Http\Controllers\Home\HomeController::class, 'agendaShow'])->name('agenda.show');

Route::group([
    'middleware' => 'auth',
    'prefix' => 'dashboard',
    'as' => 'dashboard.'
], function () {
    Route::resource('post', App\Http\Controllers\Dashboard\PostController::class)->except('show');
    Route::resource('user', App\Http\Controllers\Dashboard\UserController::class)->except('show');
});
