@extends('layouts.admin.main')

@section('container')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="/layanan-admin/update" method="POST">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    @foreach($layanan as $l)
                    <input type="hidden" name="id_layanan" value="{{ $l->id_layanan }}">
                    <div class="form-group">
                        <label>Nama Layanan</label>
                        <input type="text" name="nama_layanan" class="form-control" value="{{ $l->nama_layanan }}">
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection