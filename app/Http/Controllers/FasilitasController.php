<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Layanan;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $title = "Fasilitas";
        $fasilitas = Fasilitas::all();
        $layanan = Layanan::all();
        return view('admin.fasilitas.index', compact('title', 'fasilitas', 'layanan'));
    }

    public  function tambah(Request $request)
    {
        $request->validate([
            'nama_fasilitas' => 'required',
            'id_layanan' => 'required'
        ]);

        Fasilitas::create([
            'nama_fasilitas' => $request->nama_fasilitas,
            'id_layanan' => $request->id_layanan,
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {
        Fasilitas::where('id_fasilitas_layanan', $id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $title = "Edit Fasilitas";
        $fasilitas = Fasilitas::where('id_fasilitas_layanan', $id)->get();
        $layanan = Layanan::all();

        return view('admin.fasilitas.edit', compact('title', 'fasilitas', 'layanan'));
    }

    public function update(Request $request)
    {
        Fasilitas::where('id_fasilitas_layanan', $request->id_fasilitas_layanan)->update([
            'nama_fasilitas' => $request->nama_fasilitas,
            'id_layanan' => $request->id_layanan
        ]);

        return redirect('/fasilitas');
    }
}
