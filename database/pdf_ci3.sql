-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 03, 2021 at 10:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdf_ci3`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matkul`
--

CREATE TABLE `tbl_matkul` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_matkul` varchar(30) NOT NULL,
  `nama_matkul` varchar(80) NOT NULL,
  `semester` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_matkul`
--

INSERT INTO `tbl_matkul` (`id`, `id_user`, `kode_matkul`, `nama_matkul`, `semester`, `created_at`, `updated_at`) VALUES
(1, 1, 'TIF001', 'Pemrograman Dasar', 1, '2021-03-03 10:00:51', '2021-03-03 10:00:51'),
(2, 1, 'TIF002', 'Pemrograman Mobile', 1, '2021-03-03 10:01:14', '2021-03-03 10:01:14'),
(3, 1, 'TIF003', 'Jaringan Komputer', 1, '2021-03-03 10:01:14', '2021-03-03 10:01:14'),
(4, 1, 'TIF004', 'Metodologi Penelitian', 1, '2021-03-03 10:01:30', '2021-03-03 10:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Gagas Sangga Pratama', '2021-03-03 09:59:32', '2021-03-03 09:59:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
