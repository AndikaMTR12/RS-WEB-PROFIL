<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use App\Models\MenuPublikasi;

class TentangController extends Controller
{
    public function profil()
    {
        $title = "PROFIL";
        $publikasi = MenuPublikasi::all();
        return view('tentang.profil', compact('title', 'publikasi'));
    }

    public function dokter()
    {
        $title = "DOKTER";
        $dokter = Dokter::all();
        $publikasi = MenuPublikasi::all();
        return view('tentang.dokter', compact('title', 'dokter', 'publikasi'));
    }

    public function maklumat()
    {
        $title = "MAKLUMAT PELAYANAN";
        $publikasi = MenuPublikasi::all();
        return view('tentang.maklumat', compact('title', 'publikasi'));
    }
}
