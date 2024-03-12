-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 09:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg2`
--

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `id_gaji` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `bulan` int(2) NOT NULL,
  `tahun` int(6) NOT NULL,
  `total_gaji` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`id_gaji`, `id`, `bulan`, `tahun`, `total_gaji`) VALUES
(1, 202308, 4, 2004, 14000000),
(3, 202317, 2, 2024, 20000000);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(2) NOT NULL,
  `nama_jabatan` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Direktur'),
(2, 'Asisten Direktur'),
(3, 'HRD'),
(4, 'Staf HRD'),
(5, 'Finance'),
(6, 'Marketing'),
(7, 'HSE');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `idjab` int(2) DEFAULT NULL,
  `lahir` date NOT NULL,
  `alamat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `idjab`, `lahir`, `alamat`) VALUES
(202301, 'Dhea Pratiwi', 1, '2000-09-04', 'Karawang'),
(202302, 'Navara Pryanka', 2, '1999-05-20', ' Bekasi'),
(202303, 'Mella Anraeni', 2, '1993-08-28', 'Jakarta'),
(202304, 'Syifa Anisa', 3, '1952-03-04', 'Bandung'),
(202305, 'Fajariyah Nuril Ahya', 4, '1963-07-04', 'Karawang'),
(202306, 'Pendi Sarimiharja', 4, '1999-12-25', 'Bekasi'),
(202307, 'Pajar Permana', 4, '1976-06-14', 'Bogor'),
(202308, 'Ariel Alifa Maulana Putra', 4, '1975-06-22', 'Jakarta'),
(202309, 'Eva Shofiyanah', 4, '1994-10-12', 'Bandung'),
(202312, 'Innez Aprilliani', 5, '1990-05-25', 'Bekasi'),
(202313, 'Irene Febrina Samosir', 6, '1974-06-20', 'Karawang'),
(202315, 'Deden Mulyana', 6, '1999-12-25', 'Depok'),
(202317, 'Andi Syahputra', 7, '1990-02-02', ' Batak\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `biaya` int(10) NOT NULL,
  `pegawai_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `nama_project`, `tanggal`, `biaya`, `pegawai_id`) VALUES
(1, 'Pembangunan Website PT. Maskita Raya', '2023-12-07', 45000000, 202301),
(2, 'Pembangunan Aplikasi Rumah Sakit Hermina Jakarta', '2023-12-10', 150000000, 202304),
(3, 'Instalasi Cloud Server Pemda karawang', '2023-12-12', 175000000, 202305),
(4, 'Pelatihan Mikrotik Dasar Horizon University', '2023-12-21', 30000000, 202304),
(5, 'Pembuatan Aplikasi e-Office Kantor DPRD Kota Bekasi', '2023-12-28', 315000000, 202303),
(6, 'Pembuatan Lembaga Pelatihan Kerja (LPK) ke Jepang', '2024-02-14', 100000000, 202317);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id_gaji`),
  ADD KEY `id_pegawai` (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `pegawai_id` (`pegawai_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_gaji` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202318;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pegawai` (`id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
