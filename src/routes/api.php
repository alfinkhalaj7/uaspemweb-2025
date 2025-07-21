<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LaporanApiController;

// Barang Hilang
Route::get('/kehilangan', [LaporanApiController::class, 'getKehilangan']);
Route::post('/kehilangan', [LaporanApiController::class, 'storeKehilangan']); // ✔ benar

// Barang Penemuan
Route::get('/penemuan', [LaporanApiController::class, 'getPenemuan']); // ✔ benar
Route::post('/penemuan', [LaporanApiController::class, 'storePenemuan']); // ✔ benar
