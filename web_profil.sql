-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20230129.b4b43e3f76
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 06:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_profil`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id_artikel` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk_artikel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id_artikel`, `id_kategori`, `image`, `judul`, `desk_artikel`, `created_at`, `updated_at`) VALUES
(1, 1, 'berita1.jpg', 'PEDULI LINDUNGI RESMI BERTRANSFORMASI JADI SATU SEHAT MOBILE', 'Transformasi digital kesehatan di Indonesia kembali memasuki babak baru. Kementerian Kesehatan (Kemenkes) resmi mentransformasikan PeduliLindungi menjadi aplikasi kesehatan masyarakat bernama SATUSEHAT Mobile.\r\n\r\n\r\n“PeduliLindungi akan mengalami perubahan besar malam ini, dan dapat dimanfaatkan masyarakat sebagai SATUSEHAT Mobile mulai 1 Maret 2023,” kata Staf Ahli Teknologi Kesehatan sekaligus Chief Digital Transformation Office (DTO) Kemenkes, Setiaji, Selasa (28/2).\r\n\r\n\r\nBagi yang telah mengunduh PeduliLindungi sebelumnya, masyarakat hanya perlu memperbarui aplikasi melalui Play Store maupun App Store, baik secara otomatis maupun manual. Setelah memberikan persetujuan syarat dan ketentuan di SATUSEHAT Mobile, pengguna hanya perlu log in dengan nomor ponsel atau email yang telah terdaftar.\r\n\r\n\r\n“Profil anggota, sertifikat dan tiket vaksin COVID-19 juga akan tersinkronisasi secara otomatis. Jadi, setelah memberikan persetujuan, pengguna SATUSEHAT Mobile tidak perlu repot membuat akun baru untuk mulai menggunakan SATUSEHAT Mobile,” kata Setiaji.\r\n\r\n\r\nSelain fitur-fitur yang ada sebelumnya di PeduliLindungi, seperti vaksinasi COVID-19, hasil tes antigen dan PCR, dan pindai QR code saat check-in, dalam waktu dekat juga akan tersedia fitur baru bernama ‘diari kesehatan’ yang dapat mencatat sekaligus memonitor kondisi kesehatan diri dan orang-orang terdekat.\r\n\r\n\r\nAda empat kondisi yang akan bisa dicatat pada fitur tersebut, yaitu pengukuran tubuh (tinggi dan berat badan), tekanan darah, gula darah dan detak jantung. Setelahnya, akan muncul berbagai informasi seperti kurva kesehatan, analisis, serta rekomendasi untuk tindakan lebih lanjut.\r\n\r\n\r\n“Dengan adanya fitur diari kesehatan tersebut, SATUSEHAT Mobile dapat membantu dan memberikan informasi hingga memantau kesehatan sesuai dengan kondisi tubuh pengguna, dan hal tersebut dapat diakses di mana saja dan kapan saja,” kata Setiaji.\r\n\r\n\r\nDalam rencana pengembangannya, SATUSEHAT Mobile secara bertahap akan menambahkan beragam fitur penunjang kesehatan personal lainnya yang datanya bersumber dan terintegrasi dengan rekam medis elektronik (RME) melalui SATUSEHAT Platform.\r\n\r\n\r\n“Dari urusan imunisasi anak, antre ke rumah sakit, hasil pemeriksaan, hingga data pembelian obat nanti akan dapat diakses dan terintegrasi melalui SATUSEHAT Mobile,” kata Setiaji.\r\n\r\n\r\nSejalan dengan diluncurkannya inovasi SATUSEHAT Mobile, kini SATUSEHAT Platform juga resmi membuka kesempatan bagi seluruh pihak untuk melakukan registrasi serta melakukan uji coba integrasi SATUSEHAT Platform melalui satusehat.kemkes.go.id/platform.\r\n\r\n\r\n“Kami berharap portal ini dapat menjadi panduan bagi swasta maupun pengembang IT Dinas Kesehatan di kabupaten dan kota dalam menerapkan standar yang sama untuk dapat melakukan interoperabilitas data dengan SATUSEHAT Platform,” kata Setiaji. Dalam portal itu juga disediakan berbagai playbook bagi fasyankes dalam menyesuaikan standar interoperabilitas dan integrasi data, mulai dari modul interoperabilitas, master data pasien, master data tenaga kesehatan, serta browser terminologi dan Kamus Farmasi dan Alat Kesehatan (KFA).\r\n\r\n\r\nBerita ini disiarkan oleh Biro Komunikasi dan Pelayanan Masyarakat, Kementerian Kesehatan RI. Untuk informasi lebih lanjut dapat menghubungi WhatsApp Kemenkes 0811 10 500 567, email helpdesk@kemkes.go.id dan faq.kemkes.go.id, Halo Kemenkes melalui nomor hotline 1500-567, SMS 081281562620, faksimili (021) 5223002, 52921669.\r\n\r\n\r\nKepala Biro Komunikasi dan Pelayanan Publik\r\ndr. Siti Nadia Tarmizi, M.Epid', '2023-06-27 06:07:03', NULL),
(2, 2, 'berita2.png', 'KONAWE UTARA BEBAS KASUS HIV AIDS, DINAS KESEHATAN KONUT BAGI TIPS CARA MENGATASI PENULARAN', 'TRIBUNNEWSSULTRA.COM,KONUT \r\nKabupaten Konawe Utara (Konut),Provinsi Sulawesi Tenggara (Sultra) bebas kasus Human Deficiency Virus dan Acquired Immunodeficiency Syndrome (HIV AIDS). Hal tersebut diungkapkan Kepala Dinas Kesehatan (Dinkes) Konut, Nurjannah Efendi saat ditemui di ruang kerjanya, baru-baru ini. Nurjannah memastikan sampai saat ini belum ada ditemukan kasus HIV AIDS di wilayah Kabupaten Konawe Utara.\r\n	\"Iya, sampai saat ini kasus HIV AIDS di Konut tidak ada. Kami berharap ini tidak terjadi,\" ucap Nurjannah Efendi. Ia memastikan pihaknya terus memaksimalkan layanan kesehatan masyarakat, imbauan dan sosialisasi ke 22 puskesmas yang tersebar di 13 kecamatan mengenai penyakit-penyakit menular seperti HIV AIDS.\r\n\"Kami akan berkoordinasi ke mitra-mitra terkait untuk melakukan sidak di kawasan yang rentang menimbulkan HIV AIDS, salah satunya tempat-tempat hiburan malam,\" pungkasnya. Selain itu, Nurjannah memberikan lima langkah pemahaman cara mencegah penyebaran HIV AIDS di antaranya:\r\n\r\n1. Menggunakan kondom ketika berhubungan seksual sebagai salah satu alat kontrasepsi.\r\nKondom lateks dapat digunakan sebagai penghalang yang dapat mencegah terjadinya penularan HIV maupun penyakit menular seksual lainnya. Hal ini karena kondom dapat menghindari pasangan untuk berbagi cairan tubuh baik itu ketika ejakulasi maupun kapan saja.\r\n2. Bijak dalam memilih pasangan seksual.\r\nDalam kasus-kasus tertentu, peluang untuk menularkan atau tertular HIV meningkat seiring dengan adanya peningkatan pada jumlah pasangan seksual yang dimiliki. Karena setiap orang berkemungkinan memiliki riwayat seksual yang melibatkan orang lain, sehingga dapat saja menularkan HIV atau penyakit seksual menular lain ke pasangan seksualnya sekarang. Oleh karena itu, salah satu cara bagi orang yang aktif secara seksual adalah dengan memiliki hubungan monogami yang berarti hanya berhubungan dengan pasangannya dan begitu pula sebaliknya.\r\n\r\n\r\n3. Rutin melakukan tes HIV.\r\nJika seseorang aktif secara seksual, maka tes HIV perlu dilakukan untuk menjaga kesehatan dan mengurangi kemungkinan penularan virus kepada orang lain. Selain itu, tes disarankan untuk dilakukan bersama pasangan dan hal itu dilaksanakan agar memastikan kembali bahwa tidak ada risiko untuk penularan HIV ketika melakukan hubungan seksual.\r\n\r\n4. Hindari konsumsi obat-obat terlarang, dan jarum suntik.\r\nIni merupakan salah satu sarana yang dapat digunakan untuk menularkan HIV kepada orang lain melalui aliran darah. Oleh karena itu, konsumsi obat-obat terlarang seperti narkoba perlu dihindari terutama berbagi jarum suntik dengan orang lain untuk mengurangi risiko penularan HIV.\r\n\r\n5. Lakukan Profilaksis Pasca Pajanan (PEP).\r\nProfilaksis Pasca Pajanan, atau post-exposure prophylaxis dapat dilakukan untuk seseorang yang belum terjangkit HIV tetapi berpotensi tertular. Prosedur ini perlu dilakukan maksimal 72 jam setelah terpapar melalui hubungan seksual maupun jarum suntik untuk mengurangi risiko terinfeksi HIV. Ketika melakukan prosedur tersebut, seseorang akan diberi obat-obatan yang harus dikonsumsi dalam jangka waktu 28 hari. (*)\r\n\r\nSource : sultra.tribunnews.com\r\nPenulis: Bima Saputra Lotunani | Editor: Sitti Nurmalasari', '2023-06-28 06:22:58', NULL),
(3, 1, 'berita3.png', 'CEGAH STUNTUNG DENGAN PERBAIKAN POLA MAKAN, POLA ASUH, DAN SANITASI', 'Sebagian besar masyarakat mungkin belum memahami istilah yang disebut stunting. Stunting adalah masalah kurang gizi kronis yang disebabkan oleh kurangnya asupan gizi dalam waktu yang cukup lama, sehingga mengakibatkan gangguan pertumbuhan pada anak yakni tinggi badan anak lebih rendah atau pendek (kerdil) dari standar usianya.\r\nKondisi tubuh anak yang pendek seringkali dikatakan sebagai faktor keturunan (genetik) dari kedua orang tuanya, sehingga masyarakat banyak yang hanya menerima tanpa berbuat apa-apa untuk mencegahnya. Padahal seperti kita ketahui, genetika merupakan faktor determinan kesehatan yang paling kecil pengaruhnya bila dibandingkan dengan faktor perilaku, lingkungan (sosial, ekonomi, budaya, politik), dan pelayanan kesehatan. Dengan kata lain, stunting merupakan masalah yang sebenarnya bisa dicegah.\r\nSalah satu fokus pemerintah saat ini adalah pencegahan stunting. Upaya ini bertujuan agar anak-anak Indonesia dapat tumbuh dan berkembang secara optimal dan maksimal, dengan disertai kemampuan emosional, sosial, dan fisik yang siap untuk belajar, serta mampu berinovasi dan berkompetisi di tingkat global.\r\n“Terdapat tiga hal yang harus diperhatikan dalam pencegahan stunting, yaitu perbaikan terhadap pola makan, pola asuh, serta perbaikan sanitasi dan akses air bersih”, tutur Menteri Kesehatan RI, Nila Farid Moelok, di Jakarta (7/4). Diterangkan Menkes Nila Moeloek, kesehatan berada di hilir. Seringkali masalah-masalah non kesehatan menjadi akar dari masalah stunting, baik itu masalah ekonomi, politik, sosial, budaya, kemiskinan, kurangnya pemberdayaan perempuan, serta masalah degradasi lingkungan. Karena itu, ditegaskan oleh Menkes, kesehatan membutuhkan peran semua sektor dan tatanan masyarakat.\r\n1) Pola Makan\r\nMasalah stunting dipengaruhi oleh rendahnya akses terhadap makanan dari segi jumlah dan kualitas gizi, serta seringkali tidak beragam. Istilah “Isi Piringku” dengan gizi seimbang perlu diperkenalkan dan dibiasakan dalam kehidupan sehari-hari. Bagi anak-anak dalam masa pertumbuhan, memperbanyak sumber protein sangat dianjurkan, di samping tetap membiasakan mengonsumsi buah dan sayur. Dalam satu porsi makan, setengah piring diisi oleh sayur dan buah, setengahnya lagi diisi dengan sumber protein (baik nabati maupun hewani) dengan proporsi lebih banyak daripada karbohidrat.\r\n2) Pola Asuh\r\nStunting juga dipengaruhi aspek perilaku, terutama pada pola asuh yang kurang baik dalam praktek pemberian makan bagi bayi dan Balita. Dimulai dari edukasi tentang kesehatab reproduksi dan gizi bagi remaja sebagai cikal bakal keluarga, hingga para calon ibu memahami pentingnya memenuhi kebutuhan gizi saat hamil dan stimulasi bagi janin, serta memeriksakan kandungan empat kali selama kehamilan. Bersalin di fasilitas kesehatan, lakukan inisiasi menyusu dini (IMD) dan berupayalah agar bayi mendapat colostrum air susu ibu (ASI). Berikan hanya ASI saja sampai bayi berusia 6 bulan. Setelah itu, ASI boleh dilanjutkan sampai usia 2 tahun, namun berikan juga makanan pendamping ASI. Jangan lupa pantau tumbuh kembangnya dengan membawa buah hati ke Posyandu setiap bulan. Hal lain yang juga perlu diperhatikan adalah berikanlah hak anak mendapatkan kekebalan dari penyakit berbahaya melalui imunisasi yang telah dijamin ketersediaan dan keamanannya oleh pemerintah. Masyarakat bisa memanfaatkannya dengan tanpa biaya di Posyandu atau Puskesmas.\r\n3) Sanitasi dan Akses Air Bersih\r\nRendahnya akses terhadap pelayanan kesehatan, termasuk di dalamnya adalah akses sanitasi dan air bersih, mendekatkan anak pada risiko ancaman penyakit infeksi. Untuk itu, perlu membiasakan cuci tangan pakai sabun dan air mengalir, serta tidak buang air besar sembarangan. “Pola asuh dan status gizi sangat dipengaruhi oleh pemahaman orang tua (seorang ibu) maka, dalam mengatur kesehatan dan gizi di keluarganya. Karena itu, edukasi diperlukan agar dapat mengubah perilaku yang bisa mengarahkan pada peningkatan kesehatan gizi atau ibu dan anaknya”, tutupnya.\r\n\r\n*Sekilas Mengenai Stunting*\r\nStunting merupakan ancaman utama terhadap kualitas manusia Indonesia,\r\njuga ancaman terhadap kemampuan daya saing bangsa. Hal ini dikarenakan anak\r\nstunted, bukan hanya terganggu pertumbuhan fisiknya (bertubuh\r\npendek / kerdil) saja, melainkan juga terganggu perkembangan otaknya, yang mana tentu akan sangat mempengaruhi kemampuan dan prestasi di sekolah,\r\nproduktivitas dan kreativitas di usia-usia produktif.\r\nSource: sehatnegeriku.kemkes.go.id\r\n', '2023-06-29 06:22:58', NULL),
(4, 2, 'berita4.jpg', 'BKKBN SEBUT PREVALENSI STUNTING DI SULAWESI TENGGARA TURUN 2,5 PERSEN PADA 2022', 'Kendari (ANTARA) - Badan Kependudukan dan Keluarga Berencana Nasional (BKKBN) Sulawesi Tenggara menyebut prevalensi stunting atau gagal tumbuh pada anak akibat gizi kronis di provinsi tersebut turun sebesar 2,5 persen pada tahun 2022.\r\nKepala Perwakilan BKKBN Sultra Asmar di Kendari, Minggu mengatakan, angka penurunan prevalensi stunting di Sultra tercatat turun secara signifikan hingga Desember 2022 sebesar 2,5 persen, berdasarkan Data dari Kementerian Kesehatan dalam Studi Status Gizi Indonesia (SGGI) yang diumumkan Januari 2023\r\n\"Angka prevalensi stunting di Sultra  berdasarkan hasil studi status gizi Indonesia (SSGI) 2022 turun 2,5 persen dari 30,2 persen menjadi 27,7 persen,\" katanya.\r\nAsmar optimis bahwa tahun 2024 prevalensi stunting dapat turun hingga 14 persen asalkan mendapat dukungan semua elemen masyarakat di Sulawesi Tenggara.\r\nDia mengajak untuk selalu waspada dan perhatian seluruh masyarakat agar tetap memperhatikan saat persiapan kehamilan, saat hamil, saat anak membutuhkan ASI eksklusif, dan makanan pendamping ASI.\r\n\"Sebab menurunnya, itu merupakan masa krusial yang harus diperhatikan. Jika kita ingin menurunkan angka stunting, jangan sampai anak stunting baru bertambah,\" katanya.\r\nMenurut dia, penyelesaian penurunan stunting tidak bisa hanya diserahkan kepada pihak pemerintah saja. \"Namun, harus melibatkan berbagai unsur, mulai dari pelaku bisnis atau pihak swasta, akademisi, hingga masyarakat dan media massa,\" katanya. \r\nDijelaskan, stunting adalah masalah gizi kronis yang disebabkan oleh asupan gizi yang kurang dalam waktu lama. \"Hal ini terjadi karena asupan makanan yang tidak sesuai dengan kebutuhan gizi. Stunting disebabkan oleh banyak faktor, seperti ekonomi keluarga, penyakit atau infeksi yang berkali-kali. Lalu, juga dipengaruhi oleh faktor lingkungan dan masalah non kesehatan,\"katanya. Ia menambahkan, stunting juga dipengaruhi oleh aspek perilaku, terutama pada pola asuh yang kurang baik dalam praktek pemberian makan bagi bayi yang balita.\r\nPewarta : Suparman\r\nEditor: Hernawan Wahyudono\r\n\r\nSource:sultra.antaranews.com\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dokters`
--

