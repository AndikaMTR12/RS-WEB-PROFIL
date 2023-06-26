@extends('layouts.main')

@section('container')
<div style="height: 100px;"></div>
<!-- List Artikel -->
<!-- <div class="container"> -->
<section class="artikel">
    <h3>ARTIKEL TERBARU</h3>
    <div class="row">
        @foreach($artikel as $a)
        <div class="col-lg-4 col-md-6 text-center mb-3">
            <div class="card">
                <img src="{{ asset('assets/img/about.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $a->judul }}</h5>
                    <p class="card-text">{{ strlen($a->desk_artikel) > 30 ? substr($a->desk_artikel,0,30).'...' : $a->desk_artikel}}...</p>
                    <a href="/artikel/{{ $a->id_artikel }}" class="btn">Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="paginator mt-3">
        {{ $artikel->links() }}
    </div>
</section>
<!-- </div> -->
<!-- End List Artikel -->
@endsection