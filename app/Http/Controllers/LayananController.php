<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $title = "LAYANAN";
        return view('layanan.index', compact('title'));
    }
}
