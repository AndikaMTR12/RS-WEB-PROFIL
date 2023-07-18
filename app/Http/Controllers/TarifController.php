<?php

namespace App\Http\Controllers;

use App\Models\Tarif;
use Illuminate\Http\Request;
use App\Models\AduanKonsultasi;

class TarifController extends Controller
{
    public function index()
    {
        $title = "Tarif Layanan";
        $tarif = Tarif::all();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.tarif.index', compact('title', 'tarif', 'status_aduan', 'status_konsultasi'));
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'jenis_tarif' => 'required',
        ]);
        if ($request->kd_tarif == "") {
            if ($request->biaya == "") {
                Tarif::create([
                    'jenis_tarif' => $request->jenis_tarif
                ]);
            } else {
                Tarif::create([
                    'jenis_tarif' => $request->jenis_tarif,
                    'biaya' => $request->biaya,
                ]);
            }
        } else {
            Tarif::create([
                'jenis_tarif' => $request->jenis_tarif,
                'kd_tarif' => $request->kd_tarif,
                'biaya' => $request->biaya,
            ]);
        }

        return redirect()->back();
    }

    public function hapus($id)
    {
        Tarif::where('id_tarif', $id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $title = "Edit Tarif Layanan";
        $tarif = Tarif::where('id_tarif', $id)->get();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();

        return view('admin.tarif.edit', compact('title', 'tarif', 'status_aduan', 'status_konsultasi'));
    }

    public function update(Request $request)
    {
        if ($request->kd_tarif == "") {
            Tarif::where('id_tarif', $request->id_tarif)->update([
                'jenis_tarif' => $request->jenis_tarif,
                'biaya' => $request->biaya,
            ]);
        } else {
            Tarif::where('id_tarif', $request->id_tarif)->update([
                'jenis_tarif' => $request->jenis_tarif,
                'kd_tarif' => $request->kd_tarif,
                'biaya' => $request->biaya,
            ]);
        }

        return redirect('/tarif-pelayanan-admin');
    }
}
