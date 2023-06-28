<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $title = "LAYANAN";
        $berita = Artikel::orderBy('id_artikel', 'desc')->paginate(3);
        return view('layanan.index', compact('title', 'berita'));
    }
}
