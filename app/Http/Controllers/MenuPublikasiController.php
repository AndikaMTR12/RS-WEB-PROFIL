<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuPublikasi;

class MenuPublikasiController extends Controller
{
    public function index()
    {
        $title = "JENIS PUBLIKASI";
        $menu_publikasi = MenuPublikasi::all();
        return view('admin.menu_publikasi.index', compact('title', 'menu_publikasi'));
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
        return view('admin.menu_publikasi.edit', compact('title', 'menu_publikasi'));
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
