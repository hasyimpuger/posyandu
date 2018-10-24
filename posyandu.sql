-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 05:11 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bayi`
--

CREATE TABLE `tb_bayi` (
  `id_bayi` int(11) NOT NULL,
  `nama_bayi` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bayi`
--

INSERT INTO `tb_bayi` (`id_bayi`, `nama_bayi`, `tanggal_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `status`) VALUES
(1, 'Hilman', '2018-09-04', 'Laki-Laki', 'Mail', 'Rose', 'Aktif'),
(3, 'Nana', '2018-09-17', 'Perempuan', 'Deddy', 'Nani', 'Aktif'),
(5, 'Ehsan', '2018-09-01', 'Laki-Laki', 'Azarudin', 'Maimunah', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_imunisasi`
--

CREATE TABLE `tb_imunisasi` (
  `id_imunisasi` int(11) NOT NULL,
  `id_bayi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_imunisasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penimbangan`
--

CREATE TABLE `tb_penimbangan` (
  `id_penimbangan` int(11) NOT NULL,
  `id_bayi` int(11) NOT NULL,
  `berat_bayi` double NOT NULL,
  `tinggi_bayi` double NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penimbangan`
--

INSERT INTO `tb_penimbangan` (`id_penimbangan`, `id_bayi`, `berat_bayi`, `tinggi_bayi`, `tanggal`) VALUES
(1, 1, 3.4, 60, '2018-10-24'),
(2, 3, 3, 50, '2018-10-24'),
(3, 5, 4, 50, '2018-10-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bayi`
--
ALTER TABLE `tb_bayi`
  ADD PRIMARY KEY (`id_bayi`);

--
-- Indexes for table `tb_imunisasi`
--
ALTER TABLE `tb_imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`);

--
-- Indexes for table `tb_penimbangan`
--
ALTER TABLE `tb_penimbangan`
  ADD PRIMARY KEY (`id_penimbangan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bayi`
--
ALTER TABLE `tb_bayi`
  MODIFY `id_bayi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_imunisasi`
--
ALTER TABLE `tb_imunisasi`
  MODIFY `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_penimbangan`
--
ALTER TABLE `tb_penimbangan`
  MODIFY `id_penimbangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
