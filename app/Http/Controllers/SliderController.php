<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\AduanKonsultasi;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()
    {
        $title = "Slider";
        $slider = Slider::all();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.slider.index', compact('title', 'slider', 'status_aduan', 'status_konsultasi'));
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'nama_slider' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('nama_slider');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'assets/img/slide';
        $file->move($tujuan_upload, $nama_file);
        Slider::create([
            'nama_slider' => $nama_file,
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {

        $file = Slider::where('id_slider', $id)->first();
        File::delete('assets/img/slide/' . $file->nama_slider);
        Slider::where('id_slider', $id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $title = "Edit Slider";
        $slider = Slider::where('id_slider', $id)->get();
        $status_aduan = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Aduan')->count();
        $status_konsultasi = AduanKonsultasi::where('status', 1)->where('jenis_pesan', 'Konsultasi')->count();
        return view('admin.slider.edit', compact('title', 'slider', 'status_aduan', 'status_konsultasi'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_slider' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->file('nama_slider') == "") {
            return redirect('/slider');
        } else {
            $file = $request->file('nama_slider');

            $nama_file = time() . "_" . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'assets/img/slide';
            $file->move($tujuan_upload, $nama_file);

            Slider::where('id_slider', $request->id_slider)->update([
                'nama_slider' => $nama_file
            ]);
        }


        return redirect('/slider');
    }
}
