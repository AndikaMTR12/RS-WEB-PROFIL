@extends('layouts.admin.main')

@section('container')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="/berita/update" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @foreach($berita as $b)
                <input type="hidden" name="id_artikel" value="{{ $b->id_artikel }}">
                <div class="form-group mb-2">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-control">
                        <option selected value="{{ $b->id_kategori }}"> {{ $b->kategori->nama_kategori  }}</option>
                        @foreach($kategori as $k)
                        <option value="{{ $k->id_kategori }}">{{ $k->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label>Foto</label>
                    <input type="file" name="image" class="form-control" style="border: none;">
                </div>
                <div class="form-group mb-2">
                    <label>Judul</label>
                    <textarea name="judul" class="form-control">{{ $b->judul }}</textarea>
                </div>
                <div class="form-group mb-2">
                    <label>Berita</label>
                    <textarea name="desk_artikel" rows="50" class="form-control">{{ $b->desk_artikel }}</textarea>
                </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection