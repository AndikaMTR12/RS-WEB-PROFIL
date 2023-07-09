@extends('layouts.admin.main')

@section('container')
<div class="card">
    <div class="card-body">
        <!-- /.box -->
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                    Tambah Berita
                </button>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Kategori</th>
                            <th>Foto</th>
                            <th>Berita</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        $no = 1;
                        ?>
                        @foreach($berita as $b)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $b->kategori->nama_kategori }}</td>
                            <td><img src="assets/img/berita/{{ $b->image }}" alt="berita" width="100px" height="130px"></td>
                            <td style="width: 30px;">{{ substr($b->desk_artikel,0,500) }}...</td>
                            <td>
                                <a href="/berita/{{ $b->id_artikel }}/hapus" class="btn text-white bg-red"><i class="icon-trash-can"></i></a>
                                <a href="/berita/{{ $b->id_artikel }}" class="btn text-white bg-green"><i class="icon-edit"></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/berita/tambah" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="id_kategori" class="form-control">
                            <option selected>Kategori</option>
                            @foreach($kategori as $k)
                            <option value="{{ $k->id_kategori }}">{{ $k->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="image" class="form-control" style="border: none;">
                    </div>
                    <div class="form-group">
                        <label>Judul</label>
                        <textarea name="judul" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Berita</label>
                        <textarea name="desk_artikel" class="form-control"></textarea>
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