@extends('layouts.main')

@section('container')
<div style="height: 100px;"></div>
<!-- Artikel -->
<!-- <div class="container"> -->
<section>
    <h3>ARTIKEL</h3>
    <div class="row">
        <div class="col-lg-8 text-center">
            @foreach($artikel as $a)
            <hr>
            <h5>{{ $a->judul }}</h5>
            <img src="{{ asset('assets/img/about.jpg') }}" alt="" width="100%" height="180px">
            <p>{{ $a->desk_artikel }}</p>
            <p class="fw-light text-end">
                <i class="fa-solid fa-newspaper"></i>
                {{ $a->kategori->nama_kategori }}
                <i class="fa-regular fa-clock"></i>
                {{ date('l, d F Y', strtotime($a->created_at)) }}
            </p>
            @endforeach
        </div>

        <div class="col-lg-4">
            <hr>
            <h6>KATEGORI</h6>
            <ul>
                @foreach($kategori as $k)
                <li>{{ $k->nama_kategori }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!-- </div> -->
<!-- End Artikel -->
@endsection