-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 05:09 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nepdevguitar`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_guitar`
--

CREATE TABLE `add_guitar` (
  `id` int(12) NOT NULL,
  `GuitarName` varchar(700) NOT NULL,
  `GuitarPrice` varchar(100) NOT NULL,
  `GuitarOverview` mediumtext NOT NULL,
  `GuitarCategory` varchar(500) NOT NULL,
  `GuitarBrand` varchar(500) NOT NULL,
  `ProductImage` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_guitar`
--

INSERT INTO `add_guitar` (`id`, `GuitarName`, `GuitarPrice`, `GuitarOverview`, `GuitarCategory`, `GuitarBrand`, `ProductImage`) VALUES
(19, 'Fender', '28000', ' jdklsjkd sajskl jdkjd', 'Acoustic Guitars', 'FENDER', '2.jpg'),
(20, 'PRS', '17500', 'fdfd fd fd', 'Electro-acoustic Guitars', 'VCVCV', '4.jpg'),
(22, 'bbb', '21212', 'dsds dsds', 'Acoustic Guitars', 'GIBSON', '7.jpg'),
(23, 'ccc', '32323', 'dsd sfsdfsdfsdfd', 'Acoustic Guitars', 'GIBSON', '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'nepdev', 'nepdev');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(12) NOT NULL,
  `BrandName` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `BrandName`) VALUES
(2, 'GIBSON'),
(7, 'VCVCV'),
(4, 'FENDER');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `user_email` varchar(500) NOT NULL,
  `id` int(11) NOT NULL,
  `product_id` int(12) DEFAULT NULL,
  `proqty` int(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(12) NOT NULL,
  `GuitarCategory` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `GuitarCategory`) VALUES
(4, 'Acoustic Guitars'),
(5, 'Electric Guitars'),
(6, 'Electro-acoustic Guitars'),
(7, 'Twelve-string Guitars'),
(8, 'Archtop Guitars'),
(9, 'Fdfdf');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `id` int(12) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `email` varchar(400) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`id`, `fname`, `lname`, `email`, `gender`, `password`) VALUES
(1, 'asas', 'sasas', 'aa@aa', 'Male', 'aaa'),
(2, 'cc', 'cc', 'ccc@cc', 'Female', 'ccccc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_guitar`
--
ALTER TABLE `add_guitar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_guitar`
--
ALTER TABLE `add_guitar`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