CREATE TABLE `dokters` (
  `id_dokter` bigint(20) UNSIGNED NOT NULL,
  `foto_dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesialis` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokters`
--

INSERT INTO `dokters` (`id_dokter`, `foto_dokter`, `nama_dokter`, `nip`, `spesialis`, `created_at`, `updated_at`) VALUES
(1, 'dokter rum.jpeg', 'dr. Muhammad Run Marewa', '19780508201601101', 0, NULL, NULL),
(2, 'default.png', 'dr. Wangga Pramono Lasandara', '19921014202001102', 0, NULL, NULL),
(3, 'default.png', 'dr. Febryani Rerung', '198902042020122004', 0, NULL, NULL),
(4, 'default.png', 'dr. Lezettho Bittikaka', '19940826202101103', 0, NULL, NULL),
(5, 'default.png', 'dr. Dwi Prasetyo Irawanto', '199212242022031011', 0, NULL, NULL),
(6, 'default.png', 'dr. Elda Citra Sari', '19949826292101103', 0, NULL, NULL),
(7, 'default.png', 'dr. Siska, M.Kes', '19860426202101115', 0, NULL, NULL),
(8, 'default.png', 'dr. Dewi Sarli Tombili, Sp. Pd', '198110212009032005', 1, NULL, NULL),
(9, 'default.png', 'dr. Taufik Ardianto, Sp.B', '19840622202001104', 2, NULL, NULL),
(10, 'default.png', 'dr. Anny Mariani Sanusi, Sp.A', '19821026202207205', 3, NULL, NULL),
(11, 'default.png', 'dr. Putu Adi Sujana Putra, Sp.OG', '198708182014111001', 4, NULL, NULL),
(12, 'default.png', 'dr. Munandar Marsuki, Sp.An', '19800502202001106', 5, NULL, NULL),
(13, 'default.png', 'drg. Riski Setyo Avianti, Sp. KG', '19870820201705200', 6, NULL, NULL),
(14, 'default.png', 'drg. Rya Sepriyani', '199309042022032020', 7, NULL, NULL),
(15, 'default.png', 'dr. Andreas Dhymas Dhina MK. Sp.A', '', 3, NULL, NULL),
(16, 'default.png', 'dr. Sumiati, Sp. Rad', '', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Kesehatan', NULL, NULL),
(2, 'Umum', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_16_093644_create_artikels_table', 1),
(6, '2023_06_16_093917_create_kategoris_table', 1),
(10, '2023_06_28_094237_create_spesialis_table', 3),
(11, '2023_06_28_082353_create_dokters_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `id_spesialis` bigint(20) UNSIGNED NOT NULL,
  `spesialis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`id_spesialis`, `spesialis`, `created_at`, `updated_at`) VALUES
(1, 'Spesialis Penyakit Dalam', NULL, NULL),
(2, 'Spesialis Bedah', NULL, NULL),
(3, 'Spesialis Anak', NULL, NULL),
(4, 'Spesialis Obgyn', NULL, NULL),
(5, 'Spesialis Anastesi', NULL, NULL),
(6, 'Spesialis Kesehatan Gigi', NULL, NULL),
(7, 'Spesialis Gigi', NULL, NULL),
(8, 'Spesialis Radiologi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `dokters`
--
ALTER TABLE `dokters`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id_artikel` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dokters`
--
ALTER TABLE `dokters`
  MODIFY `id_dokter` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `id_spesialis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
