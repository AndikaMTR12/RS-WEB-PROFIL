<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $title = "KATEGORI";
        return view("kategori.index", compact('title'));
    }

    public function tambah(Request $request)
    {
        Kategori::create([
            'nama_kategori' => $request->nama_kategori,
        ]);
    }

    public function edit(Request $request)
    {
        return view('kategori.edit');
    }

    public function update(Request $request)
    {
        return redirect('kategori');
    }

    public function hapus($id)
    {
        Kategori::where('id_kategori', $id)->delete();
        return redirect('kategori');
    }
}
