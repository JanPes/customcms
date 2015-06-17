-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2015 at 05:30 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin_tables`
--

-- --------------------------------------------------------

--
-- Table structure for table `dyn_menu`
--

CREATE TABLE IF NOT EXISTS `dyn_menu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) DEFAULT NULL,
  `link_url` varchar(50) DEFAULT NULL,
  `parent_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dyn_menu`
--

INSERT INTO `dyn_menu` (`id`, `label`, `link_url`, `parent_id`) VALUES
(1, 'login', 'login.php', NULL),
(2, 'update page', 'update.php', NULL),
(3, 'Add Page', 'addpage.php', NULL),
(4, 'Main Page', 'main.php', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_pass` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `page_content`
--

CREATE TABLE IF NOT EXISTS `page_content` (
  `page_no` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(500) DEFAULT NULL,
  `heading` varchar(50) DEFAULT NULL,
  `module` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`page_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `page_content`
--

INSERT INTO `page_content` (`page_no`, `content`, `heading`, `module`, `title`) VALUES
(1, 'This is the login page, please enter your username and password', 'Login page', 'login', 'Login Page'),
(2, 'Update or delete your content', 'Update page', 'update', 'Update'),
(3, 'Click below to add a new page', 'Add Page', 'addpage', 'Add Page'),
(4, 'Choose to edit or add a page', 'Main ', 'main', 'Main Page');

-- --------------------------------------------------------

--
-- Table structure for table `site_wide_var`
--

CREATE TABLE IF NOT EXISTS `site_wide_var` (
  `swv_id` int(10) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(50) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `footer_content` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`swv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `page_content`
--
ALTER TABLE `page_content`
  ADD CONSTRAINT `page_content_ibfk_1` FOREIGN KEY (`page_no`) REFERENCES `dyn_menu` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
