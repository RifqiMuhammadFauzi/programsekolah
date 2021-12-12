-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 05:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `hari` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL,
  `bulan` varchar(255) DEFAULT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `nama`, `kelas`, `hari`, `tanggal`, `bulan`, `tahun`, `keterangan`) VALUES
(2, 'Abrielian Hazzira', 'XI.RPL-3', 'Rabu', '13', 'Januari', '2020', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `Id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`Id`, `nama`) VALUES
(1, 'Agus Muhammad W, S.Pd.'),
(2, 'Asep Suhup Kirom B, S.Kom.'),
(3, 'Nurdiansyah Permana, S.T.'),
(4, 'M. Tafrihan Toha M, S.Pd.I., S.Kom.'),
(5, 'Riva Alwariq Auliyalloh, S.Pd.I., M.Pd.'),
(6, 'Nita Hayani, S.Pd.'),
(7, 'Ruhyat, S.Pd.'),
(8, 'Iis Teti Supianti, S.Pd.I.'),
(9, 'Vina Marlina, S.Pd.'),
(10, 'Asep Suherlan, S.Pd.');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `nis` int(11) DEFAULT 0,
  `id_guru` int(11) DEFAULT 0,
  `id_mapel` int(11) DEFAULT 0,
  `hari` varchar(10) DEFAULT '',
  `jam_mulai` varchar(10) DEFAULT '',
  `jam_selesai` varchar(10) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `nis`, `id_guru`, `id_mapel`, `hari`, `jam_mulai`, `jam_selesai`) VALUES
(18, 192010004, 5, 1, 'Senin', '07.00', '09.00'),
(19, 192010004, 7, 5, 'Senin', '09.00', '12.00'),
(20, 192010010, 6, 6, 'Selasa', '07.00', '08.00');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `Id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`Id`, `nama`) VALUES
(1, 'X RPL 1'),
(2, 'X RPL 2'),
(3, 'X RPL 3'),
(4, 'X RPL 4'),
(5, 'XI RPL 1'),
(6, 'XI RPL 2'),
(7, 'XI RPL 3'),
(8, 'XI RPL 4');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `Id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`Id`, `nama`) VALUES
(1, 'Pendidikan Agama dan Budi Pekerti'),
(2, 'Bahasa Indonesia'),
(3, 'Bahasa Inggris'),
(4, 'Pendidikan KewargaNegaraan'),
(5, 'Pendidikan Jasmani Olahraga dan Kesehatan'),
(6, 'Matematika'),
(7, 'Basis Data'),
(8, 'Pemograman Berorientasi Objek'),
(9, 'Pemodelan Perangkat Lunak'),
(10, 'Pemograman Web dan Perangkat Bergerak');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL DEFAULT 0,
  `nama` varchar(255) DEFAULT NULL,
  `kelas` varchar(255) DEFAULT NULL,
  `jeniskelamin` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `kelas`, `jeniskelamin`) VALUES
(192010004, 'Abrielian Hazzira', 'XI.RPL-3', 'Laki - Laki'),
(192010010, 'Ahmad Dani', 'XI.RPL-3', 'Laki - Laki'),
(192010079, 'Dea Sri Amanda', 'XI.RPL-3', 'Perempuan'),
(192010136, 'Fitri Fitriah Nurrahmah', 'XI.RPL-3', 'Perempuan'),
(192010317, 'Rifqi Muhamad Fauzi', 'XI.RPL-3', 'Laki - Laki'),
(0, '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
