@extends('layouts.admin.main')

@section('container')
<div class="card">
    <div class="card-body">
        <!-- /.box -->
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">
                    Tambah User
                </button>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Foto Admin</th>
                            <th>Username</th>
                            <th>Role ID</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                        $no = 1;
                        ?>
                        @foreach($user as $u)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td><img src="{{ asset('assets/img/admin') }}/{{ $u->foto_admin }}" alt="berita" width="100px" height="130px"></td>
                            <td>{{ $u->username }}</td>
                            @if($u->role_id == 1)
                            <td>Admin</td>
                            @elseif($u->role_id == 2)
                            <td>Admin Berita</td>
                            @else
                            <td>Admin Publikasi</td>
                            @endif
                            <td>
                                <a href="/manajemen-user/{{ $u->id }}/hapus" class="btn text-white bg-red"><i class="icon-trash-can"></i></a>
                                <a href="/manajemen-user/{{ $u->id }}" class="btn text-white bg-green"><i class="icon-edit"></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Manajemen User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/manajemen-user/tambah" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label>Foto User</label>
                        <input type="file" name="foto_admin" id="gambarInput" class="form-control" style="border: none;">
                        <img id="gambarPreview" src="#" alt="Preview Gambar" style="display: none; max-width: 200px;">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Role ID</label>
                        <select name="role_id" class="form-control">
                            <option selected>Role ID</option>
                            <option value="1">Admin</option>
                            <option value="2">Admin Berita</option>
                            <option value="3">Admin Publikasi</option>
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