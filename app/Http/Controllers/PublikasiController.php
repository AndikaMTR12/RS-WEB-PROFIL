<?php

namespace App\Http\Controllers;

use App\Models\MenuPublikasi;
use App\Models\Publikasi;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    public function index()
    {
        $title = "PUBLIKASI";
        $publikasi = Publikasi::all();
        $menu_publikasi = MenuPublikasi::all();
        return view('admin.publikasi.index', compact('title', 'publikasi', 'menu_publikasi'));
    }

    public function tambah(Request $request)
    {
        $validate = $request->validate([
            'menu_publikasi' => 'required',
            'nama_publikasi' => 'required',
            'nama_file' => 'required',
        ]);

        $file = $request->file('nama_file');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage/publikasi';
        $file->move($tujuan_upload, $nama_file);

        Publikasi::create([
            'id_menu_publikasi' => $request->menu_publikasi,
            'nama_publikasi' => $request->nama_publikasi,
            'nama_file' => $nama_file,
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {

        $file = Publikasi::where('id_publikasi', $id)->first();
        File::delete('storage/publikasi/' . $file->nama_file);
        Publikasi::where('id_publikasi', $id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $title = "Edit Publikasi";
        $publikasi = Publikasi::where('id_publikasi', $id)->get();
        $menu_publikasi = MenuPublikasi::all();
        return view('admin.publikasi.edit', compact('title', 'publikasi', 'menu_publikasi'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id_publikasi' => 'required',
            'menu_publikasi' => 'required',
            'nama_file' => 'file|mimes:doc,docx,pdf,xls',
            'nama_publikasi' => 'required'
        ]);

        if ($request->file('nama_file') == "") {
            Publikasi::where('id_publikasi', $request->id_publikasi)->update([
                'id_menu_publikasi' => $request->menu_publikasi,
                'nama_publikasi' => $request->nama_publikasi
            ]);
        } else {
            $file = $request->file('nama_file');

            $nama_file = $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'storage/publikasi';
            $file->move($tujuan_upload, $nama_file);

            Publikasi::where('id_artikel', $request->id_artikel)->update([
                'id_menu_publikasi' => $request->menu_publikasi,
                'nama_publikasi' => $request->nama_publikasi,
                'nama_file' => $nama_file
            ]);
        }


        return redirect('/publikasi');
    }

    public function laporan_pengaduan()
    {
        $title = "LAPORAN PENGADUAN";
        $publikasi = Publikasi::where('id_menu_publikasi', 1)->get();
        return view('publikasi.laporan_pengaduan', compact('title', 'publikasi'));
    }

    public function standar_layanan()
    {
        $title = "STANDAR LAYANAN";
        $publikasi = Publikasi::where('id_menu_publikasi', 2)->get();
        return view('publikasi.standar_layanan', compact('title', 'publikasi'));
    }

    public function skm()
    {
        $title = "SKM";
        $publikasi = Publikasi::where('id_menu_publikasi', 3)->get();
        return view('publikasi.skm', compact('title', 'publikasi'));
    }

    public function indikatormutu()
    {
        $title = "INDIKATOR MUTU NASIONAL";
        $publikasi = Publikasi::where('id_menu_publikasi', 4)->get();
        return view('publikasi.indikatormutu', compact('title', 'publikasi'));
    }

    public function download($file_name)
    {
        $filePath = storage_path('app/public/publikasi/' . $file_name);
        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            abort(404, 'File not found.');
        }
    }
}
