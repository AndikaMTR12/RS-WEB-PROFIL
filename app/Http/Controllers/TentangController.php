<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function profil()
    {
        $title = "PROFIL";
        return view('tentang.profil', compact('title'));
    }

    public function dokter()
    {
        $title = "DOKTER";
        $dokter = Dokter::all();
        return view('tentang.dokter', compact('title', 'dokter'));
    }
}
