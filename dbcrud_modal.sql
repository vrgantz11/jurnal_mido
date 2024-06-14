-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 08:44 AM
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
-- Database: `dbcrud_modal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurnal1`
--

CREATE TABLE `jurnal1` (
  `id` int(11) NOT NULL,
  `timing` varchar(25) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `instruksi` varchar(25) NOT NULL,
  `target` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurnal1`
--

INSERT INTO `jurnal1` (`id`, `timing`, `kategori`, `instruksi`, `target`, `status`, `deskripsi`) VALUES
(11, 'Sebelum Istirahat', 'Referensi', 'mas aji', 'mencapai 300', 'Belum Tercapai', 'kretek tak tak dor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurnal1`
--
ALTER TABLE `jurnal1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurnal1`
--
ALTER TABLE `jurnal1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
