-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2016 at 04:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mvcproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'0',
  `username` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `status`, `username`) VALUES
(1, 'Umesh', 'Baral', 'umeshkisor@gmail.com', '3fc0a7acf087f549ac2b266baf94b8b1', b'0', 'ukbaral'),
(2, 'Onthana', 'Subba', 'ok_76@yahoo.com', '6572bdaff799084b973320f43f09b363', b'0', 'onthu'),
(3, 'Walter', 'Brown', 'brown@waltercompany.com', 'f1d577da5b6560447f1c0a1994ce9b1d', b'0', 'brown'),
(4, 'Biplov', 'Koirala', 'biplovkoirala@yahoo.com', 'a22926fae8b545f75291e131acfe0a57', b'0', 'biplovk'),
(5, 'Kamal', 'Tamang', 'foreveryoung@gmail.com', '4277dec6727e0702fd80f28030f918ec', b'0', 'kamaltamang'),
(7, 'Chetan', 'Bhattarai', 'aaron@hotmail.com', '200820e3227815ed1756a6b531e7e0d2', b'0', 'chetan'),
(8, 'Aaron', 'Baral', 'aaron_12@hotmail.com', 'a590a745981eb34e56ef930f42d633d8', b'0', 'aaron12'),
(34, 'Kamala', 'Thapa', 'kamala_thapa@thapa.cpm', 'a7c9fc01b4cd16552c2d678ee3d0d29b', b'0', 'kamalat'),
(33, 'Sushilji', 'Joshi', 'joshi@sushil.com', 'b3788bcd67c03c198bac32c51290f1cf', b'0', 'joshi'),
(12, 'test', 'test', 'test@test.com', '098f6bcd4621d373cade4e832627b4f6', b'0', 'test'),
(14, 'Sudip K', 'Rai', 'sudip@sudip.com', '2c894b5189ba77ab353dd628e897aa8f', b'0', 'sudiprai'),
(19, 'jiwan', 'gautam', 'gautam@jiwan.com', '55fa6db4ad04092ea4abb5912fdbec1a', b'0', 'jiwang'),
(23, 'Namita', 'Subba', 'subba_namita@hotmail.com', 'a267cda9c24d85261f2905b243274700', b'0', 'namita'),
(27, 'Umesh', 'Baral', 'aaron_ukb@hotmail.com', 'c703e90db53e474344efe1fbca9fc797', b'0', 'umeshb'),
(35, 'Ramesh', 'Baral', 'thetimbermarkglobal@gmail.com', '9c70933aff6b2a6d08c687a6cbb6b765', b'0', 'ramesh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
