-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 02:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webakademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `kode_mk` text NOT NULL,
  `nama_mk` varchar(25) NOT NULL,
  `sks` int(2) NOT NULL,
  `smt` int(2) NOT NULL,
  `ruang` varchar(25) NOT NULL,
  `hari` varchar(7) NOT NULL,
  `jam` text NOT NULL,
  `dosen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`kode_mk`, `nama_mk`, `sks`, `smt`, `ruang`, `hari`, `jam`, `dosen`) VALUES
('EE501-19', 'JARINGAN KOMUNIKASI DATA', 2, 5, 'Ruang Kuliah 3', 'Kamis', '07.30- 09.10', 'Dr. Eng. Ir. Faisal Rahutomo, S.T., M.Kom');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(5) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `nim` int(7) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama_mahasiswa`, `nim`, `nama_dosen`, `status`) VALUES
(1, 'M Farid Hakim', 721077, 'Belum tau', 'Aktif'),
(2, 'Wahyu Heriyanto', 721077, 'IRWAN IFTADI, S.T., M.Eng', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `kode_mk` text NOT NULL,
  `nama_mk` varchar(40) NOT NULL,
  `sks` int(2) NOT NULL,
  `smt` int(2) NOT NULL,
  `ruang` varchar(25) NOT NULL,
  `hari` varchar(7) NOT NULL,
  `jam` text NOT NULL,
  `dosen` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`kode_mk`, `nama_mk`, `sks`, `smt`, `ruang`, `hari`, `jam`, `dosen`) VALUES
('EE3504-19', 'ALGORITMA DAN STRUKTUR DATA', 2, 5, 'Lab Komputer dan Jaringan', 'Senin', '13.00 - 15.00', 'Dr. Eng. Ir. Faisal Rahutomo, S.T., M.Kom'),
('EE3501-19 ', 'ANTENA DAN PROPAGASI', 3, 5, 'Lab Komputer dan Jaringan', 'Selasa', '07.30 - 09.10', 'Prof. Josaphat Tetuko Sri Sumantyo, B.Eng.,M.Eng., Ph.D.'),
('EE0502-19', 'MEKATRONIKA', 2, 5, 'Ruang Kuliah 3', 'Kamis', '10.50 - 12.30', 'Ir. Joko Slamet Saputro, S.Pd., M.T.'),
('EE3505-19 ', 'SISTEM INFORMASI ', 2, 5, 'Lab Komputer dan Jaringan', 'Senin', '15.30 - 17.10', 'Ir. Sutrisno, S.T., M.Sc., Ph.D.'),
('EE3502-19', 'SISTEM TERTANAM DAN PERIFERAL', 3, 5, 'Ruang Kuliah 3', 'Kamis', '10.50 - 12.30', 'Agus Ramelan, S.Pd., M.T');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'Wahyu Heriyanto', 'wahyu15heriyanto@student.uns.ac.id', '$2y$10$HAxANUu4VnGirGLS9KZz9.IcRaNTufd2qxlAixx3vTsr0dT2K8zkO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`nama_mk`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nama_mahasiswa`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`nama_mk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
