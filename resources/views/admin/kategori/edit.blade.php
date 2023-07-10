@extends('layouts.admin.main')

@section('container')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="/kategori/update" method="POST">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    @foreach($kategori as $k)
                    <input type="hidden" name="id_kategori" value="{{ $k->id_kategori }}">
                    <div class="form-group">
                        <label>Spesialis</label>
                        <input type="text" name="nama_kategori" class="form-control" value="{{ $k->nama_kategori }}">
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection