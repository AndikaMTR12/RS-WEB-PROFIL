@extends('layouts.admin.main')

@section('container')
<div class="card">
    <div class="card-body">
        <!-- /.box -->
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan</th>
                            <th>Status</th>
                        </tr>
                        <?php
                        $no = 1;
                        ?>
                        @foreach($aduan as $a)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $a->nama}}</td>
                            <td>{{ $a->email}}</td>
                            <td>{{ $a->pesan}}</td>
                            @if($a->status == 1)
                            <td><a href="/aduan-admin/{{ $a->id_aduan_konsultasi }}" class="btn btn-danger">Tindak Lanjuti</a></td>
                            @else
                            <td><button class="btn btn-success">Selesai</button></td>
                            @endif
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
@endsection