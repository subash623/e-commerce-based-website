-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 07:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamromart`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `userid` int(20) NOT NULL AUTO_INCREMENT ,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  PRIMARY KEY(userid)
  );


--
-- Dumping data for table `people`
--

INSERT INTO `people` (`userid`, `name`, `email`, `pass`, `role`) VALUES
(1, 'admin', 'admin', 'admin123', 'admin'),
(2, 'ram', 'ram@gmail.com', 'ram123', 'user'),
(3, 'hari', 'hari@gmail.com', 'hari123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `imgloco` varchar(50) DEFAULT NULL,
  `sub` varchar(30) DEFAULT NULL,
   PRIMARY KEY (`prodid`)
  );

INSERT INTO `product` (`prodid`, `name`, `type`, `price`, `imgloco`, `sub`) VALUES
(101, 'Atharvawed', 'Areligion', '9000', 'cartpanel/upload/Atharvawed.png', 'Areligion'),
(102, 'Bhagavad', 'Areligion', '8500', 'cartpanel/upload/bhagavad.png', 'Areligion'),
(103, 'Nepal', 'Ahistory', '7000', 'cartpanel/upload/Nepal.png', 'Ahistory'),
(104, 'Tutor of history', 'Ahistory', '3000', 'cartpanel/upload/tutorofhistory.png', 'Ahistory'),
(105, 'War', 'Ahistory', '6000', 'cartpanel/upload/war.png', 'Ahistory'),
(106, 'Nordic clock', 'Aclock', '5000', 'cartpanel/upload/blueclock.png', 'Aclock'),
(107, 'Decorative clock', 'Aclock', '3500', 'cartpanel/upload/Decorativeclock.png', 'Aclock'),
(108, 'Silver clock', 'Aclock', '4000', 'cartpanel/upload/pasteclock.png', 'Aclock'),
(109, 'Orange clock', 'Aclock', '2500', 'cartpanel/upload/roundclock.png', 'Aclock'),
(110, 'Blade Super cycle', 'Acycle', '195000', 'cartpanel/upload/blade.png', 'Acycle'),
(111, 'Portable Table', 'Astudy', '7000', 'cartpanel/upload/table.png', 'Astudy'),
(112, 'Iphone 12 pro max', 'AApple', '120000', 'cartpanel/upload/iphone12pro.png', 'AApple'),
(113, 'Samsung Note 10', 'Asamsung', '110000', 'cartpanel/upload/samsungnote10.png', 'Asamsung'),
(114, 'Samsung A20', 'Asamsung', '30000', 'cartpanel/upload/samsungA20.png', 'Asamsung'),
(115, 'Redmi Note 10 pro', 'AMI', '40000', 'cartpanel/upload/Redminote10pro.png', 'AMI'),
(116, 'Redmi Note 8 pro', 'AMI', '28000', 'cartpanel/upload/Redminote8pro.png', 'AMI'),
(117, 'Redmi 6A', 'AMI', '28000', 'cartpanel/upload/Redmi6A.png', 'AMI'),
(118, 'Iphone 11', 'AApple', '99000', 'cartpanel/upload/iphone11.png', 'AApple'),
(119, 'pinarello cycle', 'Acycle', '25000', 'cartpanel/upload/pinarello.png', 'Acycle'),
(120, 'Urban Ladder Table', 'Astudy', '7000', 'cartpanel/upload/urbantable.png', 'Astudy');