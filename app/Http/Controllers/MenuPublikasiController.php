<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuPublikasi;
use App\Models\AduanKonsultasi;

class MenuPublikasiController extends Controller
{
    public function index()
    {
        $title = "JENIS PUBLIKASI";
        $menu_publikasi = MenuPublikasi::all();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.menu_publikasi.index', compact('title', 'menu_publikasi', 'status_aduan', 'status_konsultasi'));
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'menu_publikasi' => 'required'
        ]);

        MenuPublikasi::create([
            'menu_publikasi' => $request->menu_publikasi
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {
        MenuPublikasi::where('id_menu_publikasi', $id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $title = "Edit Menu Publikasi";
        $menu_publikasi = MenuPublikasi::where('id_menu_publikasi', $id)->get();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.menu_publikasi.edit', compact('title', 'menu_publikasi', 'status_aduan', 'status_konsultasi'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'menu_publikasi' => 'required',
        ]);

        MenuPublikasi::where('id_menu_publikasi', $request->id_menu_publikasi)->update([
            'menu_publikasi' => $request->menu_publikasi,
        ]);


        return redirect('/jenis-publikasi');
    }
}
