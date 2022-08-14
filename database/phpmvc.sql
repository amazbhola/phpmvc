-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 14, 2022 at 09:27 AM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `blog_photo` varchar(255) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `author_role` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`blog_id`),
  KEY `author_role` (`author_role`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `title`, `description`, `blog_photo`, `author_name`, `author_role`, `created_at`, `updated_at`) VALUES
(42, 'PHP | file_exists( ) Function', 'The file_exists() function in PHP is an inbuilt function which is used to check whether a file or directory exists or not.\r\nThe path of the file or directory you want to check is passed as a parameter to the file_exists() function which returns True on success and False on failure.\r\nfile_exists($path)\r\nParameters: The file_exists() function in PHP accepts only one parameter $path. It specifies the path of the file or directory you want to check.', 'Screenshot_1.jpg', 'sohel', 1, '2022-08-13 09:06:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

DROP TABLE IF EXISTS `personal_information`;
CREATE TABLE IF NOT EXISTS `personal_information` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `phone` int(17) DEFAULT NULL,
  `age` date DEFAULT NULL,
  `address` text,
  `sex` int(3) DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `experience` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  KEY `u_id` (`u_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

DROP TABLE IF EXISTS `portfolios`;
CREATE TABLE IF NOT EXISTS `portfolios` (
  `port_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `portfolio_link` text,
  `portfolio_image` varchar(255) NOT NULL,
  `portfolio_author` varchar(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`port_id`),
  KEY `portfolio_author` (`portfolio_author`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`port_id`, `title`, `portfolio_link`, `portfolio_image`, `portfolio_author`, `created_at`) VALUES
(12, 'TAILWINDCSS DASHBOARD 1', 'https://amazbhola.github.io/tailwindcss-assignment/', 'TAILWIND CSS DASHBOARD 1.png', 'sohel', '2022-08-12 14:51:59'),
(10, 'HTML TEMPLATE', 'https://amazbhola.github.io/Assignment-HTML/', 'HTML TEMPLATE.png', 'sohel', '2022-08-12 14:34:21'),
(11, 'ROW PHP NEWSPAPER', 'https://github.com/amazbhola/Newpaper.git', 'Newspaper.png', 'sohel', '2022-08-12 14:41:05'),
(13, 'PORTFOLIO ONE', 'http://localhost:81/phpmvc/portfolio/', 'PORTFOLIO ONE.png', 'sohel', '2022-08-12 14:54:26');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `setings_id` int(11) NOT NULL AUTO_INCREMENT,
  `welcome_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `site_logo` varchar(100) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `admin_role` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`setings_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`setings_id`, `welcome_title`, `description`, `site_logo`, `footer_text`, `admin_role`, `created_at`, `updated_at`) VALUES
(26, 'Welcome to My Portfolio Website', 'Welcome to My Portfolio Website  ', 'logo.png', 'Â© 2022 Md Fayezullah all rights reserved.', 1, '2022-08-07 09:41:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `address` text,
  `about_me` text,
  `birthday` date DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `username`, `password`, `email`, `profile_photo`, `address`, `about_me`, `birthday`, `phone`, `facebook`, `twitter`, `youtube`, `github`, `role`, `created_at`, `updated_at`) VALUES
(7, 'Fayezullah', 'e10adc3949ba59abbe56e057f20f883e', 'sohel@sohel.com', 'IMG_20220607_014552.jpg', '1 No Word, Bhola Pourashava, Bhola Sadar, Bhola                                                                                                                                                                                                                 ', 'I completed my course from A Learning and Earning Development Project in February 2017 and completed the course from Bitm in 2021 web app development with laravel and vue, batch-6 and completed the web development course from Kodeeo. ', NULL, '01854202093', 'https://www.facebook.com/fayezullahsohel', 'https://twitter.com/AmazBhola', 'youtube', 'https://github.com/amazbhola', 1, '2022-08-13 16:45:09', '2022-08-14 08:58:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
