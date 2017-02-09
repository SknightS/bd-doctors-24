-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 08:00 AM
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
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `post_by` varchar(100) DEFAULT NULL,
  `b_title` varchar(10000) DEFAULT NULL,
  `short_note` mediumtext NOT NULL,
  `m_content` text,
  `category` varchar(100) DEFAULT NULL,
  `f_image` varchar(100) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `post_by`, `b_title`, `short_note`, `m_content`, `category`, `f_image`, `date`, `time`) VALUES
(1, 'admin', 'how to make heart good', '', '<p><img alt="" src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/14517629_10210877595724001_2683999833286325631_n.jpg?oh=68da15336a0854afd1a9cc3b1ef5534c&amp;oe=58ED1832" style="float:left; height:209px; margin:20px; width:200px" />ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\n', 'Heart', '', '2016-12-19', '12:27'),
(2, 'admin', 'make your EYE good', '', '<p>the quick brown fox jumps over the lazy. the quick brown fox jumps over the lazy. the quick brown fox jumps over the lazy. the quick brown fox jumps over the lazy. the quick brown fox jumps over the lazy. the quick brown fox jumps over the lazy </p>', 'EYE', '', '2014-12-14', NULL),
(3, 'admin', 'make heart great again', '', '<p><img alt="" src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/14517629_10210877595724001_2683999833286325631_n.jpg?oh=68da15336a0854afd1a9cc3b1ef5534c&amp;oe=58ED1832" style="float:left; height:209px; margin:20px; width:200px" />ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\n', 'Heart', '', '2016-12-19', NULL),
(4, 'admin', 'Care your ENT', '', '<p><img alt="" src="http://192.168.3.53/bd-doctors-24/images/home-image.jpg" style="height:1021px; width:1600px" /></p>\r\n', 'ENT', '', '2015-10-14', NULL),
(10, 'admin', 'care your health', 'the quick brown fox jumps over the lazy dog', '<p><img alt="" src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.0-9/15622575_1815722415423201_3118768221595147863_n.jpg?oh=d4e65506866eaef0f5a141ce043844c3&amp;oe=58F2601D" style="float:left; height:231px; margin:20px; width:200px" />Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\r\n', 'heart', '14900406_1023011481155352_4768715051129103434_n.jpg', '2016-12-21', '1482318709');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`id`, `d_name`, `d_spciality`, `d_degree`, `d_detail`, `d_hospital`, `d_chamber`, `d_fees_np`, `d_fees_rp`, `d_contact`, `d_district`, `d_ps`, `d_image`, `d_type`) VALUES
(38, 'Shamser', 'Eye', '', '', 'Uttara Crisent Hospital', '', '0', '', '01515691750', 'Dhaka', 'Uttara', 'shamser.jpg', 'Featured'),
(39, 'Sakib', 'Heart', '', '', 'National Heart Foundation', '', '0', '', '01672048703', 'Dhaka', 'Mirpur', 'sakib.jpg', 'Featured'),
(45, 'Tanvir', 'Cardilogy', 'MBBS, FCPS (Surgery), MS (Cardio Vascular & Thoracic surgery)', 'Practicing Cardiac surgery for more than 10 years with excellent outcome. Comfortable in doing Bypass Surgery on beating heart, Valve Surgery, ASD, VSD, PDa, ToOF Surgery. Clinical Fellowship in Cardiac Surgery (NUH , Singapore).', 'Uttara Crisent Hospital', 'House # 21, Road # 15, Sector # 3, Rabindra Smarani', '800', '600', '01924541180', 'Dhaka', 'Uttara', 'tanvir.jpg', 'Featured'),
(46, 'Monalisa', 'Eye', '', '', 'B. Baria Shadar Hospital', '', '0', '', '01924541180', 'B. Baria', 'Nabinagar', 'monalisa.jpg', ''),
(49, 'Mr. XYZ', 'Eye', '', '', '', '', '', '', '', '', '', '', 'Featured');

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
