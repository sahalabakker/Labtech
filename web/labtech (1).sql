-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 02:50 PM
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
-- Database: `labtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `order_id` int(10) NOT NULL,
  `lab_email` varchar(45) NOT NULL,
  `seller_email` varchar(46) NOT NULL,
  `product_id` int(12) NOT NULL,
  `quantity` int(12) NOT NULL,
  `total_cost` int(12) NOT NULL,
  `lab_name` varchar(58) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(45) NOT NULL,
  `state` varchar(55) NOT NULL,
  `country` varchar(50) NOT NULL,
  `contact_number` int(13) NOT NULL,
  `pincode` int(6) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`order_id`, `lab_email`, `seller_email`, `product_id`, `quantity`, `total_cost`, `lab_name`, `street`, `city`, `district`, `state`, `country`, `contact_number`, `pincode`, `status`) VALUES
(6, 'labtech@gmal.com', 'adhityan@gmail.com', 16, 2, 16149, 'labtech laboratory', 'muattupuzha', 'muattupuzha', 'Ernakulam', 'Kerala', 'India', 2147483647, 898767, 1),
(7, 'labtech@gmal.com', 'adhityan@gmail.com', 11, 2, 4400, 'labtech laboratory', 'muattupuzha', 'muattupuzha', 'Ernakulam', 'Kerala', 'India', 2147483647, 898767, 1),
(9, 'labtech@gmal.com', 'adhityan@gmail.com', 17, 1, 14249, 'labtech laboratory', 'muattupuzha', 'muattupuzha', 'Ernakulam', 'Kerala', 'India', 2147483647, 898767, 1),
(10, 'labtech@gmal.com', 'adhityan@gmail.com', 17, 1, 14249, 'labtech laboratory', 'muattupuzha', 'muattupuzha', 'Ernakulam', 'Kerala', 'India', 2147483647, 898767, 1),
(11, 'labtech@gmal.com', 'adhityan@gmail.com', 18, 2, 1763, 'labtech laboratory', 'muattupuzha', 'muattupuzha', 'Ernakulam', 'Kerala', 'India', 2147483647, 898767, 1),
(12, 'labtech@gmal.com', 'adhityan@gmail.com', 11, 1, 4400, 'labtech laboratory', 'muattupuzha', 'muattupuzha', 'Ernakulam', 'Kerala', 'India', 2147483647, 898767, 1),
(13, 'labtech@gmal.com', 'adhityan@gmail.com', 11, 2, 4400, 'labtech laboratory', 'muattupuzha', 'muattupuzha', 'Ernakulam', 'Kerala', 'India', 2147483647, 898767, 1),
(16, 'labtech@gmal.com', 'adhityan@gmail.com', 16, 1, 16149, 'labtech laboratory', 'muattupuzha', 'muattupuzha', 'Ernakulam', 'Kerala', 'India', 2147483647, 898767, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bioengineer`
--

CREATE TABLE `bioengineer` (
  `bioengineer_id` int(20) NOT NULL,
  `profession` varchar(125) NOT NULL,
  `experience` varchar(220) NOT NULL,
  `registration_id` varchar(35) NOT NULL,
  `email` varchar(45) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bioengineer`
--

INSERT INTO `bioengineer` (`bioengineer_id`, `profession`, `experience`, `registration_id`, `email`, `status`) VALUES
(27, 'biomedical engineer', '1 year', '', 'raman@gmail.com', 1),
(28, 'biomedical engineer', '3 year', '', 'manuja@gmail.com', 1),
(29, 'biomedical engineer', '5 years', '', 'sanju@gmail.com', 1),
(30, 'biomedical engineer ', '2 years', '', 'sanooja@gmail.com', 1),
(31, 'biomedical engineer', '3 years', '', 'johns@gmail.com', 1),
(32, 'biomedical engineer', '3 years', '', 'james@gmail.com', 0),
(33, 'Biomedical engineer', '4 Year', '', 'anjaleena@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(12) NOT NULL,
  `product_id` int(12) NOT NULL,
  `product_name` varchar(58) NOT NULL,
  `product_code` varchar(19) NOT NULL,
  `category` varchar(45) NOT NULL,
  `company` varchar(45) NOT NULL,
  `amount` varchar(12) NOT NULL,
  `offer` int(12) NOT NULL,
  `lab_email` varchar(45) NOT NULL,
  `seller_email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `product_name`, `product_code`, `category`, `company`, `amount`, `offer`, `lab_email`, `seller_email`) VALUES
