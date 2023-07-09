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
        // $dokter = Dokter::whereIn('id_dokter', [8, 9, 10, 1, 2, 3])->get();
        $dokterumum = Dokter::whereIn('id_dokter', [1, 2, 3])->get();
        $dokterspes = Dokter::whereIn('id_dokter', [8, 9, 10])->get();
        // dd($dokter);
        $spesialis = Spesialis::all();
        return view('beranda.index', compact('title', 'artikel', 'dokterumum', 'dokterspes', 'spesialis'));
    }

    public function aduan()
    {
        return redirect()->back()->with('message', 'Terima kasih telah mengirimkan pesan, untuk selanjutnya akan ditindaklanjuti oleh TIM Rumah Sakit');
    }
}
