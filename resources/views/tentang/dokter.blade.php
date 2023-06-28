@extends('layouts.main')

@section('container')
<div style="height: 100px;"></div>
<section id="doctors" class="doctors section-bg">
    <div class="row">
        <h3>DOKTER SPESIALIS</h3>
        @foreach($dokter as $d)
        @if($d->spesialis !== 0)
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                    <img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                    <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info">
                    <h4>{{ $d->nama_dokter }}</h4>
                    <span>{{ $d->spes->spesialis }}</span>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>

    <div class="row">
        <h3>DOKTER UMUM</h3>
        @foreach($dokter as $d)
        @if($d->spesialis == 0)
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                    <img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                    <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="member-info">
                    <h4>{{ $d->nama_dokter }}</h4>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</section>
@endsection