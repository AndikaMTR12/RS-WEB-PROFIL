<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    public function index()
    {
        $title = "BERITA";
        $berita = Artikel::all();
        $kategori = Kategori::all();
        return view('admin.berita.index', compact('title', 'berita', 'kategori'));
    }

    public function tambah(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'id_kategori' => 'required',
            'image' => 'required|file|image|mimes:jpeg,png,jpg',
            'judul' => 'required',
            'desk_artikel' => 'required',
        ]);

        $image = $request->file('image');

        $nama_image = $image->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'assets/img/berita';
        $image->move($tujuan_upload, $nama_image);

        Artikel::create([
            'id_kategori' => $request->id_kategori,
            'image' => $nama_image,
            'judul' => $request->judul,
            'desk_artikel' => $request->desk_artikel,
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {

        $image = Artikel::where('id_artikel', $id)->first();
        File::delete('assets/img/berita/' . $image->image);
        Artikel::where('id_artikel', $id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $title = "Edit Berita";
        $berita = Artikel::where('id_artikel', $id)->get();
        $kategori = Kategori::all();
        return view('admin.berita.edit', compact('title', 'berita', 'kategori'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required',
            'image' => 'file|image|mimes:jpeg,png,jpg',
            'judul' => 'required',
            'desk_artikel' => 'required',
        ]);

        if ($request->file('image') == "") {
            Artikel::where('id_artikel', $request->id_artikel)->update([
                'id_kategori' => $request->id_kategori,
                'judul' => $request->judul,
                'desk_artikel' => $request->desk_artikel,
            ]);
        } else {
            $image = $request->file('image');

            $nama_image = $image->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'assets/img/berita';
            $image->move($tujuan_upload, $nama_image);

            Artikel::where('id_artikel', $request->id_artikel)->update([
                'id_kategori' => $request->id_kategori,
                'image' => $nama_image,
                'judul' => $request->judul,
                'desk_artikel' => $request->desk_artikel,
            ]);
        }


        return redirect('/berita');
    }
}
