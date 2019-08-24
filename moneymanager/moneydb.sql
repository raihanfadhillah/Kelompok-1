-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 06:48 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moneydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_laporan`
--

CREATE TABLE `tabel_laporan` (
  `id_laporan` int(11) NOT NULL,
  `kode_pemasukan` char(10) NOT NULL,
  `nama_pemasukan` varchar(30) NOT NULL,
  `tgl_pemasukan` date NOT NULL,
  `kode_pengeluaran` char(10) NOT NULL,
  `nama_pengeluaran` varchar(30) NOT NULL,
  `tgl_pengeluaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pemasukan`
--

CREATE TABLE `tabel_pemasukan` (
  `kode_pemasukan` char(10) NOT NULL,
  `nama_pemasukan` varchar(30) NOT NULL,
  `dibuat` varchar(30) NOT NULL,
  `tgl_dibuat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pengeluaran`
--

CREATE TABLE `tabel_pengeluaran` (
  `kode_pengeluaran` char(10) NOT NULL,
  `nama_pengeluaran` varchar(30) NOT NULL,
  `dibuat` varchar(30) NOT NULL,
  `tgl_dibuat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(70) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_laporan`
--
ALTER TABLE `tabel_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tabel_pemasukan`
--
ALTER TABLE `tabel_pemasukan`
  ADD PRIMARY KEY (`kode_pemasukan`);

--
-- Indexes for table `tabel_pengeluaran`
--
ALTER TABLE `tabel_pengeluaran`
  ADD PRIMARY KEY (`kode_pengeluaran`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_laporan`
--
ALTER TABLE `tabel_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
