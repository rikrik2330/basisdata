-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 05:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `no` int(5) NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nama_pegawai` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `gaji` decimal(10,0) DEFAULT NULL,
  `divisi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`no`, `nik`, `nama_pegawai`, `jabatan`, `gaji`, `divisi`) VALUES
(6, '97080003', 'Asep Jebew', 'Digital Marketing', '5000000', 'Marketing'),
(9, '97300003', 'Reren Sureren', 'Finance Manager', '3600000', 'Finance'),
(10, '87300001', 'Fitri Sulistiani', 'HR Manager', '4700000', 'HRD'),
(12, '97300009', 'Entis Sutisna', 'Front-End Dev', '3500000', 'IT'),
(15, '89150003', 'Reni Rismawati', 'Develover', '4600000', 'IT'),
(16, '87600004', 'Ryan Hidayat', 'Designer', '5000000', 'Creative'),
(17, '78030009', 'Anggraeni', 'Operation Manager', '4750000', 'Operasional'),
(18, '90360007', 'Dadang Samsudin', 'Software Engineer', '5100000', 'IT'),
(19, '98030003', 'Deri Handipa', 'Digital Marketing', '5000000', 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `no` int(5) NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nama_pegawai` varchar(100) DEFAULT NULL,
  `level` enum('admin','user','superuser') DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`no`, `nik`, `nama_pegawai`, `level`, `password`) VALUES
(1, '123', 'Rik Her', 'admin', 'admin'),
(2, '1234', 'Rikrik Herdi', 'admin', 'herdi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
