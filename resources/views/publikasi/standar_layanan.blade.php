@extends('layouts.main')

@section('container')
<section class="standar_layanan">
    <div style="height: 100px;"></div>
    <h3>STANDAR LAYANAN</h3>
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
            @foreach($publikasi as $p)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $p->nama_publikasi }}</td>
                <td><a href="/standar-pelayanan/{{ $p->nama_file }}/download" class="btn btn-success">Download</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection