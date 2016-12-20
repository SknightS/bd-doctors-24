-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2016 at 12:21 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shamser`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `id` int(10) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `d_spciality` varchar(100) NOT NULL,
  `d_hospital` varchar(100) NOT NULL,
  `d_contact` varchar(20) NOT NULL,
  `d_location` varchar(500) NOT NULL,
  `d_image` varchar(1000) NOT NULL,
  `d_type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`id`, `d_name`, `d_spciality`, `d_hospital`, `d_contact`, `d_location`, `d_image`, `d_type`) VALUES
(1, 'shamser', 'eye', 'eye hospital bangladesh', '01659864563', 'Dhanmondi', '', 'Featured'),
(2, 'shamser', 'eye', 'eye hospital bangladesh', '0124545', 'Dhanmondi', '', 'Featured'),
(3, 'shamser', 'eye', 'eye hospital bangladesh', '012345', 'Dhanmondi', 'image/', 'Featured'),
(4, 'shamser', 'eye', 'eye hospital bangladesh', '012345', 'Dhanmondi', '', 'Featured'),
(5, 'sakib', 'eye', 'eye hospital bangladesh', '32434', 'Dhanmondi', '', 'Featured'),
(6, 'sakib', 'eye', 'eye hospital bangladesh', '32434', 'Dhanmondi', '', 'Featured'),
(7, 'shamser', 'eye', 'eye hospital bangladesh', '32434', 'Dhanmondi', '', 'Featured'),
(8, 'shamser', 'eye', 'eye hospital bangladesh', '3434', 'Dhanmondi', '', 'Featured'),
(9, 'shamser', 'eye', 'eye hospital bangladesh', '3434234', 'Dhanmondi', '13244712_10204804416710432_1566443500901791551_n.jpg', 'Featured'),
(35, 'sakib', 'eye', 'eye hospital bangladesh', '123546465', 'mirpur', 'BeFunky Collage.jpg', 'Featured'),
(11, 'shamser', 'eye', 'eye hospital bangladesh', '3434', '3434', 'BeFunky Collage.jpg', 'Featured'),
(30, 'forhad', 'reality', 'nai', '34234', 'Dhanmondi', 'BeFunky Collage.jpg', 'Featured'),
(29, 'Dr. Amin ', 'eye', 'eye hospital bangladesh', '34324', 'Dhanmondi', 'BeFunky Collage.jpg', 'Featured'),
(31, 'zakir', 'all', 'DMC', '324244', 'Dhanmondi', 'BeFunky Collage.jpg', 'Featured'),
(32, 'Sakib', 'Heart', 'heart Foundation', '3424', '3234', 'BeFunky Collage.jpg', 'Featured'),
(33, 'shamser', 'eye', 'eye hospital bangladesh', '345424', 'Dhanmondi', '14900406_1023011481155352_4768715051129103434_n.jpg', 'Featured'),
(36, 'amin', 'null', 'null', '132131', 'jindabazar', '', 'Featured'),
(37, 'shamser', 'eye', 'asdf', 'sdaf ', 'df', 'BeFunky Collage.jpg', 'Featured');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
