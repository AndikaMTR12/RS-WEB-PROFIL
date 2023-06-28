@extends('layouts.main')

@section('container')
<div style="height: 100px;"></div>
<section>
    <div data-aos="fade-down">
        <h3><strong>PROFIL</strong></h3>
        <h5 class="fw-light">RSUD KONAWE UTARA</h5>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-12 mb-3" data-aos="fade-right" data-aos-delay="300">
            <img src="{{ asset('assets/img/profil-rs.jpg') }}" alt="" width="100%" height="500px">
            <h4 class="mt-3">VISI</h4>
            <hr>
            <p style="text-align: justify;">“Mewujudkan Konawe Utara yang lebih sejahtera dan berdaya saing.”</p>
            <hr>
            <h4 class="mt-3">MISI</h4>
            <hr>
            <ol style="text-align: justify;">
                <li>Meningkatkan kualitas dan daya saing sumber daya manusia Konawe Utara</li>
                <li>Meningkatkan ketersediaan infrastruktur dasar dan daya saing ekonomi daerah</li>
                <li>Mewujudkan keadilan sosial dalam pengelolaan sumber daya alam</li>
                <li>Mendorong reformasi birokrasi, pelayanan publik dan tata kelola pemerintahan desa</li>
                <li>Meningkatkan ketahanan bencana dan kualitas lingkungan hidup</li>
                <li>Mendorong gerakan sosial untuk membangun peradaban masyarakat Konawe Utara yang bertumpu pada agama dan kebudayaan lokal</li>
            </ol>
        </div>
        <div class="col-lg-6 col-sm-12" data-aos="fade-left" data-aos-delay="300">
            <h4>PROFIL RSUD KONAWE UTARA</h4>
            <hr>
            <p style="text-align: justify;">&ensp; Rumah Sakit Umum Daerah Kabupaten Konawe Utara berdiri di atas tanah seluas ± 8000 m2 pada tahun 2008, dan berganti nama menjadi BLUD Rumah Sakit Konawe Utara pada tahun 2016. <br>
                &ensp; Pada tanggal 27 Juni 2016 berdasarkan Keputusan Bupati Konawe Utara Nomor 202 Tahun 2016 telah mendapatkan izin operasional Badan Layanan Umum Daerah Rumah Sakit Konawe Utara Kelas D. <br>
                &ensp; BLUD Rumah Sakit Konawe Utara, terletak di ibukota Kabupaten yaitu Wanggudu tepatnya di Desa Lahimbua Kecamatan Andowia. <br>
                Sebelah Utara :Terminal Asera <br>
                Sebelah Timur : Pegunungan <br>
                Sebelah Selatan : Tanah Penduduk <br>
                Sebelah Barat : Pemukiman Warga dan Jalan Raya <br>
                &ensp; Pimpinan BLUD Rumah Sakit Konawe Utara disebut Direktur dan menduduki jabatan struktural eselon III/a. Direktur dibantu oleh 4 (empat) orang, yaitu : Kepala Sub Bagian Tata Usaha, Kepala Seksi Pelayanan Medik, Kepala Seksi Keperawatan, dan Kepala Seksi Pengawasan dan Pengendalian, masing-masing menduduki jabatan struktural eselon IV/a.
                &ensp; BLUD Rumah Sakit Konawe Utara selalu berusaha memberikan pelayanan kesehatan kepada masyarakat dalam bentuk pelayanan kesehatan prima.
            </p>
            <hr>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.186586663921!2d122.13646477386274!3d-3.5443934422614576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d99bb0515e73e7d%3A0x80090f1afb060961!2sBLUD%20RS%20Kabupaten%20Konawe%20Utara!5e0!3m2!1sen!2sid!4v1687405447540!5m2!1sen!2sid" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
@endsection