(4, 17, 'compound microscope', '67435676', 'Half Automated Machines', 'CGC company', '18999', 25, 'labtech@gmal.com', 'adhityan@gmail.com'),
(6, 16, 'centrifuge analyser', '89786746', 'Half Automated Machines', 'CGC company', '18999', 15, 'labtech@gmal.com', 'adhityan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(10) NOT NULL,
  `book_date` date NOT NULL,
  `equip` varchar(45) NOT NULL,
  `complaint` varchar(400) NOT NULL,
  `lab_email` varchar(45) NOT NULL,
  `bioengineer_email` varchar(45) NOT NULL,
  `status` int(9) NOT NULL,
  `amount` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `book_date`, `equip`, `complaint`, `lab_email`, `bioengineer_email`, `status`, `amount`) VALUES
(3, '2020-12-16', 'microscope', 'microscope complaint\r\n					', 'karuna@gmail.com', 'raman@gmail.com', 1, '11232'),
(9, '2020-12-18', 'heamatoloical analyser', 'heamatolocal analyzer error\r\n					', 'karuna@gmail.com', 'manuja@gmail.com', 1, '35000'),
(10, '2020-12-25', 'hue microscope error', 'hue microscope error\r\n					', 'karuna@gmail.com', 'sanooja@gmail.com', 0, ''),
(12, '2020-12-18', 'microscope', 'small complaint\r\n					', 'karuna@gmail.com', 'raman@gmail.com', 0, ''),
(13, '2021-01-01', 'microscope', 'small microscope complaint\r\n					', 'labtech@gmal.com', 'manuja@gmail.com', 1, '11232'),
(14, '2021-01-12', 'microscope', ' your complaint\r\n					microscope is not working', 'labtech@gmal.com', 'manuja@gmail.com', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` varchar(20) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
('Australiaa', 'Australia'),
('India', 'India ');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` varchar(13) NOT NULL,
  `state_id` varchar(25) NOT NULL,
  `district` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `state_id`, `district`) VALUES
('Alappuzha', 'kerala', 'Alappuzha'),
('Ernakulam', 'Kerala', 'Ernakulam'),
('kollam', 'Kerala', 'kollam'),
('Kottayom', 'Kerala', 'Kottayom'),
('Madhurai', 'Thamilnadu', 'Madhurai'),
('Thrissure ', 'Kerala', 'Thrissure'),
('vayanadu', 'Kerala', 'Vayanadu');

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `laboratory_id` int(25) NOT NULL,
  `laboratory_name` varchar(125) NOT NULL,
  `accreditation` varchar(120) NOT NULL,
  `license_number` varchar(35) NOT NULL,
  `registration_id` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`laboratory_id`, `laboratory_name`, `accreditation`, `license_number`, `registration_id`, `email`) VALUES
