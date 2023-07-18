<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use Illuminate\Http\Request;
use App\Models\MenuPublikasi;
use App\Models\AduanKonsultasi;
use Illuminate\Support\Facades\File;

class PublikasiController extends Controller
{
    public function index()
    {
        $title = "PUBLIKASI";
        $publikasi = Publikasi::all();
        $menu_publikasi = MenuPublikasi::all();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.publikasi.index', compact('title', 'publikasi', 'menu_publikasi', 'status_aduan', 'status_konsultasi'));
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
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.publikasi.edit', compact('title', 'publikasi', 'menu_publikasi', 'status_aduan', 'status_konsultasi'));
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

            Publikasi::where('id_publikasi', $request->id_publikasi)->update([
                'id_menu_publikasi' => $request->menu_publikasi,
                'nama_publikasi' => $request->nama_publikasi,
                'nama_file' => $nama_file
            ]);
        }


        return redirect('/publikasi');
    }

    public function publikasi_beranda($id)
    {
        $title = $id;
        $menu = MenuPublikasi::where('menu_publikasi', $id)->pluck('id_menu_publikasi');
        $publikasi = MenuPublikasi::all();
        $publikasis = Publikasi::where('id_menu_publikasi', $menu)->get();
        return view('publikasi.index', compact('title', 'publikasis', 'publikasi'));
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
