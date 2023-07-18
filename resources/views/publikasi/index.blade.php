@extends('layouts.main')

@section('container')
<section class="publikasi">
    <div style="height: 100px;"></div>
    <h3>{{ $title }}</h3>
    <table class="table">
        <thead class="table-light">
            <th>No</th>
            <th>Nama Publikasi</th>
            <th>#</th>
        </thead>
        <tbody>
            <?php
            $no = 1;
            ?>
            @foreach($publikasis as $p)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $p->nama_publikasi }}</td>
                <td><a href="/laporan-pengaduan/{{ $p->nama_file }}/download" class="btn btn-success">Download</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection