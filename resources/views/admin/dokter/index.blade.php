@extends('layouts.admin.main')

@section('container')
<div class="card">
    <div class="card-body">
        <!-- /.box -->
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                    Tambah Dokter
                </button>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Foto Dokter</th>
                            <th>Nama Dokter</th>
                            <th>Nip</th>
                            <th>Spesialis</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        $no = 1;
                        ?>
                        @foreach($dokter as $d)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img src="{{ asset('assets/img/doctors') }}/{{ $d->foto_dokter }}" alt="berita" width="100px" height="130px"></td>
                            <td>{{ $d->nama_dokter }}</td>
                            <td>{{ $d->nip }}</td>
                            @if($d->spesialis == 0)
                            <td>Dokter Umum</td>
                            @else
                            <td>{{ $d->spes->spesialis }}</td>
                            @endif
                            <td>
                                <a href="/dokter/{{ $d->id_dokter }}/hapus" class="btn text-white bg-red"><i class="icon-trash-can"></i></a>
                                <a href="/dokter/{{ $d->id_dokter }}" class="btn text-white bg-green"><i class="icon-edit"></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Dokter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/dokter/tambah" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>Foto Dokter</label>
                        <input type="file" name="foto_dokter" class="form-control" style="border: none;">
                    </div>
                    <div class="form-group">
                        <label>Nama Dokter</label>
                        <input type="text" name="nama_dokter" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="text" name="nip" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Spesialis</label>
                        <select name="spesialis" class="form-control">
                            <option selected>Spesialis</option>
                            @foreach($spesialis as $s)
                            <option value="{{ $s->id_spesialis }}">{{ $s->spesialis }}</option>
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