<?php

namespace App\Http\Controllers;

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
        return view('tentang.dokter', compact('title'));
    }
}
