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