<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Dokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $title = "BERANDA";
        $artikel = Artikel::limit(3)->orderBy('id_artikel', 'desc')->get();
        $dokter = Dokter::whereIn('nama_dokter', ['dr. Dewi Sarli Tombili, Sp. Pd', 'dr. Muhammad Run Marewa', 'dr. Wangga Pramono Lasandara'])->orderBy('nama_dokter', 'asc')->get();
        // dd($dokter);
        $spesialis = Spesialis::all();
        return view('beranda.index', compact('title', 'artikel', 'dokter', 'spesialis'));
    }
}
