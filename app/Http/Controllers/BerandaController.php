<?php

namespace App\Http\Controllers;

use App\Models\AduanKonsultasi;
use App\Models\Artikel;
use App\Models\Dokter;
use App\Models\Slider;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $title = "BERANDA";
        $artikel = Artikel::limit(3)->orderBy('id_artikel', 'desc')->get();
        $dokterumum = Dokter::whereIn('id_dokter', [1, 2, 3])->get();
        $dokterspes = Dokter::whereIn('id_dokter', [8, 9, 10])->get();
        $spesialis = Spesialis::all();
        $slider = Slider::all();
        return view('beranda.index', compact('title', 'artikel', 'dokterumum', 'dokterspes', 'spesialis', 'slider'));
    }

    public function aduan(Request $request)
    {
        AduanKonsultasi::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'jenis_pesan' => $request->jenis_pesan,
            'pesan' => $request->pesan
        ]);

        return redirect()->back()->with('message', 'Terima kasih telah mengirimkan pesan, untuk selanjutnya akan ditindaklanjuti oleh TIM Rumah Sakit');
    }
}
