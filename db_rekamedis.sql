-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 05:10 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rekamedis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kd_admin` int(11) NOT NULL,
  `nm_admin` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kd_admin`, `nm_admin`, `username`, `password`) VALUES
(1, 'Endah Kholifatus Sholihah', 'endahndung', 'endahndung'),
(2, 'Noval Harwin Rozin, S.Kom', 'cakwien', 'cakwien');

-- --------------------------------------------------------

--
-- Table structure for table `alergi_obat`
--

CREATE TABLE `alergi_obat` (
  `kd_alergi_obat` int(11) NOT NULL,
  `no_rm` int(11) NOT NULL,
  `kd_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alergi_obat`
--

INSERT INTO `alergi_obat` (`kd_alergi_obat`, `no_rm`, `kd_obat`) VALUES
(1, 1234, 0),
(2, 11111, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_obat`
--

CREATE TABLE `jenis_obat` (
  `kd_jenis_obat` int(11) NOT NULL,
  `nm_jenis` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_obat`
--

INSERT INTO `jenis_obat` (`kd_jenis_obat`, `nm_jenis`, `keterangan`) VALUES
(1, 'Kapsul', 'Diuntal'),
(2, 'Tablet', 'Dikunyah'),
(3, 'Sirup', 'Diminum');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kd_obat` int(12) NOT NULL,
  `nm_obat` varchar(45) NOT NULL,
  `stok` int(10) NOT NULL,
  `expired` date NOT NULL,
  `kd_jenis_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kd_obat`, `nm_obat`, `stok`, `expired`, `kd_jenis_obat`) VALUES
(2, 'antalgin', 23, '2018-04-04', 1),
(3, 'Spirulina', 2, '2018-04-07', 2),
(4, 'Calsium', 12, '2018-01-10', 2),
(5, 'antalgin', 4, '2018-04-09', 2),
(6, 'Tianshi Muncord Capsules', 4, '2018-04-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `obat_digunakan`
--

CREATE TABLE `obat_digunakan` (
  `kd_obat_digunakan` int(11) NOT NULL,
  `jml_digunakan` int(11) NOT NULL,
  `tgl_digunakan` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `kd_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat_digunakan`
--

INSERT INTO `obat_digunakan` (`kd_obat_digunakan`, `jml_digunakan`, `tgl_digunakan`, `keterangan`, `kd_obat`) VALUES
(1, 2, '2018-04-02', 'Disimpan', 0),
(4, 9, '2018-05-25', 'a', 0),
(5, 0, '0000-00-00', '', 0),
(6, 90, '2018-05-25', 'ooo', 2),
(7, 900, '2018-05-25', 'opo', 6);

-- --------------------------------------------------------

--
-- Table structure for table `obat_masuk`
--

CREATE TABLE `obat_masuk` (
  `kd_obat_masuk` int(11) NOT NULL,
  `jml_masuk` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat_masuk`
--

INSERT INTO `obat_masuk` (`kd_obat_masuk`, `jml_masuk`, `tgl_masuk`, `keterangan`) VALUES
(1, 12, '0000-00-00', 'Lunas'),
(2, 10, '2018-04-02', 'Fix');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `no_rm` int(20) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` enum('L','P') NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `awal_periksa` date NOT NULL,
  `alergi_obat` varchar(100) NOT NULL,
  `riwayat_penyakit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_rm`, `nama`, `tempat_lahir`, `tgl_lahir`, `jns_kelamin`, `prodi`, `no_hp`, `awal_periksa`, `alergi_obat`, `riwayat_penyakit`) VALUES
(1234, 'Endah KS', 'Banyuwangi', '2017-05-09', 'P', 'TI', 2147483647, '2018-03-21', '0', '0'),
(1235, 'Lina Fitriana', 'Banyuwangi', '2018-01-16', 'P', 'MBP', 0, '2018-03-21', 'Sirup', 'Batuk'),
(1236, 'Halili', 'Genteng', '2017-10-04', 'L', 'Mesin', 891123456, '2018-04-01', 'Paracetamol', 'Flu');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `kd_pem` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `pemeriksaan` varchar(50) NOT NULL,
  `terapi` varchar(40) NOT NULL,
  `no_rm` int(11) NOT NULL,
  `kd_penyakit` int(11) NOT NULL,
  `kd_admin` int(11) NOT NULL,
  `kd_obat_digunakan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`kd_pem`, `tgl`, `keluhan`, `pemeriksaan`, `terapi`, `no_rm`, `kd_penyakit`, `kd_admin`, `kd_obat_digunakan`) VALUES
(1, '2018-02-14', 'Flu', 'Coba', 'Cek Darah', 1234, 0, 1, 0),
(2, '2018-04-03', 'Pusing disertai meriang', 'CT Scan', 'Cardio', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `kd_penyakit` int(11) NOT NULL,
  `nm_penyakit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_penyakit`
--

CREATE TABLE `riwayat_penyakit` (
  `kd_riwayat_penyakit` int(11) NOT NULL,
  `kd_penyakit` int(11) NOT NULL,
  `no_rm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `alergi_obat`
--
ALTER TABLE `alergi_obat`
  ADD PRIMARY KEY (`kd_alergi_obat`);

--
-- Indexes for table `jenis_obat`
--
ALTER TABLE `jenis_obat`
  ADD PRIMARY KEY (`kd_jenis_obat`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indexes for table `obat_digunakan`
--
ALTER TABLE `obat_digunakan`
  ADD PRIMARY KEY (`kd_obat_digunakan`);

--
-- Indexes for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  ADD PRIMARY KEY (`kd_obat_masuk`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_rm`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`kd_pem`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- Indexes for table `riwayat_penyakit`
--
ALTER TABLE `riwayat_penyakit`
  ADD PRIMARY KEY (`kd_riwayat_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `kd_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `alergi_obat`
--
ALTER TABLE `alergi_obat`
  MODIFY `kd_alergi_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_obat`
--
ALTER TABLE `jenis_obat`
  MODIFY `kd_jenis_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `kd_obat` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `obat_digunakan`
--
ALTER TABLE `obat_digunakan`
  MODIFY `kd_obat_digunakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `obat_masuk`
--
ALTER TABLE `obat_masuk`
  MODIFY `kd_obat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `no_rm` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1237;

--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `kd_pem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `kd_penyakit` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_penyakit`
--
ALTER TABLE `riwayat_penyakit`
  MODIFY `kd_riwayat_penyakit` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
