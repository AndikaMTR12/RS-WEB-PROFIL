<?php

namespace App\Http\Controllers;

use App\Models\Spesialis;
use Illuminate\Http\Request;
use App\Models\AduanKonsultasi;

class SpesialisController extends Controller
{
    public function index()
    {
        $title = "SPESIALIS";
        $spesialis = Spesialis::all();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.spesialis.index', compact('title', 'spesialis', 'status_aduan', 'status_konsultasi'));
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'spesialis' => 'required',
        ]);

        Spesialis::create([
            'spesialis' => $request->spesialis
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {
        Spesialis::where('id_spesialis', $id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $title = "Edit Spesialis";
        $spesialis = Spesialis::where('id_spesialis', $id)->get();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.spesialis.edit', compact('title', 'spesialis', 'status_aduan', 'status_konsultasi'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id_spesialis' => 'required',
            'spesialis' => 'required'
        ]);

        Spesialis::where('id_spesialis', $request->id_spesialis)->update([
            'spesialis' => $request->spesialis
        ]);
        return redirect('/spesialis');
    }
}
