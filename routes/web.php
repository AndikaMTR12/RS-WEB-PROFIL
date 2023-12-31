<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AduanController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\SpesialisController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\MenuPublikasiController;
use App\Models\AduanKonsultasi;
use Mews\Captcha\Facades\Captcha;
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
Route::get('/aduan', [AduanController::class, 'aduan']);
Route::get('/konsultasi', [KonsultasiController::class, 'konsultasi']);
// Berita
Route::get('/list-artikel', [ArtikelController::class, 'index']);
Route::get('/artikel/{id}', [ArtikelController::class, 'detail']);
// Tentang
Route::get('profil', [TentangController::class, 'profil']);
Route::get('/dokter', [TentangController::class, 'dokter']);
Route::get('/maklumat-pelayanan', [TentangController::class, 'maklumat']);
// Layanan
Route::get('/layanan', [LayananController::class, 'layanan']);
// Info
Route::get('/jadwal-pelayanan', [InfoController::class, 'jadwal_dokter']);
Route::get('/tarif-pelayanan', [InfoController::class, 'tarif_pelayanan']);
// Publikasi
Route::get('/publikasi-beranda/{id}', [PublikasiController::class, 'publikasi_beranda']);
Route::get('/publikasi-beranda/{file_name}/download', [PublikasiController::class, 'download'])->name('laporan-pengaduan');

// Admin
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/authlogin', [AuthController::class, 'authLogin']);
});
Route::post('/logout', [AuthController::class, 'logout']);
Route::group(['middleware' => ['auth', 'cekLevel:1,2,3']], function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
Route::group(['middleware' => ['auth', 'cekLevel:1,2']], function () {
    // Berita
    Route::get('/berita', [BeritaController::class, 'index']);
    Route::post('/berita/tambah', [BeritaController::class, 'tambah']);
    Route::get('/berita/{id}/hapus', [BeritaController::class, 'hapus']);
    Route::get('/berita/{id}', [BeritaController::class, 'edit']);
    Route::put('/berita/update', [BeritaController::class, 'update']);
    // Kategori
    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::post('/kategori/tambah', [KategoriController::class, 'tambah']);
    Route::get('/kategori/{id}/hapus', [KategoriController::class, 'hapus']);
    Route::get('/kategori/{id}', [KategoriController::class, 'edit']);
    Route::put('/kategori/update', [KategoriController::class, 'update']);
});

Route::group(['middleware' => ['auth', 'cekLevel:1,3']], function () {
    // Publikasi
    Route::get('/publikasi', [PublikasiController::class, 'index']);
    Route::post('/publikasi/tambah', [PublikasiController::class, 'tambah']);
    Route::get('/publikasi/{id}/hapus', [PublikasiController::class, 'hapus']);
    Route::get('/publikasi/{id}', [PublikasiController::class, 'edit']);
    Route::put('/publikasi/update', [PublikasiController::class, 'update']);
});
Route::group(['middleware' => ['auth', 'cekLevel:1']], function () {
    // Dokter
    Route::get('/dokter-admin', [DokterController::class, 'index']);
    Route::post('/dokter-admin/tambah', [DokterController::class, 'tambah']);
    Route::get('/dokter-admin/{id}/hapus', [DokterController::class, 'hapus']);
    Route::get('/dokter-admin/{id}', [DokterController::class, 'edit']);
    Route::put('/dokter-admin/update', [DokterController::class, 'update']);
    // Spesialis
    Route::get('/spesialis', [SpesialisController::class, 'index']);
    Route::post('/spesialis/tambah', [SpesialisController::class, 'tambah']);
    Route::get('/spesialis/{id}/hapus', [SpesialisController::class, 'hapus']);
    Route::get('/spesialis/{id}', [SpesialisController::class, 'edit']);
    Route::put('/spesialis/update', [SpesialisController::class, 'update']);
    // Jenis Publikasi
    Route::get('/jenis-publikasi', [MenuPublikasiController::class, 'index']);
    Route::post('/jenis-publikasi/tambah', [MenuPublikasiController::class, 'tambah']);
    Route::get('/jenis-publikasi/{id}/hapus', [MenuPublikasiController::class, 'hapus']);
    Route::get('/jenis-publikasi/{id}', [MenuPublikasiController::class, 'edit']);
    Route::put('/jenis-publikasi/update', [MenuPublikasiController::class, 'update']);
    // Slider
    Route::get('/slider', [SliderController::class, 'index']);
    Route::post('/slider/tambah', [SliderController::class, 'tambah']);
    Route::get('/slider/{id}/hapus', [SliderController::class, 'hapus']);
    Route::get('/slider/{id}', [SliderController::class, 'edit']);
    Route::put('/slider/update', [SliderController::class, 'update']);
    // Aduan
    Route::get('/aduan-admin', [AduanController::class, 'index']);
    Route::get('/aduan-admin/{id}', [AduanController::class, 'update_status']);
    // Konsultasi
    Route::get('/konsultasi-admin', [KonsultasiController::class, 'index']);
    Route::get('/konsultasi-admin/{id}', [KonsultasiController::class, 'update_status']);
    // Layanan
    Route::get('/layanan-admin', [LayananController::class, 'index']);
    Route::post('/layanan-admin/tambah', [LayananController::class, 'tambah']);
    Route::get('/layanan-admin/{id}/hapus', [LayananController::class, 'hapus']);
    Route::get('/layanan-admin/{id}', [LayananController::class, 'edit']);
    Route::put('/layanan-admin/update', [LayananController::class, 'update']);
    // Fasilitas
    Route::get('/fasilitas', [FasilitasController::class, 'index']);
    Route::post('/fasilitas/tambah', [FasilitasController::class, 'tambah']);
    Route::get('/fasilitas/{id}/hapus', [FasilitasController::class, 'hapus']);
    Route::get('/fasilitas/{id}', [FasilitasController::class, 'edit']);
    Route::put('/fasilitas/update', [FasilitasController::class, 'update']);
    // Jadwal Pelayanan
    Route::get('/jadwal-layanan-admin', [JadwalController::class, 'index']);
    Route::post('/jadwal-layanan-admin/tambah', [JadwalController::class, 'tambah']);
    Route::get('/jadwal-layanan-admin/{id}/hapus', [JadwalController::class, 'hapus']);
    Route::get('/jadwal-layanan-admin/{id}', [JadwalController::class, 'edit']);
    Route::put('/jadwal-layanan-admin/update', [JadwalController::class, 'update']);
    // Manajemen User
    Route::get('/manajemen-user', [UserController::class, 'index']);
    Route::post('/manajemen-user/tambah', [UserController::class, 'tambah']);
    Route::get('/manajemen-user/{id}/hapus', [UserController::class, 'hapus']);
    Route::get('/manajemen-user/{id}', [UserController::class, 'edit']);
    Route::put('/manajemen-user/update', [UserController::class, 'update']);
    // Tarif
    Route::get('/tarif-pelayanan-admin', [TarifController::class, 'index']);
    Route::post('/tarif-pelayanan-admin/tambah', [TarifController::class, 'tambah']);
    Route::get('/tarif-pelayanan-admin/{id}/hapus', [TarifController::class, 'hapus']);
    Route::get('/tarif-pelayanan-admin/{id}', [TarifController::class, 'edit']);
    Route::put('/tarif-pelayanan-admin/update', [TarifController::class, 'update']);
});
