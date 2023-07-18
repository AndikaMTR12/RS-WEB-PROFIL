<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Slider;
use App\Models\Artikel;
use App\Models\Layanan;
use App\Models\Fasilitas;
use App\Models\Spesialis;
use Illuminate\Http\Request;
use App\Models\MenuPublikasi;
use App\Models\AduanKonsultasi;

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
        $layanan = Layanan::all();
        $fasilitas = Fasilitas::all();
        $publikasi = MenuPublikasi::all();

        return view('beranda.index', compact('title', 'artikel', 'dokterumum', 'dokterspes', 'spesialis', 'slider', 'layanan', 'fasilitas', 'publikasi'));
    }

    public function aduan(Request $request)
    {
        // Mengambil nilai CAPTCHA dari input form
        $captcha = $request->input('captcha');
        if (captcha_check($captcha)) {
            AduanKonsultasi::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'jenis_pesan' => $request->jenis_pesan,
                'pesan' => $request->pesan,
                'status' => $request->status,
            ]);
            return redirect()->back()->with('message', 'Terima kasih telah mengirimkan pesan, untuk selanjutnya akan ditindaklanjuti oleh TIM Rumah Sakit');
        } else {
            return redirect()->back()->with('error', 'Captcha Salah!');
        }
    }
}
