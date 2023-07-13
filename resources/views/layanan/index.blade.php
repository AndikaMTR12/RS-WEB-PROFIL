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
                @foreach($layanan as $lay)
                <h3>{{ $lay->nama_layanan }}</h3>
                <div>
                    <ul>
                        @foreach($fasilitas->where('id_layanan',$lay->id_layanan) as $item)
                        <li>{{ $item->nama_fasilitas }}</li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
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