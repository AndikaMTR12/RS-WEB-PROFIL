@extends('layouts.admin.main')

@section('container')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="/jadwal-layanan-admin/update" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    @foreach($jadwal as $j)
                    <input type="hidden" name="id_jadwal_layanan" value="{{ $j->id_jadwal_layanan }}">
                    <div class="form-group">
                        <label>Foto Dokter</label>
                        <input type="file" name="foto_dokter" id="gambarInput" class="form-control" style="border: none;">
                        <img id="gambarPreview" src="#" alt="Preview Gambar" style="display: none; max-width: 200px;">
                    </div>
                    <div class="form-group">
                        <label>Jadwal</label>
                        <input type="text" name="jadwal" class="form-control" value="{{ $j->jadwal }}">
                    </div>
                    <div class="form-group">
                        <label>Layanan</label>
                        <input type="text" name="layanan" class="form-control" value="{{ $j->layanan }}">
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection