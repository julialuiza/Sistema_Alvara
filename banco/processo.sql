-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 06:12 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemaalvara`
--

-- --------------------------------------------------------

--
-- Table structure for table `processo`
--

CREATE TABLE `processo` (
  `numContaJud` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `numProcesso` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `dataValidade` date DEFAULT NULL,
  `natSacador1` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `nomeSacador1` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cpfCNPJSacador1` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `natSacador2` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomeSacador2` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpfCNPJSacador2` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `repProcessual` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `nomeAdv` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpfAdv` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oabAdv` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dataCad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `processo`
--

INSERT INTO `processo` (`numContaJud`, `numProcesso`, `dataValidade`, `natSacador1`, `nomeSacador1`, `cpfCNPJSacador1`, `natSacador2`, `nomeSacador2`, `cpfCNPJSacador2`, `repProcessual`, `nomeAdv`, `cpfAdv`, `oabAdv`, `dataCad`) VALUES
('1', '1', '1111-11-11', 'pf', 'Paolises', '30820921017', 'na', '', '', 'jus', '', '', '', '2019-11-11'),
('34535', '34534', '4444-05-04', 'pj', 'Roekeaus', '87515979000119', 'na', '', '', 'jus', '', '', '', '2019-11-11'),
('123', '8', '1111-11-11', 'pj', 'Por favor, selecione um sacador PF', '23943530000179', 'na', '', '', 'jus', '', '', '', '2019-11-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `processo`
--
ALTER TABLE `processo`
  ADD PRIMARY KEY (`numProcesso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
