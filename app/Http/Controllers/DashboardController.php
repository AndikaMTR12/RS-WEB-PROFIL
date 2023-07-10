<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "DASHBOARD";
        $berita = Artikel::count();
        return view('admin.dashboard.index', compact('title', 'berita'));
    }
}
