@extends('layouts.admin.main')

@section('container')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="/fasilitas/update" method="POST">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    @foreach($fasilitas as $f)
                    <input type="hidden" name="id_fasilitas_layanan" value="{{ $f->id_fasilitas_layanan }}">
                    <div class="form-group">
                        <label>Nama Fasilitas</label>
                        <input type="text" name="nama_fasilitas" class="form-control" value="{{ $f->nama_fasilitas }}">
                    </div>
                    <div class="form-group">
                        <label>Layanan</label>
                        <select name="id_layanan" class="form-control">
                            <option value="{{ $f->id_layanan }}" selected>{{ $f->layanan->nama_layanan }}</option>
                            @foreach($layanan as $l)
                            <option value="{{ $l->id_layanan }}">{{ $l->nama_layanan }}</option>
                            @endforeach
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