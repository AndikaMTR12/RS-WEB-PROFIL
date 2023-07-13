@extends('layouts.admin.main')

@section('container')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="/jenis-publikasi/update" method="POST">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    @foreach($menu_publikasi as $m)
                    <input type="hidden" name="id_menu_publikasi" value="{{ $m->id_menu_publikasi }}">
                    <div class="form-group">
                        <label>Jenis Publikasi</label>
                        <input type="text" name="menu_publikasi" class="form-control" value="{{ $m->menu_publikasi }}">
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection