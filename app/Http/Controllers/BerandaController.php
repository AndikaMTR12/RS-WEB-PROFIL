<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $title = "BERANDA";
        $artikel = Artikel::limit(3)->orderBy('id_artikel', 'desc')->get();
        return view('beranda.index', compact('title', 'artikel'));
    }
}
