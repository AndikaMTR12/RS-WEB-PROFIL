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
            <img src="{{ asset('assets/img/about.jpg') }}" alt="" width="100%">
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
            <hr>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.186586663921!2d122.13646477386274!3d-3.5443934422614576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d99bb0515e73e7d%3A0x80090f1afb060961!2sBLUD%20RS%20Kabupaten%20Konawe%20Utara!5e0!3m2!1sen!2sid!4v1687405447540!5m2!1sen!2sid" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
@endsection