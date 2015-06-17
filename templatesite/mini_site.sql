-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2015 at 05:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mini_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `dyn_menu`
--

CREATE TABLE IF NOT EXISTS `dyn_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) NOT NULL DEFAULT '',
  `link_url` varchar(100) NOT NULL DEFAULT '#',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `dyn_menu`
--

INSERT INTO `dyn_menu` (`id`, `label`, `link_url`, `parent_id`) VALUES
(1, 'Home', '/', 0),
(2, 'Image Gallery', 'image.php', 0),
(3, 'Videos', 'videos.php', 0),
(4, 'Contact Us', 'contact.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `image_gallery`
--

CREATE TABLE IF NOT EXISTS `image_gallery` (
  `image_id` int(10) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(50) NOT NULL,
  `image_file_path` varchar(50) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `image_gallery`
--

INSERT INTO `image_gallery` (`image_id`, `image_name`, `image_file_path`) VALUES
(1, 'image1', '6775415-beautiful-images.jpg'),
(2, 'image2', 'abstract_photography_300x225_43576_-_rainy_day.jpg'),
(3, 'image3', 'bgimage.jpg'),
(4, 'image4', 'Web-Design-17.jpg'),
(5, 'image5', 'background-wallpapers-24.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `page_content`
--

CREATE TABLE IF NOT EXISTS `page_content` (
  `page_no` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `content` varchar(500) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `module` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`page_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `page_content`
--

INSERT INTO `page_content` (`page_no`, `title`, `heading`, `content`, `image`, `module`) VALUES
(1, 'Home', 'This is the best site in the world Recognise', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised ', 'photos-82.jpg', NULL),
(2, 'Image Gallery', 'Image Gallery', 'Here is a selection of images I would like to share with you', NULL, 'gallery'),
(3, 'Video Gallery', 'Video Gallery', 'Here is a selection of videosI would like to share with you', NULL, 'videogallery'),
(4, 'Contact Us', 'Contact Us', 'If you would like to contact me call this number 085-12334554\n<br><br>\n<br><br>\nI can be found at this location', NULL, 'contact');

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

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE IF NOT EXISTS `video_gallery` (
  `video_id` int(10) NOT NULL AUTO_INCREMENT,
  `video_title` varchar(20) DEFAULT NULL,
  `video_desc` varchar(100) DEFAULT NULL,
  `video_url` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`video_id`, `video_title`, `video_desc`, `video_url`) VALUES
(1, 'George Carlin', 'George Carlin - pretty much explains it all. ', 'AtK_YsVInw8'),
(2, 'Poltergeist', 'In honor of the 100% unnecessary remake, we go looking for sins (and fun) in the original Poltergeis', 'n0Qh52XIdvs'),
(3, 'Woman In Black', 'Did you know Daniel Radcliffe was in movies other than Harry Potter? Well, a couple, at least. Here ', '36Du5PbsnkU');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `page_content`
--
ALTER TABLE `page_content`
  ADD CONSTRAINT `FK_borrowed` FOREIGN KEY (`page_no`) REFERENCES `dyn_menu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
