<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Dokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $title = "BERANDA";
        $artikel = Artikel::limit(3)->orderBy('id_artikel', 'desc')->get();
        $dokter = Dokter::paginate(3);
        $spesialis = Spesialis::all();
        return view('beranda.index', compact('title', 'artikel', 'dokter', 'spesialis'));
    }
}
