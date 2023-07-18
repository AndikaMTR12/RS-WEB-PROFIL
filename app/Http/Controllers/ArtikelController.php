<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\MenuPublikasi;

class ArtikelController extends Controller
{
    public function index()
    {
        $title = "ARTIKEL";
        $kategori = Kategori::all();
        $artikel = Artikel::orderBy('id_artikel', 'desc')->paginate(3);
        $publikasi = MenuPublikasi::all();
        return view('artikel.index', compact('title', 'artikel', 'kategori', 'publikasi'));
    }

    public function detail($id)
    {
        $title = "ARTIKEL";
        $kategori = Kategori::all();
        $artikel = Artikel::where('id_artikel', $id)->get();
        $berita = $berita = Artikel::orderBy('id_artikel', 'desc')->paginate(3);
        $publikasi = MenuPublikasi::all();
        return view('artikel.detail', compact('title', 'artikel', 'kategori', 'berita', 'publikasi'));
    }
}
