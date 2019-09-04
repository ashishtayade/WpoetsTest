-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2019 at 12:06 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wpoetsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabname_tbl`
--

CREATE TABLE IF NOT EXISTS `tabname_tbl` (
  `tab_id` int(11) NOT NULL AUTO_INCREMENT,
  `tab_title` varchar(100) NOT NULL,
  `tab_icon` varchar(500) NOT NULL,
  PRIMARY KEY (`tab_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tabname_tbl`
--

INSERT INTO `tabname_tbl` (`tab_id`, `tab_title`, `tab_icon`) VALUES
(1, 'Learning', 'DL-learning.svg'),
(2, 'Technology', 'DL-technology.svg'),
(3, 'Communication', 'DL-communication.svg');

-- --------------------------------------------------------

--
-- Table structure for table `tabslider_tbl`
--

CREATE TABLE IF NOT EXISTS `tabslider_tbl` (
  `tabslider_id` int(11) NOT NULL AUTO_INCREMENT,
  `tabslider_title` varchar(500) NOT NULL,
  `tabslider_caption` varchar(500) NOT NULL,
  `tabslider_link` varchar(500) NOT NULL,
  `tabslider_img` varchar(500) NOT NULL,
  `tab_id` int(100) NOT NULL,
  PRIMARY KEY (`tabslider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tabslider_tbl`
--

INSERT INTO `tabslider_tbl` (`tabslider_id`, `tabslider_title`, `tabslider_caption`, `tabslider_link`, `tabslider_img`, `tab_id`) VALUES
(1, 'tab 1 ipsum dolor sit amet', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem', '#', 'DL-Learning-1.jpg', 1),
(2, 'tab 1 ipsum dolor sit amet', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui', '#', 'DL-Technology.jpg', 1),
(3, 'tab 1 ipsum dolor sit amet', 'we denounce with righteous indignation and dislike men', '#', 'DL-Communication.jpg', 1),
(4, 'tab 2 ipsum dolor sit amet', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem', '#', 'DL-Learning-1.jpg', 2),
(5, 'tab 2 ipsum dolor sit amet', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui', '#', 'DL-Technology.jpg', 2),
(6, 'tab 2 ipsum dolor sit amet', 'we denounce with righteous indignation and dislike men', '#', 'DL-Communication.jpg', 2),
(7, 'tab 3 ipsum dolor sit amet', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem', '#', 'DL-Learning-1.jpg', 3),
(8, 'tab 3 ipsum dolor sit amet', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui', '#', 'DL-Technology.jpg', 3),
(9, 'tab 3 ipsum dolor sit amet', 'we denounce with righteous indignation and dislike men', '#', 'DL-Communication.jpg', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
