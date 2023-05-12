-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 08:10 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_pakaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `ukuran` varchar(45) DEFAULT NULL,
  `warna` varchar(45) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(32) DEFAULT NULL,
  `tipe_pakaian_id` int(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`id`, `nama`, `ukuran`, `warna`, `stok`, `harga`, `tipe_pakaian_id`) VALUES
(1, 'pashmina ceruty premium', '180x50', 'lilac', 30, 50000, 1),
(2, 'Dress Silk', 'Allsize', 'Hitam', 20, 450000, 2),
(6, 'highwaisted_kulot', 'Allsize', 'Coklat_Susu', 80, 165000, 3),
(7, 'blouse', 'Allsize', 'coffe', 50, 100000, 2),
(8, 'baju lengan panjang', 'putih', 'allsize', 40, 40000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pakaian_id` int(45) DEFAULT NULL,
  `jumlah_pesanan` int(11) DEFAULT NULL,
  `email` varchar(35) NOT NULL,
  `alamat` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `tanggal`, `pakaian_id`, `jumlah_pesanan`, `email`, `alamat`) VALUES
(1, 'mia', '2023-04-06', 7, 10, 'miamila11@gmial.com', 'jl.h.abdul_gani'),
(2, 'bilqis', '2023-05-18', 6, 10, 'bilqis01@gmail.com', 'jl.ahmad_yani'),
(3, 'cinta', '2023-05-12', 1, 10, 'cintalove41@gmail.com', 'jl.ibnu_jamil'),
(4, 'dea amanda', '2023-05-11', 2, 10, 'ddamanda01@gmail.com', 'jl.Cinta.No55'),
(5, 'Michell', '2023-05-05', 8, 20, 'michell20@gmail.com', 'jl.ahmad_yani'),
(9, 'kamila', '2023-05-01', 2, 2, 'bilqiskamila71@gmail.com', 'jl.situNo.44'),
(15, 'udin', '2023-05-11', 1, 2, 'udin@gmail.com', 'jl.Cinta');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_pakaian`
--

CREATE TABLE `tipe_pakaian` (
  `id` int(11) NOT NULL,
  `tipe` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tipe_pakaian`
--

INSERT INTO `tipe_pakaian` (`id`, `tipe`) VALUES
(1, 'Hijab'),
(2, 'Baju'),
(3, 'Celana');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pakaian_1_idx` (`tipe_pakaian_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan1` (`pakaian_id`);

--
-- Indexes for table `tipe_pakaian`
--
ALTER TABLE `tipe_pakaian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tipe_pakaian`
--
ALTER TABLE `tipe_pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD CONSTRAINT `fk_pakaian_tipe1` FOREIGN KEY (`tipe_pakaian_id`) REFERENCES `tipe_pakaian` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan1` FOREIGN KEY (`pakaian_id`) REFERENCES `pakaian` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
