@extends('layouts.admin.main')

@section('container')
<div class="card">
    <div class="card-body">
        <!-- /.box -->
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                    Tambah Tarif Layanan
                </button>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Jenis Tindakan</th>
                            <th>Sub Tindakan</th>
                            <th>Biaya</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        $no = 1;
                        ?>
                        @foreach($tarif as $t)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $t->jenis_tarif}}</td>
                            <td>{{ $t->kd_tarif}}</td>
                            @if($t->biaya == "")
                            <td></td>
                            @else
                            <td>Rp. {{ number_format($t->biaya,2,',','.') }}</td>
                            @endif
                            <td>
                                <a href="/tarif-pelayanan-admin/{{ $t->id_tarif }}/hapus" class="btn text-white bg-red"><i class="icon-trash-can"></i></a>
                                <a href="/tarif-pelayanan-admin/{{ $t->id_tarif }}" class="btn text-white bg-green"><i class="icon-edit"></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Tarif Pelayanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/tarif-pelayanan-admin/tambah" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>Jenis Tindakan</label>
                        <input type="text" name="jenis_tarif" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Sub Tindakan</label>
                        <input type="text" name="kd_tarif" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Biaya</label>
                        <input type="text" name="biaya" class="form-control">
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