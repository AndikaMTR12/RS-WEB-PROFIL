<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuPublikasi;
use App\Models\AduanKonsultasi;

class KonsultasiController extends Controller
{
    public function index()
    {
        $title = "Konsultasi";
        $aduan = AduanKonsultasi::where('jenis_pesan', 'Konsultasi')->get();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.konsultasi.index', compact('title', 'aduan', 'status_aduan', 'status_konsultasi'));
    }

    public function update_status($id)
    {
        AduanKonsultasi::where('id_aduan_konsultasi', $id)->update([
            'status' => 2
        ]);

        return redirect()->back();
    }

    public function konsultasi()
    {
        $title = "KONSULTASI";
        $publikasi = MenuPublikasi::all();
        return view('konsultasi.index', compact('title', 'publikasi'));
    }
}
