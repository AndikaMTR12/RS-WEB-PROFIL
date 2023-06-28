@extends('layouts.main')

@section('container')
<!-- ======= Tentang ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Tentang</h2>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-4" data-aos="fade-right">
                <img src="{{ asset('assets/img/profil-rs.jpg') }}" class="img-fluid" alt="" height="300px">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>PROFIL RSUD KONAWE UTARA</h3>
                <p style="text-align: justify;">&ensp; Rumah Sakit Umum Daerah Kabupaten Konawe Utara berdiri di atas tanah seluas ± 8000 m2 pada tahun 2008, dan berganti nama menjadi BLUD Rumah Sakit Konawe Utara pada tahun 2016. <br>
                    &ensp; Pada tanggal 27 Juni 2016 berdasarkan Keputusan Bupati Konawe Utara Nomor 202 Tahun 2016 telah mendapatkan izin operasional Badan Layanan Umum Daerah Rumah Sakit Konawe Utara Kelas D. <br>
                    &ensp; BLUD Rumah Sakit Konawe Utara, terletak di ibukota Kabupaten yaitu Wanggudu tepatnya di Desa Lahimbua Kecamatan Andowia.</p>
                <a href="/profil">Selengkapnya</a>
            </div>
        </div>

    </div>
</section><!-- End Tentang Section -->

<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

        <div class="text-center">
            <h3>In an emergency? Need help now?</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                laborum.</p>
            <a class="cta-btn scrollto" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Registrasi Online</a>
        </div>

    </div>
</section><!-- End Cta Section -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <p>SILAHKAN MELAKUKAN PENDAFTARAN</p>
                <a href="https://api.whatsapp.com/send/?phone=081240058671&text&type=phone_number&app_absent=0" class="btn">Whatsapp</a>
            </div>
        </div>
    </div>
</div>
@include('partials.dokter')

@include('partials.layanan')

@include('partials.artikel')

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>KRITIK DAN SARAN</h2>
        </div>

    </div>

    <div class="container">

        <div class="row mt-5">

            <div class="col-lg-6">

                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>Jl. Poros Kendari-Asera, Desa Lahimbua, kec. Andowia, Kab. Konawe Utara</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>rsudkonaweutara@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>081240058671</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

@endsection