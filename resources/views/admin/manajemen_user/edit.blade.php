@extends('layouts.admin.main')

@section('container')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="/manajemen-user/update" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    @foreach($user as $u)
                    <input type="hidden" name="id" value="{{ $u->id }}">
                    <div class="form-group">
                        <label>Foto Admin</label>
                        <input type="file" name="foto_admin" id="gambarInput" class="form-control" style="border: none;">
                        <img id="gambarPreview" src="#" alt="Preview Gambar" style="display: none; max-width: 200px;">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="{{ $u->username }}">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" value="{{ $u->password }}">
                    </div>
                    <div class="form-group">
                        <label>Role ID</label>
                        <select name="role_id" class="form-control">
                            <option value="{{ $u->role_id }}" selected>Role ID</option>
                            <option value="1">Admin</option>
                            <option value="2">Admin Berita</option>
                            <option value="3">Admin Publikasi</option>
                        </select>
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection