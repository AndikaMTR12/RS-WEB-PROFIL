<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $title = "KATEGORI";
        $kategori = Kategori::all();
        return view("admin.kategori.index", compact('title', 'kategori'));
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
        return view('admin.kategori.edit', compact('title', 'kategori'));
    }

    public function update(Request $request)
    {
        Kategori::where('id_kategori', $request->id_kategori)->update([
            'nama_kategori' => $request->nama_kategori
        ]);
        return redirect('/kategori');
    }
}
