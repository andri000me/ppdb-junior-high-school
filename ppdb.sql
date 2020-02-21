-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 05:08 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `password` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `level` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `nama`, `password`, `level`) VALUES
('admin', 'Rifky Lovanto Tea', 'admin', 'Admin'),
('dika2', 'Dika Meidaya Putra', 'dika', 'User'),
('imcrazy', 'withit', 'lol', 'Admin'),
('user', 'Lovanto', 'USER', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sekolahasal` varchar(50) NOT NULL,
  `sekolahtujuan` varchar(50) NOT NULL,
  `nilaimtk` int(11) NOT NULL,
  `nilaiipa` int(11) NOT NULL,
  `nilaiindo` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`nis`, `nama`, `sekolahasal`, `sekolahtujuan`, `nilaimtk`, `nilaiipa`, `nilaiindo`, `total`, `status`) VALUES
('098276417897089', 'oihugy', 'SDN Negeri 1 Bandung', 'SMPN 1 Bandung', 9, 5, 8, 22, 'Tidak Diterima'),
('098765432345678', 'kljhgfd', 'SDN Negeri 1 Bandung', 'SMPN 1 Bandung', 2, 2, 2, 6, 'Tidak Diterima'),
('098765434567899', 'jhgfd', 'SDN Negeri 1 Bandung', 'SMPN 1 Bandung', 6, 34, 8, 48, 'Diterima'),
('098765435465768', 'lkjhgfdsfghjjk', 'SDN Negeri 1 Bandung', 'SMPN 1 Bandung', 9, 9, 9, 27, 'Diterima'),
('099876765543546', 'kljhgcfx', 'SDN Negeri 3 Bandung', 'SMPN 4 Bandung', 9, 5, 6, 20, 'Diterima'),
('786756456576879', 'jkhjhgfgfx', 'SDN Negeri 1 Bandung', 'SMPN 4 Bandung', 9, 7, 4, 20, 'Tidak Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `nosd` varchar(15) NOT NULL,
  `sekolahasal` varchar(50) NOT NULL,
  `kepala` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`nosd`, `sekolahasal`, `kepala`, `alamat`, `telp`) VALUES
('018927287138311', 'SDN Negeri 1 Bandung', 'Dadang Sutisna', 'Jl Dipatiukur no 201', '02234569876'),
('089738948278779', 'SDN Negeri 2 Bandung', 'Asep Sutarya', 'Jl Pasir kaliki barat laut no 2000001', '023878273232232'),
('089738948278782', 'SDN Negeri 3 Bandung', 'Kitahiulah', 'Jl merdeka bandungku no 208293', '02287483434'),
('091729836991827', 'SDN Negeri 4 Bandung', 'Kitahiulah lieur', 'lawkjsjhadJSDKHAJFDJADKSAKFDSJDLAK', '092819230918'),
('123', 'sdn joan', 'johan adimulyo', 'jln dipatiukur', '081231231244');

-- --------------------------------------------------------

--
-- Table structure for table `sekolahsmp`
--

CREATE TABLE `sekolahsmp` (
  `nosmp` varchar(15) NOT NULL,
  `sekolahtujuan` varchar(50) NOT NULL,
  `min_nilai` int(11) NOT NULL,
  `kepala` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolahsmp`
--

INSERT INTO `sekolahsmp` (`nosmp`, `sekolahtujuan`, `min_nilai`, `kepala`, `alamat`, `telp`) VALUES
('000124874178711', 'SMPN 1 Bandung', 20, 'Nana Sudrajat', 'Jl Soekarno Hatta no.256', '0224567'),
('000124874178712', 'SMPN 2 Bandung', 18, 'Rilo Gay', 'Jl Soekarno Hatta no.250', '0223456'),
('003294820984093', 'SMPN 3 Bandung', 10, 'Eros in bandung', 'Jl dimana wae dot kom', '000232323232334'),
('024192849218498', 'SMPN 4 Bandung', 19, 'Didi Sutardi', 'Jl dimana mana hatiku senang', '0228489487844'),
('098765436475869', 'test2', 5, 'test2', 'test2', '567890987654456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`nosd`),
  ADD UNIQUE KEY `sekolahasal` (`sekolahasal`);

--
-- Indexes for table `sekolahsmp`
--
ALTER TABLE `sekolahsmp`
  ADD PRIMARY KEY (`nosmp`),
  ADD UNIQUE KEY `sekolahtujuan` (`sekolahtujuan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
