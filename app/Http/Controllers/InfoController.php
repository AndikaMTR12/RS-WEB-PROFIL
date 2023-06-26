<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function jadwal_dokter()
    {
        $title = "JADWAL DOKTER";
        return view('info.jadwal_dokter', compact('title'));
    }

    public function tarif_pelayanan()
    {
        $title = "TARIF PELAYANAN";
        return view('info.tarif_pelayanan', compact('title'));
    }
}
