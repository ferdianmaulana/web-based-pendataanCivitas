-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 04:04 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataancivitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E');

-- --------------------------------------------------------

--
-- Table structure for table `log_mahasiswa`
--

CREATE TABLE `log_mahasiswa` (
  `id_logm` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `npm` char(20) NOT NULL,
  `nip` char(20) NOT NULL,
  `tgl` date NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_mahasiswa`
--

INSERT INTO `log_mahasiswa` (`id_logm`, `id_matkul`, `id_kelas`, `npm`, `nip`, `tgl`, `keterangan`) VALUES
(1, 2, 2, '19082010009', '123456', '2020-12-11', 'Hadir'),
(2, 2, 2, '19082010009', '123456', '2020-12-12', 'Hadir'),
(3, 2, 2, '19082010009', '123456', '2020-12-13', 'Hadir'),
(4, 2, 2, '19082010009', '123456', '2020-12-14', 'Tidak Hadir'),
(5, 2, 2, '19082010009', '123456', '2020-12-15', 'Hadir'),
(6, 2, 5, '19082010103', '123456', '2020-12-11', 'Tidak Hadir'),
(7, 2, 5, '19082010103', '123456', '2020-12-12', 'Tidak Hadir'),
(8, 2, 5, '19082010103', '123456', '2020-12-13', 'Hadir'),
(9, 2, 5, '19082010103', '123456', '2020-12-14', 'Hadir'),
(10, 2, 5, '19082010103', '123456', '2020-12-15', 'Hadir'),
(11, 1, 4, '19082010009', '123456', '2020-12-11', 'Hadir'),
(12, 1, 4, '19082010103', '123456', '2020-12-11', 'Tidak Hadir'),
(13, 2, 2, '19082010101', '123456', '2020-12-11', 'Hadir'),
(14, 2, 2, '19082010101', '123456', '2020-12-12', 'Tidak Hadir'),
(15, 2, 2, '19082010101', '123456', '2020-12-13', 'Hadir'),
(16, 2, 2, '19082010101', '123456', '2020-12-14', 'Tidak Hadir'),
(17, 2, 2, '19082010101', '123456', '2020-12-15', 'Hadir'),
(18, 2, 2, '19082010102', '123456', '2020-12-11', 'Hadir'),
(19, 2, 2, '19082010102', '123456', '2020-12-12', 'Hadir'),
(20, 2, 2, '19082010102', '123456', '2020-12-13', 'Hadir'),
(21, 2, 2, '19082010102', '123456', '2020-12-14', 'Hadir'),
(22, 2, 2, '19082010102', '123456', '2020-12-15', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `log_staf`
--

CREATE TABLE `log_staf` (
  `id_logs` int(11) NOT NULL,
  `nip` char(20) NOT NULL,
  `tgl` date NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_staf`
--

INSERT INTO `log_staf` (`id_logs`, `nip`, `tgl`, `keterangan`) VALUES
(1, '123456', '2020-12-11', 'Hadir'),
(2, '123456', '2020-12-12', 'Tidak Hadir'),
(3, '123456', '2020-12-13', 'Hadir'),
(4, '123456', '2020-12-14', 'Hadir'),
(5, '123457', '2020-12-11', 'Tidak Hadir'),
(6, '123457', '2020-12-12', 'Hadir'),
(7, '123457', '2020-12-13', 'Hadir'),
(8, '123457', '2020-12-14', 'Tidak Hadir'),
(9, '123456', '2020-12-15', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` char(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`) VALUES
('19082010009', 'Zanna Chobita Majesty'),
('19082010101', 'Nadia Maulani'),
('19082010102', 'Ali Fauzi Fikri'),
('19082010103', 'Mar’atus Sholikhah Tiara');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_matkul`, `nama_matkul`) VALUES
(1, 'Data Mining'),
(2, 'Pemrograman Web'),
(3, 'Dasar Basis Data'),
(4, 'Pemrograman Dasar'),
(5, 'Big Data');

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `nip` char(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `role` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`nip`, `nama`, `jenis_kelamin`, `alamat`, `tgl_lahir`, `role`, `password`) VALUES
('123456', 'Ayasya Putri', 'Perempuan', 'Jl. Manggis No. 12, Tangerang ', '1976-03-12', 'Dosen', 'ce28eed1511f631af6b2a7bb0a85d636'),
('123457', 'Agung Sudjono', 'Laki-Laki', 'Jl. Semangka No. 123, Jakarta ', '1967-02-01', 'Karyawan', '9e014682c94e0f2cc834bf7348bda428'),
('123458', 'Maharani Safitri', 'Perempuan', 'Jl. Durian No. 06, Jakarta Bar', '1967-07-21', 'Dosen', 'e10adc3949ba59abbe56e057f20f883e'),
('99999', 'Admin', 'Laki-Laki', 'Jl. Bunga Kumis Kucing 01, Jak', '1967-04-02', 'Admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `log_mahasiswa`
--
ALTER TABLE `log_mahasiswa`
  ADD PRIMARY KEY (`id_logm`),
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `npm` (`npm`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `log_staf`
--
ALTER TABLE `log_staf`
  ADD PRIMARY KEY (`id_logs`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log_mahasiswa`
--
ALTER TABLE `log_mahasiswa`
  MODIFY `id_logm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `log_staf`
--
ALTER TABLE `log_staf`
  MODIFY `id_logs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_mahasiswa`
--
ALTER TABLE `log_mahasiswa`
  ADD CONSTRAINT `log_mahasiswa_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `mata_kuliah` (`id_matkul`),
  ADD CONSTRAINT `log_mahasiswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `log_mahasiswa_ibfk_3` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `log_mahasiswa_ibfk_4` FOREIGN KEY (`nip`) REFERENCES `staf` (`nip`);

--
-- Constraints for table `log_staf`
--
ALTER TABLE `log_staf`
  ADD CONSTRAINT `log_staf_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `staf` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
