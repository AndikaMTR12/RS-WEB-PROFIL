<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {
        $title = "Manajemen User";
        $user = User::all();

        return view('admin.manajemen_user.index', compact('title', 'user'));
    }

    public function tambah(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'foto_admin' => 'file|image|mimes:jpeg,png,jpg',
            'password' => 'required|min:3|max:5',
            'role_id' => 'required',
        ]);
        if ($request->foto_admin == "") {
            $nama_foto = "default.png";
        } else {
            $foto = $request->file('foto_admin');

            $nama_foto = time() . "_" . $foto->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'assets/img/admin';
            $foto->move($tujuan_upload, $nama_foto);
        }

        $password = bcrypt($request->password);
        User::create([
            'username' => $request->username,
            'foto_admin' => $nama_foto,
            'password' => $password,
            'role_id' => $request->role_id,
        ]);

        return redirect()->back();
    }

    public function hapus($id)
    {
        $foto = User::where('id', $id)->first();
        File::delete('assets/img/admin/' . $foto->foto_admin);
        User::where('id', $id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $title = "Edit Manajemen User";
        $user = User::where('id', $id)->get();

        return view('admin.manajemen_user.edit', compact('title', 'user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'foto_admin' => 'file|image|mimes:jpeg,png,jpg',
            'role_id' => 'required',
        ]);
        if ($request->foto_admin == "") {
            User::where('id', $request->id)->update([
                'username' => $request->username,
                'role_id' => $request->role_id,
            ]);
        } else {
            $password = bcrypt($request->password);
            $foto = $request->file('foto_admin');

            $nama_foto = time() . "_" . $foto->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'assets/img/admin';
            $foto->move($tujuan_upload, $nama_foto);
            User::where('id', $request->id)->update([
                'username' => $request->username,
                'foto_admin' => $nama_foto,
                'password' => $password,
                'role_id' => $request->role_id,
            ]);
        }


        return redirect('/manajemen-user');
    }
}
