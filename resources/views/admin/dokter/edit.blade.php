@extends('layouts.admin.main')

@section('container')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="/dokter-admin/update" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    @foreach($dokter as $d)
                    <input type="hidden" name="id_dokter" value="{{ $d->id_dokter }}">
                    <div class="form-group">
                        <label>Foto Dokter</label>
                        <input type="file" name="foto_dokter" id="gambarInput" class="form-control" style="border: none;">
                        <img id="gambarPreview" src="#" alt="Preview Gambar" style="display: none; max-width: 200px;">
                    </div>
                    <div class="form-group">
                        <label>Nama Dokter</label>
                        <input type="text" name="nama_dokter" class="form-control" value="{{ $d->nama_dokter }}">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" name="nip" class="form-control" value="{{ $d->nip }}">
                    </div>
                    @if($d->spesialis !== 0)
                    <div class="form-group">
                        <label>Spesialis</label>
                        <select name="spesialis" class="form-control">
                            <option value="{{ $d->spesialis }}" selected>{{ $d->spes->spesialis }}"</option>
                            @foreach($spesialis as $s)
                            <option value="{{ $s->id_spesialis }}">{{ $s->spesialis }}</option>
                            @endforeach
                        </select>
                    </div>
                    @else
                    <input type="hidden" name="spesialis" value="0">
                    @endif
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection