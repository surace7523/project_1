-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2020 at 05:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `purchase` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `year`, `purchase`, `sale`, `profit`) VALUES
(1, 2007, 550000, 800000, 250000),
(2, 2008, 678000, 1065000, 387000),
(3, 2009, 787000, 1278500, 491500),
(4, 2010, 895600, 1456000, 560400),
(5, 2011, 967150, 1675600, 708450),
(6, 2012, 1065850, 1701542, 635692),
(7, 2013, 1105600, 1895000, 789400),
(8, 2014, 1465000, 2256500, 791500),
(9, 2015, 1674500, 2530000, 855500),
(10, 2016, 2050000, 3160000, 1110000),
(1, 2007, 550000, 800000, 250000),
(2, 2008, 678000, 1065000, 387000),
(3, 2009, 787000, 1278500, 491500),
(4, 2010, 895600, 1456000, 560400),
(5, 2011, 967150, 1675600, 708450),
(6, 2012, 1065850, 1701542, 635692),
(7, 2013, 1105600, 1895000, 789400),
(8, 2014, 1465000, 2256500, 791500),
(9, 2015, 1674500, 2530000, 855500),
(10, 2016, 2050000, 3160000, 1110000);

-- --------------------------------------------------------

--
-- Table structure for table `acount1`
--

CREATE TABLE `acount1` (
  `id` int(100) NOT NULL,
  `year` varchar(11) NOT NULL,
  `purchase` int(11) NOT NULL,
  `sales` int(11) NOT NULL,
  `profit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acount1`
--

INSERT INTO `acount1` (`id`, `year`, `purchase`, `sales`, `profit`) VALUES
(1, '2007', 550000, 800000, 250000),
(2, '2008', 678000, 1065000, 387000),
(3, '2009', 787000, 1278500, 491500),
(4, '2010', 895600, 1456000, 560400),
(5, '2011', 967150, 1675600, 708450),
(6, '2012', 1065850, 1701542, 635692),
(7, '2013', 1105600, 1895000, 789400),
(8, '2014', 1465000, 2256500, 791500),
(9, '2015', 1674500, 2530000, 855500),
(10, '2016', 2050000, 3160000, 1110000),
(11, '2017', 2000000, 1000000, 1000000),
(15, '2018', 80808, 515151, 545454),
(16, '2018', 80808, 515151, 545454);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_email`, `user_pass`) VALUES
(1, '77suresh89@gmail.com', 'pass'),
(2, 'poudel.nirmal10@gmail.com', '1234'),
(3, 'manojpandey@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Microcar'),
(2, 'Hatchback'),
(3, 'Sedan'),
(4, 'Coupe'),
(5, 'Trucks'),
(10, 'hjvshjav');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`p_id`, `ip_add`, `qty`) VALUES
(73, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(200) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Honda'),
(2, 'Toyota'),
(3, 'Jeep'),
(4, 'Chevrolet'),
(5, 'Volkswagon'),
(6, 'BMW'),
(7, 'Audi'),
(8, 'Acura'),
(11, 'hyundai');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`) VALUES
(24, '::1', 'Sujit', 'sujit@leomail.tamuc.edu', 'abc123', 'United States', 'Texas', '4692309999', '1234 ecommerce st commerce texas'),
(26, '::1', 'suresh shrestha', '77suresh89@gmail.com', '123', 'United States', 'Arlington', '', '2218 lori circle'),
(27, '::1', 'manoj', 'maarozpan@myleo.com', 'Nepal123', 'United States', 'irving', '4696023272', '3125 w walnut hill ln'),
(28, '::1', 'manoj', 'marozpan@hotmail.com', '123', 'United States', 'irving', '4696023272', '3125 w walnut hill ln');

-- --------------------------------------------------------

--
-- Table structure for table `mothly_report`
--

CREATE TABLE `mothly_report` (
  `months` varchar(20) NOT NULL,
  `products` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mothly_report`
--

INSERT INTO `mothly_report` (`months`, `products`) VALUES
('jan', 20000),
('feb', 300000),
('Mar', 200000),
('April', 15000),
('Jun', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qt` int(11) NOT NULL,
  `t_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `qt`, `t_amount`) VALUES
(8, 'camry', 1, 19000),
(9, 'nissan', 2, 17000),
(10, 'corolla', 1, 15000),
(11, 'infinity', 2, 30000),
(12, 'camry', 1, 19000),
(13, 'BMW', 1, 35000),
(14, 'BMW', 1, 35000),
(15, 'camry', 1, 555555),
(16, 'civic', 2, 8000),
(17, 'bmw', 1, 35000),
(18, 'mazdfa', 5, 95000),
(19, 'car', 1, 9500);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(200) NOT NULL,
  `product_cat` int(200) NOT NULL,
  `product_brand` int(200) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(200) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_keywords`, `product_images`) VALUES
(59, 4, 4, 'car', 9500, 'lkknkln', 's', '1..jpg'),
(65, 4, 4, 'bmw', 8000, 'jgh', 'k', '9.jpg'),
(66, 3, 5, 'a', 5252, 'kkk', 'k', '4.jpg'),
(73, 4, 3, 'car', 2147483647, 'gf', 'g', '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acount1`
--
ALTER TABLE `acount1`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`p_id`,`ip_add`,`qty`),
  ADD UNIQUE KEY `p_id` (`p_id`,`ip_add`,`qty`),
  ADD UNIQUE KEY `qty` (`qty`),
  ADD UNIQUE KEY `qty_2` (`qty`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acount1`
--
ALTER TABLE `acount1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
