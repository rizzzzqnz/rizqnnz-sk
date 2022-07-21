-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 07:53 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eposter2`
--

-- --------------------------------------------------------

--
-- Table structure for table `hakim`
--

CREATE TABLE `hakim` (
  `IDhakim` int(11) NOT NULL,
  `namaHakim` varchar(35) NOT NULL,
  `telHakim` varchar(12) NOT NULL,
  `kataLaluanH` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `IDnilai` int(11) NOT NULL,
  `aspek` varchar(15) NOT NULL,
  `markahPenuh` int(11) DEFAULT NULL,
  `IDhakim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertandingan`
--

CREATE TABLE `pertandingan` (
  `NOKP` varchar(12) DEFAULT NULL,
  `IDnilai` int(11) DEFAULT NULL,
  `tarikh` date DEFAULT NULL,
  `markah` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `peratus` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `NOKP` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kataLaluan` varchar(8) NOT NULL,
  `telefon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hakim`
--
ALTER TABLE `hakim`
  ADD PRIMARY KEY (`IDhakim`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`IDnilai`),
  ADD KEY `IDhakim` (`IDhakim`);

--
-- Indexes for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD KEY `NOKP` (`NOKP`),
  ADD KEY `IDnilai` (`IDnilai`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`NOKP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hakim`
--
ALTER TABLE `hakim`
  MODIFY `IDhakim` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `IDnilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_hakim` FOREIGN KEY (`IDhakim`) REFERENCES `hakim` (`IDhakim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pertandingan`
--
ALTER TABLE `pertandingan`
  ADD CONSTRAINT `penilaian_pertandingan` FOREIGN KEY (`IDnilai`) REFERENCES `penilaian` (`IDnilai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peserta_pertandingan` FOREIGN KEY (`NOKP`) REFERENCES `peserta` (`NOKP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
