<!-- ======= Layanan Section ======= -->
<section id="layanan" class="layanan">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Layanan</h2>
        </div>
        <div data-aos="fade-up" data-aos-delay="100">
            <ul class="nav nav-tabs justify-content-center d-flex flex-row">
                <li class="nav-item mt-2"><a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1"><strong>EMERGENCY</strong></a></li>
                <li class="nav-item mt-2"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2"><strong>PELAYANAN KESEHATAN RAWAT JALAN</strong></a></li>
                <li class="nav-item mt-2"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3"><strong>PELAYANAN KESEHATAN RAWAT INAP</strong></a></li>
                <li class="nav-item mt-2"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4"><strong>UNIT PENUNJANG MEDIS</strong></a></li>
                <li class="nav-item mt-2"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5"><strong>UNIT PENUNJANG NON MEDIS</strong></a></li>
                <li class="nav-item mt-2"><a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6"><strong>DOKTER SPESIALIS</strong></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                    <ul>
                        <li>Instalasi Gawat Darurat (IGD)</li>
                        <li>IGD Ponek</li>
                    </ul>
                </div>
                <div class="tab-pane" id="tab-2">
                    <ul>
                        <li>Poliklinik Penyakit Dalam</li>
                        <li>Poliklinik Bedah</li>
                        <li>Poliklinik Kebidanan dan Penyakit Kandungan</li>
                        <li>Poliklinik Anak</li>
                        <li>Poliklinik Gigi & Penyakit Mulut</li>
                        <li>Poliklinik Umum</li>
                    </ul>
                </div>
                <div class="tab-pane" id="tab-3">
                    <ul>
                        <li>Ruangan Bedah</li>
                        <li>Ruangan Interna</li>
                        <li>Ruangan Kamar Bersalin</li>
                        <li>Ruangan Anak</li>
                        <li>Ruangan Isolasi</li>
                        <li>Ruangan Neonati/Bayi</li>
                    </ul>
                </div>
                <div class="tab-pane" id="tab-4">
                    <ul>
                        <li>Laboratorium</li>
                        <li>Instalasi Farmasi</li>
                        <li>Instalasi Radiologi</li>
                        <li>Rehabilitas Medik/Fisioterapi</li>
                    </ul>
                </div>
                <div class="tab-pane" id="tab-5">
                    <li>Instalasi Gizi</li>
                    <li>Loundry</li>
                    </ul>
                </div>
                <div class="tab-pane" id="tab-6">
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