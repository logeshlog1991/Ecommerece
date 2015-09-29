-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2015 at 05:32 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommarce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'adminlog@gmail.com', 'admin'),
(2, 'admindemo@gmail.com', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(2, 'ibm'),
(3, 'sony'),
(4, 'apple'),
(5, 'samsung'),
(6, 'dell'),
(7, 'nonees'),
(8, 'fast track'),
(9, 'nike');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`) VALUES
(8, '127.0.0.1', 1),
(19, '127.0.0.1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'Cameras'),
(3, 'Mobiles'),
(4, 'Television'),
(5, 'Laptops'),
(6, 'T-Shirt'),
(7, 'Watches'),
(8, 'Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_ip` varchar(20) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_pass` varchar(50) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(100) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`) VALUES
(2, '127.0.0.1', 'logesh', 'logeshlog1991@gmail.com', 'logesh', 'IND', 'tamilnadu', '9956433322', 'forest road', '1443260738customer_4.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `p_id`, `c_id`, `qty`, `invoice_no`, `status`, `order_date`) VALUES
(1, 31, 2, 1, 1040872133, 'Completed', '2015-09-29'),
(2, 36, 2, 1, 201396748, 'in progress', '2015-09-29'),
(3, 39, 2, 1, 302575010, 'in progress', '2015-09-29'),
(4, 8, 2, 1, 396093872, 'in progress', '2015-09-29'),
(5, 19, 2, 1, 1697534075, 'Completed', '2015-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `trx_id` varchar(100) NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `amount`, `customer_id`, `trx_id`, `payment_date`) VALUES
(1, 425, 2, 'e976dac08ea69768ac4a9d42fddd6c04', '2015-09-29'),
(2, 1125, 2, '9e785717f6495b37abb96e3972d46671', '2015-09-29'),
(3, 1125, 2, 'f42a4caf265b5b508628d9b1e4a02676', '2015-09-29'),
(4, 50000, 2, '20915f56b05181f0204957850b771c3e', '2015-09-29'),
(5, 16000, 2, '078f5b995f7c862983a1301cdd208beb', '2015-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` varchar(100) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_discount` int(100) NOT NULL,
  `product_realprice` int(50) NOT NULL,
  `product_desc` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_keywords` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_discount`, `product_realprice`, `product_desc`, `product_img1`, `product_img2`, `product_img3`, `product_keywords`, `date`) VALUES
(3, '1', '1', 'Alion Dell', 1000000, 0, 1000000, '<p>Apple New Model</p>', 'apple.png', '', '', 'apple', '2015-09-17'),
(4, '1', '3', 'Sony', 10000, 0, 10000, '<p>Sony World</p>', 'hp2.png', '', '', 'laptop', '2015-09-17'),
(5, '1', '1', 'Dell ', 50000, 0, 50000, '<p>Dell new model</p>', 'dell3.png', '', '', 'Dell', '2015-09-17'),
(6, '1', '1', 'Dell G1', 80000, 0, 80000, '<p>&nbsp;New Dell</p>', 'dell.jpg', '', '', 'Dell', '2015-09-17'),
(7, '1', '4', 'Apple', 16000, 0, 16000, '<p>New apple</p>', 'apple2.png', '', '', 'apple', '2015-09-17'),
(8, '2', '5', 'Camera', 50000, 0, 50000, '<p>Camera lookin cool</p>', 'camara_1.jpg', '', '', 'camera', '2015-09-19'),
(9, '2', '5', 'Digital Camera', 10000, 0, 10000, '<p>Digital Camera</p>', 'camara_2.jpg', '', '', 'Digital Camera', '2015-09-19'),
(10, '2', '5', 'Model Camera', 8000, 0, 8000, '<p>Model Camera</p>', 'camra_3.jpg', '', '', 'Model camera', '2015-09-19'),
(11, '3', '5', 'Mobiles', 10000, 0, 10000, '<p>Cool Mobiles</p>', 'samsung_2.jpg', '', '', 'Cool Mobiles', '2015-09-19'),
(12, '3', '5', 'Samsung Galaxy', 100000, 0, 100000, '<p>Samsung Galaxy</p>', 'Samsung_1.jpg', '', '', 'Samsung Galaxy', '2015-09-19'),
(13, '3', '5', 'Samsung Flat', 50000, 0, 50000, '<p>Samsung Flat</p>', 'samsung_3.jpg', '', '', 'Samsung Flat', '2015-09-19'),
(14, '3', '4', 'Apple i phone', 10000, 0, 10000, '<p>Apple i phone</p>', 'apple_1.jpg', '', '', 'Apple i phone', '2015-09-19'),
(15, '3', '4', 'Apple New', 50000, 0, 50000, '<p>Apple New</p>', 'apple_2.jpg', '', '', 'Apple New', '2015-09-19'),
(16, '3', '4', 'Apple 6s', 16000, 0, 16000, '<p>Apple 6s</p>', 'apple_3.jpg', '', '', 'Apple 6s', '2015-09-19'),
(17, '2', '4', 'Camera', 10000, 0, 10000, '<p>Camera</p>', 'camera_n_1.jpg', '', '', 'Camera', '2015-09-19'),
(18, '2', '5', 'Camera Digital', 10000, 0, 1000, '<p>Camera Digital</p>', 'camera_n.jpg', '', '', 'Camera Digital', '2015-09-19'),
(19, '2', '5', ' Camera Digital', 16000, 0, 16000, '<p>&nbsp;Camera Digital</p>', 'camra_3.jpg', '', '', ' Camera Digital', '2015-09-19'),
(20, '4', '5', 'Samsung Smart TV', 10000, 0, 10000, '<p>Samsung Smart TV</p>', 'samsung_tv_3.jpg', '', '', 'Samsung Smart TV', '2015-09-19'),
(21, '4', '5', 'Samsung Flat Tv', 50000, 0, 50000, '<p>Samsung Flat Tv</p>', 'samsung_tv_2.jpg', '', '', 'Samsung Flat Tv', '2015-09-19'),
(22, '4', '5', 'Samsung New Flat', 800000, 0, 800000, '<p>Samsung New Flat</p>', 'samsung_tv_1.jpg', '', '', 'Samsung New Flat', '2015-09-19'),
(23, '4', '3', 'Sony Flat', 10000, 0, 10000, '<p>Sony Tv</p>', 'sony_tv_1.jpg', '', '', 'Sony Tv', '2015-09-19'),
(24, '4', '3', 'Sony', 50000, 20, 40000, '<p>Sony</p>', 'sony_tv_3.jpg', '', '', 'Sony', '2015-09-19'),
(25, '4', '3', 'Sony', 16000, 0, 16000, '<p>Sony</p>', 'sony_tv_2.jpg', '', '', 'sony', '2015-09-19'),
(26, '1', '1', 'laptop Dell', 50000, 20, 40000, '<p>Dell Red</p>', 'dell2.png', '', '', 'Dell Red', '2015-09-26'),
(29, '6', '7', 'Minion', 500, 15, 425, '<p>Minions</p>', 'me_2.jpg', '', '', 'Minions', '2015-09-29'),
(31, '6', '7', 'Minion 2', 500, 15, 425, '<p>Minions</p>', 'me_3.jpg', '', '', 'Minions', '2015-09-29'),
(32, '6', '7', 'Minion 3', 500, 15, 425, '<p>Minions</p>', 'me_4.jpg', '', '', 'Minions', '2015-09-29'),
(33, '6', '7', 'Batman', 500, 15, 425, '<p>Batman</p>', 'batman.jpg', '', '', 'Batman', '2015-09-29'),
(34, '6', '7', 'Superman', 500, 15, 425, '<p>Superman</p>', 'superman.jpg', '', '', 'Superman', '2015-09-29'),
(35, '7', '8', 'Watches Men', 1500, 25, 1125, '<p>Watch men</p>', 'watch.jpg', '', '', 'watch men', '2015-09-29'),
(36, '7', '8', 'Watches Woman', 1500, 25, 1125, '<p>watch woman</p>', 'watch_2.jpg', '', '', 'watch woman', '2015-09-29'),
(37, '8', '9', 'Nike', 2000, 10, 1800, '<p>Nike</p>', 'nike.jpg', '', '', 'Nike', '2015-09-29'),
(38, '8', '9', 'Nike', 2000, 10, 1800, '<p>nike</p>', 'nike_2.jpg', '', '', 'Nike', '2015-09-29'),
(39, '7', '8', 'Watches Men', 1500, 25, 1125, '<p>watches men</p>', 'watch_3.jpg', '', '', 'watches men', '2015-09-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
