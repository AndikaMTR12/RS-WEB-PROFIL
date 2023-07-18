@extends('layouts.admin.main')

@section('container')
<div class="card">
    <div class="card-body">
        <!-- /.box -->
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                    Tambah Fasilitas
                </button>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama Fasilitas</th>
                            <th>Nama Layanan</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        $no = 1;
                        ?>
                        @foreach($fasilitas as $f)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $f->nama_fasilitas }}</td>
                            <td>{{ $f->layanan->nama_layanan }}</td>
                            <td>
                                <a href="/fasilitas/{{ $f->id_fasilitas_layanan }}/hapus" class="btn text-white bg-red"><i class="icon-trash-can"></i></a>
                                <a href="/fasilitas/{{ $f->id_fasilitas_layanan }}" class="btn text-white bg-green"><i class="icon-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Fasilitas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/fasilitas/tambah" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>Nama Fasilitas</label>
                        <input type="text" name="nama_fasilitas" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Layanan</label>
                        <select name="id_layanan" class="form-control" required>
                            <option value="">Layanan</option>
                            @foreach($layanan as $l)
                            <option value="{{ $l->id_layanan }}">{{ $l->nama_layanan }}</option>
                            @endforeach
                        </select>
                    </div>
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