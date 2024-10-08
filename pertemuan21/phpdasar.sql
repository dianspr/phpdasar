-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2024 at 07:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Dian Supriyadi', '20220050000', 'aaa@gmail.com', 'Sistem Informasi', '65831dd20a711.jpg'),
(2, 'Aldo Yogasmara', '20220050150', 'bbb@gmail.com', 'Teknik Mesin', '65831e4a022d8.jpg'),
(3, 'Rizki Nur Azim', '20220050151', 'ccc@gmail.com', 'Teknik Informatika', '65842fbb309ea.jpg'),
(4, 'Davina Felisha Putri', '20220050152', 'ddd@gmail.com', 'Teknik Sipil', 'mobil4.jpg'),
(5, 'Gibran Akbar Revansa', '20220050154', 'eee@gmail.com', 'Akuntansi', 'mobil5.jpg'),
(6, 'Dafa Raihan', '20220050155', 'fff@gmail.com', 'Manajemen', 'mobil6.jpg'),
(7, 'Taufik Rahman', '20220050156', 'ggg@gmail.com', 'Sistem Informasi', 'mobil7.jpg'),
(10, 'Siska Putri', '20220050158', 'hhh@gmail.com', 'Sistem Informasi', '658320b754286.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'admin', '$2y$10$8JU30n3JnG5O5.ybjJb.7ey05CgtJWQied6pBTjdfU6SYzHrtM81a'),
(5, 'dian', '$2y$10$hJ57v1tv9XhrZ9qOh2qu/u59AFUCOz6.YCHLr0A1TNrR2QD2Ny1TW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
