<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Models\AduanKonsultasi;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "DASHBOARD";
        $berita = Artikel::count();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.dashboard.index', compact('title', 'berita', 'status_aduan', 'status_konsultasi'));
    }
}
