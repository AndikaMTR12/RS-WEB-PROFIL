<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalLayanan;
use Illuminate\Support\Facades\File;

class JadwalController extends Controller
{
    public function index()
    {
        $title = "Jadwal Layanan";
        $jadwal = JadwalLayanan::all();
        return view('admin.jadwal_layanan.index', compact('title', 'jadwal'));
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'foto_dokter' => 'file|image|mimes:jpeg,png,jpg',
            'jadwal' => 'required',
            'layanan' => 'required',
        ]);

        if ($request->foto_dokter == "") {
            $nama_foto = "default.png";
        } else {
            $foto = $request->file('foto_dokter');

            $nama_foto = time() . "_" . $foto->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'assets/img/doctors';
            $foto->move($tujuan_upload, $nama_foto);
        }

        JadwalLayanan::create([
            'foto_dokter' => $nama_foto,
            'jadwal' => $request->jadwal,
            'layanan' => $request->layanan,
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {
        $foto = JadwalLayanan::where('id_jadwal_layanan', $id)->first();
        if ($foto->foto_dokter == "default.png") {
            JadwalLayanan::where('id_jadwal_layanan', $id)->delete();
        } else {
            JadwalLayanan::where('id_jadwal_layanan', $id)->delete();
            File::delete('assets/img/doctors/' . $foto->foto_dokter);
        }

        return redirect()->back();
    }

    public function edit($id)
    {
        $title = "Edit Jadwal Layanan";
        $jadwal = JadwalLayanan::where('id_jadwal_layanan', $id)->get();
        return view('admin.jadwal_layanan.edit', compact('title', 'jadwal'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id_jadwal_layanan' => 'required',
            'foto_dokter' => 'file|image|mimes:jpeg,png,jpg',
            'jadwal' => 'required',
            'layanan' => 'required',
        ]);

        if ($request->file('foto_dokter') == "") {
            JadwalLayanan::where('id_jadwal_layanan', $request->id_jadwal_layanan)->update([
                'jadwal' => $request->jadwal,
                'layanan' => $request->layanan,
            ]);
        } else {
            $foto = $request->file('foto_dokter');

            $nama_foto = $foto->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'assets/img/doctors';
            $foto->move($tujuan_upload, $nama_foto);

            JadwalLayanan::where('id_jadwal_layanan', $request->id_jadwal_layanan)->update([
                'foto_dokter' => $nama_foto,
                'jadwal' => $request->jadwal,
                'layanan' => $request->layanan,
            ]);
        }


        return redirect('/jadwal-layanan-admin');
    }
}
