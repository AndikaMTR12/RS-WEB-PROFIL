@extends('layouts.admin.main')

@section('container')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="/dokter/update" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    @foreach($dokter as $d)
                    <input type="hidden" name="id_dokter" value="{{ $d->id_dokter }}">
                    <div class="form-group">
                        <label>Foto Dokter</label>
                        <input type="file" name="foto_dokter" class="form-control" style="border: none;">
                    </div>
                    <div class="form-group">
                        <label>Nama Dokter</label>
                        <input type="text" name="nama_dokter" class="form-control" value="{{ $d->nama_dokter }}">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" name="nip" class="form-control" value="{{ $d->nip }}">
                    </div>
                    <div class="form-group">
                        <label>Spesialis</label>
                        <select name="spesialis" class="form-control">
                            <option value="{{ $d->spesialis }}" selected>{{ $d->spes->spesialis }}"</option>
                            @foreach($spesialis as $s)
                            <option value="{{ $s->id_spesialis }}">{{ $s->spesialis }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection