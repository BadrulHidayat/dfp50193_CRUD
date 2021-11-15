-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 04:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pelajar`
--

CREATE TABLE `data_pelajar` (
  `idpelajar` int(11) NOT NULL,
  `nama_pelajar` varchar(200) NOT NULL,
  `noIC_pelajar` varchar(12) NOT NULL,
  `noMatrik_pelajar` varchar(12) NOT NULL,
  `kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pelajar`
--

INSERT INTO `data_pelajar` (`idpelajar`, `nama_pelajar`, `noIC_pelajar`, `noMatrik_pelajar`, `kelas`) VALUES
(1, 'Badrul Hidayat', '011016090025', '18DDT19F1005', 'DDT5B / JTMK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pelajar`
--
ALTER TABLE `data_pelajar`
  ADD PRIMARY KEY (`idpelajar`),
  ADD UNIQUE KEY `noIC_pelajar` (`noIC_pelajar`),
  ADD UNIQUE KEY `noPendaftaran_pelajar` (`noMatrik_pelajar`),
  ADD UNIQUE KEY `noMatrik_pelajar` (`noMatrik_pelajar`),
  ADD KEY `kelas` (`kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pelajar`
--
ALTER TABLE `data_pelajar`
  MODIFY `idpelajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
