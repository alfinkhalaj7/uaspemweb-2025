<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Controllers\PenemuanController;



/* NOTE: Do Not Remove - Livewire route handling */
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/* END */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Home
Route::get('/', function () {
    return view('frontend.index');
})->name('home');

// Halaman About
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

// Halaman Services
Route::get('/services', function () {
    return view('frontend.services');
})->name('services');



// Kehilangan
Route::get('/lapor-kehilangan', [LaporanController::class, 'formKehilangan'])->name('kehilangan.form');
Route::post('/lapor-kehilangan', [LaporanController::class, 'submitKehilangan'])->name('kehilangan.submit');

// Penemuan
Route::get('/lapor-penemuan', [LaporanController::class, 'formPenemuan'])->name('penemuan.form');
Route::post('/lapor-penemuan', [LaporanController::class, 'submitPenemuan'])->name('penemuan.submit');

// Halaman daftar kehilangan & penemuan
Route::get('/daftar-kehilangan', [LaporanController::class, 'daftarKehilangan'])->name('kehilangan.list');
Route::get('/daftar-penemuan', [LaporanController::class, 'daftarPenemuan'])->name('penemuan.list');

Route::get('/lapor-kehilangan', [LaporanController::class, 'formKehilangan'])->name('kehilangan.form');
Route::post('/lapor-kehilangan', [LaporanController::class, 'submitKehilangan'])->name('kehilangan.submit');

Route::get('/lapor-penemuan', [LaporanController::class, 'formPenemuan'])->name('penemuan.form');
Route::post('/lapor-penemuan', [LaporanController::class, 'submitPenemuan'])->name('penemuan.submit');

Route::get('/daftar-kehilangan', [LaporanController::class, 'daftarBarang'])->name('daftar.kehilangan');

Route::get('/penemuan', [LaporanController::class, 'daftarPenemuan'])->name('daftar.penemuan');

