-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 11:43 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itdesign`
--

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `id_design` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `pembuat` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`id_design`, `id_kategori`, `nama`, `pembuat`, `tanggal`, `mobile`, `email`, `harga`, `deskripsi`, `gambar`, `status`) VALUES
(1, 1, 'Cross', 'M. Darmawan Fadilah', '2016-12-01', '081123456789', 'darmawan@itdesign.com', 200000, 'Ini merupakan logo cross', 'design-1.png', 1),
(2, 1, 'Infinite Logo', 'Baskoro Ade Prabowo', '2016-12-13', '081123456789', 'baskoro@itdesign.com', 120000, 'Ini merupakan logo infinite yang berarti logo yang tidak ada putusnya.', 'design-2.png', 0),
(3, 2, 'Power Logo', 'M. Darmawan Fadilah', '2016-12-10', '081123456789', 'darmawan@itdesign.com', 100000, 'Ini merupakan user interface power', 'design-1.png', 0),
(4, 1, 'Ibas Choco & Coffee', 'Baskoro Ade Prabowo', '2016-12-10', '081123456789', 'baskoro@itdesign.com', 350000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'design-4.jpg', 0),
(5, 4, 'Orang Bergaris', 'Baskoro Ade Prabowo', '2016-12-09', '081123456789', 'baskoro@itdesign.com', 530000, 'Ini merupakan desain banner orang bergaris', 'design-5.png', 1),
(6, 4, 'Matahari', 'M. Darmawan Fadilah', '2016-12-07', '081123456789', 'darmawan@itdesign.com', 175000, 'Ini merupakan desain banner matahari buatanku', 'design-6.jpg', 1),
(7, 5, 'Kartu Nama 1', 'Pembuat 1', '2015-10-10', '081123456789', 'email@email.com', 329000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'design-1.png', 1),
(8, 6, 'Undangan 1', 'Pembuat 1', '2016-08-12', '081123456789', 'email@email.com', 222000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'design-1.png', 1),
(9, 6, 'Undangan 2', 'M. Ilham Habibi', '2016-12-19', '081123456789', 'mild17.ak@gmail.com', 150000, 'Gatau apaan ya', 'design-1.png', 1),
(10, 4, 'Banner Lagi', 'Rudi Syahruddin', '2014-11-02', '081123456789', 'rudisyahruddin@itdesign.com', 150000, 'Ini merupakan contoh banner Conan Edogawa', 'design-10.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL DEFAULT '',
  `kategori_icon` varchar(50) DEFAULT NULL,
  `kategori_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `kategori_icon`, `kategori_details`) VALUES
(1, 'Logo', 'cubes', 'Jadikan produk Anda semakin dikenal dunia'),
(2, 'User Interface', 'desktop', 'Ingin aplikasi Anda User Friendly? Solusinya ada pada kami'),
(3, 'Template Website', 'television', 'Promosikan produk Anda kepada dunia melalui website yang bagus'),
(4, 'Banner', 'fa', 'Ingin acara Anda dilirik pengunjung? Desain banner kami solusinya'),
(5, 'Kartu Nama', 'address-card', 'Dengan hanya melihat desain kartu nama kami? Anda langsung diingat orang lain'),
(6, 'Kartu Undangan', 'envelope', 'Undangan pernikahan? Undangan acara? Undangan seminar? Semuanya ada pada kami');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `pembeli` varchar(50) DEFAULT NULL,
  `id_design` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `konfirmasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `pembeli`, `id_design`, `bayar`, `konfirmasi`) VALUES
(1, 'Achmad Dejan Firdianza', 3, 1, 1),
(2, 'Ilham', 2, 0, 1),
(3, 'Rafi Aldiansyah Asikin', 4, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(25) NOT NULL DEFAULT '',
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nomor` varchar(12) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `nomor`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@itdesign.com', '000000000000', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`id_design`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `id_design` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
