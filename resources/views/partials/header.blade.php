<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="/" class="logo me-auto"><img src="{{ asset('assets/img/logo_konawe utara.jpg') }}" alt="" style="float:left" width="50px">
            <p class="mt-2"><strong>RSUD KONAWE UTARA</strong><br><br> <span style="font-size: 10px;">PROFESIONAL, TULUS, BERDEDIKASI</span> </p>
        </a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link {{ $title == 'BERANDA' ? 'active' : null}} scrollto " href="/">Beranda</a></li>
                <li class="dropdown"><a href=""><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="nav-link {{ $title == 'PROFIL' ? 'active' : null}}" href="/profil">Profil</a></li>
                        <li><a class="nav-link {{ $title == 'DOKTER' ? 'active' : null}}" href="/dokter">Dokter</a></li>
                        <li><a class="nav-link {{ $title == 'MAKLUMAT PELAYANAN' ? 'active' : null}}" href="/maklumat-pelayanan">Maklumat Pelayanan</a></li>
                    </ul>
                </li>
                <li><a class="nav-link {{ $title == 'LAYANAN' ? 'active' : null}} scrollto " href="/layanan">Layanan</a></li>
                <li class="dropdown"><a href="#"><span>Info</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="nav-link {{ $title == 'JADWAL PELAYANAN' ? 'active' : null}}" href="/jadwal-pelayanan">Jadwal Pelayanan</a></li>
                        <li><a class="nav-link {{ $title == 'TARIF PELAYANAN' ? 'active' : null}}" href="tarif-pelayanan">Tarif Layanan</a></li>
                    </ul>
                </li>
                <li><a class="nav-link {{ $title == 'ARTIKEL' ? 'active' : null}} scrollto" href="/list-artikel">Berita</a></li>
                @if($title == "BERANDA")
                <li><a class="nav-link scrollto " href="#cta">Pendaftaran</a></li>
                @endif
                <li class="dropdown"><a href="#contact"><span>Aduan & Konsultasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="nav-link {{ $title == 'JADWAL PELAYANAN' ? 'active' : null}}" href="/aduan">Aduan</a></li>
                        <li><a class="nav-link {{ $title == 'TARIF PELAYANAN' ? 'active' : null}}" href="/konsultasi">Konsultasi</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Publikasi</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        @foreach($publikasi as $p)
                        <li><a class="nav-link {{ $title == $p->menu_publikasi ? 'active' : null}}" href="/publikasi-beranda/{{ $p->menu_publikasi }}">{{ $p->menu_publikasi }}</a></li>
                        @endforeach
                    </ul>
                </li>


            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->