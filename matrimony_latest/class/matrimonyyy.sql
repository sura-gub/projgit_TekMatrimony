-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2023 at 02:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimonyyy`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile_requests`
--

CREATE TABLE `profile_requests` (
  `id` int(11) NOT NULL,
  `req_from` varchar(255) NOT NULL,
  `req_to` varchar(255) NOT NULL,
  `status` enum('pending','accepted','rejected') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` int(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `profile`, `name`, `gender`, `mobile`, `dob`, `religion`, `mother`, `email`, `password`) VALUES
(0, 'Myself', 'gggggg', '2', 2147483647, '', '', '', '', ''),
(0, 'Myself', 'gggggg', '2', 2147483647, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(100) NOT NULL,
  `req_from` varchar(100) NOT NULL,
  `req_to` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `req_from`, `req_to`, `status`) VALUES
(1, 'ashi@gmail.com', '', ''),
(2, 'nisi@gmail.com', '31', ''),
(3, 'ashi@gmail.com', 'aaa@gmail.com', ''),
(4, 'maha@gmail.com', 'ddd@gmail.com', ''),
(5, 'pri@gmail.com', 'nix@gmail.com', 'reject'),
(6, 'saju@gmail.com', 'a1@gmail.com', ''),
(7, 'saju@gmail.com', 'ttt@gmail.com', 'accept'),
(8, 'nix@gmail.com', 'pri@gmail.com', 'accept'),
(9, 'mijo@gmail.com', 'c1@gmail.com', 'reject'),
(12, 'saju@gmail.com', 'a1@gmail.com', ''),
(15, 'aaa@gmail.com', 'nisi@gmail.com', ''),
(16, 'c1@gmail.com', 'mijo@gmail.com', 'accept'),
(17, 'ttt@gmail.com', 'saju@gmail.com', 'accept'),
(18, 'pri@gmail.com', 'mmm@gmail.com', ''),
(19, 'a2@gmail.com', 'jenshi@gmail.com', 'accept'),
(20, 'jenshi@gmail.com', 'a2@gmail.com', 'reject'),
(21, 'aisha@mail.com', 'ijaas@mail.com', 'accept'),
(22, 'mgsh@gmail.com', 'jeni@gmail.com', 'NULL'),
(23, 'ijaas@mail.com', 'aisha@mail.com', 'accept'),
(24, 'riyaz@mail.com', 'jeni@gmail.com', 'NULL'),
(25, 'riyaz@mail.com', 'maha@gmail.com', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `wedding`
--

CREATE TABLE `wedding` (
  `id` int(11) NOT NULL,
  `select` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `religion` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `subcaste` varchar(100) NOT NULL,
  `gothram` varchar(100) NOT NULL,
  `suddha` varchar(100) NOT NULL,
  `marital` varchar(100) NOT NULL,
  `childrens` varchar(100) NOT NULL,
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
  `location` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `comments` varchar(300) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `randmcd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wedding`
--

INSERT INTO `wedding` (`id`, `select`, `name`, `gender`, `mobile`, `dob`, `religion`, `mother`, `email`, `password`, `caste`, `subcaste`, `gothram`, `suddha`, `marital`, `childrens`, `living`, `famstatus`, `famtype`, `famvalue`, `disability`, `highestedu`, `education`, `employed`, `occupation`, `annual`, `amount`, `location`, `state`, `comments`, `picture`, `randmcd`) VALUES
(14, 'Sister', 'jenshika', 'Female', '9965421587', '2023-09-06', 'Hindu', 'English', 'szdfdf@gmail.com', '123', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '', 'w6ksji9ly'),
(15, 'Relatives', 'jenshi', 'Female', '9944424502', '2023-09-12', 'Christian', 'Hindi', 'jenshi@gmail.com', '123', 'MBC', 'Christian', 'abc', '', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'B.Tech', 'Private', 'Media and News', 'Businessman', 'Dollar', '0-1 lakhs', 'USA', 'Tamil Nadu', 'dffdfdfsfdf', 'g1.jpg', '9g86ia0oq'),
(16, 'Daughter', 'jeni', 'Female', '9988441122', '2023-09-20', 'Christian', 'English', 'jeni@gmail.com', '456', 'BC', 'Christian', 'ila', '', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'B.Sc', 'Private', 'Self Employed', 'Doctor', 'Dollar', '1-2 lakhs', 'USA', 'Tamil Nadu', 'She is a Nurse', 'g4.jpg', 'bisfxvjak'),
(17, 'Sister', 'nisi', 'Female', '9632589632', '2023-09-23', 'Hindu', 'Hindi', 'nisi@gmail.com', '789', 'OC', 'Christian', 'ertetre', 'Yes', 'divorced', '2', 'children living with me', 'affluent', 'joint', 'moderate', 'none', 'B.Tech', 'Gover ment', 'Entertainment', 'Doctor', 'Dollar', '2-3 lakhs', 'UK', 'Kerala', 'she is my sister', 'g8.JPG', 'vrxoy38aw'),
(18, 'Friend', 'ashi', 'Female', '9865321478', '2023-09-30', 'Hindu', 'Hindi', 'ashi@gmail.com', '147', 'OC', 'Christian', 'asd', 'Yes', 'Never Married', 'None', 'Children living with me', 'Middleclass', 'Joint', 'Orthodox', 'None', 'B.Tech', 'Gover ment', 'Self Employed', 'Businessman', 'Rupees', '0-1 lakhs', 'USA', 'Tamil Nadu', 'she is my friend', 'g3.jpg', '6rqw78lmd'),
(19, 'Sister', 'maha', 'Female', '98745632147', '2023-09-13', 'Christian', 'Hindi', 'maha@gmail.com', '258', 'BC', 'Christian', 'aaaa', 'No', 'Awaiting Divorce', '1', 'Children living with me', 'Middleclass', 'Nuclear', 'Orthodox', 'None', 'B.Tech', 'Gover ment', 'Media and News', 'Doctor', 'Euro', '2-3 lakhs', 'Malasiya', 'AAndhra', 'mahasharshini', 'g2.jpg', '3chiy68fs'),
(22, 'Daughter', 'pri', 'Female', '7878787878', '2023-09-11', 'Christian', 'Hindi', 'pri@gmail.com', '369', 'SC', 'Hindu', 'rrr', 'No', 'Divorced', '1', 'children living with me', 'Upper Middleclass', 'Nuclear', 'Moderate', 'None', 'B.E', 'Private', 'Media and News', 'Doctor', 'Rupees', '3-4lakhs', 'India', 'Tamil Nadu', 'NULL', 'g4.JPG', 'o6hd2kcq7'),
(24, 'Daughter', 'xyz', 'Female', '9632587412', '2023-09-28', 'Islam', 'Bengali', 'xyz@gmail.com', '333', 'SC', 'Islam', 'rrr', 'Yes', 'Awaiting Divorce', '4and above', 'Children not living with me', 'Affluent', 'Nuclear', 'Liberal', 'Physically challenged', 'B.Sc', 'Others', 'Entertainment', 'Pilot', 'Yen', '4-5 lakhs', 'Malasiya', 'Maharastra', 'success', 'g4.jpg', 'jiq0alzp4'),
(26, 'Daughter', 'ccc', 'Female', '96587412365', '2023-09-29', 'Hindu', 'Malayalam', 'ccc@gmail.com', '111', 'MBC', 'Hindu', 'ddddd', 'Yes', 'Never Married', 'None', 'Children living with me', 'Middleclass', 'Joint', 'Orthodox', 'None', 'B.E', 'Gover ment', 'Self Employed', 'Doctor', 'Dollar', '1-2 lakhs', 'UK', 'Tamil Nadu', 'cccc', 'g1.jpg', 'j9yq5df30'),
(27, 'Brother', 'armin', 'Male', '9658741236', '2023-09-08', 'Hindu', 'Hindi', 'armin@gmail.com', '777', 'OC', 'Hindu', 'rrr', 'Yes', 'Never Married', '1', 'Children living with me', 'Middleclass', 'Joint', 'Orthodox', 'None', 'B.Tech', 'Private', 'Entertainment', 'Engineer', 'Rupees', '3-4 lakhs', 'UK', 'Karnadaka', 'He is my brother', 'b1.jpg', 's98j2gmdt'),
(28, 'Brother', 'saju', 'Male', '98745632145', '2023-09-08', 'Hindu', 'Malayalam', 'saju@gmail.com', '888', 'MBC', 'Islam', 'ddddd', 'Yes', 'Widowed', 'None', 'Children living with me', 'Middleclass', 'Nuclear', 'Traditional', 'Physically challenged', 'B.Tech', 'Private', 'Media and News', 'Doctor', 'Euro', '2-3 lakhs', 'India', 'Kerala', 'ajuslin saju he is my brother', 'b2.jpg', 'kce8zrxy6'),
(29, 'Brother', 'nix', 'Male', '9876543219', '2023-09-28', 'Hindu', 'Tamil', 'nix@gmail.com', '999', 'SC', 'Hindu', 'erewr', '', 'Widowed', '3', 'Children living with me', 'Middleclass', 'Nuclear', 'Orthodox', 'Physically challenged', 'B.Tech', 'Private', 'Media and News', 'Engineer', 'Euro', '2-3 lakhs', 'UK', 'Kerala', 'nixsan he is my younger brother\n', 'b3.jpg', 'bxqo5v1m9'),
(30, 'Brother', 'mijo', 'Male', '89562314789', '2023-09-27', 'Christian', 'Tamil', 'mijo@gmail.com', '666', 'BC', 'Hindu', 'abc', 'Yes', 'Never Married', 'None', 'Children living with me', 'Middleclass', 'Joint', 'Orthodox', 'None', 'B.Sc', 'Others', 'Media and News', 'Engineer', 'Euro', '3-4 lakhs', 'India', 'Karnadaka', 'Mijo jershan he is my last brother', 'b4.jpg', '19i7dh0sa'),
(31, 'Brother', 'aaa', 'Male', '9632147856', '2023-09-29', 'Christian', 'Telugu', 'aaa@gmail.com', 'aaa', 'OC', 'Christian', 'rrr', 'Yes', 'Divorced', '2', 'Children living with me', 'Middleclass', 'Nuclear', 'Traditional', 'None', 'B.E', 'Private', 'Media and News', 'Doctor', 'Euro', '3-4 lakhs', 'India', 'Karnadaka', 'aaa', 'b5.jpg', '8lhoqsagc'),
(32, 'Son', 'bbb', 'Male', '8956231478', '2023-09-29', 'Hindu', 'Hindi', 'bbb@gmail.com', 'bbb', 'MBC', 'Hindu', 'ertetre', 'Yes', 'Divorced', '4and above', 'Children living with me', 'Upper Middleclass', 'Nuclear', 'Orthodox', 'Physically challenged', 'B.Sc', 'Gover ment', 'Self Employed', 'Police', 'Dollar', '2-3 lakhs', 'China', 'Tamil Nadu', 'bbb', 'b6.jpg', '4o60a28bd'),
(33, 'Friend', 'ccc', 'Male', '8562314', '2023-09-25', 'Islam', 'Bengali', 'ccc@gmail.com', 'ccc', 'BC', 'Islam', 'ddddd', 'No', 'Awaiting Divorce', '3', 'Children not living with me', 'Upper Middleclass', 'Joint', 'Moderate', 'None', 'B.Tech', 'Others', 'Entertainment', 'Pilot', 'Yen', '4-5 lakhs', 'USA', 'Maharastra', 'ccc', 'b7.jpg', '5a3gl8s6d'),
(34, 'Relatives', 'ddd', 'Male', '468489546', '2023-08-28', 'Islam', 'English', 'ddd@gmail.com', 'ddd', 'BC', 'Christian', 'erewr', 'No', 'Never Married', '4and above', 'Children living with me', 'Affluent', 'Joint', 'Liberal', 'None', 'B.Tech', 'Private', 'Media and News', 'Businessman', 'Rupees', '1-2 lakhs', 'Malaysia', 'Kerala', 'ddd', 'b8.jpg', 'mafh0e6s8'),
(35, 'Myself', 'a1', 'Female', '564831453', '2023-09-16', 'Christian', 'English', 'a1@gmail.com', 'a1', 'MBC', 'Islam', 'ertetre', 'Yes', 'Never Married', 'None', 'Children living with me', 'Middleclass', 'Joint', 'Orthodox', 'None', 'B.E', 'Gover ment', 'Self Employed', 'Businessman', 'Dollar', '0-1 lakhs', 'USA', 'Tamil Nadu', 'a1', 'g5.jpg', '6d8gmf2rc'),
(36, 'Sister', 'b1', 'Female', '1431878465', '2023-09-08', 'Christian', 'Hindi', 'b1@gmail.com', 'b1', 'OC', 'Islam', 'ertetre', 'Yes', 'Widowed', '2', 'Children living with me', 'Upper Middleclass', '', 'Traditional', 'Physically challenged', 'B.Tech', 'Private', 'Media and News', 'Engineer', 'Euro', '1-2 lakhs', 'UK', 'Karnadaka', 'b1', 'g6.jpg', 'bw53hu9kx'),
(37, 'Friend', 'c1', 'Female', '54269846', '2023-09-30', 'Hindu', 'Malayalam', 'c1@gmail.com', 'c1', 'BC', 'Hindu', 'erewr', 'Yes', 'Widowed', '2', 'Children living with me', 'Middleclass', 'Nuclear', 'Traditional', 'Physically challenged', 'B.E', 'Private', 'Media and News', 'Engineer', 'Euro', '2-3 lakhs', 'India', 'Maharastra', 'c1', 'g7.jpg', 'waku3pcq4'),
(38, 'Daughter', 'd1', 'Female', '6543426', '2023-09-15', 'Islam', 'Telugu', 'd1@gmail.com', 'd1', 'SC', 'Christian', 'abc', 'Yes', 'Widowed', '3', 'Children not living with me', 'Upper Middleclass', 'Joint', 'Moderate', 'None', 'B.Tech', 'Gover ment', 'Entertainment', 'Doctor', 'Yen', '1-2 lakhs', 'USA', 'AAndhra', 'd1', 'g8.jpg', 'suadke6cl'),
(40, 'Son', 'ttt', 'Female', '5341534', '2023-09-16', 'Hindu', 'Malayalam', 'ttt@gmail.com', 'ttt', 'MBC', 'Islam', 'erewr', 'Yes', 'Awaiting Divorce', '4and above', 'Children living with me', 'Middleclass', 'Joint', 'Orthodox', 'Physically challenged', 'B.Tech', 'Private', 'Self Employed', 'Businessman', 'Yen', '0-1 lakhs', 'India', 'Tamil Nadu', 'ttt', 'g6.jpg', 'xkoa5mchy'),
(42, 'Brother', 'mmm', 'Male', '86556886', '2023-09-16', 'Hindu', 'Tamil', 'mmm@gmail.com', 'mmm', 'SC', 'Hindu', 'dfd', 'Yes', 'Widowed', 'None', 'Children living with me', 'Middleclass', 'Joint', 'Traditional', 'None', 'B.Tech', 'Private', 'Entertainment', 'Engineer', 'Rupees', '1-2 lakhs', 'USA', 'Kerala', 'mmm', 'b6.jpg', 'yicoxd5k4'),
(43, 'Brother', 'a2', 'Male', '5614514534', '2023-09-22', 'Christian', 'Telugu', 'a2@gmail.com', 'a2', 'MBC', 'Christian', 'ddddd', 'Yes', 'Never Married', 'None', 'Children living with me', 'Middleclass', 'Joint', 'Orthodox', 'None', 'B.E', 'Others', 'Self Employed', 'Doctor', 'Rupees', '3-4 lakhs', 'USA', 'Kerala', 'a2', 'b7.jpg', 'lb12zqd59'),
(46, 'Myself', 'Ijaas', 'Male', '1245783690', '1999-09-16', 'Islam', 'Tamil', 'ijaas@mail.com', 'ijaas123', 'BC', 'Islam', '', 'Dont-know', 'Never Married', 'None', '', 'Middleclass', 'Nuclear', 'Traditional', 'None', 'B.Tech', 'Private', 'Self Employed', 'Businessman', 'Rupees', '4-5 lakhs', 'India', 'Tamil Nadu', 'I am Ijaas', 'b3.jpg', 'prec1k5qv'),
(48, 'Daughter', 'Aisha', 'Female', '1234567890', '2023-10-06', 'Christian', 'Malayalam', 'aisha@mail.com', 'aisha123', 'BC', 'Islam', '', 'No', 'Never Married', 'None', 'Children not living with me', 'Upper Middleclass', 'Nuclear', 'Traditional', 'None', 'B.Tech', 'Gover ment', 'Self Employed', 'Doctor', 'Rupees', '4-5 lakhs', 'India', 'Kerala', '', 'g6.jpg', 'wzfc08xep'),
(49, 'Myself', 'magesh', 'Male', '9947818959', '2023-10-05', 'Christian', 'Tamil', 'mgsh@gmail.com', '123', 'BC', 'Christian', 'dont know', 'Yes', 'Never Married', 'None', '', 'Middleclass', 'Joint', 'Orthodox', 'None', 'B.E', 'Gover ment', 'Self Employed', 'Businessman', 'Dollar', '0-1 lakhs', 'USA', 'Tamil Nadu', 'testing mgsh', 'b8.jpg', 'm3vr8tb4g'),
(50, 'Friend', 'Alan', 'Male', '4567891230', '2023-09-25', 'Hindu', 'Bengali', 'alan1@mail.com', 'alan123', 'MBC', 'Christian', '', 'No', 'Never Married', 'None', 'Children not living with me', 'Affluent', 'Nuclear', 'Moderate', 'None', 'B.Tech', 'Private', 'Media and News', 'Doctor', 'Rupees', '1-2 lakhs', 'Malaysia', 'AAndhra', 'AlanTest', 'b5.jpg', 'ta2joy7rg'),
(51, 'Relatives', 'Ashik', 'Male', '1245789630', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'txajgspky'),
(52, 'Daughter', 'Ashik', 'Male', '1245789630', '2023-11-12', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'cevt12omu'),
(53, 'Brother', 'Ashik', 'Male', '7897897890', '2023-07-14', 'Christian', 'Hindi', 'ashik@gmail.com', 'ashik123', 'OC', 'Hindu', 'dont know', 'Yes', 'Never Married', '', '', 'Middleclass', 'Joint', 'Traditional', 'None', 'B.Tech', 'Gover ment', 'Self Employed', 'Engineer', 'Rupees', '3-4 lakhs', 'India', 'Karnadaka', '', 'b2.jpg', 'femvtab0o'),
(54, 'Friend', 'Shibu', 'Male', '1231234560', '2023-10-10', 'Christian', 'Hindi', 'shibu@mail.com', 'shibu123', 'NULL', 'NULL', 'NULL', 'NULL', 'Never Married', '', '', 'Middleclass', 'Joint', 'Traditional', 'None', 'B.E', 'Private', 'Media and News', 'Doctor', 'Dollar', '1-2 lakhs', 'India', 'Karnadaka', 'shibu test', 'b9.jpg', 'e0xmks8i4'),
(55, 'Friend', 'Riyaz', 'Male', '1245787845', '1998-06-17', 'Islam', 'Malayalam', 'riyaz@mail.com', 'riyaz123', 'BC', 'Christian', 'Dont Know', 'Yes', 'Never Married', '', '', 'Middleclass', 'Joint', 'Orthodox', 'None', 'B.Tech', 'Gover ment', 'Entertainment', 'Doctor', 'Rupees', '1-2 lakhs', 'China', 'Kerala', 'Riyaz Test', 'b12.jpg', 'hvpycjlgu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile_requests`
--
ALTER TABLE `profile_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
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
-- AUTO_INCREMENT for table `profile_requests`
--
ALTER TABLE `profile_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `wedding`
--
ALTER TABLE `wedding`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
