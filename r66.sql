-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 03:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r66`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_biodata`
--

CREATE TABLE `t_biodata` (
  `id` int(10) NOT NULL,
  `Npm` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Telp` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `TempatLahir` varchar(100) NOT NULL,
  `TglLahir` varchar(100) NOT NULL,
  `JenisKelamin` varchar(100) NOT NULL,
  `Agama` varchar(100) NOT NULL,
  `Prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_biodata`
--

INSERT INTO `t_biodata` (`id`, `Npm`, `Nama`, `Telp`, `Email`, `Alamat`, `TempatLahir`, `TglLahir`, `JenisKelamin`, `Agama`, `Prodi`) VALUES
(1, '202043502067', 'Ahmad Badri', '085155332403', '25.ahmadbadri@gmail.com', 'Kp.sawah', 'bekasi', '25-03-2001', 'pria', 'islam', 'Teknik Informatika'),
(3, '202043503854', 'exel valery', '08675812821', 'exel@gmail.com', 'jl.rambutan', 'jakarta', '1-04-2001', 'pria', 'islam', 'teknik informatika'),
(4, '202043509483', 'Raihan Ramadhonn', '08752819221', 'raihan@gmail.com', 'cipakung', 'jakarta timur', '9-1-2001', 'pria', 'islam', 'DKV'),
(9, '202034593', 'arief', '0958932985', 'arief@gmail.com', 'depok', 'depok', '2023-05-17', 'pria', 'islam', 'teknik informatika'),
(10, '3030291029', 'didahw', '09835283232', 'didah@Gmail.com', 'jakarta', 'jakarta', '2023-05-18', 'wanita', 'islam', 'teknik mesin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'ahmad', '$2y$10$0Jww13gtbi7UE1Yv3T.1g.HGuxeMX0kKJGEIj/FDHxZ2ZmvwMIiIm'),
(3, 'badri', '$2y$10$QZOyN.VO/LkFyvVoPPN29OW6iswprB15y2nqlvxGawQ.Fl3wv6JI.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_biodata`
--
ALTER TABLE `t_biodata`
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
-- AUTO_INCREMENT for table `t_biodata`
--
ALTER TABLE `t_biodata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
