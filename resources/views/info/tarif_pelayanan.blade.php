@extends('layouts.main')

@section('container')
<div style="height: 100px;"></div>
<section>
    <div data-aos="fade-down">
        <h3>TARIF PELAYANAN</h3>
    </div>
    <h5 class="text-center mt-4 mb-4">TINDAKAN UMUM</h5>
    <table class="table table-borderless">
        <thead>
            <th>No</th>
            <th>Jenis Tindakan</th>
            <th>Biaya</th>
        </thead>
        <tbody>
            <?php
            $no = 1;
            ?>
            @foreach($tarif as $t)
            <tr>
                @if($t->kd_tarif == "")
                <td>{{ $no++ }}</td>
                <td>{{ $t->jenis_tarif }}</td>
                @if($t->biaya == "")
                <td></td>
                @else
                <td>Rp. {{ number_format($t->biaya,2,',','.') }}</td>
                @endif
                @endif
            <tr>
                <td></td>
                <td>
                    @if($t->kd_tarif == "")
                    @else
                    <ul>
                        <li>{{ $t->kd_tarif }}</li>
                    </ul>
                    @endif
                </td>
                @if($t->kd_tarif)
                <td>Rp. {{ number_format($t->biaya,2,',','.') }}</td>
                @endif
            </tr>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection