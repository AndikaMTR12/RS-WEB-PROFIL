<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Fasilitas;
use App\Models\Layanan;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $title = "Layanan";
        $layanan = Layanan::all();
        return view('admin.layanan.index', compact('title', 'layanan'));
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
        return view('admin.layanan.edit', compact('title', 'layanan', 'fasilitas'));
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

        return view('layanan.index', compact('title', 'berita', 'spesialis', 'fasilitas', 'layanan'));
    }
}
