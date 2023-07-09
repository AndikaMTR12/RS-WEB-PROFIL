<!-- ======= Doctors Section ======= -->
<section id="doctors" class="doctors section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>DOKTER</h2>
        </div>
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="row">
                    @foreach($dokterspes as $d)
                    <div class="col-lg-4 col-md-6  align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets/img/doctors/{{ $d->foto_dokter }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ $d->nama_dokter }}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @foreach($dokterumum as $d)
                    <div class="col-lg-4 col-md-6  align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets/img/doctors/{{ $d->foto_dokter }}" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ $d->nama_dokter }}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="d-flex justify-content-center mt-3 mb-3">
                        <a href="/dokter" class="doctor-link">Tampilkan Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <img src="assets/img/INFORMASI PELAYANAN.jpg" alt="" width="100%" height="700px">
            </div>
        </div>

    </div>
</section><!-- End Doctors Section -->