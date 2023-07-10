@extends('layouts.admin.main')

@section('container')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <form action="/publikasi/update" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="modal-body">
                    @foreach($publikasi as $p)
                    <input type="hidden" name="id_publikasi" value="{{ $p->id_publikasi }}">
                    <div class="form-group">
                        <label>Jenis Publiaksi</label>
                        <select name="menu_publikasi" class="form-control">
                            <option value="{{ $p->id_publikasi }}" selected>{{ $p->menu_publikasi->menu_publikasi }}</option>
                            @foreach($menu_publikasi as $m)
                            <option value="{{ $m->id_menu_publikasi }}">{{ $m->menu_publikasi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Publikasi</label>
                        <input type="text" name="nama_publikasi" class="form-control" value="{{ $p->nama_publikasi }}">
                    </div>
                    <div class="form-group">
                        <label>File</label>
                        <input type="file" name="nama_file" class="form-control" style="border: none;" accept=".doc,.docx,.pdf,.xls,.xlsx">
                    </div>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection