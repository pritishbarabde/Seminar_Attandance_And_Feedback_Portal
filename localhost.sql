-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2020 at 06:29 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15242183_specialguest`
--
CREATE DATABASE IF NOT EXISTS `id15242183_specialguest` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id15242183_specialguest`;

-- --------------------------------------------------------

--
-- Table structure for table `insertdata`
--

CREATE TABLE `insertdata` (
  `id` int(255) NOT NULL,
  `clgid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lokb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loke` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fed` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `yn` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `insertdata`
--

INSERT INTO `insertdata` (`id`, `clgid`, `fname`, `mname`, `sname`, `rno`, `email`, `pno`, `doe`, `year`, `lokb`, `loe`, `loke`, `loc`, `fed`, `sug`, `rat`, `yn`) VALUES
(1, '', 'Paras', 'Mahesh', 'Lad', '28', 'paaraas93@gmail.com', '8433680763', 'IT', 'TE', '5', '5', '5', '5', 'Amazing', 'Want such type or of more lectures', '5', 'on'),
(2, '', 'Pritam', 'Sanjay', 'Shinde', '48', 'Prit.ps4606@gmail.com', '8007500809', 'IT', 'TE', '5', '5', '5', '5', 'EK NUMBERACH', 'MORE LECTURES PLEASE', '5', 'on'),
(3, '18201540', 'Yash', 'Rajendra', 'Gharat', '19', 'gharatyash2711@gmail.com', '1234567890', 'IT', 'TE', '5', '5', '5', '5', 'Very Intresting lecture it was', 'Please provide such type of more lectures', '5', 'on'),
(4, '', 'ABC', 'ABC', 'ABC', '1234', 'ABC@GMAIL.COM', '1234567890', 'IT', 'TE', '5', '5', '5', '5', 'ABC', 'ABC', '5', 'on'),
(5, '18201540', 'Yash', 'Rajendra', 'Gharat', '19', 'gharatyash2711@gmail.com', '1234567890', 'IT', 'TE', '4', '2', '4', '4', 'Test', 'Test', '5', 'on'),
(6, '', 'Manas', 'Sadanand', 'Rege', '25', 'manasrege44@gmail.com', '8765437632', 'IT', 'TE', '5', '5', '1', '5', 'Nice', 'More Lectures Please', '5', 'on'),
(7, '', 'Kunal', 'Mahesh', 'Lad', '20', 'kuunaal93@gmail.com', '8383044665', 'IT', 'TE', '5', '5', '5', '5', 'Amazeful Experience', 'More Lectures Please', '5', 'on'),
(8, '', 'Paras', 'Mahesh', 'Lad', '28', 'paaraas93@gmail.com', '28', 'IT', 'TE', '5', '5', '5', '5', 'Amazing', 'Want such type of more lectures', '5', 'on'),
(9, '182144103', 'Shridhar', 'Gangaram', 'Apte', '76', 'shree345@gmail.com', '76548943219', 'IT', 'TE', '5', '5', '5', '5', 'very good', 'more lectures', '5', 'on'),
(10, '18201540', 'Yash', 'Rajendra', 'Gharat', '19', 'gharatyash2711@gmail.com', '1234567890', 'IT', 'TE', '5', '5', '5', '5', 'good', 'good', '5', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insertdata`
--
ALTER TABLE `insertdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insertdata`
--
ALTER TABLE `insertdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
