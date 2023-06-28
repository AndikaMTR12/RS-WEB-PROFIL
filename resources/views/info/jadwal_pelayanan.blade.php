@extends('layouts.main')

@section('container')
<div style="height: 100px;"></div>
<section>
    <div class="row" data-aos="fade-right" data-aos-delay="300">
        <div class="col-lg-8 col-sm-12">
            <h3>JADWAL PELAYANAN</h3>
            <hr>
            <div id="accordion">
                <h3>Poliklinik Umum</h3>
                <div>
                    <img src="{{ asset('assets/img/gedung.png') }}" alt="" style="float: right;" width="200px" height="200px">
                    <p>Senin - Jumat (Pukul 08.30 - 14.00)</p>
                </div>
                <h3>Poliklinik Penyakit Dalam</h3>
                <div>
                    <img src="{{ asset('assets/img/gedung.png') }}" alt="" style="float: right;" width="200px" height="200px">
                    <p>Senin - Jumat (Pukul 08.30 - 14.00)</p>
                </div>
                <h3>Poliklinik Kebidanan dan Penyakit Kandungan</h3>
                <div>
                    <img src="{{ asset('assets/img/gedung.png') }}" alt="" style="float: right;" width="200px" height="200px">
                    <p>Senin - Jumat (Pukul 08.30 - 14.00)</p>
                </div>
                <h3>Poliklinik Anak</h3>
                <div>
                    <img src="{{ asset('assets/img/gedung.png') }}" alt="" style="float: right;" width="200px" height="200px">
                    <p>Senin - Jumat (Pukul 08.30 - 14.00)</p>
                </div>
                <h3>Poliklinik Gigi & Penyakit Mulut</h3>
                <div>
                    <img src="{{ asset('assets/img/gedung.png') }}" alt="" style="float: right;" width="200px" height="200px">
                    <p>Senin - Jumat (Pukul 08.30 - 14.00)</p>
                </div>

            </div>
        </div>
        @include('partials.sidebar')
    </div>
</section>
@endsection