(33, 'medi plus', 'MACA', '87879065780987', '', 'mediplus@gmail.com'),
(39, 'Medi  Clinics Laboratory', 'MACA', '7865456787654', '', 'mediclinics@gmail.com'),
(43, 'seva', 'NEMT', '6789098789091', '', 'seva@gmail.com'),
(49, 'KARUNA LABORATORY', 'NACA', '45679809237809', '', 'karuna@gmail.com'),
(53, 'Jesus medical lab', 'NACA', '6712092384568', '', 'jesus@gmail.com'),
(57, 'labtech laboratory', 'NACA', '4531290432143', '', 'labtech@gmal.com'),
(59, 'minitha', 'NACA', '8989123409123', '', 'minitha@gmail.com'),
(61, 'MDRC medical Laboratory', 'MDC', '90909090909090', '', 'mdrc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `email`, `password`) VALUES
(220, 'mediplus@gmail.com', ''),
(222, 'madhu@gmail.com', 'madhuu'),
(224, 'mani@gmail.com', 'mani'),
(230, 'madavan@gmail.com', 'madavan'),
(232, 'jessy@gmail.com', ''),
(234, 'neethi@gmail.com', ''),
(236, 'mediclinics@gmail.com', 'medi'),
(238, 'midhun@gmail.com', 'midhun'),
(240, 'malavika@gmail.com', 'malavika'),
(242, 'manju@gmail.com', 'manju'),
(244, 'meenakshi@gmail.com', 'meenakshi'),
(246, 'adhityan@gmail.com', 'adhityan'),
(248, 'manohar@gmail.com', 'manohar'),
(250, 'manjima@gmail.com', 'manjima'),
(260, 'sanu@gmail.com', 'sanu'),
(262, 'sanup@gmail.com', 'sanup'),
(266, 'karunan@gmail.com', 'karunan'),
(268, 'swapna@gmail.com', 'swapna'),
(274, 'karuna@gmail.com', 'karuna'),
(276, 'kumar@gmail.com', 'kumar'),
(278, 'arun@gmail.com', 'arun'),
(286, 'kanakam@gmail.com', 'kanakam'),
(288, 'jesus@gmail.com', 'jesusa'),
(290, 'raman@gmail.com', 'raman'),
(292, 'manuja@gmail.com', 'manuja'),
(294, 'sanju@gmail.com', 'sanjuu'),
(298, 'labtech@gmal.com', 'labtech'),
(300, 'sanooja@gmail.com', 'sanooja'),
(302, 'minitha@gmail.com', 'minitha'),
(303, 'admin@gmail.com', 'admin'),
(304, 'johns@gmail.com', 'johns'),
(306, 'james@gmail.com', 'james'),
(308, 'sruthi@gmail.com', 'sruthi'),
(310, 'mdrc@gmail.com', 'mdrc'),
(312, 'anjaleena@gmail.com', 'anjaleena'),
(314, 'ami@gmail.com', 'ami');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(12) NOT NULL,
  `complaint_id` int(12) NOT NULL,
  `equip` varchar(45) NOT NULL,
  `book_date` date NOT NULL,
  `amount` varchar(12) NOT NULL,
  `lab_name` varchar(55) NOT NULL,
  `street` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `district` varchar(55) NOT NULL,
  `state` varchar(55) NOT NULL,
  `country` varchar(55) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `pincode` int(6) NOT NULL,
  `complaint` varchar(300) NOT NULL,
  `status` int(1) NOT NULL,
  `lab_email` varchar(45) NOT NULL,
  `bioengineer_email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `complaint_id`, `equip`, `book_date`, `amount`, `lab_name`, `street`, `city`, `district`, `state`, `country`, `contact`, `pincode`, `complaint`, `status`, `lab_email`, `bioengineer_email`) VALUES
(9, 3, 'microscope', '2020-12-16', '11232', 'KARUNA LABORATORY', 'MG road', 'Mvtpza', 'Alappuzha', 'Kerala', 'India', '+918978675687', 890989, 'microscope complaint\r\n					', 1, 'karuna@gmail.com', 'raman@gmail.com'),
(10, 13, 'microscope', '2021-01-01', '11232', 'labtech laboratory', 'muattupuzha', 'muattupuzha', 'Ernakulam', 'Kerala', 'India', '+918909897878', 898767, 'small microscope complaint\r\n					', 1, 'labtech@gmal.com', 'manuja@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `email` varchar(25) NOT NULL,
  `photo` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`email`, `photo`) VALUES
('anjaleena@gmail.com', 't4.jpg'),
('james@gmail.com', 't1.jpg'),
('johns@gmail.com', 't3.jpg'),
('labtech@gmal.com', 'nch-exteriors-sept2019-184-480x480.jpg'),
('manuja@gmail.com', 't4.jpg'),
('mdrc@gmail.com', 'nch-exteriors-sept2019-184-480x480.jpg'),
('minitha@gmail.com', 'IMG_20200816_195249.JPG'),
('raman@gmail.com', 'doc-1.jpg'),
('sanju@gmail.com', 'down.png'),
('sanooja@gmail.com', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `product_code` int(12) NOT NULL,
  `category` varchar(45) NOT NULL,
  `company` varchar(58) NOT NULL,
  `stock` int(10) NOT NULL,
  `amount` varchar(12) NOT NULL,
  `offer` int(10) NOT NULL,
  `photo` varchar(70) NOT NULL,
  `seller_email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_code`, `category`, `company`, `stock`, `amount`, `offer`, `photo`, `seller_email`) VALUES
(11, 'CBC blood test machine', 89786746, 'Fully Automated Machines', 'CGC company', 0, '5000', 12, '9.jpg', 'adhityan@gmail.com'),
(16, 'centrifuge analyser', 89786746, 'Half Automated Machines', 'CGC company', 0, '18999', 15, '11.jpg', 'adhityan@gmail.com'),
(17, 'compound microscope', 67435676, 'Half Automated Machines', 'CGC company', 0, '18999', 25, '10.jpg', 'adhityan@gmail.com'),
(18, 'Messkolben bottle', 89786745, 'Other Laboratory Equipments', 'MNC company', 13, '2350', 25, '10mL_Messkolben_mit_Schliff_A.jpg', 'adhityan@gmail.com'),
(19, 'reagent', 675687, 'Laboratory Reagents', 'CGC company', 45, '5500', 30, '15.jpg', 'adhityan@gmail.com'),
(20, 'coating reagent', 897656, 'Laboratory Reagents', 'CGC company', 43, '3780', 25, '16.jpg', 'adhityan@gmail.com'),
(23, 'harsha', 21, 'Other Laboratory Equipments', 'haridas', 2, '10', 2, '10.jpg', 'adhityan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(25) NOT NULL,
  `registration_id` int(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(15) NOT NULL,
  `service_name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `about_service` varchar(450) NOT NULL,
  `amount` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `email`, `about_service`, `amount`) VALUES
