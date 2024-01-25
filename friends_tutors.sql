-- phpMyAdmin SQL Dump
-- version 5.2.1-2.fc39
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 18, 2024 at 04:19 AM
-- Server version: 10.5.23-MariaDB
-- PHP Version: 8.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `friends_tutors`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `userid` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`userid`, `username`, `email`, `password`) VALUES
('rt_admin1', 'admin1', 'admin1@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` int(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `mobileno`, `gender`, `password`) VALUES
('', '12qwdqw', 'wqwqw@gmail.com', 1212121212, 'Female', '12121221'),
('', 'dffervb', 'qwdqw@78428.fyb', 4567382, 'Male', 'qdqwd'),
('', 'dwe', 'dqwe@gmail.com', 2121212121, 'Others', '1212'),
('', 'huqh', 'uh@d.com', 1234567890, 'Male', '1234'),
('', 'jknjwdn@', 'eudnj@jn.dwin', 4567382, 'Male', 'wfwewf'),
('', 'qe', 'qeq@dw.com', 23432, 'Male', '1212'),
('', 'qfq', 'wef2345@cc.wcieb', 567832, 'Female', '4231'),
('', 'ra', 'r@ndj.com', 1234567890, 'Male', '1234'),
('', 't1', 'jn@test.c', 1234567890, 'Others', 'uhduqw'),
('', 't2', 'wdjhq@jn.com', 1234567890, 'Female', '123'),
('t1', 'test', 'test@gmail.com', 124567890, 'Male', 'test'),
('', 'test1', 'rty@nk.com', 1234567890, 'Male', '1234'),
('', 'wer', 'wer@gmial.com', 1234567890, 'Male', '12'),
('', 'wfwe', 'fwefw@fwvb.vs', 242323, 'Others', 'fws');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
