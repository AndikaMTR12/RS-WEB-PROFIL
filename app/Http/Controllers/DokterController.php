<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;
use App\Models\AduanKonsultasi;
use Illuminate\Support\Facades\File;

class DokterController extends Controller
{
    public function index()
    {
        $title = "DOKTER";
        $dokter = Dokter::all();
        $spesialis = Spesialis::all();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.dokter.index', compact('title', 'dokter', 'spesialis', 'status_aduan', 'status_konsultasi'));
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'foto_dokter' => 'file|image|mimes:jpeg,png,jpg',
            'nama_dokter' => 'required',
            'spesialis' => 'required',
        ]);

        if ($request->nama_foto !== "") {
            $foto = $request->file('foto_dokter');

            $nama_foto = time() . "_" . $foto->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'assets/img/doctors';
            $foto->move($tujuan_upload, $nama_foto);
        } else {
            $nama_foto = "default.png";
        }

        Dokter::create([
            'foto_dokter' => $nama_foto,
            'nama_dokter' => $request->nama_dokter,
            'nip' => $request->nip,
            'spesialis' => $request->spesialis,
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {
        $foto = Dokter::where('id_dokter', $id)->first();
        File::delete('assets/img/doctors/' . $foto->foto_dokter);
        Dokter::where('id_dokter', $id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $title = "Edit Dokter";
        $dokter = Dokter::where('id_dokter', $id)->get();
        $spesialis = Spesialis::all();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.dokter.edit', compact('title', 'dokter', 'spesialis', 'status_aduan', 'status_konsultasi'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id_dokter' => 'required',
            'foto_dokter' => 'file|image|mimes:jpeg,png,jpg',
            'nama_dokter' => 'required',
            'spesialis' => 'required',
        ]);

        if ($request->file('foto_dokter') == "") {
            Dokter::where('id_dokter', $request->id_dokter)->update([
                'spesialis' => $request->spesialis,
                'nama_dokter' => $request->nama_dokter,
                'nip' => $request->nip,
            ]);
        } else {
            $foto = $request->file('foto_dokter');

            $nama_foto = $foto->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'assets/img/doctors';
            $foto->move($tujuan_upload, $nama_foto);

            Dokter::where('id_dokter', $request->id_dokter)->update([
                'spesialis' => $request->spesialis,
                'foto_dokter' => $nama_foto,
                'nip' => $request->nip,
                'spesialis' => $request->spesialis,
            ]);
        }


        return redirect('/dokter-admin');
    }
}
