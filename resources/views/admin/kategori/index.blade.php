@extends('layouts.admin.main')

@section('container')
<div class="card">
    <div class="card-body">
        <!-- /.box -->
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                    Tambah Kategori
                </button>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        $no = 1;
                        ?>
                        @foreach($kategori as $k)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $k->nama_kategori}}</td>
                            <td>
                                <a href="/kategori/{{ $k->id_kategori }}/hapus" class="btn text-white bg-red"><i class="icon-trash-can"></i></a>
                                <a href="/kategori/{{ $k->id_kategori }}" class="btn text-white bg-green"><i class="icon-edit"></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/kategori/tambah" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection