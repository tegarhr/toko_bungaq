-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 05:32 PM
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
-- Database: `toko_bunga`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `foto_barang` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `harga_barang`, `foto_barang`, `deskripsi`, `kategori`, `ukuran`) VALUES
('211', 'Buket Bunga Krisan', 20000, 'Bunga 1.jpg', 'Terdiri dari 3 tangkai bunga krisan dengan warna merah muda dan kuning serta dengan tambahan bunga daisy yang imut', 'Buket', 'Kecil'),
('212', 'Buket Bunga Krisan', 30000, 'Bunga 2.jpg', 'Terdiri dari 4 tangkai bunga krisan dengan warna merah muda, kuning, biru dan orange yang sangat cantik', 'Buket', 'Sedang'),
('213', 'Buket Bunga Krisan', 35000, 'Bunga 3.jpg', 'Terdiri dari 3 tangkai bunga krisan dengan warna merah, putih dan tambahan bunga daisy yang imut', 'Buket', 'Sedang');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` varchar(200) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'aca bocil', 'admin@gmail.com', 'a762133b35e3d91676900135731f98e6', 'admin'),
(2, 'acaa', 'aelyeonn@gmail.com', 'cfab709f0f1096c51ce26571ab5f5034', 'user'),
(3, 'acay', 'acay@gmail.com', '9de4a97425678c5b1288aa70c1669a64', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_form` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
