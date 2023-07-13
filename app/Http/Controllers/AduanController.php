<?php

namespace App\Http\Controllers;

use App\Models\AduanKonsultasi;
use Illuminate\Http\Request;

class AduanController extends Controller
{
    public function index()
    {
        $title = "Aduan";
        $aduan = AduanKonsultasi::where('jenis_pesan', 'Aduan')->get();
        return view('admin.aduan.index', compact('title', 'aduan'));
    }

    public function aduan()
    {
        $title = "ADUAN";
        return view('aduan.index', compact('title'));
    }
}
