-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 05:27 AM
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
-- Table structure for table `advogados`
--

CREATE TABLE `advogados` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `oab` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `advogados`
--

INSERT INTO `advogados` (`id`, `nome`, `cpf`, `oab`) VALUES
(1, 'BRENO AUGUSTO PINTO DE MIRANDA', '61521363269', '12284'),
(2, 'BRENO DANTAS CESTARO', '20758098286', '12285'),
(3, 'FREDERICO SANTOS PAIVA', '15866832259', '12286'),
(4, 'IZABELLA DE ARAUJO FELIPE', '36188133254', '12287'),
(5, 'IVENS DE OLIVEIRA PINTO', '72453967282', '12288');

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
('2', '2', '0002-02-22', 'pf', 'Paolises', '30820921017', 'pf', 'Maul', '23331911046', 'adv', 'FREDERICO SANTOS PAIVA', '15866832259', '12286', '2019-11-12'),
('3', '3', '3333-03-31', 'pj', 'Empresa Tiegul', '23943530000179', 'pj', 'Empresa Tiegul', '23943530000179', 'jus', '', '', '', '2019-11-12'),
('4', '4', '4444-04-04', 'pf', 'Maul', '23331911046', 'pj', 'Empresa Brevi', '87515979000119', 'adv', 'IVENS DE OLIVEIRA PINTO', '72453967282', '12288', '2019-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `sacadores`
--

CREATE TABLE `sacadores` (
  `id` int(11) NOT NULL,
  `cpfCNPJ` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `natureza` char(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sacadores`
--

INSERT INTO `sacadores` (`id`, `cpfCNPJ`, `nome`, `natureza`) VALUES
(1, '30820921017', 'Paolises', 'pf'),
(2, '12522467069', 'Roekeaus', 'pf'),
(3, '23331911046', 'Maul', 'pf'),
(4, '23943530000179', 'Empresa Tiegul', 'pj'),
(5, '87515979000119', 'Empresa Brevi', 'pj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advogados`
--
ALTER TABLE `advogados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processo`
--
ALTER TABLE `processo`
  ADD PRIMARY KEY (`numProcesso`);

--
-- Indexes for table `sacadores`
--
ALTER TABLE `sacadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advogados`
--
ALTER TABLE `advogados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sacadores`
--
ALTER TABLE `sacadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
