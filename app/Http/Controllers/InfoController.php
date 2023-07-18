<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Models\JadwalLayanan;
use App\Models\MenuPublikasi;

class InfoController extends Controller
{
    public function jadwal_dokter()
    {
        $title = "JADWAL PELAYANAN";
        $berita = $berita = Artikel::orderBy('id_artikel', 'desc')->paginate(3);
        $jadwal = JadwalLayanan::all();
        $publikasi = MenuPublikasi::all();
        return view('info.jadwal_pelayanan', compact('title', 'berita', 'jadwal', 'publikasi'));
    }

    public function tarif_pelayanan()
    {
        $title = "TARIF PELAYANAN";
        $tarif = Tarif::all();
        $publikasi = MenuPublikasi::all();
        return view('info.tarif_pelayanan', compact('title', 'tarif', 'publikasi'));
    }
}
