<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\Auth\LoginController;

//Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('surat-masuk.index');
//Route::get('/surat-masuk/{id}', [SuratMasukController::class, 'show'])->name('surat-masuk.show');
//Route::get('/surat-keluar', [SuratKeluarController::class, 'index'])->name('surat-keluar.index');
//Route::get('/surat-keluar/{id}', [SuratKeluarController::class, 'show'])->name('surat-keluar.show');
//Route::get('/surat-keluar', [SuratKeluarController::class, 'index'])->name('surat-keluar.index');
//Route::get('/surat-keluar/{id}', [SuratKeluarController::class, 'show'])->name('surat-keluar.show');

//Route::get('/', function () {
    //return view('dashboard');
//})->name('dashboard');

//Route::resource('surat-masuk', SuratMasukController::class)->parameters(['surat-masuk' => 'id']);
//Route::resource('surat-masuk', SuratMasukController::class)->parameters(['surat-masuk' => 'id']);
//Route::resource('surat-masuk', SuratMasukController::class)->parameters(['surat-masuk' => 'id']);
//Route::resource('surat-keluar', SuratKeluarController::class)->parameters(['surat-keluar' => 'id']);

// Rute untuk tamu (belum login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
});

// Rute yang memerlukan autentikasi (sudah login)
Route::middleware('auth')->group(function () {
    // Halaman Dashboard
    Route::get('/', fn () => view('dashboard'))->name('dashboard');
    
    // Proses Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Surat Masuk: Bisa diakses oleh semua user yang sudah login (hanya index dan show)
    Route::resource('surat-masuk', SuratMasukController::class)
        ->only(['index', 'show'])
        ->parameters(['surat-masuk' => 'id']);
    Route::resource('surat-keluar', SuratKeluarController::class)
    ->only(['index', 'show'])
    ->parameters(['surat-keluar' => 'id']);

    // Surat Masuk: Operasi perubahan data (create, store, edit, update, destroy) hanya untuk role 'petugas'
    Route::resource('surat-masuk', SuratMasukController::class)
        ->except(['index', 'show'])
        ->parameters(['surat-masuk' => 'id'])
        ->middleware('can:manage-letters');
    Route::resource('surat-keluar', SuratKeluarController::class)
    ->except(['index', 'show'])
    ->parameters(['surat-keluar' => 'id'])
    ->middleware('can:manage-letters');

    // Jika Anda memiliki rute surat-keluar dari praktikum P4, pastikan diletakkan di sini 
    // dan berikan middleware 'can:manage-letters' pada rute mutasi/perubahannya.
});