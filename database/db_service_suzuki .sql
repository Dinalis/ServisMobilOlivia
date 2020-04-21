-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mei 2018 pada 08.54
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_service_suzuki`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_md5` varchar(255) NOT NULL,
  `password_cetak` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aktif` int(11) NOT NULL,
  `last_login` datetime NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password_md5`, `password_cetak`, `nama`, `no_hp`, `email`, `aktif`, `last_login`, `level`) VALUES
(1, 'admin           ', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Admin1       ', '081332098096           ', ' gandhi@yahoo.com       ', 1, '2018-05-11 12:04:39', 'administrator'),
(16, 'jhon     ', '4c25b32a72699ed712dfa80df77fc582', 'jhon', 'jhon     ', '0813320980961     ', 'gandh@yahoo.com     ', 1, '2017-03-29 12:54:05', 'operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_halaman`
--

CREATE TABLE IF NOT EXISTS `tbl_halaman` (
`id_isi` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbl_halaman`
--

INSERT INTO `tbl_halaman` (`id_isi`, `kategori`, `isi`) VALUES
(2, 'service', '<p>\r\n	PT. Trans Sumatera Agung yang beralamat di jalan Hj. Adam Malik No. 103A Medan merupakan salah satu perusahaan yang bergerak di bidang otomotif,&nbsp; khususnya dalam hal pemasaran unit baru Suzuki, penjualan <em>sparepart</em> Suzuki Genuine Part (SGP) dan perbaikan serta perawatan mobil Suzuki.</p>\r\n<p>\r\n	Dalam meningkatkan mutu dan kualitas pelayanan, perusahaan memiliki divisi khusus, yaitu divisi <em>service</em> yang berfungsi sebagai tempat pelayanan dan menampung seluruh keluhan pelanggan serta memberikan solusi terbaik untuk pelanggannya.</p>\r\n<p>\r\n	Kami menggunakan produk 3M dan Meguiars yang memang sudah terbukti terkenal akan mutu dan kualitasnya. Dengan produk ini warna mobil akan tampak seperti baru dan berkilau.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong>Harga Perawatan Interior dan Eksterior Mobil</strong></p>\r\n<p>\r\n	Jasa perawatan mobil yang kami tawarkan merupakan pilihan yang tepat bagi Anda saat ingin merawat mobil baik perawatan interior maupun eksterior. Kami melayani panggilan ke rumah dan kantor untuk wilayah kota Medan.</p>\r\n<p style="margin-left:37.79px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bahan yang kami gunakan berbasis waterbase sehingga aman untuk cat mobil anda.</p>\r\n<p style="margin-left:37.79px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tidak membotakkan cat, melindungi dari sinar UV, hujan asam (acid rain), polusi udara/asap, kotoran burung (bird droppings) dan deterjen.</p>\r\n<p style="margin-left:37.79px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Menghilangkan goresan halus jamur (water spot). Noda aspal (tar), cat mobil lain yang menempel di mobil akibat terserempet, oksidasi dan kotoran pada cat dan kaca, mengembalikan warna asli cat mobil anda sehingga tampak kembali seperti baru serta menghilangkan kerak yg menempel pada list kaca/ list body &ndash; acesories &ndash; logo &ndash; sela2 pintu &ndash; bagasi &ndash; tutup bensin &ndash; lampu &ndash; bumper &ndash; velg &ndash; dll.</p>\r\n<p style="margin-left:37.79px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Paint Protection teflon &amp; polymer formula yang pat bertahan sekitar &plusmn; 3 bulan.</p>\r\n<p style="margin-left:37.79px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Membersihkan noda dan kotoran yang melekat di plavon, jok, dashboard, doortrim, karpet dan bagasi.</p>\r\n<p style="margin-left:37.79px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mengkilapkan dan memberi lapisan pelindung pada interior mobil anda.</p>\r\n<p style="margin-left:37.79px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Membersihkan, kabel, selang, ruang mesin, dan sekitar mesin yang terjangkau oleh tangan.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Paket yang kami tawarkan adalah sebagai berikut:</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Eksterior Full: poles Body, velg, kaca + waxing dan detailing.</p>\r\n<p>\r\n	Interior: Cover Jok, Dashboard, Plafon, karpet dasar, dan Door Trim.</p>\r\n<p>\r\n	Harga: Rp. 350.000,- s/d 400.000,-</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong>Paket Perawatan Lengkap All In Interior &amp; Exterior</strong></p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	PAKET EXCLUSIVE Rp. 350.000 (Garansi 3 bulan) meliputi :</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Poles body (eksterior)</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Poles kaca</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Steam interior</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mesin</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Paint protection</p>\r\n<p>\r\n	EKSTERIOR (Wet Look) mencakup:</p>\r\n<p style="margin-left:47.26px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Menghilangkan baret halus</p>\r\n<p style="margin-left:47.26px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Menghilangkan jamur air</p>\r\n<p style="margin-left:47.26px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Menghilangkan kotoran yang melekat pada lis/merk mobil</p>\r\n<p style="margin-left:47.26px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Memberikan paint protection</p>\r\n<p>\r\n	INTERIOR mencakup:</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Membersihkan bagian dalam dari noda dan kotoran (Jok, Plafon, Karpet, Dashboard, Panel, Bagasi)</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Steam interior vakum interior</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Poles kaca</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Jamur oksidasi air</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Buram diwaktu hujan</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Endapan polusi</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Silau lampu dan air hujan</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Semua akan menjadi bening</p>\r\n<p>\r\n	RUANG MESIN</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Membersihkan ruang mesin atau sekitar mesin yang dapat terjangkau oleh tangan.</p>\r\n<p style="margin-left:48px;">\r\n	&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mengembalikan selang karet atau alumunium kewarna aslinya.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	Sistem pengerjaan oleh tenaga ahli yang berpengalaman dengan menggunakan mesin dan product chemical tepat guna berbasis waterbase tanpa efek samping. Semua jenis pekerjaan, baik perdana maupun perawatan ulang, dikerjakan sama (lama pengerjaan &plusmn; 4jam). Bahan yang kami gunakan adalah produk-produk 3M dan Meguiars.</p>\r\n'),
(3, 'home    ', '<p>\r\n	PT. Trans Sumatera yang beralamat di Jl. H. Adam Malik No. 103 A, Medan adalah satu salon mobil online yang sedang berkembang di kota Medan. Ada beberapa jasa yang bisa kami kerjakan, dari salon mobil, perbaikan plafon mobil (Eropa &amp; Jepang), perbaikan dashboard mobil, perbaikan stir mobil, sampai pasang peredam suara dan panas mobil.</p>\r\n<p>\r\n	Dengan membawa prinsip profesionalitas, kejujuran serta ketulusan hati dalam bekerja, kami hadir sebagai solusi untuk keindahan dan kebersihan mobil anda. Dengan dukungan tenaga ahli yang terlatih, obat kualitas premium, serta peralatan modern, kami mampu memberikan kualitas hasil kerja yang maksimal.</p>\r\n<p>\r\n	Dengan pengalaman puluhan tahun, kami memberikan pelayanan dan kualitas yang prima. Kami menggunakan produk 3M dan Meguiars yang memang sudah terbukti terkenal akan mutu dan kualitasnya. Dengan produk ini warna mobil akan tampak seperti baru dan berkilau.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong>Perawatan Exterior</strong></p>\r\n<p>\r\n	1.Steam Body &amp; Soft Buffing</p>\r\n<p style="margin-left: 40px;">\r\n	Yaitu proses pembersihan jamur pada kaca dan noda aspal pada body.</p>\r\n<p>\r\n	2. Rolling Machine</p>\r\n<p style="margin-left: 40px;">\r\n	Yaitu proses menghilangkan baret-baret pada body dengan menggunakan produk-produk 3M.</p>\r\n<p>\r\n	3. Polishing</p>\r\n<p style="margin-left: 40px;">\r\n	Yaitu proses mengembalkan warna asli cat mobil agar menghasilkan kilap sempurna dengan menggunakan produk-produk 3M.</p>\r\n<p>\r\n	4. Waxing &amp; Paint Protection</p>\r\n<p style="margin-left: 40px;">\r\n	Yaitu proses untuk mendapatkan hasil cat efek basah (wet look) &amp; cat terkunci (wet lock) dengan produk-produk Meguiar&rsquo;s.</p>\r\n<p>\r\n	5. Final Inspection</p>\r\n<p style="margin-left: 40px;">\r\n	Yaitu proses pemeriksaan menyeluruh setiap detail-detail pekerjaan.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong>Perawatan Interior</strong></p>\r\n<p>\r\n	Perawatan ini mencakup:</p>\r\n<p>\r\n	1. Cleaning interior</p>\r\n<ul>\r\n	<li>\r\n		Membersihkan seluruh bagian dalam mobil jok &amp; sudut-sudutnya, dasboard &amp; sudut-sudutnya, plafon, karpet, panel &amp; bagasi</li>\r\n	<li>\r\n		Menghilangkan noda &amp; kotoran yang menempel pada plafon mobil.</li>\r\n</ul>\r\n<p>\r\n	2. Vacum cleaner.</p>\r\n<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<strong>Perawatan Mesin</strong></p>\r\n<ul>\r\n	<li>\r\n		Membersihkan kap mesin dari kotoran dan kerak yg menempel</li>\r\n	<li>\r\n		Membersihkan mesin dan sekitar mesin.</li>\r\n	<li>\r\n		Mengembalikan karet &amp; selang almunium ke warna aslinya.</li>\r\n</ul>\r\n'),
(4, 'sidebar             ', '<p style="text-align: justify;">\r\n	<strong><span style="font-size:24px;"><span style="font-family:comic sans ms,cursive;">Selamat Datang di</span></span></strong></p>\r\n<p style="text-align: justify;">\r\n	<strong><span style="font-family:comic sans ms,cursive;"><span style="font-size:24px;"><span comic="" font-size:="" sans="">Pt. Trans Sumatera Agung</span></span></span></strong></p>\r\n<p style="text-align: justify;">\r\n	PT. Trans Sumatera Agung merupakan salah satu perusahaan Perseroan Terbatas yang bergerak dibidang otomotif, khususnya dibidang pemasaran unit baru Suzuki, penjualan sparepart Suzuki Genuine Part (SGP) dan perbaikan serta perawatan mobil Suzuki. PT. Trans Sumatera Agung yang bergerak dibidang otomotif ini didirikan dan diresmikan pada tanggal 07 Juli 1983 yang beralamat dijalan Haji Adam Malik No. 103 A yang menjadi satu-satunya pemegang tunggal resmi mobil brand Suzuki di Sumatera Utara. Sebagai pemegang tunggal resmi&nbsp; mobil brand Suzuki, PT. Trans Sumatera Agung menjadi pemasok utama mobil Suzuki di kota Medan dan mempunyai banyak sub-dealer yang tersebar disekitar kota Medan. Perusahaan otomotif ini berada dibawah pengawasan langsung dari PT. Suzuki Indomobil Sales yang merupakan perwakilan dari PT. Suzuki Motor Corporation (SMC-Jepang).</p>\r\n<p style="text-align: justify;">\r\n	Seiring dengan perkembangan zaman maka persaingan bisnis juga semakin pesat dalam dunia otomotif, dimana persaingan ini menuntut para pelaku bisnis untuk memaksimalkan kinerja perusahaan agar dapat bersaing di pasar otomotif. Perusahaan harus mampu berusaha keras untuk mempelajari dan memahami kebutuhan dan keinginan pelanggan guna meningkatkan citra perusahaan di mata masyarakat. Selama hampir lebih 18 tahun berdiri di kota Medan, maka pada tahun 2001 PT. Trans Sumatera Agung membuka cabang dijalan Jend. Gatot Subroto No. 140 Medan guan meningkatkan pelayanan kepada customer Suzuki. Dan pada tahun 2012 dibuka lagi cabang dijalan Sisingamangaraja Km. 6,8 Medan Amplas dengan tujuan memperluas wilayah bisnis dan memudahkan customer yang berasal dari luar kota sekitar Medan seperti Lubuk Pakam dan Berastagi (Tanah Karo) untuk mendapatkan pelayanan dari PT. Trans Sumatera Agung.</p>\r\n<p>\r\n	Dan untuk mengatasi permasalahan customer dari luar kota Medan, PT. Trans Sumatera Agung kembali mendirikan cabang baru di Kota RantauPrapat. Sampai saat ini PT. Trans Sumatera Agung telah memiliki 3 cabang perusahaan, 3 sub-dealer dan 5 bengkel mitra yang tersebar di Sumatera Utara.</p>\r\n<p>\r\n	Dalam menjalankan aktifitasnya, perusahaan memiliki visi dan misi yang ingin dicapai dimasa mendatang. Visi perusahaan adalah menjadi perusahaan otomotif terhandal dan terpercaya didalam negeri. Sedangkan misi perusahaan antara lain:</p>\r\n<ol>\r\n	<li>\r\n		Mengembangkan seluruh sumberdaya yang dimiliki secara berkesinambungan untuk meningkatkan profesionalisme bagi kepuasan pelanggan.</li>\r\n	<li>\r\n		Memberikan konstriusi dan berupaya sepenuhnya bagi pengembangan bisnis di Indonesia</li>\r\n	<li>\r\n		Memberikan komitmen dan nilai terbaik bagi seluruh pihak yang berkepentingan dengan memperhatikan kepentingan masyarakat.</li>\r\n	<li>\r\n		Memberikan kenyamanan bagi para pekerjanya agar tercipta suasana yang baaik di kalangan antar pekerja di perusahaan.</li>\r\n</ol>\r\n<p style="text-align: justify;">\r\n	&nbsp;</p>\r\n<p style="text-align: justify;">\r\n	<span style="color:#ff0000;">KEPUASAN ANDA ADALAH KEBANGGAAN KAMI</span></p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE IF NOT EXISTS `tbl_kontak` (
`id` int(11) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `tgl_kirim` datetime NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id`, `telepon`, `alamat`, `kota`, `nama`, `email`, `pesan`, `tgl_kirim`) VALUES
(10, 'as', 'hita', 'asd', 'Mahatma Gandhi', 'hita@hita.com', 'asdasd', '2016-03-17 00:00:00'),
(11, 'as', 'hita', 'asd', 'Mahatma Gandhi', 'hita@hita.com', 'asdasd', '2016-03-17 12:41:29'),
(12, 'aku', 'aku', 'aku', 'aku', 'hita@hita.com', 'aku', '2016-03-31 09:55:28'),
(13, 'w', 'w', 'w', 'we', 'gandh@yahoo.com', 'w', '2017-03-29 03:02:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengerjaan`
--

CREATE TABLE IF NOT EXISTS `tbl_pengerjaan` (
`id` int(10) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `tbl_pengerjaan`
--

INSERT INTO `tbl_pengerjaan` (`id`, `foto`) VALUES
(3, '1490766226.jpg'),
(4, '1490766247.jpg'),
(5, '1490766255.jpg'),
(6, '1490766292.jpg'),
(7, '1490766319.jpg'),
(8, '1490765152.jpg'),
(9, '1490765178.jpg'),
(10, '1490765201.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pesanan`
--

CREATE TABLE IF NOT EXISTS `tbl_pesanan` (
`id` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_telp` varchar(25) DEFAULT NULL,
  `jenis_pesanan` varchar(25) DEFAULT NULL,
  `pesanan_tambahan` text NOT NULL,
  `total_biaya` int(20) NOT NULL,
  `tanggal_pesanan` date DEFAULT NULL,
  `waktu_pesanan` varchar(100) DEFAULT NULL,
  `catatan` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id`, `nama`, `no_telp`, `jenis_pesanan`, `pesanan_tambahan`, `total_biaya`, `tanggal_pesanan`, `waktu_pesanan`, `catatan`) VALUES
(1, 'Leonardo ', '312 ', 'Exterior', '250000', 450000, '2018-05-11', 'Pukul 08:00 WIB-selesai', '<p>\r\n	21</p>\r\n'),
(2, 'asss', 'as', 'Paket Exclusive', 'spoorbal,optim,fullservice', 1250000, '2018-05-11', 'Pukul 09:00 WIB-selesai', 'a'),
(3, 'qqq', '32', 'Exterior', 'spoorbal,spoor', 570000, '2018-05-11', 'Pukul 10:00 WIB-selesai', '<p>\r\n	222</p>\r\n'),
(4, '666   ', '66612  ', 'Paket Exclusive', 'spoorbal,spoor', 670000, '2018-05-11', 'Pukul 11:00 WIB-selesai', '<p>\r\n	aaaa</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_halaman`
--
ALTER TABLE `tbl_halaman`
 ADD PRIMARY KEY (`id_isi`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengerjaan`
--
ALTER TABLE `tbl_pengerjaan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl_halaman`
--
ALTER TABLE `tbl_halaman`
MODIFY `id_isi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_pengerjaan`
--
ALTER TABLE `tbl_pengerjaan`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
