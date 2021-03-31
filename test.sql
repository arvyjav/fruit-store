-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 12:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `apeshit1`
--

CREATE TABLE `apeshit1` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apeshit1`
--

INSERT INTO `apeshit1` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Hans', 'qingmo', 'Poseidonbro22', 'Admin'),
(2, 'Airboy', 'gummy', 'Airboy75', 'User'),
(11, 'J Cole', 'dae', '7%HGnU2a&Hg*3DS', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `apeshit2`
--

CREATE TABLE `apeshit2` (
  `angka` int(20) NOT NULL,
  `long_name` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `telephone` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `born_date` date NOT NULL,
  `born_place` varchar(290) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `fav_fruits` varchar(290) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apeshit2`
--

INSERT INTO `apeshit2` (`angka`, `long_name`, `adress`, `telephone`, `email`, `born_date`, `born_place`, `photo`, `fav_fruits`) VALUES
(16, 'Adi', 'Cul De Sac', 141241241, 'adisoviet@gmail.com', '1999-06-15', 'Spain', 'Historu2.png', 'Banana');

-- --------------------------------------------------------

--
-- Table structure for table `apeshit3`
--

CREATE TABLE `apeshit3` (
  `numbr` int(11) NOT NULL,
  `fruit_name` varchar(300) NOT NULL,
  `fruit_calories` varchar(255) NOT NULL,
  `vitamin_fruits` enum('Vitamin A',' Vitamin B','Vitamin C','Vitamin D','Vitamin E','Vitamin K') NOT NULL,
  `Protein` varchar(100) NOT NULL,
  `Total_Fat` varchar(80) NOT NULL,
  `Cholesterol` varchar(80) NOT NULL,
  `Sodium` varchar(80) NOT NULL,
  `Potassium` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apeshit3`
--

INSERT INTO `apeshit3` (`numbr`, `fruit_name`, `fruit_calories`, `vitamin_fruits`, `Protein`, `Total_Fat`, `Cholesterol`, `Sodium`, `Potassium`) VALUES
(9, 'Banana', '89', 'Vitamin C', '1.1 g', '0.3 g', '0 mg', '1 mg', '358 mg'),
(10, 'Watermelon', '30', 'Vitamin C', '0.6 g', '0.2 g', '0 mg', '1 mg', '112 mg');

-- --------------------------------------------------------

--
-- Table structure for table `apeshit4`
--

CREATE TABLE `apeshit4` (
  `angka` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL,
  `deskripsi_jabatan` varchar(1000) NOT NULL,
  `jam_kerja` enum('12 Jam','8 Jam','14 Jam','6 Jam') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apeshit4`
--

INSERT INTO `apeshit4` (`angka`, `nama_jabatan`, `deskripsi_jabatan`, `jam_kerja`) VALUES
(17, 'Aparat', '    Amanin ', '8 Jam');

-- --------------------------------------------------------

--
-- Table structure for table `apeshit5`
--

CREATE TABLE `apeshit5` (
  `id` int(11) NOT NULL,
  `long_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `telephone` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(290) NOT NULL,
  `history_job` varchar(300) NOT NULL,
  `jabatan` enum('OB','Seller','Security','Cashier','Programmer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apeshit5`
--

INSERT INTO `apeshit5` (`id`, `long_name`, `address`, `telephone`, `email`, `photo`, `birth_date`, `birth_place`, `history_job`, `jabatan`) VALUES
(7, 'Hans', 'Jl Mangga 12', 89199445, 'hans@gmail.com', 'lo.jfif', '1997-06-16', 'Jakarta', '-', 'Security'),
(9, 'Will Hans', 'Jl Pisang 10', 2147483647, 'ArvyJavier@hans.com', 'bc7bbc7bf3a7ff173149345d708996fb.jpg', '1994-06-06', 'Jakarta', 'pegawai Bank', 'Programmer');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Testing', 'email@email.com', 'Hello Everyone.'),
(2, 'abc', 'admin@localhost.com', '\'\r\n'),
(3, 'Musab Bin Abdul Bari', 'purecodingofficial@gmail.com', 'Hello Everyone. How are you. Please Subscribe Pure Coding YouTube Channel.'),
(4, 'ABC', 'abc@gmail.com', 'ABC'),
(17, 'Arvy Javier', 'ArvyJavier@gmail.com', 'Hna'),
(18, 'htaccess', 'arvyjavier3@gmail.com', 'Test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apeshit1`
--
ALTER TABLE `apeshit1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apeshit2`
--
ALTER TABLE `apeshit2`
  ADD PRIMARY KEY (`angka`);

--
-- Indexes for table `apeshit3`
--
ALTER TABLE `apeshit3`
  ADD PRIMARY KEY (`numbr`);

--
-- Indexes for table `apeshit4`
--
ALTER TABLE `apeshit4`
  ADD PRIMARY KEY (`angka`);

--
-- Indexes for table `apeshit5`
--
ALTER TABLE `apeshit5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apeshit1`
--
ALTER TABLE `apeshit1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `apeshit2`
--
ALTER TABLE `apeshit2`
  MODIFY `angka` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `apeshit3`
--
ALTER TABLE `apeshit3`
  MODIFY `numbr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `apeshit4`
--
ALTER TABLE `apeshit4`
  MODIFY `angka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `apeshit5`
--
ALTER TABLE `apeshit5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
