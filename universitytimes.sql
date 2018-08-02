-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2016 at 04:54 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `universitytimes`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(20) NOT NULL AUTO_INCREMENT,
  `category_name` text NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'home'),
(2, 'technology'),
(3, 'lifestyle'),
(4, 'sports'),
(5, 'politics'),
(6, 'business'),
(7, 'jobs');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `message` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES
('fjfjfj', 'pazo@gmail.com', 'hello', 'hello world im glad it has reached'),
('ghjklkjhg', 'ddd@gmail.com', 'dhjd', 'dhdhdcchjjjd');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `department_id` int(100) NOT NULL,
  `department_name` varchar(30) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `emp_registration`
--

CREATE TABLE IF NOT EXISTS `emp_registration` (
  `employee_id` int(100) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone_number` varchar(13) DEFAULT NULL,
  `hire_date` date NOT NULL,
  `salary` int(9) DEFAULT NULL,
  `department_id` int(100) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emp_registration`
--

INSERT INTO `emp_registration` (`employee_id`, `first_name`, `last_name`, `email`, `phone_number`, `hire_date`, `salary`, `department_id`) VALUES
(100, 'patrick', 'minega shyaka', 'minega25@gmail.com', '0706011222', '2016-11-16', 15000000, 120);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(30) NOT NULL,
  `password` varchar(41) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('minega26@gmail.com', '*F76AF95743CC9210C6D0DCA30E77CD9BC9DC34D0'),
('geofry@gmail.com', '*D474D52CD76836B3F51C037CF1C720738433E039'),
('ggokurapa@gmail.com', '*1468C3AC8807C7A636E3E4475D41F6DAEC7CAA95'),
('geosenjova@gmail.com', '*8CD786D83D2E28C71463F47EDC8180C04861FD0E'),
('roberttutu@gmail.com', '*E25B52D7FE46FC1D7D0592C1DD66B7C8C278C564'),
('gggggggg@fgf', '*92382392B73C20E71893CB4F77E53F35BAEF83C7'),
('keivn@gmail.com', '*D474D52CD76836B3F51C037CF1C720738433E039'),
('kanyangeb@gmail.com', '*DE64AD0292B4946C1BDD8535DED6A5873269114B'),
('patrickminega@gmail.com', '*C3A5D99F5FD41ADA56952490298441D5AAF14B66'),
('jjjjj@gmail.com', '*D30C0F51BB347349E36EF09D42DC3A380FE5F645');

-- --------------------------------------------------------

--
-- Table structure for table `reporter`
--

CREATE TABLE IF NOT EXISTS `reporter` (
  `post_id` int(20) NOT NULL AUTO_INCREMENT,
  `category_id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `university` varchar(20) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `image` text NOT NULL,
  `story` text NOT NULL,
  `post_time` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `reporter`
--

INSERT INTO `reporter` (`post_id`, `category_id`, `name`, `university`, `title`, `image`, `story`, `post_time`) VALUES
(1, 1, 'gggg', 'ggg', 'gggg', '', 'gggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', '11-20-16'),
(2, 6, 'minega shyaka patrick', 'makerere university', 'falcao invents teargas', '', 'Lord Mayor, Erias Lukwago and his comrades should not have expected anything different from what they experienced when they met police on their way to Entebbe Airport to welcome Dr. Besigye. They couldnâ€™t go forward. They ought to have expedcted police to deter them from cruising freely in their cars to Besigyeâ€™s residence in Kasangati. FDC party officials shouldnâ€™t have been taken aback by the presence uniformed men in Najjanakumbi where the party headquarters are located; they should have expected this because it has always been like this.  \r\n              The police said that they did all this as a preventive measure against possible unrest caused by Besigyeâ€™s supporters. Does it mean Besigyeâ€™s supporters are chaotic and they have no sense of peace in society? It was about welcoming their beloved â€˜presidentâ€™ I donâ€™t think they had an agenda of causing any trouble.', '11-20-16'),
(3, 4, 'mucyo kevin', 'kyambogo', 'hellllllllop', '', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffdddddddddddddddddddddddddddddddddddddddddddsssssssssssssssssssssssssssssssssssssssssss', '11-20-16');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