(1, 'maintaining ', 'raman@gmail.com', '', '5500'),
(2, 'maintaining ', 'raman@gmail.com', 'maintain all equipments\r\n					', '5000'),
(3, 'maintaining ', 'manuja@gmail.com', 'maintain all types of medical laboratory equipments\r\n					', '5500 35000 '),
(4, 'checkup of machenes', 'manuja@gmail.com', 'Regular checkup of all types of lboratory machines\r\n					', '24000'),
(5, 'maintaining ', 'manuja@gmail.com', ' about service\r\n				lkk	', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `service history`
--

CREATE TABLE `service history` (
  `service_id` int(25) NOT NULL,
  `service_name` varchar(45) NOT NULL,
  `serviced_eqp` varchar(45) NOT NULL,
  `serviced_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `registration_id` int(25) NOT NULL,
  `name` varchar(35) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `email` varchar(37) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `street_name` varchar(40) NOT NULL,
  `city_name` varchar(40) NOT NULL,
  `pin_code` varchar(8) NOT NULL,
  `district` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `country` varchar(45) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`registration_id`, `name`, `phone_number`, `email`, `gender`, `street_name`, `city_name`, `pin_code`, `district`, `state`, `country`, `user_type`) VALUES
(118, '', '8909890999', 'mediplus@gmail.com', '', 'MC road', 'karunagappilly', '898789', 'Ernakulam', 'Kerala', 'Indiaa', 'laboratory'),
(120, 'mani', '8989098988', 'mani@gmail.com', 'Male', 'HM road', 'beppur', '676767', 'vayanadu', 'Kerala', 'Indiaa', 'seller'),
(124, 'jessy', '8989098756', 'jessy@gmail.com', 'Female', 'MG road', 'kakkanadu', '767678', 'Ernakulam', 'Kerala', 'Indiaa', 'seller'),
(131, 'Adhityan', '7876569876', 'adhityan@gmail.com', 'Male', 'MC Road', 'koothattukulam', '678776', 'Ernakulam', 'Kerala', 'India', 'seller'),
(132, 'Manohar', '8789876565', 'manohar@gmail.com', 'Male', 'MG road', 'kottayom', '898767', 'Kottayom', 'Kerala', 'India', 'seller'),
(133, 'Manjima', '7887654534', 'manjima@gmail.com', 'Female', 'MG Road', 'Alappuzha', '789877', 'Alappuzha', 'Kerala', 'India', 'seller'),
(137, '', '9087238767', 'seva@gmail.com', '', 'ramapuram', 'ramapuram', '989898', 'Madhurai', 'Thamilnadu', 'India', 'laboratory'),
(138, 'Sanu kumar', '6709123409', 'sanu@gmail.com', 'Male', 'ramapuram', 'ramapurram', '789878', 'Madhurai', 'Thamilnadu', 'India', 'seller'),
(139, 'sanup', '9087809809', 'sanup@gmail.com', 'Male', 'ramapuram', 'ramapuram', '567687', 'Madhurai', 'Thamilnadu', 'India', 'seller'),
(142, 'Swapna', '9012783908', 'swapna@gmail.com', 'Female', 'MG road', 'kaladi', '898767', 'Ernakulam', 'Kerala', 'India', 'seller'),
(145, '', '9867879856', 'karuna@gmail.com', '', 'MG road', 'Mvtpza', '890989', 'Alappuzha', 'Kerala', 'India', 'laboratory'),
(147, 'arun', '7898095689', 'arun@gmail.com', 'Male', 'MG road', 'Mvtpza', '897867', 'Ernakulam', 'Kerala', 'India', 'seller'),
(151, 'kanakam', '9867898745', 'kanakam@gmail.com', 'Female', 'HM road', 'muvtpza', '908789', 'Ernakulam', 'Kerala', 'India', 'seller'),
(153, 'raman', '6709123876', 'raman@gmail.com', 'Male', 'koovathur', 'vennila', '908767', 'Alappuzha', 'Kerala', 'India', 'bioengineer'),
(154, 'manuja', '9129349820', 'manuja@gmail.com', 'Female', 'vennila', 'vennila', '908767', 'Alappuzha', 'Kerala', 'India', 'bioengineer'),
(155, 'sanju', '9087440909', 'sanju@gmail.com', 'Male', 'vazakadu', 'koothattukulam', '897867', 'Alappuzha', 'Kerala', 'India', 'bioengineer'),
(157, '', '2312312342', 'labtech@gmal.com', '', 'vazhappilly', 'muattupuzha', '898767', 'Ernakulam', 'Kerala', 'India', 'laboratory'),
(158, 'sanooja', '2390124378', 'sanooja@gmail.com', 'Female', 'kalamboor', 'mutpza', '907878', 'Ernakulam', 'Kerala', 'India', 'bioengineer'),
(159, '', '8909128921', 'minitha@gmail.com', '', 'kalamboor', 'kalamboor', '898789', 'Ernakulam', 'Kerala', 'India', 'laboratory'),
(160, 'admin', '234111111', 'admin@gmail.com', 'admin', 'qwer', 'qwert', '1232', 'qwer', 'qwer', 'qwer', 'admin'),
(161, 'johns', '8912092121', 'johns@gmail.com', 'Male', 'vytilla', 'vytilla', '787878', 'Alappuzha', 'Kerala', 'India', 'bioengineer'),
(162, 'james', '7898781212', 'james@gmail.com', 'Male', 'kadantra', 'kadavantra', '898989', 'Ernakulam', 'Kerala', 'India', 'bioengineer'),
(163, 'Sruthi ms', '9012909012', 'sruthi@gmail.com', 'Female', 'vytilla', 'kadavantra', '898989', 'Ernakulam', 'Kerala', 'India', 'seller'),
(164, '', '9090909090', 'mdrc@gmail.com', '', 'vytilla', 'vytilla', '908978', 'Alappuzha', 'Kerala', 'India', 'laboratory'),
(165, 'Anjaleena', '9090129090', 'anjaleena@gmail.com', 'Female', 'kadantra', 'kadavantra', '898989', 'Alappuzha', 'Kerala', 'India', 'bioengineer'),
(166, 'ami', '9087890909', 'ami@gmail.com', 'Female', 'kadavantra', 'kadavantra', '898989', 'Alappuzha', 'Kerala', 'India', 'seller');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` varchar(25) NOT NULL,
  `country_id` varchar(20) NOT NULL,
  `name` varchar(48) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `name`) VALUES
('Gujarath', 'India', 'Gujarath'),
('Karnataka', 'India', 'Karnataka'),
('Kerala', 'India', 'Kearala'),
('New Delhi', 'India', 'New Delhi '),
('Punjab', 'India', 'Punjab'),
('Thamilnadu', 'India', 'Thamilnadu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `bioengineer`
--
ALTER TABLE `bioengineer`
  ADD PRIMARY KEY (`bioengineer_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`laboratory_id`),
  ADD UNIQUE KEY `unique` (`license_number`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`),
  ADD KEY `registration_id` (`registration_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service history`
--
ALTER TABLE `service history`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`registration_id`),
  ADD UNIQUE KEY `UNIQUE` (`phone_number`) USING BTREE;

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `bioengineer`
--
ALTER TABLE `bioengineer`
  MODIFY `bioengineer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `laboratory`
--
ALTER TABLE `laboratory`
  MODIFY `laboratory_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service history`
--
ALTER TABLE `service history`
  MODIFY `service_id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `registration_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`registration_id`) REFERENCES `seller` (`seller_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
