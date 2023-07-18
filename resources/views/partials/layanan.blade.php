<!-- ======= Layanan Section ======= -->
<section id="layanan" class="layanan">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Layanan</h2>
        </div>
        <div data-aos="fade-up" data-aos-delay="100">
            <ul class="nav nav-tabs justify-content-center d-flex flex-row">
                <?php
                $no = 1;
                ?>
                @foreach($layanan as $lay => $item)
                <li class="nav-item mt-2"><a class="nav-link {{ $item['nama_layanan'] == 'EMERGENCY' ? 'active':null }} show" data-bs-toggle="tab" data-bs-target="#tab-{{ $no++ }}"><strong>{{ $item['nama_layanan'] }}</strong></a></li>
                @endforeach
                <li class="nav-item mt-2"><a class="nav-link show" data-bs-toggle="tab" data-bs-target="#tab-{{ $no++ }}"><strong>SPESIALIS</strong></a></li>
            </ul>
            <div class="tab-content">
                <?php
                $no = 1;
                ?>
                @foreach($layanan as $lay)
                <div class="tab-pane {{ $lay->nama_layanan == 'EMERGENCY' ? 'active':null }} show" id="tab-{{ $no++ }}">
                    <ul>
                        @foreach($fasilitas->where('id_layanan',$lay->id_layanan) as $item)
                        <li>{{ $item->nama_fasilitas }}</li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
                <div class="tab-pane" id="tab-{{$no++}}">
                    <ul>
                        @foreach($spesialis as $s)
                        <li>{{ $s->spesialis }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> <!-- End Layanan Section -->