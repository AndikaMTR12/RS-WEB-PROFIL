<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="index.html" class="logo me-auto"><img src="assets/img/logo_konawe utara.jpg" alt="" style="float:left" width="60px">
            <p class="mt-2">RSUD KONAWE UTARA <br><br> selalu dihati</p>
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
                    </ul>
                </li>
                <li><a class="nav-link {{ $title == 'LAYANAN' ? 'active' : null}} scrollto " href="/layanan">Layanan</a></li>
                <li class="dropdown"><a href="#"><span>Info</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a class="nav-link {{ $title == 'JADWAL DOKTER' ? 'active' : null}}" href="/jadwal-dokter">Jadwal Dokter</a></li>
                        <li><a class="nav-link {{ $title == 'TARIF PELAYANAN' ? 'active' : null}}" href="tarif-pelayanan">Tarif Layanan</a></li>
                    </ul>
                </li>
                <li><a class="nav-link {{ $title == 'ARTIKEL' ? 'active' : null}} scrollto" href="/list-artikel">Artikel</a></li>
                <li class="dropdown"><a href="#"><span>Pendaftaran</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Whatsapp</a></li>
                    </ul>
                </li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->