<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $title = "LAYANAN";
        $berita = Artikel::orderBy('id_artikel', 'desc')->paginate(3);
        $spesialis = Spesialis::all();
        return view('layanan.index', compact('title', 'berita', 'spesialis'));
    }
}
