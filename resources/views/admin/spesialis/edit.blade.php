@extends('layouts.admin.main')

@section('container')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="/spesialis/update" method="POST">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    @foreach($spesialis as $s)
                    <input type="hidden" name="id_spesialis" value="{{ $s->id_spesialis }}">
                    <div class="form-group">
                        <label>Spesialis</label>
                        <input type="text" name="spesialis" class="form-control" value="{{ $s->spesialis }}">
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection