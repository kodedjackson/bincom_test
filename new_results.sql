-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 04:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agentname`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_results`
--

CREATE TABLE `new_results` (
  `result_id` int(11) NOT NULL,
  `polling_unit_uniqueid` varchar(50) NOT NULL,
  `party_abbreviation` char(4) NOT NULL,
  `party_score` int(11) NOT NULL,
  `entered_by_user` varchar(50) NOT NULL,
  `date_entered` datetime NOT NULL,
  `user_ip_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_results`
--

INSERT INTO `new_results` (`result_id`, `polling_unit_uniqueid`, `party_abbreviation`, `party_score`, `entered_by_user`, `date_entered`, `user_ip_address`) VALUES
(28, '8', 'LP', 1000000, 'Jackson Jackson', '2028-09-22 04:43:10', '::1'),
(29, '8', 'APC', 20, 'Jackson', '2028-09-22 04:43:27', '::1'),
(30, '8', 'PDP', 16, 'Jackson', '2028-09-22 04:43:44', '::1'),
(31, '8', 'NNPP', 2, 'Jackson', '2028-09-22 04:43:56', '::1'),
(32, '8', 'ADC', 1, 'Jackson', '2028-09-22 04:44:08', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_results`
--
ALTER TABLE `new_results`
  ADD PRIMARY KEY (`result_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_results`
--
ALTER TABLE `new_results`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
