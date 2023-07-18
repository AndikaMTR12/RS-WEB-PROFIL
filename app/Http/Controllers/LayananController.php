<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Layanan;
use App\Models\Fasilitas;
use App\Models\Spesialis;
use Illuminate\Http\Request;
use App\Models\MenuPublikasi;
use App\Models\AduanKonsultasi;

class LayananController extends Controller
{
    public function index()
    {
        $title = "Layanan";
        $layanan = Layanan::all();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.layanan.index', compact('title', 'layanan', 'status_aduan', 'status_konsultasi'));
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required'
        ]);

        Layanan::create([
            'nama_layanan' => $request->nama_layanan,
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {
        Layanan::where('id_layanan', $id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $title = "Edit Layanan";
        $layanan = Layanan::where('id_layanan', $id)->get();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.layanan.edit', compact('title', 'layanan', 'status_aduan', 'status_konsultasi'));
    }

    public function update(Request $request)
    {
        Layanan::where('id_layanan', $request->id_layanan)->update([
            'nama_layanan' => $request->nama_layanan,
        ]);

        return redirect('/layanan-admin');
    }

    public function layanan()
    {
        $title = "LAYANAN";
        $berita = Artikel::orderBy('id_artikel', 'desc')->paginate(3);
        $spesialis = Spesialis::all();
        $fasilitas = Fasilitas::all();
        $layanan = Layanan::all();
        $publikasi = MenuPublikasi::all();
        return view('layanan.index', compact('title', 'berita', 'spesialis', 'fasilitas', 'layanan', 'publikasi'));
    }
}
