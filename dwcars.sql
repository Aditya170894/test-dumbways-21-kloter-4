-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 03:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dwcars`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
(1, 'Toyota'),
(2, 'Nissan'),
(3, 'Daihatsu'),
(4, 'Honda'),
(5, 'momo'),
(6, 'Honda');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `color` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `crate_time` time NOT NULL,
  `update_time` time NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `brand_id`, `image`, `color`, `description`, `crate_time`, `update_time`, `stock`) VALUES
(1, 'Alphard', 1, 'https://v2-cdn.moladin.com/moladin-assets/350x284/uploads/2020/03/05/66720be585965f81ba21e9a8c5349f39.jpg', 'silver', 'Pros: Memiliki banyak fitur kenyamanan.\r\n\r\nCons: Harga untuk tipe tertentu dianggap terlalu tinggi.\r\n\r\nVerdict: Untuk pengguna yang menginginkan kenyamanan teratas dari sebuah mobil MPV.', '00:00:00', '00:00:00', 11),
(2, 'Avanza', 1, 'https://v2-cdn.moladin.com/moladin-assets/850x420/uploads/2020/01/13/1aa64ecd959f5b2ab011bb5ea6706755.jpg', 'red', 'Pros: Keyless Entry, adanya fitur Traction Control, desain lebih modern.\r\n\r\nCons: Air Conditioner tidak dilengkapi fitur pengatur arah, kursi pada baris ketiga masih tergolong sempit.\r\n\r\nVerdict: Lebih cocok untuk kendaraan perkotaan dibandingkan untuk perjalanan jauh.', '00:00:00', '00:00:00', 10),
(3, 'Terios', 3, 'https://v2-cdn.moladin.com/moladin-assets/350x284/uploads/2020/03/09/463506031efb03204d80c4e86554a838.jpg', 'grey', 'Daihatsu Terios adalah salah satu tipe mobil SUV yang menjadi primadona di Indonesia. Bisa dibilang cukup laris, sejak diperkenalkan pertama kali oleh Astra Daihatsu Motor pada bulan Desember 2006 silam. Tampilan bodi yang begitu sporty dan modis dengan kualitas yang mumpuni, menjadikan Terios SUV impian banyak masyarakat di tanah air, sesuai dengan nama Teriors yang memiliki makna “membuat mimpi menjadi kenyataan.”', '00:00:00', '00:00:00', 10),
(4, 'Ayla', 3, 'https://v2-cdn.moladin.com/moladin-assets/850x420/uploads/2020/03/09/38f7e4bcd984b9ad3d3cf39a5efbaead.jpg', 'black', 'Murah, namun bukan murahan. Kalimat tersebut rasanya sangat tepat ditujukan pada Daihatsu Ayla yang dibanderol di bawah 100 juta rupiah. Salah satu kendaraan yang menjadi pilihan banyak konsumen di Indonesia ini sangat mengedepankan fungsi. Berkendara nyaman dengan dimensi yang tidak terlalu besar, cocok untuk di perkotaan dengan teknologi yang begitu ramah lingkungan', '00:00:00', '00:00:00', 20),
(5, 'X-Trail', 2, 'https://v2-cdn.moladin.com/moladin-assets/350x284/uploads/2020/03/09/844e08b48f63df2c4a042bfdb81bd402.jpg', 'black', 'Segmen mobil SUV kini memang menjadi salah satu pasar yang sangat menjanjikan di Indonesia. Salah satu pabrikan besar asal Jepang Nissan pun kini sudah merambah ke pasar mobil ini dengan meluncurkan produk andalannya di kelas ini yaitu Nissan X-Trail New. Mobil ini resmi masuk ke pasar dalam negeri pada tahun 2014 lalu tepatnya di ajang IIMS (Indonesia International Motor Show). Pada waktu itu, mobil ini menjadi mobil yang paling diminati para pengunjung. Bukan tanpa alasan, nampaknya masyarakat', '00:00:00', '00:00:00', 10),
(6, 'Serena', 2, 'https://v2-cdn.moladin.com/moladin-assets/850x420/uploads/2020/03/10/2fc090af3769da4717ebd3b1d8ad02ee.jpg', 'red', 'Sektor pasar mobil elite atau lebih tepatnya dinamakan dengan mobil MPV premium kini sedang menjadi pasar yang sangat menjanjikan di dalam negeri. Bukan tanpa alasan, kelebihan yang ditawarkan oleh mobil kelas premium memang tidak main-main. Ruang kabin yang luas dan lebar tentu membuat pengendara dan penumpangnya sangat nyaman ketika berada di dalam mobil kelas ini. Mobil jenis ini juga dirasa sangat cocok bagi Anda yang memiliki anggota keluarga yang banyak. Nissan, sebagai salah satu pabrikan', '00:00:00', '00:00:00', 10),
(7, 'Sirion', 3, 'https://v2-cdn.moladin.com/moladin-assets/850x420/uploads/2020/03/09/6e54ec7ecefe9eba557b181c2ce61219.jpg', 'red', 'Daihatsu Sirion merupakan pemain di segmen mobil hatchback yang diperkenalkan oleh Astra Daihatsu Motor di Indonesia. Baru pada bulan Februari tahun 2018 lalu, generasi terbaru dari Sirion kembali diluncurkan. Desainnya dirancang langsung oleh Perodua, dan sudah disesuaikan juga dengan selera pangsa pasar Asia, khususnya Indonesia. Mengingat model lamanya, bisa dibilang kurang mendulang kesuksesan lantaran desain bodinya yang teralu bulat. ', '00:00:00', '00:00:00', 10),
(8, 'mo', 1, 'sdgs', 'Putih', 'asfa', '00:00:00', '00:00:00', 1),
(9, '1223', 1, '12asfa', 'Putih', 'asfa', '00:00:00', '00:00:00', 1),
(10, 'Sirion', 3, 'https://v2-cdn.moladin.com/moladin-assets/850x420/uploads/2020/03/09/6e54ec7ecefe9eba557b181c2ce61219.jpg', 'red', 'Daihatsu Sirion merupakan pemain di segmen mobil hatchback yang diperkenalkan oleh Astra Daihatsu Motor di Indonesia. Baru pada bulan Februari tahun 2018 lalu, generasi terbaru dari Sirion kembali diluncurkan. Desainnya dirancang langsung oleh Perodua, dan sudah disesuaikan juga dengan selera pangsa pasar Asia, khususnya Indonesia. Mengingat model lamanya, bisa dibilang kurang mendulang kesuksesan lantaran desain bodinya yang teralu bulat. ', '00:00:00', '00:00:00', 10);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `address`) VALUES
(1, 'tri', 'trisu@gmail.com', 'jl. buntu gg. boy no.13'),
(2, 'samsul', 'samsul@gmail.com', 'jl. damai gg. bentrok no. 7'),
(3, 'lord', 'lord@gmail.com', 'jl. death god'),
(4, 'lord', 'lord@gmail.com', 'jl. death god');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pasword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pasword`) VALUES
(1, 'adit', 'aditya@gmail.com', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
