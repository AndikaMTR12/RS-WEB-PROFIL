@extends('layouts.main')

@section('container')
<div style="height: 100px;"></div>
<section class="jadwal-pelayanan">
    <div class="row" data-aos="fade-right" data-aos-delay="300">
        <div class="col-lg-8 col-sm-12">
            <h3>JADWAL PELAYANAN</h3>
            <hr>
            <div id="accordion">
                @foreach($jadwal as $j)
                <h3>{{ $j->layanan }}</h3>
                <div>
                    <img src="{{ asset('assets/img/doctors') }}/{{ $j->foto_dokter }}" alt="" style="float: right;" width="200px" height="200px">
                    <p><strong>{{ $j->jadwal }}</strong></p>
                </div>
                @endforeach
            </div>
        </div>
        @include('partials.sidebar')
    </div>
</section>
@endsection