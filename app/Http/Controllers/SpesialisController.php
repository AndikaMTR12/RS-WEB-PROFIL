<?php

namespace App\Http\Controllers;

use App\Models\Spesialis;
use Illuminate\Http\Request;

class SpesialisController extends Controller
{
    public function index()
    {
        $title = "SPESIALIS";
        $spesialis = Spesialis::all();
        return view('admin.spesialis.index', compact('title', 'spesialis'));
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
        return view('admin.spesialis.edit', compact('title', 'spesialis'));
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
