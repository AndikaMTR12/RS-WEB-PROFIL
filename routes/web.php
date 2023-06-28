<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TentangController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BerandaController::class, 'index']);
Route::get('/list-artikel', [ArtikelController::class, 'index']);
Route::get('profil', [TentangController::class, 'profil']);
Route::get('/dokter', [TentangController::class, 'dokter']);
Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/jadwal-pelayanan', [InfoController::class, 'jadwal_dokter']);
Route::get('/tarif-pelayanan', [InfoController::class, 'tarif_pelayanan']);
Route::get('/artikel/{id}', [ArtikelController::class, 'detail']);
