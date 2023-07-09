@extends('layouts.main')

@section('container')
<div style="height: 100px;"></div>

<section>
    <div data-aos="fade-down">
    </div>
    <div class="row" data-aos="fade-right" data-aos-delay="300">
        <div class="col-lg-8 col-sm-12 mb-3">
            <h3>LAYANAN</h3>
            <hr>
            <div id="accordion">
                <h3>EMERGENCY</h3>
                <div>
                    <ul>
                        <li>Instalasi Gawat Darurat (IGD)</li>
                        <li>IGD Ponek</li>
                    </ul>
                </div>
                <h3>KESEHATAN RAWAT JALAN</h3>
                <div>
                    <ul>
                        <li>Poliklinik Penyakit Dalam</li>
                        <li>Poliklinik Bedah</li>
                        <li>Poliklinik Kebidanan dan Penyakit Kandungan</li>
                        <li>Poliklinik Anak</li>
                        <li>Poliklinik Gigi & Penyakit Mulut</li>
                        <li>Poliklinik Umum</li>
                    </ul>
                </div>
                <h3>KESEHATAN RAWAT INAP</h3>
                <div>
                    <ul>
                        <li>Ruangan Bedah</li>
                        <li>Ruangan Interna</li>
                        <li>Ruangan Kamar Bersalin</li>
                        <li>Ruangan Anak</li>
                        <li>Ruangan Isolasi</li>
                        <li>Ruangan Neonati/Bayi</li>
                    </ul>
                </div>
                <h3>UNIT PENUNJANG MEDIS</h3>
                <div>
                    <ul>
                        <li>Laboratorium</li>
                        <li>Instalasi Farmasi</li>
                        <li>Instalasi Radiologi</li>
                        <li>Rehabilitas Medik/Fisioterapi</li>
                    </ul>
                </div>
                <h3>UNIT PENUNJANG NON MEDIS</h3>
                <div>
                    <ul>
                        <li>Instalasi Gizi</li>
                        <li>Loundry</li>
                    </ul>
                </div>
                <h3>DOKTER SPESIALIS</h3>
                <div>
                    <ul>
                        @foreach($spesialis as $s)
                        <li>{{ $s->spesialis }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @include('partials.sidebar')
    </div>
</section>
@endsection