@extends('layouts.main')

@section('container')
<!-- ======= Tentang ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Tentang</h2>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>PROFIL RSUD KONAWE UTARA</h3>
                <p style="text-align: justify;">RSUD Kabupaten Konawe Utara yang terletak di ibukota kabupaten yaitu Andowia, tepatnya di
                    Desa Lahimbua
                    Kecamatan Andowia. RSUD Kabupaten Konawe Utara, yang dibentuk berdasarkan Peraturan Daerah Nomor 4
                    tahun 2008,
                    sejak tanggal 22 Oktober 2008 telah mendapat lzin Operasional Sementara dari Dinas Kesehatan
                    Provinsi Sulawesi Tenggara yang akan berlaku selama 2 tahun,
                    dan pada tanggal 5 Januari 2009 berdasarkan
                    Keputusan Bupati Konawe Utara dan Nomor 1 tahun
                    2009 telah ditetapkan personil yang akan menjalankan
                    tugas operasional di RSUD Kabupaten Konawe Utara dan penetapan terakhir tanggal 6 September 2014
                    berdasarkan Keputusan Bupati Konawe Utara Nomor
                    383 Tahun 2014. Pada Tahun 2015 dengan berdasarkan
                    Peraturan Daerah Nomor 900 Tahun 2015
                    Rumah Sakit Umum Daerah Konawe Utara telah mendapat izin
                    operasional menjadi Badan Layanan
                    Umum Daerah Rumah Sakit Konawe Utara Kelas D. Dengan demikian
                    keberadaan BLUD Rumah Sakit
                    Konawe Utara dengan segaala sarana dan prasarana yang dimiliki dituntut untuk
                    dapat berperan aktif dalam upaya meningkatkan status kesehatan masyarakat di Kabupaten Konawe Utara.</p>
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
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <p>SILAHKAN MELAKUKAN PENDAFTARAN</p>
                <a href="" class="btn">Whatsapp</a>
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
            <h2>Call Centre</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
                in iste officiis commodi quidem hic quas.</p>
        </div>

    </div>

    <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container">

        <div class="row mt-5">

            <div class="col-lg-6">

                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Our Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@example.com<br>contact@example.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
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