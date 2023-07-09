<?php

use App\Models\Publikasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AduanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\KonsultasiController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::post('/aduan-konsultasi', [BerandaController::class, 'aduan']);
Route::get('/list-artikel', [ArtikelController::class, 'index']);
Route::get('profil', [TentangController::class, 'profil']);
Route::get('/dokter', [TentangController::class, 'dokter']);
Route::get('/maklumat-pelayanan', [TentangController::class, 'maklumat']);
Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/jadwal-pelayanan', [InfoController::class, 'jadwal_dokter']);
Route::get('/tarif-pelayanan', [InfoController::class, 'tarif_pelayanan']);
Route::get('/artikel/{id}', [ArtikelController::class, 'detail']);
Route::get('/aduan', [AduanController::class, 'index']);
Route::get('/konsultasi', [KonsultasiController::class, 'index']);
Route::get('/laporan-pengaduan', [PublikasiController::class, 'laporan_pengaduan']);
Route::get('/laporan-pengaduan/{file_name}/download', [PublikasiController::class, 'download'])->name('laporan-pengaduan');
Route::get('/standar-layanan', [PublikasiController::class, 'standar_layanan']);
Route::get('/standar-pelayanan/{file_name}/download', [PublikasiController::class, 'download'])->name('standar-pelayanan');
Route::get('/skm', [PublikasiController::class, 'skm']);
Route::get('/skm/{file_name}/download', [PublikasiController::class, 'download'])->name('skm');
Route::get('/indikator-mutu-nasional', [PublikasiController::class, 'indikatormutu']);
Route::get('/indikator-mutu-nasional/{file_name}/download', [PublikasiController::class, 'download'])->name('indikator-mutu-nasional');

// Admin
Route::get('/login', [AuthController::class, 'index']);
Route::post('/authlogin', [AuthController::class, 'authLogin']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/berita', [BeritaController::class, 'index']);
Route::post('/berita/tambah', [BeritaController::class, 'tambah']);
Route::get('/berita/{id}/hapus', [BeritaController::class, 'hapus']);
Route::get('/berita/{id}', [BeritaController::class, 'edit']);
Route::put('/berita/update', [BeritaController::class, 'update']);

Route::get('/publikasi', [PublikasiController::class, 'index']);
Route::post('/publikasi/tambah', [PublikasiController::class, 'tambah']);
Route::get('/publikasi/{id}/hapus', [PublikasiController::class, 'hapus']);
