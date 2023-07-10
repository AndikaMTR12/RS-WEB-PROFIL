<?php

use App\Models\Publikasi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\AduanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\SpesialisController;
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
// Beranda
Route::get('/', [BerandaController::class, 'index']);

// Aduan dan Konsultasi
Route::post('/aduan-konsultasi', [BerandaController::class, 'aduan']);
Route::get('/aduan', [AduanController::class, 'index']);
Route::get('/konsultasi', [KonsultasiController::class, 'index']);
// Berita
Route::get('/list-artikel', [ArtikelController::class, 'index']);
Route::get('/artikel/{id}', [ArtikelController::class, 'detail']);
// Tentang
Route::get('profil', [TentangController::class, 'profil']);
Route::get('/dokter', [TentangController::class, 'dokter']);
Route::get('/maklumat-pelayanan', [TentangController::class, 'maklumat']);
// Layanan
Route::get('/layanan', [LayananController::class, 'index']);
// Info
Route::get('/jadwal-pelayanan', [InfoController::class, 'jadwal_dokter']);
Route::get('/tarif-pelayanan', [InfoController::class, 'tarif_pelayanan']);
// Publikasi
Route::get('/laporan-pengaduan', [PublikasiController::class, 'laporan_pengaduan']);
Route::get('/laporan-pengaduan/{file_name}/download', [PublikasiController::class, 'download'])->name('laporan-pengaduan');
Route::get('/standar-layanan', [PublikasiController::class, 'standar_layanan']);
Route::get('/standar-pelayanan/{file_name}/download', [PublikasiController::class, 'download'])->name('standar-pelayanan');
Route::get('/skm', [PublikasiController::class, 'skm']);
Route::get('/skm/{file_name}/download', [PublikasiController::class, 'download'])->name('skm');
Route::get('/indikator-mutu-nasional', [PublikasiController::class, 'indikatormutu']);
Route::get('/indikator-mutu-nasional/{file_name}/download', [PublikasiController::class, 'download'])->name('indikator-mutu-nasional');

// Admin
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/authlogin', [AuthController::class, 'authLogin']);
});
Route::post('/logout', [AuthController::class, 'logout']);
Route::group(['middleware' => ['auth']], function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Berita
    Route::get('/berita', [BeritaController::class, 'index']);
    Route::post('/berita/tambah', [BeritaController::class, 'tambah']);
    Route::get('/berita/{id}/hapus', [BeritaController::class, 'hapus']);
    Route::get('/berita/{id}', [BeritaController::class, 'edit']);
    Route::put('/berita/update', [BeritaController::class, 'update']);
    // Publikasi
    Route::get('/publikasi', [PublikasiController::class, 'index']);
    Route::post('/publikasi/tambah', [PublikasiController::class, 'tambah']);
    Route::get('/publikasi/{id}/hapus', [PublikasiController::class, 'hapus']);
    Route::get('/publikasi/{id}', [PublikasiController::class, 'edit']);
    Route::put('/publikasi/update', [PublikasiController::class, 'update']);
    // Dokter
    Route::get('/dokter', [DokterController::class, 'index']);
    Route::post('/dokter/tambah', [DokterController::class, 'tambah']);
    Route::get('/dokter/{id}/hapus', [DokterController::class, 'hapus']);
    Route::get('/dokter/{id}', [DokterController::class, 'edit']);
    Route::put('/dokter/update', [DokterController::class, 'update']);
    // Spesialis
    Route::get('/spesialis', [SpesialisController::class, 'index']);
    Route::post('/spesialis/tambah', [SpesialisController::class, 'tambah']);
    Route::get('/spesialis/{id}/hapus', [SpesialisController::class, 'hapus']);
    Route::get('/spesialis/{id}', [SpesialisController::class, 'edit']);
    Route::put('/spesialis/update', [SpesialisController::class, 'update']);
    // Kategori
    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::post('/kategori/tambah', [KategoriController::class, 'tambah']);
    Route::get('/kategori/{id}/hapus', [KategoriController::class, 'hapus']);
    Route::get('/kategori/{id}', [KategoriController::class, 'edit']);
    Route::put('/kategori/update', [KategoriController::class, 'update']);
});
