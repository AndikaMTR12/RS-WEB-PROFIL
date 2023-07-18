@extends('layouts.admin.main')

@section('container')
<div class="card">
    <div class="card-body">
        <!-- /.box -->
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                    Tambah Jadwal Layanan
                </button>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Foto Dokter</th>
                            <th>Jadwal</th>
                            <th>Layanan</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        $no = 1;
                        ?>
                        @foreach($jadwal as $j)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img src="{{ asset('assets/img/doctors') }}/{{ $j->foto_dokter }}" alt="dokter" width="100px" height="130px"></td>
                            <td>{{ $j->jadwal }}</td>
                            <td>{{ $j->layanan }}</td>
                            <td>
                                <a href="/jadwal-layanan-admin/{{ $j->id_jadwal_layanan }}/hapus" class="btn text-white bg-red"><i class="icon-trash-can"></i></a>
                                <a href="/jadwal-layanan-admin/{{ $j->id_jadwal_layanan }}" class="btn text-white bg-green"><i class="icon-edit"></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Layanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/jadwal-layanan-admin/tambah" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>Foto Dokter</label>
                        <input type="file" name="foto_dokter" id="gambarInput" class="form-control" style="border: none;">
                        <img id="gambarPreview" src="#" alt="Preview Gambar" style="display: none; max-width: 200px;">
                        @error('foto_dokter')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Jadwal</label>
                        <input type="text" name="jadwal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Layanan</label>
                        <input type="text" name="layanan" class="form-control" required>
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