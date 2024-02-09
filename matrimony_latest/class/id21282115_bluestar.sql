-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2023 at 09:45 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id21282115_bluestar`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `password`) VALUES
(1, 'priya', '369'),
(2, 'maha', '258'),
(3, 'jenshi', '123'),
(4, 'ashi', '147');

-- --------------------------------------------------------

--
-- Table structure for table `chat_page`
--

CREATE TABLE `chat_page` (
  `id` int(11) NOT NULL,
  `sender_email` varchar(200) NOT NULL,
  `reciver_email` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friendrequest`
--

CREATE TABLE `friendrequest` (
  `id` int(11) NOT NULL,
  `request_from` varchar(200) NOT NULL,
  `request_to` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `friendrequest`
--

INSERT INTO `friendrequest` (`id`, `request_from`, `request_to`, `status`, `time`) VALUES
(54, 'janu@gmail.com', 'sijo@gmail.com', 'Accept', '2023-11-03 09:40:16'),
(55, 'tri@gmail.com', 'sijo@gmail.com', 'Reject', '2023-11-03 09:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `mobileno`, `email`, `password`) VALUES
(1, 'rinurai', '0', '', '123'),
(7, 'joeldon', '1534854861', 'joel@gmail.com', '123456'),
(8, 'allan', '789456123', 'all@gamil.com', '1001000'),
(9, 'vijay', '1234569870', 'vj@gmail.com', '456'),
(16, 'niyas', '7388382892', 'rinurai2001@gmail.com', '2345'),
(18, 'ijazz', '6388668292', 'rinurai2001@gmail.com', '567890'),
(19, 'ladak', '9387288289', 'ladk@gmail.com', '73783828'),
(22, 'akshyan', '5678901234', 'ak@gmail.com', '123'),
(23, 'nazzem', '9876546789', 'naz@gamil.com', '12345'),
(24, 'sura', '3456789543', 'sura@gamil.com', '567778'),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `id` int(11) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `religion` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `willing` varchar(10) NOT NULL,
  `subcaste` varchar(100) NOT NULL,
  `gothram` varchar(100) NOT NULL,
  `suddha` varchar(100) NOT NULL,
  `marital` varchar(100) NOT NULL,
  `childrens` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `living` varchar(100) NOT NULL,
  `famstatus` varchar(100) NOT NULL,
  `famtype` varchar(100) NOT NULL,
  `famvalue` varchar(100) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `highestedu` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `employed` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `annual` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `payment` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `comments` varchar(300) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `otp` int(10) NOT NULL,
  `randmcd` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`id`, `profile`, `name`, `gender`, `mobile`, `dob`, `religion`, `mother`, `email`, `password`, `caste`, `willing`, `subcaste`, `gothram`, `suddha`, `marital`, `childrens`, `height`, `living`, `famstatus`, `famtype`, `famvalue`, `disability`, `highestedu`, `education`, `employed`, `occupation`, `annual`, `amount`, `payment`, `location`, `state`, `comments`, `picture`, `otp`, `randmcd`, `time`) VALUES
(165, 'Myself', 'sijo oscar', 'male', '8787878787', '2023-11-01', 'Hindu', 'Tamil', 'sijo@gmail.com', '12345', 'Dont wish to Specify', '', '', '', '', 'single', 'None', '5ft/152cms', '', 'middle class', '', 'Orthodox', '', 'BSC', 'bcom', 'self-employ', '', '0-1 Lakh', '', '', 'India', 'TamilNadu', '', '6544aea734a5b.jpg', 0, '', '2023-11-03 09:16:45'),
(166, 'Myself', 'janu', 'Female', '6289299927', '2002-11-08', 'Christian', 'Tamil', 'janu@gmail.com', '12345', 'Vanniyar', '', '', '', '', 'single', 'None', '5.5ft/167cms', '', 'middle class', '', 'Orthodox', '', 'BCA', 'graduate ', 'self-employ', '', '0-1 Lakh', '', '', 'India', 'TamilNadu', '', '6544b77170a28.jpg', 0, '', '2023-11-03 09:03:45'),
(167, 'Myself', 'Trisha', 'Female', '7738839998', '1997-11-12', 'Hindu', 'Tamil', 'tri@gmail.com', '12345', 'Nadar', '', '', '', '', 'single', 'None', '5.2ft/158cms', '', 'middle class', '', 'Orthodox', '', 'BA', 'Tamil', 'self-employ', '', '0-1 Lakh', '', 'PRIME-USER', 'India', 'TamilNadu', '', '6544b95e82d55.jpg', 0, '', '2023-11-03 09:13:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_page`
--
ALTER TABLE `chat_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friendrequest`
--
ALTER TABLE `friendrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wedding`
--
ALTER TABLE `wedding`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_page`
--
ALTER TABLE `chat_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friendrequest`
--
ALTER TABLE `friendrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
