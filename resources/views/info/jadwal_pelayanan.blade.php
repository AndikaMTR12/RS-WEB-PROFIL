@extends('layouts.main')

@section('container')
<div style="height: 100px;"></div>
<section class="jadwal-pelayanan">
    <div class="row" data-aos="fade-right" data-aos-delay="300">
        <div class="col-lg-8 col-sm-12">
            <h3>JADWAL PELAYANAN</h3>
            <hr>
            <div id="accordion">
                <h3>IGD dan IGD Ponek</h3>
                <div>
                    <img src="{{ asset('assets/img/doctors/default.png') }}" alt="" style="float: right;" width="200px" height="200px">
                    <p><strong> 24 Jam</strong></p>
                </div>
                <h3>Poliklinik Umum</h3>
                <div>
                    <img src="{{ asset('assets/img/doctors/default.png') }}" alt="" style="float: right;" width="200px" height="200px">
                    <p><strong>Senin - Jumat (Pukul 08.30 - 14.00)</strong></p>
                </div>
                <h3>Poliklinik Penyakit Dalam</h3>
                <div>
                    <img src="{{ asset('assets/img/doctors/dokter dewi.png') }}" alt="" style="float: right;" width="200px" height="200px">
                    <p><strong>Senin - Jumat (Pukul 08.30 - 14.00)</strong></p>
                </div>
                <h3>Poliklinik Kebidanan dan Penyakit Kandungan</h3>
                <div>
                    <img src="{{ asset('assets/img/doctors/default.png') }}" alt="" style="float: right;" width="200px" height="200px">
                    <p><strong>Senin - Jumat (Pukul 08.30 - 14.00)</strong></p>
                </div>
                <h3>Poliklinik Anak</h3>
                <div>
                    <img src="{{ asset('assets/img/doctors/default.png') }}" alt="" style="float: right;" width="200px" height="200px">
                    <p><strong>Senin - Jumat (Pukul 08.30 - 14.00)</strong></p>
                </div>
                <h3>Poliklinik Gigi & Penyakit Mulut</h3>
                <div>
                    <img src="{{ asset('assets/img/doctors/default.png') }}" alt="" style="float: right;" width="200px" height="200px">
                    <p><strong>Senin - Jumat (Pukul 08.30 - 14.00)</strong></p>
                </div>
                <h3>Poliklinik Fisioterapi</h3>
                <div>
                    <img src="{{ asset('assets/img/doctors/default.png') }}" alt="" style="float: right;" width="200px" height="200px">
                    <p><strong>Senin - Jumat (Pukul 08.30 - 14.00)</strong></p>
                </div>
                <h3>Apotek</h3>
                <div>
                    <img src="{{ asset('assets/img/doctors/default.png') }}" alt="" style="float: right;" width="200px" height="200px">
                    <p><strong>24 Jam</strong></p>
                </div>
                <h3>Radiologi</h3>
                <div>
                    <img src="{{ asset('assets/img/doctors/default.png') }}" alt="" style="float: right;" width="200px" height="200px">
                    <p><strong>Setiap hari(Pukul 08.00 - 14.00)</strong></p>
                </div>

            </div>
        </div>
        @include('partials.sidebar')
    </div>
</section>
@endsection