-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2016 at 05:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bddoc24`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(50) NOT NULL,
  `a_username` varchar(50) NOT NULL,
  `a_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `a_name`, `a_username`, `a_pass`) VALUES
(1, 'Shamser', 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `d_district` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `d_district`) VALUES
(1, 'Jhenaidah'),
(2, 'B. Baria'),
(4, 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE IF NOT EXISTS `doctor_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(100) NOT NULL,
  `d_spciality` varchar(100) NOT NULL,
  `d_degree` varchar(500) NOT NULL,
  `d_detail` varchar(2000) NOT NULL,
  `d_hospital` varchar(100) NOT NULL,
  `d_chamber` varchar(1000) NOT NULL,
  `d_fees_np` varchar(5) NOT NULL,
  `d_fees_rp` varchar(5) NOT NULL,
  `d_contact` varchar(20) NOT NULL,
  `d_district` varchar(100) NOT NULL,
  `d_ps` varchar(100) NOT NULL,
  `d_image` varchar(1000) NOT NULL,
  `d_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`id`, `d_name`, `d_spciality`, `d_degree`, `d_detail`, `d_hospital`, `d_chamber`, `d_fees_np`, `d_fees_rp`, `d_contact`, `d_district`, `d_ps`, `d_image`, `d_type`) VALUES
(38, 'Shamser', 'Eye', '', '', 'Uttara Crisent Hospital', '', '0', '', '01515691750', 'Dhaka', 'Uttara', 'shamser.jpg', 'Featured'),
(39, 'Sakib', 'Heart', '', '', 'National Heart Foundation', '', '0', '', '01672048703', 'Dhaka', 'Mirpur', 'sakib.jpg', 'Featured'),
(45, 'Tanvir', 'Cardilogy', 'MBBS, FCPS (Surgery), MS (Cardio Vascular & Thoracic surgery)', 'Practicing Cardiac surgery for more than 10 years with excellent outcome. Comfortable in doing Bypass Surgery on beating heart, Valve Surgery, ASD, VSD, PDa, ToOF Surgery. Clinical Fellowship in Cardiac Surgery ( NUH , Singapore).', 'Uttara Crisent Hospital', 'Labaid Cardiac Hospital, Main Branch, House- 01 & 03, Road-04, Room No - 206 , Dhanmondi, Dhaka', '800', '600', '01924541180', 'Dhaka', 'Uttara', 'tanvir.jpg', ''),
(46, 'Monalisa', 'Eye', '', '', 'B. Baria Shadar Hospital', '', '0', '', '01924541180', 'B. Baria', 'Nabinagar', 'monalisa.jpg', 'Featured');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `d_hospital` varchar(100) NOT NULL,
  `d_district` varchar(100) NOT NULL,
  `d_ps` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `d_hospital`, `d_district`, `d_ps`) VALUES
(1, 'National Heart Foundation', 'Dhaka', 'Mirpur'),
(2, 'Uttara Crisent Hospital', 'Dhaka', 'Uttara'),
(5, 'B. Baria Shadar Hospital', 'B. Baria', 'Nabinagar');

-- --------------------------------------------------------

--
-- Table structure for table `pollice_station`
--

CREATE TABLE IF NOT EXISTS `pollice_station` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `d_ps` varchar(50) NOT NULL,
  `d_district` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pollice_station`
--

INSERT INTO `pollice_station` (`id`, `d_ps`, `d_district`) VALUES
(1, 'Kotchadpur', 'Jhenaidah'),
(2, 'Nabinagar', 'B. Baria'),
(5, 'Uttara', 'Dhaka'),
(6, 'Khilkhet', 'Dhaka'),
(7, 'Mirpur', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `spec`
--

CREATE TABLE IF NOT EXISTS `spec` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `spect` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `spec`
--

INSERT INTO `spec` (`id`, `spect`) VALUES
(1, 'Heart'),
(2, 'Eye'),
(9, 'ENT'),
(10, 'Cardilogy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
