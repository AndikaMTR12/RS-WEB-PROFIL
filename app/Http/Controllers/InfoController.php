<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function jadwal_dokter()
    {
        $title = "JADWAL PELAYANAN";
        $berita = $berita = Artikel::orderBy('id_artikel', 'desc')->paginate(3);
        return view('info.jadwal_pelayanan', compact('title', 'berita'));
    }

    public function tarif_pelayanan()
    {
        $title = "TARIF PELAYANAN";
        return view('info.tarif_pelayanan', compact('title'));
    }
}
