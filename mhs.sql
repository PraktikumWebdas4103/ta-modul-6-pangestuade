-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 05:53 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `nim` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kls` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `alamat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='pengguna';

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`nim`, `username`, `password`, `nama`, `kls`, `jk`, `fakultas`, `hobi`, `alamat`) VALUES
('6701174053', 'ade', 'a562cfa07c2b1213b3a5c99b756fc206', 'Ade Pangestu', 'D3MI-41-01', 'Laki-laki', 'FIT', 'Kayang', 'Brebes'),
('6701174065', 'sherla', 'a562cfa07c2b1213b3a5c99b756fc206', '', '', '', '', '', ''),
('6701174104', 'Ade', 'a562cfa07c2b1213b3a5c99b756fc206', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `id` int(3) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `cerita` text NOT NULL,
  `id_pengguna` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id`, `judul`, `cerita`, `id_pengguna`, `tanggal`, `foto`) VALUES
(7, 'Ngapak', 'Modifikasi dari soal Jurnal 6 dengan menambahkan :\r\n1. Setelah user melakukan login, user akan berada pada halaman awal yang menampilkan data diri user.\r\n2. Pada halaman awal pengguna terdapat menu untuk melakukan edit yang merupakan link redirect ke halaman editprofile.php\r\n3. Pada halaman awal juga terdapat menu untuk melakukan posting cerita yang merupakan redirect ke halaman posting.php\r\n4. Pada halaman posting terdapat inputan textarea sebagai tempat user membuat cerita yang akan di posting, form inputan posting dengan ketentuan rows=20 cols=80.\r\ndibawah form inputan textarea tedapat inputan untuk upload foto\r\nsetelah user menekan tombol submit dilakukan pengecekan terhadap jumlah kata yang di input, jumlah kata minimal 30 kata.\r\n5. Terdapat menu lihat postingan yang akan redirect ke halaman daftarpostingan.php yang akan menampilkan semua data postingan yang pernah di post oleh user terebut dan pada setiap posting dapat dilakukan pengeditan.\r\n6. Terdapat menu semua postingan untuk melihat semua postingan dari user lain dengan menampilkan nama user dan data yang diposting.\r\n7. Menu yang ada akan selalu muncul disetiap halaman.\r\n\r\nKebutuhan:\r\n1. form pendaftaran dan login yang telah dibuat pada saat jurnal 6\r\n2. file halamanawal.php\r\n3. file posting.php\r\n4. file daftarposting.php\r\n5. file semuaposting.php\r\n6. file editprofile.php\r\nketerangan:\r\nfile yang ada pada data kebutuhan wajib ada, tambahkan file lainya jika dibutuhkan.', '6701174053', '2018-10-11', 'maxresdefault.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
