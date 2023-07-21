-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 17, 2023 at 05:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasjwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(255) NOT NULL,
  `judul` text NOT NULL,
  `pengarang` text NOT NULL,
  `tahun_terbit` smallint(6) NOT NULL,
  `isbn` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `tahun_terbit`, `isbn`) VALUES
(12222321, 'penjajahan jepang', 'kisah nyata', 1945, 12312312),
(12222326, 'sangkuriang asikk', 'tidak', 1980, 131231221),
(12222328, 'hero', 'tidak tahu', 1900, 123123),
(12222329, 'batman', 'john', 2011, 131231231),
(12222330, 'si kancil', 'upin', 2021, 132123123),
(12222331, 'romeo and juliet', 'mikel', 1900, 1323123),
(12222332, 'the kingdom', 'drock', 2012, 12312),
(12222333, 'the batman', 'uci sanusi', 1700, 1312312),
(12222334, 'tips dan trik masuk kedinasan', 'said', 2019, 123123),
(12222335, 'keong emas', 'cerita', 1900, 21012312);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12222336;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
