<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AduanKonsultasi;

class KonsultasiController extends Controller
{
    public function index()
    {
        $title = "Konsultasi";
        $aduan = AduanKonsultasi::where('jenis_pesan', 'Konsultasi')->get();
        return view('admin.konsultasi.index', compact('title', 'aduan'));
    }

    public function konsultasi()
    {
        $title = "KONSULTASI";
        return view('konsultasi.index', compact('title'));
    }
}
