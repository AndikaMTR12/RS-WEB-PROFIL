<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function index()
    {
        $title = "KONSULTASI";
        return view('konsultasi.index', compact('title'));
    }
}
