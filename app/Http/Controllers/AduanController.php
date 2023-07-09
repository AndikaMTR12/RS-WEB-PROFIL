<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AduanController extends Controller
{
    public function index()
    {
        $title = "ADUAN";
        return view('aduan.index', compact('title'));
    }
}
