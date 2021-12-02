-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 06:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(1, 'Raditya', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bukutamu`
--

CREATE TABLE `tb_bukutamu` (
  `id_tamu` varchar(25) NOT NULL,
  `tanggal` datetime NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `asal_instansi` varchar(100) NOT NULL,
  `keperluan` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bukutamu`
--

INSERT INTO `tb_bukutamu` (`id_tamu`, `tanggal`, `nama`, `kontak`, `asal_instansi`, `keperluan`, `foto`) VALUES
('161491793877483', '2021-03-05 11:18:58', 'Raditya', '081271234567', 'PT HIBRIDA JAYA', 'Rapat', '161491793877483.png'),
('161493234388379', '2021-03-05 15:19:03', 'Septia Permatasari', '089523451234', 'PT SURABAYA PERMAI', 'Rapat', '161493234388379.png'),
('161493236487338', '2021-03-05 15:19:24', 'Youl Yanto', '08929288282', 'PT PASAR BENGKULU SEMAPAN', 'Rapat', '161493236487338.png'),
('161493238418338', '2021-03-05 15:19:44', 'Ananda Dwi', '0822983981', 'PT BERKAH AMANAH', 'Rapat', '161493238418338.png'),
('161845464556018', '2021-04-15 09:44:05', 'Raditya', '081271234567', 'PT HIBRIDA JAYA', 'Rapat', '161845464556018.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_bukutamu`
--
ALTER TABLE `tb_bukutamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
