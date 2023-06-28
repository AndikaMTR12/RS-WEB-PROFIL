<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $title = "ARTIKEL";
        $kategori = Kategori::all();
        $artikel = Artikel::orderBy('id_artikel', 'desc')->paginate(3);
        return view('artikel.index', compact('title', 'artikel', 'kategori'));
    }

    public function detail($id)
    {
        $title = "ARTIKEL";
        $kategori = Kategori::all();
        $artikel = Artikel::where('id_artikel', $id)->get();
        $berita = $berita = Artikel::orderBy('id_artikel', 'desc')->paginate(3);
        return view('artikel.detail', compact('title', 'artikel', 'kategori', 'berita'));
    }
}
