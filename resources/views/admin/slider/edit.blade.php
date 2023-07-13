@extends('layouts.admin.main')

@section('container')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="/slider/update" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    @foreach($slider as $s)
                    <input type="hidden" name="id_slider" value="{{ $s->id_slider }}">
                    <div class="form-group">
                        <label>Slider</label>
                        <input type="file" name="slider" id="gambarInput" class="form-control" style="border: none;">
                        <img id="gambarPreview" src="#" alt="Preview Gambar" style="display: none; max-width: 200px;">
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection