-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 09:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `registration_id` int(25) NOT NULL,
  `laboratory_name` varchar(125) NOT NULL,
  `license_number` varchar(25) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `accreditation` varchar(57) NOT NULL,
  `email` varchar(37) NOT NULL,
  `street_name` varchar(40) NOT NULL,
  `city_name` varchar(40) NOT NULL,
  `pin_code` varchar(8) NOT NULL,
  `district` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `country` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`registration_id`, `laboratory_name`, `license_number`, `phone_number`, `accreditation`, `email`, `street_name`, `city_name`, `pin_code`, `district`, `state`, `country`) VALUES
(45, 'ada', '5456787654567', '6756874576', 'ada', '', 'ada', 'ada', '876765', 'Ernakulam', 'Kerala', 'Srilanka'),
(47, 'asa', '6565767676767', '7787878787', 'asa', '', 'asa', 'asa', '878787', 'Kannur', 'Rajasthan', 'Australia'),
(48, 'fgd', '7878656787787', '5656565656', 'fgd', '', 'fgd', 'fgd', '098989', 'Ernakulam', 'Rajasthan', 'India'),
(50, 'wer', '7878656787657', '6756123345', 'wer', '', 'wer', 'wer', '898789', 'Ernakulam', 'Rajasthan', 'India'),
(67, 'ddrc', '4444444444444', '4444444444', 'ddrc', '', 'ddrc', 'ddrc', '444444', 'Ernakulam', 'Kerala', 'India'),
(68, 'ddrc', '4444444444444', '4545454545', 'ddrc', '', 'ddrc', 'ddrc', '888888', 'Ernakulam', 'Kerala', 'India'),
(69, 'hoks', '5454545454545', '7867676767', 'hoks', '', 'hoks', 'hoks', '555555', 'Ernakulam', 'Kerala', 'India'),
(77, 'bnm', '4444444444444', '6767545656', 'bnm', '', 'bnm', 'bnm', '878787', 'Ernakulam', 'Kerala', 'India'),
(78, 'nnn', '2312345432365', '4545678989', 'nnn', '', 'nnn', 'nnn', '565676', 'Kannur', 'Rajasthan', 'Australia'),
(79, 'mmm', '3456789876547', '8908767890', 'mmm', '', 'mmm', 'mmm', '567654', 'Kannur', 'Kerala', 'India'),
(80, 'ccc', '4567876545678', '7777887788', 'ccc', '', 'ccc', 'ccc', '565656', 'Ernakulam', 'Kerala', 'Srilanka'),
(81, 'neethi', '2345654323454', '6754568767', 'ghds', '', 'htc', 'kothamangalam', '676767', 'Ernakulam', 'Kerala', 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`registration_id`),
  ADD UNIQUE KEY `UNIQUE` (`laboratory_name`,`license_number`,`phone_number`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `registration_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
