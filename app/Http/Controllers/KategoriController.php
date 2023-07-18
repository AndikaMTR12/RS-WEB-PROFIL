<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\AduanKonsultasi;

class KategoriController extends Controller
{
    public function index()
    {
        $title = "KATEGORI";
        $kategori = Kategori::all();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view("admin.kategori.index", compact('title', 'kategori', 'status_aduan', 'status_konsultasi'));
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);
        Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {
        Kategori::where('id_kategori', $id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $title = "EDIT KATEGORI";
        $kategori = Kategori::where('id_kategori', $id)->get();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.kategori.edit', compact('title', 'kategori', 'status_aduan', 'status_konsultasi'));
    }

    public function update(Request $request)
    {
        Kategori::where('id_kategori', $request->id_kategori)->update([
            'nama_kategori' => $request->nama_kategori
        ]);
        return redirect('/kategori');
    }
}
