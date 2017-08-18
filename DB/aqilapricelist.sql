-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2017 at 11:11 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aqilapricelist`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`) VALUES
(1, 'fentroadmin', '06d459c2cd6f4df7a7ea6513093ede59');

-- --------------------------------------------------------

--
-- Table structure for table `det_upgrade`
--

CREATE TABLE IF NOT EXISTS `det_upgrade` (
`id_detail` int(11) NOT NULL,
  `upgrade_id` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `versi` tinyint(2) NOT NULL COMMENT 'Hanya untuk Additional Figures (upgrade_id 1) (0: default, 1: jikamedium body dicentang)',
  `nama_detail` varchar(255) NOT NULL COMMENT 'Field tidak digunakan (Delete later)',
  `hari` float NOT NULL,
  `harga` bigint(20) NOT NULL,
  `is_checked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `det_upgrade`
--

INSERT INTO `det_upgrade` (`id_detail`, `upgrade_id`, `paket_id`, `versi`, `nama_detail`, `hari`, `harga`, `is_checked`) VALUES
(10, 1, 1, 0, '', 0.25, 1000, 1),
(11, 1, 2, 0, '', 0.5, 2000, 1),
(12, 1, 3, 0, '', 0.75, 3000, 1),
(13, 1, 4, 0, '', 0.25, 4000, 1),
(14, 2, 1, 0, '', 0.25, 1000, 1),
(15, 2, 2, 0, '', 0.5, 2000, 1),
(16, 2, 3, 0, '', 0.75, 3000, 1),
(17, 2, 4, 0, '', 0.25, 4000, 1),
(18, 1, 1, 1, '', 0.25, 1500, 1),
(19, 1, 2, 1, '', 0.5, 2500, 1),
(20, 1, 3, 1, '', 1, 3500, 1),
(21, 1, 4, 1, '', 0.25, 4500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
`id_email` int(11) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id_email`, `keperluan`, `isi`) VALUES
(1, 'konfirmasi order', '<p><strong>Terima kasih sudah memilih Fentroart sebagai jasa ilustrasi digital anda.</strong></p><p>Pesanan anda akan diproses setelah anda melakukan konfirmasi pembayaran ke nomor rekening berikut:</p><p style="text-align:center"><strong>BNI -&nbsp;0348358857 / BCA - 1230529121</strong></p><p style="text-align: center;">&nbsp;</p><p style="text-align: center;">Mohon kirimkan resi transfer anda ke:&nbsp;</p><p style="text-align:center"><strong>WHATSAPP: 081586600737</strong></p><p style="text-align:center">atau</p><p style="text-align:center"><strong>LINE: @FENTROART (use @)</strong></p><p style="text-align:center"><strong>Terima Kasih :)&nbsp;</strong></p><p style="text-align:center">&nbsp;</p><p><strong>Salam -Fentroart-</strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `media_cetak`
--

CREATE TABLE IF NOT EXISTS `media_cetak` (
`id_media` int(11) NOT NULL,
  `nama_media` varchar(200) NOT NULL,
  `hari` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `deskripsi_media` text NOT NULL,
  `weight` int(11) NOT NULL COMMENT 'dalam gram',
  `length` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `tipe_warna` int(11) NOT NULL COMMENT '0 = Warna Universal, 1 = Berdasarkan id_media',
  `show_warna_primer` tinyint(1) NOT NULL,
  `show_warna_sekunder` tinyint(1) NOT NULL,
  `show_shipping` tinyint(1) NOT NULL COMMENT '0 = tidak kena shipping, 1 = kena shipping',
  `harga_shipping` bigint(20) NOT NULL,
  `berat_shipping` int(11) NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media_cetak`
--

INSERT INTO `media_cetak` (`id_media`, `nama_media`, `hari`, `harga`, `deskripsi_media`, `weight`, `length`, `height`, `width`, `tipe_warna`, `show_warna_primer`, `show_warna_sekunder`, `show_shipping`, `harga_shipping`, `berat_shipping`, `date_add`) VALUES
(1, 'Pigura A4 (20x30cm)', 1, 55000, '', 500, 0, 0, 0, 1, 1, 1, 1, 5000, 720, '2017-04-02 15:07:07'),
(2, 'Pigura A3 (30x45cm)', 1, 75000, '', 600, 0, 0, 0, 1, 1, 1, 0, 0, 0, '2017-04-02 15:07:07'),
(3, 'Pigura A2 (40x60cm)', 1, 135000, '', 700, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2017-04-02 15:07:07'),
(4, 'Pigura A1 (60x80cm)', 1, 200000, '', 800, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2017-04-02 15:07:07'),
(5, 'Uniquebox A', 2, 55000, '', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2017-04-02 15:07:07'),
(6, 'Uniquebox B', 2, 75000, '', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2017-04-02 15:07:07'),
(7, 'Uniquebox Large', 2, 125000, '', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2017-04-02 15:07:07'),
(8, 'Tumbler A', 1, 35000, '', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2017-04-02 15:07:07'),
(9, 'Tumbler B', 1, 30000, '', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, '2017-04-02 15:07:07'),
(10, 'Notebook A5', 1, 55000, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-04-02 15:07:07'),
(11, 'Notebook B5', 1, 65000, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-04-02 15:07:07'),
(12, 'Puzzle', 2, 55000, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-04-02 15:07:07'),
(13, 'Puzzle+Box', 2, 70000, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-04-02 15:07:07'),
(14, 'Bantal', 3, 75000, '', 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, '2017-04-02 15:07:07'),
(15, 'Mug Only', 2, 35000, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2017-04-02 15:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `media_cetak_desc`
--

CREATE TABLE IF NOT EXISTS `media_cetak_desc` (
`id_desc` int(11) NOT NULL,
  `nama_desc` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media_cetak_desc`
--

INSERT INTO `media_cetak_desc` (`id_desc`, `nama_desc`, `deskripsi`) VALUES
(1, 'media_cetak', 'Untuk pemesanan cetak diatas 10pcs, konfirmasi ke Contact Person terlebih dahulu. \r\n<br>Pengiriman <strong>pigura</strong> di luar kota Malang hanya tersedia ukuran A4 dan A3. \r\n<br>Pengiriman <strong>pigura</strong> di luar kota Malang akan dikirim <strong>tanpa kaca</strong> karena pihak kurir tidak menerima barang kaca.');

-- --------------------------------------------------------

--
-- Table structure for table `new_upgrade`
--

CREATE TABLE IF NOT EXISTS `new_upgrade` (
`id_upgrade` int(11) NOT NULL,
  `nama_upgrade` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL COMMENT 'Deskripsi untuk sisi user',
  `keterangan` text NOT NULL COMMENT 'Keterangan untuk admin',
  `is_checked` tinyint(1) NOT NULL DEFAULT '0',
  `multi_value` int(1) NOT NULL COMMENT 'Tipe item upgrade. 0: single item, 1: multi item (tabel det_upgrade)',
  `hari` float NOT NULL,
  `harga` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_upgrade`
--

INSERT INTO `new_upgrade` (`id_upgrade`, `nama_upgrade`, `deskripsi`, `keterangan`, `is_checked`, `multi_value`, `hari`, `harga`) VALUES
(1, 'Additional Figures', 'Penambahan wajah/kepala (+1 day @3kepala)', 'Harga default Additional Figures untuk tiap paketnya. Harga akan berubah secara otomatis jika Medium Body dicentang oleh user', 1, 1, 0, 0),
(2, 'Custom Background', 'Request background di luar opsi ready design background FENTROART di Instagram fentroart.design', '', 1, 1, 0, 0),
(3, 'Include Source File', 'File editable berformat Corel (.cdr) ver. 15.0', '', 1, 0, 0, 30000),
(4, 'Free License', 'Kami tidak akan mencantumkan logo pada file/produk pesanan. Kami juga tidak akan menggunakan file/produk untuk kebutuhan promosi.', '', 1, 0, 0, 25500),
(5, 'Custom Softfile Size', 'Ukuran bisa disesuaikan di luar size dari kita 3500x5000px / 30x45cm', '', 1, 0, 0, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `paket_ilustrasi`
--

CREATE TABLE IF NOT EXISTS `paket_ilustrasi` (
`id_paket` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `kode_paket` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` bigint(20) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_ilustrasi`
--

INSERT INTO `paket_ilustrasi` (`id_paket`, `nama_paket`, `kode_paket`, `deskripsi`, `harga`, `image`) VALUES
(1, 'Basic', 'basic', 'Kepala hingga pundak, warna mono, bisa tambah tulisan. No improve on look (sesuai foto). Res. 3500x5000px jpeg file.\r\nNb: Tidak semua wajah dapat mirip menggunakan tipe ini. Karena beberapa wajah ada yang karakternya pada shadingnya', 30000, ''),
(2, 'Standard', 'standard', 'Kepala hingga pundak, warna simpel, bisa tambah tulisan. Simple improve on look (ask cp first for custom request), 1x Revisi minor (tidak diluar briefing order) res. 3500x5000px jpeg file/30x45cm size.', 55000, ''),
(3, 'Premium', 'premium', 'Kepala hingga pundak, warna detail, bisa tambah tulisan. Hard improve on look (ask cp first for custom request), 1x Revisi minor (tidak diluar briefing order) res. 3500x5000px jpeg file/30x45cm size.', 100000, ''),
(4, 'Design Only', 'design', 'Tidak terdapat ilustrasi wajah.\r\n\r\nOpsi ready design on instagram <a href="http://www.instagram.com/fentro.design" target="_blank">fentro.design</a>', 26000, '');

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE IF NOT EXISTS `pemesan` (
`id_pemesan` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `no_line` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`id_pemesan`, `nama_pemesan`, `email`, `no_hp`, `no_line`) VALUES
(1, 'Dimas', 'virdana11@gmail.com', '0812478127 / 0124715', 'virdana10'),
(2, 'alksfjas flakjflka', 'alsd@jfhasfkjh', '0918481', 'kjashd aksd'),
(3, 'asfmasfkj', 'kjashfkja@kjasfhkj', '0982947', 'kjhsdkjash'),
(4, 'dsafaf', 'kjdh@kajhgakj', '09283591', 'kjshfas fakjsf'),
(5, 'Dimas', 'virdana11@gmail.com', '0999 / 08741847', 'asdjash'),
(6, 'Dimas Virdana', 'virdana10@gmail.com', '09715715 / 019248718', 'Virdana10'),
(7, 'Anadriv', 'as5lang.s@gmail.com', '09185156', 'anadriv11'),
(8, 'Dimasf', 'virdana11@gmail.com', '935891085190', 'kajsfh12489'),
(9, 'alksdasd', 'askjd@kjhfaf', '101029', 'akjshakjsfh'),
(10, 'anjaay', 'as5lang.s@gmail.com', '214714', 'kjashajkfh'),
(11, '', '', '', ''),
(12, 'aaa', 'aaa@ssss.aaa', '901841904', 'asdasdkasd'),
(13, 'Amadas', 'asdasd@kasjfa.man', 'asdads', 'asd'),
(14, 'kjahdskjah', 'kajsdh@ksjahfakjfh', 'ksjafhajfkh', 'askjfhakfjh'),
(15, 'kajhfajf', 'asfahf@kshfakj.asa', 'sakfhaf', 'akjhsakjfh'),
(16, 'Dasdasda', 'asd@samfna.com', '09124', 'kasa12'),
(17, '', '', '', ''),
(18, 'andem', 'asdn@kanfajf.vanv', '094810958109', 'kajhsakjfh'),
(19, 'klhasfkjahfjk', 'kjhsafkj@Kjhksjahfkj', '111111111111', '11111111111111'),
(20, 'klhasfkjahfjk', 'kjhsafkj@Kjhksjahfkj', '111111111111', '11111111111111'),
(21, 'klhasfkjahfjk', 'kjhsafkj@Kjhksjahfkj', '111111111111', '11111111111111'),
(22, '111111111111111', '111@111111111', '11111111111', '11111111111'),
(23, 'asd', 'asd@asd.com', 'asd', 'asd'),
(24, 'Dimas', 'virdana11@gmail.com', 'akjsdhaksjhdakjshd', 'kjsahfkajsfhkjh'),
(25, 'Dimas', 'virdana11@gmail.com', 'jghgjh', 'gjhghjg'),
(26, 'Dimas', 'virdana11@gmail.com', 'jghgjh', 'gjhghjg'),
(27, 'Dimas', 'virdana11@gmail.com', 'jghgjh', 'gjhghjg'),
(28, 'ajhsgasfhgh', 'virdana11@gmail.com', 'kajsfhkajfhkj', 'hkjhaskjfhkj'),
(29, 'ajhsgasfhgh', 'virdana11@gmail.com', 'kajsfhkajfhkj', 'hkjhaskjfhkj'),
(30, 'asajfsahsfg', 'virdana11@gmail.com', '098109811', 'lkjkjhkjhkjh'),
(31, 'Dimas Virdana', 'as5lang.s@gmail.com', '012941094109', 'akjshajsfh'),
(32, 'Dimas Virdana', 'virdana10@gmail.com', '0981498194', 'diamsd'),
(33, 'Dimas', 'virdana10@gmail.com', '10192814', 'oasajfh');

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE IF NOT EXISTS `penerima` (
`id_penerima` int(11) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `id_provinsi` int(11) NOT NULL COMMENT 'id_provinsi dari Rajaongkir API',
  `nama_provinsi` varchar(100) NOT NULL,
  `id_kota` int(11) NOT NULL COMMENT 'id_kota dari API Rajaongkir',
  `nama_kota` varchar(100) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerima`
--

INSERT INTO `penerima` (`id_penerima`, `nama_penerima`, `alamat`, `id_provinsi`, `nama_provinsi`, `id_kota`, `nama_kota`, `no_hp`) VALUES
(1, 'Anadriv', 'Jl. asjfhafjahs fkjasf kjasfjkahsf akjsfh', 11, 'Jawa Timur', 75, 'Blitar (Kota)', '0912481948'),
(2, 'asjfhajskfh', 'askjfhafkjhas fkajshf akjfsh', 11, 'Jawa Timur', 75, 'Blitar (Kota)', '98171985'),
(3, 'kjsahfjh', 'aksdhakjshjafh', 11, 'Jawa Timur', 179, 'Kediri (Kota)', '98179185'),
(4, 'jahsgdasjd', 'asjhgdajhsd ajshdgasdhg', 11, 'Jawa Timur', 256, 'Malang (Kota)', '012871287'),
(5, 'asdasd', '', 11, 'Jawa Timur', 247, 'Madiun (Kabupaten)', '09289184'),
(6, 'asdasdasd', 'askfhafjkh', 11, 'Jawa Timur', 75, 'Blitar (Kota)', '08241941'),
(7, '11111111111', '11111111111', 11, 'Jawa Timur', 179, 'Kediri (Kota)', '11111111111'),
(8, 'asd', 'asd', 11, 'Jawa Timur', 75, 'Blitar (Kota)', '124'),
(9, 'kashfkajshfkjashf', 'jhasfgjhagfjhagf', 11, 'Jawa Timur', 179, 'Kediri (Kota)', '987987987'),
(10, 'kjhjhkjh', '', 0, 'Pilih Provinsi', 0, 'Pilih Kota', '097987987'),
(11, 'kjhjhkjh', '', 0, 'Pilih Provinsi', 0, 'Pilih Kota', '097987987'),
(12, 'kjhjhkjh', '', 0, 'Pilih Provinsi', 0, 'Pilih Kota', '097987987'),
(13, 'aksjhdajfhkjh', 'klsakfjhakjfh', 0, 'Pilih Provinsi', 0, 'Pilih Kota', '9898798798'),
(14, 'aksjhdajfhkjh', 'klsakfjhakjfh', 0, 'Pilih Provinsi', 0, 'Pilih Kota', '9898798798'),
(15, 'nmasfbamnbfmnb', 'mnbasfmnbanm', 0, 'Pilih Provinsi', 0, 'Pilih Kota', '8121'),
(16, 'Dimas Virdana', 'Jl Pasfnasfnamsfnamsfn', 11, 'Jawa Timur', 256, 'Malang (Kota)', '09832918918'),
(17, 'Wanna', 'kjashfkjahfkja', 11, 'Jawa Timur', 179, 'Kediri (Kota)', '09890248');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
`id_pesanan` int(11) NOT NULL,
  `pemesan_id` int(11) NOT NULL,
  `penerima_id` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `total_harga` bigint(20) NOT NULL COMMENT 'tanpa ongkir & shipping',
  `total_hari` float NOT NULL,
  `grandtotal` bigint(20) NOT NULL COMMENT 'Total_harga + ongkir + shipping',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0 = Dipesan; 1 = Dibayar; 2 = Dikirim; 3 = Revisi ; 4 = Selesai',
  `date_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `pemesan_id`, `penerima_id`, `paket_id`, `total_harga`, `total_hari`, `grandtotal`, `status`, `date_add`) VALUES
(1, 7, 1, 1, 281000, 6.25, 287000, 0, '2017-04-18 02:49:36'),
(2, 8, 0, 4, 37000, 0.75, 37000, 0, '2017-04-18 07:34:56'),
(3, 9, 2, 2, 112000, 6.5, 118000, 0, '2017-05-22 07:20:04'),
(4, 10, 3, 3, 158000, 8.75, 166000, 0, '2017-05-22 07:27:17'),
(5, 11, 0, 2, 55000, 5, 55000, 0, '2017-07-10 03:03:26'),
(6, 12, 4, 2, 112000, 6.5, 122000, 0, '2017-07-10 03:05:40'),
(7, 13, 5, 1, 162000, 5.5, 175000, 0, '2017-07-10 03:46:35'),
(8, 14, 0, 3, 100000, 7, 100000, 0, '2017-07-10 04:18:13'),
(9, 15, 0, 3, 100000, 7, 100000, 0, '2017-07-10 04:19:04'),
(10, 16, 6, 2, 215500, 6, 221500, 1, '2017-07-10 07:02:21'),
(11, 22, 7, 3, 205000, 8, 221000, 0, '2017-08-14 08:53:39'),
(12, 23, 8, 3, 238000, 8.75, 244000, 1, '2017-08-14 09:03:44'),
(13, 24, 9, 3, 158000, 8.75, 171000, 0, '2017-08-14 09:31:15'),
(14, 25, 10, 3, 158000, 8.75, 163000, 0, '2017-08-14 09:35:05'),
(15, 26, 11, 3, 158000, 8.75, 163000, 0, '2017-08-14 09:37:20'),
(16, 28, 13, 3, 158000, 8.75, 163000, 0, '2017-08-14 09:47:13'),
(17, 30, 15, 3, 158000, 8.75, 163000, 0, '2017-08-14 09:55:00'),
(18, 31, 16, 3, 288600, 2.75, 295600, 0, '2017-08-18 02:14:53'),
(19, 32, 17, 2, 112000, 6.5, 125000, 0, '2017-08-18 03:31:40'),
(20, 33, 0, 4, 30000, 1.25, 30000, 0, '2017-08-18 04:08:38');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_detail`
--

CREATE TABLE IF NOT EXISTS `pesanan_detail` (
`id_detail_pesanan` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `id_paket` varchar(50) NOT NULL COMMENT 'id_paket dari Rajaongkir API',
  `medium_body` tinyint(1) NOT NULL,
  `nama_paket` varchar(255) NOT NULL,
  `warna_dominan` varchar(255) NOT NULL,
  `tambahan_tulisan` text NOT NULL,
  `background_stock` varchar(255) NOT NULL,
  `background_custom` text NOT NULL,
  `pose` int(11) NOT NULL COMMENT '1 = By Request, 2 = Terserah Fentroart',
  `text_pose` text NOT NULL,
  `improve` int(11) NOT NULL COMMENT '1 = By Request, 2 = Terserah Fentroart; 3 = Persiskan Foto',
  `text_improve` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan_detail`
--

INSERT INTO `pesanan_detail` (`id_detail_pesanan`, `pesanan_id`, `id_paket`, `medium_body`, `nama_paket`, `warna_dominan`, `tambahan_tulisan`, `background_stock`, `background_custom`, `pose`, `text_pose`, `improve`, `text_improve`, `foto`, `keterangan`) VALUES
(1, 1, 'reg', 1, 'JNE Reguler', 'hitam', 'Hello world', 'legend is here', '', 0, '', 0, '', '["7_image0_D18042017T094936.jpg"]', 'ga ada'),
(2, 2, 'reg', 1, 'JNE Reguler', 'merah', 'kjahfa jkahf', '', '', 0, '', 0, '', '["8_image0_D18042017T143456.jpg"]', 'kjahakjshakjhf'),
(3, 3, 'reg', 1, 'JNE Reguler', 'asdhasdka', 'kjhjkahsdajkhd', 'kjhaskjahf', '', 0, '', 0, '', '["9_image0_D22052017T142004.jpg","9_image1_D22052017T142004.jpg"]', '01924814'),
(4, 4, 'reg', 1, 'JNE Reguler', 'askjhakjfshakj', 'kjahsfkajhsfakjh', 'kjahsfkjahfkj', '', 0, '', 2, 'Penampilan akan kita buat semenarik mungkin sesuai dengan kreasi FENTROART', '["10_image0_D22052017T142717.jpg","10_image1_D22052017T142717.jpg"]', 'asjkdhaskj ahkja hsfkjhaf'),
(5, 5, 'reg', 1, 'JNE Reguler', '', '', '', '', 0, '', 0, '', '[]', ''),
(6, 6, 'reg', 1, 'JNE Reguler', 'asdkhasda', 'askfjhafkjh', 'aksjfhakfj', '', 0, '', 0, '', '["12_image0_D10072017T100540.png"]', 'skfjhasfkjahf'),
(7, 7, 'reg', 1, 'JNE Reguler', 'alsdkjaflkj', 'laskjafjk', '', '', 0, '', 0, '', '["13_image0_D10072017T104635.jpg"]', 'ksjhdfjahf'),
(8, 8, 'reg', 1, 'JNE Reguler', 'kasjfhakjh', 'kjhasfkjh', 'kjhkjahsf', '', 0, '', 2, 'Penampilan akan kita buat semenarik mungkin sesuai dengan kreasi FENTROART', '["14_image0_D10072017T111813.jpg"]', 'aksjfhafkjh'),
(9, 9, 'reg', 1, 'JNE Reguler', 'kasjhfakjh', 'kjhasfakjh', 'kjahskaj', '', 0, '', 1, ' asjkfhafjk', '["15_image0_D10072017T111904.jpg"]', 'asfkafjkh'),
(10, 10, 'reg', 1, 'JNE Reguler', 'asdasdd', 'asasfasf', 'asdads', '', 0, '', 0, '', '["16_image0_D10072017T140222.jpg"]', 'asdasdd'),
(11, 11, 'yes', 1, 'YES (Yakin Esok Sampai)', '11111111111', '11111111111', '11111111111', '', 0, '', 1, '11111111111', '["22_image0_D14082017T155339.jpg"]', '11111111111'),
(12, 12, 'reg', 1, 'Reguler', 'asd', 'asd', 'asd', '', 0, '', 1, 'asd', '["23_image0_D14082017T160344.jpg"]', 'asd'),
(13, 13, 'reg', 1, 'Reguler', 'jaksfhkajshf', 'akjshfakjsfhkjh', 'kjahsfkjahsfkjhaf', '', 0, '', 1, 'asfasfjasf', '["24_image0_D14082017T163115.jpg"]', 'asfklahsfljkahsf'),
(14, 14, 'reg', 1, 'Reguler', 'jhgjhg', 'jhg', 'jhgjh', '', 0, '', 1, 'jhgjhgjhgjh', '["25_image0_D14082017T163505.jpg"]', 'jhgjhghjg'),
(15, 15, 'reg', 1, 'Reguler', 'jhgjhg', 'jhg', 'jhgjh', '', 0, '', 1, 'jhgjhgjhgjh', '["26_image0_D14082017T163720.jpg"]', 'jhgjhghjg'),
(16, 16, 'reg', 1, 'Reguler', 'hkjhskjhkj', 'hkjhkjhk', 'jhkjhkjh', '', 0, '', 1, 'kjhkjhkjhkjh', '["28_image0_D14082017T164713.png"]', 'jhghgjhg'),
(17, 17, 'reg', 1, 'Reguler', 'kjhkjhkjhkjhkjh', 'kjhkjhkjh', 'kjhkjhkjhjkh', '', 0, '', 1, 'jhg', '["30_image0_D14082017T165500.jpg"]', 'hjgjhgjhg'),
(18, 18, 'yes', 1, 'YES (Yakin Esok Sampai)', 'Biru', 'Happy Coding', '?', '', 2, 'Pose akan kita buat semenarik mungkin sesuai dengan kreasi FENTROART', 2, 'Penampilan akan kita buat semenarik mungkin sesuai dengan kreasi FENTROART', '["31_image0_D18082017T091453.jpg"]', 'Tidak ada'),
(19, 19, 'reg', 1, 'Reguler', 'askjdhasdjhkjh', 'askjhakjfhakjfh', 'kjashfakjhfakjfh', '', 0, '', 0, '', '["32_image0_D18082017T103140.jpg"]', 'ashsfuh aisfuaisfuhifauhuia'),
(20, 20, 'reg', 1, 'Reguler', 'oiasuoaifu', 'oiuasofiu', 'oiuaosifuoiu', '', 0, '', 0, '', '["33_image0_D18082017T110838.jpg"]', 'ashfakjsfhakjsfh');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_media_cetak`
--

CREATE TABLE IF NOT EXISTS `pesanan_media_cetak` (
`id_pesanan_media` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `hari` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `weight` int(11) NOT NULL COMMENT 'dalam gram',
  `warna_primer` int(11) NOT NULL COMMENT 'id_warna ',
  `warna_sekunder` int(11) NOT NULL COMMENT 'id_warna',
  `harga_shipping` bigint(20) NOT NULL COMMENT 'harga shipping @media cetak',
  `berat_shipping` int(11) NOT NULL COMMENT 'berat shipping @media cetak'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan_media_cetak`
--

INSERT INTO `pesanan_media_cetak` (`id_pesanan_media`, `pesanan_id`, `media_id`, `jumlah`, `hari`, `harga`, `weight`, `warna_primer`, `warna_sekunder`, `harga_shipping`, `berat_shipping`) VALUES
(1, 1, 1, 1, 1, 55000, 500, 1, 0, 5000, 720),
(2, 1, 2, 1, 1, 75000, 600, 1, 0, 0, 0),
(3, 1, 14, 1, 3, 75000, 0, 1, 2, 0, 0),
(4, 3, 1, 1, 1, 55000, 500, 1, 0, 5000, 720),
(5, 4, 1, 1, 1, 55000, 500, 1, 0, 5000, 720),
(6, 6, 1, 1, 1, 55000, 500, 1, 0, 5000, 720),
(7, 7, 1, 1, 1, 55000, 500, 1, 0, 5000, 720),
(8, 7, 2, 1, 1, 75000, 600, 1, 0, 0, 0),
(9, 10, 3, 1, 1, 135000, 700, 1, 0, 0, 0),
(10, 11, 2, 1, 1, 75000, 600, 13, 0, 0, 0),
(11, 12, 3, 1, 1, 135000, 700, 1, 0, 0, 0),
(12, 13, 1, 1, 1, 55000, 500, 8, 9, 5000, 720),
(13, 14, 1, 1, 1, 55000, 500, 8, 9, 5000, 720),
(14, 15, 1, 1, 1, 55000, 500, 8, 9, 5000, 720),
(15, 16, 1, 1, 1, 55000, 500, 8, 9, 5000, 720),
(16, 17, 1, 1, 1, 55000, 500, 8, 9, 5000, 720),
(17, 18, 3, 1, 1, 135000, 700, 1, 0, 0, 0),
(18, 19, 1, 1, 1, 55000, 500, 8, 9, 5000, 720);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_upgrade`
--

CREATE TABLE IF NOT EXISTS `pesanan_upgrade` (
`id_pesanan_upgrade` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `upgrade_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL DEFAULT '1',
  `hari` float NOT NULL,
  `harga` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan_upgrade`
--

INSERT INTO `pesanan_upgrade` (`id_pesanan_upgrade`, `pesanan_id`, `upgrade_id`, `jumlah`, `hari`, `harga`) VALUES
(1, 1, 1, 1, 0.25, 1000),
(2, 1, 3, 1, 0, 30000),
(3, 2, 1, 2, 0.5, 8000),
(4, 2, 2, 1, 0.25, 4000),
(5, 3, 1, 1, 0.5, 2000),
(6, 4, 1, 1, 0.75, 3000),
(7, 6, 1, 1, 0.5, 2000),
(8, 7, 1, 1, 0.25, 1000),
(9, 7, 2, 1, 0.25, 1000),
(10, 10, 4, 1, 0, 25500),
(11, 11, 3, 1, 0, 30000),
(12, 12, 1, 1, 0.75, 3000),
(13, 13, 1, 1, 0.75, 3000),
(14, 14, 1, 1, 0.75, 3000),
(15, 15, 1, 1, 0.75, 3000),
(16, 16, 1, 1, 0.75, 3000),
(17, 17, 1, 1, 0.75, 3000),
(18, 18, 1, 1, 0.75, 3000),
(19, 19, 1, 1, 0.5, 2000),
(20, 20, 1, 1, 0.25, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `scope_ilustrasi`
--

CREATE TABLE IF NOT EXISTS `scope_ilustrasi` (
`id_scope` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `softfile` tinyint(1) NOT NULL,
  `background` tinyint(1) NOT NULL,
  `check_medium` tinyint(1) NOT NULL,
  `medium` bigint(20) NOT NULL COMMENT 'harga tambahan untuk medium',
  `delivery_a` int(11) NOT NULL,
  `delivery_b` int(11) NOT NULL,
  `delivery_harga` bigint(20) NOT NULL COMMENT 'Harga tambahan untuk delivery_b',
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scope_ilustrasi`
--

INSERT INTO `scope_ilustrasi` (`id_scope`, `paket_id`, `color`, `softfile`, `background`, `check_medium`, `medium`, `delivery_a`, `delivery_b`, `delivery_harga`, `price`) VALUES
(1, 1, 'Monochrome', 1, 0, 1, 100, 3, 1, 15000, 45100),
(2, 2, 'Full Color', 1, 1, 1, 300, 5, 1, 30000, 85300),
(3, 3, 'Full Color', 1, 1, 1, 600, 7, 1, 50000, 150600),
(4, 4, 'Full Color', 0, 1, 0, 0, 1, 0, 0, 26000);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE IF NOT EXISTS `shipping` (
`id_shipping` int(11) NOT NULL,
  `media_id` int(11) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terms_conditions`
--

CREATE TABLE IF NOT EXISTS `terms_conditions` (
`id_terms` int(11) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms_conditions`
--

INSERT INTO `terms_conditions` (`id_terms`, `keperluan`, `isi`) VALUES
(1, 'Ketentuan & Kondisi', '<p><strong>Ketentuan dan Kondisi:</strong></p><ol><li>...........</li><li>.........</li><li>..........</li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `upgrade`
--

CREATE TABLE IF NOT EXISTS `upgrade` (
`id_upgrade` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `nama_upgrade` varchar(200) NOT NULL,
  `deskripsi_upgrade` text NOT NULL COMMENT 'Pisahkan tiap list dengan tanda titik koma ;',
  `hari` float NOT NULL,
  `harga` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upgrade`
--

INSERT INTO `upgrade` (`id_upgrade`, `paket_id`, `nama_upgrade`, `deskripsi_upgrade`, `hari`, `harga`) VALUES
(1, 0, 'Medium Body', 'Kepala hingga pinggang, bisa request pose', 0, 35000),
(2, 0, 'Additional Figures', 'Penambahan wajah/kepala (+1 day @3kepala)', 0, 85000),
(3, 0, 'Include Source File', 'File editable berformat Corel (.cdr) ver. 15.0', 0, 125000),
(4, 0, 'Free Copyright & License', 'Kami tidak akan mencantumkan logo pada file/produk pesanan.;Kami juga tidak akan menggunakan file/produk untuk kebutuhan promosi.', 0, 35000),
(5, 0, 'Custom Background', 'Request background di luar opsi ready design background FENTROART di Instagram?fentroart.design', 0, 35000),
(6, 0, 'Custom Softfile Size', 'Ukuran bisa disesuaikan di luar size dari kita 3500x5000px / 30x45cm', 0, 35000),
(7, 0, 'Add PNG/JPEG file', 'Kami akan menambahkan file format .png dengan background transparan', 0, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `upgrade_detail`
--

CREATE TABLE IF NOT EXISTS `upgrade_detail` (
`id_detail` int(11) NOT NULL,
  `upgrade_id` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `nama_detail` varchar(100) NOT NULL,
  `nama_input` varchar(100) NOT NULL COMMENT 'Value Unik! ',
  `hari` float NOT NULL,
  `harga` bigint(20) NOT NULL,
  `keterangan` text NOT NULL,
  `is_checked` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upgrade_detail`
--

INSERT INTO `upgrade_detail` (`id_detail`, `upgrade_id`, `paket_id`, `nama_detail`, `nama_input`, `hari`, `harga`, `keterangan`, `is_checked`) VALUES
(1, 2, 1, 'Basic A', 'basic_a', 1, 25000, '', 0),
(2, 2, 1, 'Basic B', 'basic_b', 2, 50000, 'Dengan medium body', 1);

-- --------------------------------------------------------

--
-- Table structure for table `upgrade_order`
--

CREATE TABLE IF NOT EXISTS `upgrade_order` (
`id_upgrade` int(11) NOT NULL,
  `nama_upgrade` varchar(200) NOT NULL,
  `deskripsi_upgrade` text NOT NULL,
  `is_checked` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upgrade_order`
--

INSERT INTO `upgrade_order` (`id_upgrade`, `nama_upgrade`, `deskripsi_upgrade`, `is_checked`) VALUES
(2, 'Additional Figures', 'Penambahan wajah/kepala (+1 day @3kepala)', 0),
(3, 'Include Source File', 'File editable berformat Corel (.cdr) ver. 15.0', 0),
(4, 'Free Copyright & License', 'Kami tidak akan mencantumkan logo pada file/produk pesanan.;Kami juga tidak akan menggunakan file/produk untuk kebutuhan promosi.', 0),
(5, 'Custom Background', 'Request background di luar opsi ready design background FENTROART di Instagram?fentroart.design', 0),
(6, 'Custom Softfile Size', 'Ukuran bisa disesuaikan di luar size dari kita 3500x5000px / 30x45cm', 0),
(7, 'Add PNG/JPEG file', 'Kami akan menambahkan file format .png dengan background transparan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `warna`
--

CREATE TABLE IF NOT EXISTS `warna` (
`id_warna` int(11) NOT NULL,
  `media_id` int(11) NOT NULL COMMENT '0 = Warna Universal',
  `warna` varchar(100) NOT NULL,
  `hex` varchar(10) NOT NULL,
  `kategori` tinyint(1) NOT NULL COMMENT '0 = Primer, 1 = Sekunder'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warna`
--

INSERT INTO `warna` (`id_warna`, `media_id`, `warna`, `hex`, `kategori`) VALUES
(1, 0, 'Hitam', '#000000', 0),
(2, 0, 'Abu-abu', '#D3D3D3', 1),
(3, 0, 'Merah', '#FF0000', 0),
(7, 0, 'test', '#981537', 1),
(8, 1, 'Aqua', '#00FFFF', 0),
(9, 1, 'Crimson', '#990000', 1),
(10, 1, 'White', '#FFFFFF', 1),
(11, 1, 'Green', '#00FF00', 0),
(12, 1, 'Black', '#000000', 0),
(13, 2, 'Black', '#000000', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `det_upgrade`
--
ALTER TABLE `det_upgrade`
 ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
 ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `media_cetak`
--
ALTER TABLE `media_cetak`
 ADD PRIMARY KEY (`id_media`);

--
-- Indexes for table `media_cetak_desc`
--
ALTER TABLE `media_cetak_desc`
 ADD PRIMARY KEY (`id_desc`);

--
-- Indexes for table `new_upgrade`
--
ALTER TABLE `new_upgrade`
 ADD PRIMARY KEY (`id_upgrade`);

--
-- Indexes for table `paket_ilustrasi`
--
ALTER TABLE `paket_ilustrasi`
 ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
 ADD PRIMARY KEY (`id_pemesan`);

--
-- Indexes for table `penerima`
--
ALTER TABLE `penerima`
 ADD PRIMARY KEY (`id_penerima`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
 ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
 ADD PRIMARY KEY (`id_detail_pesanan`);

--
-- Indexes for table `pesanan_media_cetak`
--
ALTER TABLE `pesanan_media_cetak`
 ADD PRIMARY KEY (`id_pesanan_media`);

--
-- Indexes for table `pesanan_upgrade`
--
ALTER TABLE `pesanan_upgrade`
 ADD PRIMARY KEY (`id_pesanan_upgrade`);

--
-- Indexes for table `scope_ilustrasi`
--
ALTER TABLE `scope_ilustrasi`
 ADD PRIMARY KEY (`id_scope`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
 ADD PRIMARY KEY (`id_shipping`);

--
-- Indexes for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
 ADD PRIMARY KEY (`id_terms`);

--
-- Indexes for table `upgrade`
--
ALTER TABLE `upgrade`
 ADD PRIMARY KEY (`id_upgrade`);

--
-- Indexes for table `upgrade_detail`
--
ALTER TABLE `upgrade_detail`
 ADD PRIMARY KEY (`id_detail`), ADD UNIQUE KEY `nama_input` (`nama_input`);

--
-- Indexes for table `upgrade_order`
--
ALTER TABLE `upgrade_order`
 ADD PRIMARY KEY (`id_upgrade`);

--
-- Indexes for table `warna`
--
ALTER TABLE `warna`
 ADD PRIMARY KEY (`id_warna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `det_upgrade`
--
ALTER TABLE `det_upgrade`
MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
MODIFY `id_email` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `media_cetak`
--
ALTER TABLE `media_cetak`
MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `media_cetak_desc`
--
ALTER TABLE `media_cetak_desc`
MODIFY `id_desc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `new_upgrade`
--
ALTER TABLE `new_upgrade`
MODIFY `id_upgrade` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `paket_ilustrasi`
--
ALTER TABLE `paket_ilustrasi`
MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
MODIFY `id_pemesan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `penerima`
--
ALTER TABLE `penerima`
MODIFY `id_penerima` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pesanan_detail`
--
ALTER TABLE `pesanan_detail`
MODIFY `id_detail_pesanan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pesanan_media_cetak`
--
ALTER TABLE `pesanan_media_cetak`
MODIFY `id_pesanan_media` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pesanan_upgrade`
--
ALTER TABLE `pesanan_upgrade`
MODIFY `id_pesanan_upgrade` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `scope_ilustrasi`
--
ALTER TABLE `scope_ilustrasi`
MODIFY `id_scope` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `terms_conditions`
--
ALTER TABLE `terms_conditions`
MODIFY `id_terms` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `upgrade`
--
ALTER TABLE `upgrade`
MODIFY `id_upgrade` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `upgrade_detail`
--
ALTER TABLE `upgrade_detail`
MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `upgrade_order`
--
ALTER TABLE `upgrade_order`
MODIFY `id_upgrade` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `warna`
--
ALTER TABLE `warna`
MODIFY `id_warna` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
