-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 03:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` char(20) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `date` date NOT NULL,
  `edate` date DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `subscription` varchar(100) NOT NULL,
  `payment` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `gender`, `mobile`, `date`, `edate`, `address`, `subscription`, `payment`) VALUES
(1, 'yash', 'rohitdevkar78@gmail.com', 'male', 1472583690, '2023-03-21', NULL, 'nashik', '1year', 'online'),
(101, 'yash', 'rohitdevkar78@gmail.com', 'male', 1472583690, '2023-03-21', NULL, 'nashik', '1year', 'online'),
(155, 'pravin', 'rohitdevkar78@gmail.com', 'Male', 1224487824, '2023-03-02', '2023-09-02', 'nimani', '6 month', 'online'),
(156, 'pravin Raut', 'rohitdevkar78@gmail.com', 'Male', 1234549721, '2023-03-02', '2024-03-02', 'nimani. nashik', '1 year', 'offline'),
(157, 'umair', 'yashwantshirore3421@gmail.com', 'Male', 1023456789, '2023-03-30', '2023-04-30', 'amruthdham, nashik', '1 month', 'online'),
(158, 'rohit', 'rohitdevkar78@gmail.com', 'Male', 1224487824, '2023-03-18', '2023-09-18', 'mumbai', '6 month', 'online'),
(159, 'pravin', 'rohitdevkar78@gmail.com', 'Male', 1234549721, '2023-03-02', '2023-09-02', 'bagur', '6 month', 'online'),
(160, 'pravin', 'rohitdevkar78@gmail.com', 'Male', 1234549721, '2023-03-02', '2023-09-02', 'bagur', '6 month', 'online'),
(161, 'pravin', 'rohitdevkar78@gmail.com', 'Male', 1010101011, '2023-02-08', '2023-04-01', 'nashik', '1 month', 'online'),
(162, 'pravin Raut', 'rohitdevkar78@gmail.com', 'Male', 1010101011, '2023-03-15', '2023-09-15', 'nimani. nashik', '6 month', 'online'),
(163, 'rohitdevkar', 'rohitdevkar78@gmail.com', 'Male', 1010101010, '2023-03-31', '2023-10-01', 'nashukRoad, nashik', '6 month', 'offline'),
(164, 'sanket', 'sanketshirsath226@gmail.com', 'Male', 1224487824, '2023-03-21', '2024-03-21', 'mumbai', '1 year', 'offline'),
(165, 'sanket', 'sanketshirsath226@gmail.com', 'Male', 1010101010, '2023-03-18', '2024-03-18', 'mumbai', '1 year', 'online'),
(166, 'sanjay', 'yashwantshirore3421@gmail.com', 'Male', 1010101010, '2023-03-15', '2023-09-15', 'nashukRoad, nashik', '6 month', 'offline'),
(167, 'sanjay', 'yashwantshirore3421@gmail.com', 'Male', 1010101010, '2023-03-16', '2023-09-16', 'nashukRoad, nashik', '6 month', 'offline'),
(168, 'sanjay', 'yashwantshirore3421@gmail.com', 'Male', 1010101010, '2023-03-09', '2023-04-09', 'nashukRoad, nashik', '1 month', 'online'),
(169, 'pravin', 'rohitdevkar78@gmail.com', 'Male', 1010101011, '2023-03-14', '2023-09-14', 'nimani. nashik', '6 month', 'online'),
(170, 'pravin', 'rohitdevkar78@gmail.com', 'Male', 1010101011, '2023-03-21', '2023-04-21', 'nimani. nashik', '1 month', 'offline'),
(171, 'pravin', 'rohitdevkar78@gmail.com', 'Male', 1010101011, '2023-03-21', '2023-04-21', 'nimani. nashik', '1 month', 'offline'),
(172, 'pravin', 'rohitdevkar78@gmail.com', 'Male', 1010101011, '2023-03-08', '2024-03-08', 'nimani. nashik', '1 year', 'offline'),
(173, 'avinash', 'avinashvi275@gmail.com', 'Male', 1230456987, '2023-02-17', '2023-03-17', 'bhagur', '1 month', 'offline'),
(176, 'divesh', 'divyeshyeola@gmail.com', 'Male', 1234567891, '2023-05-11', '2024-05-11', 'nashik', '1 year', 'offline'),
(177, 'kitu', 'kitu@gmail.com', 'Male', 1010101011, '2023-05-15', '2023-11-15', 'nimani. nashik', '6 month', 'online'),
(178, 'kitu', 'kitu@gmail.com', 'Male', 1010101011, '2023-05-15', '2023-11-15', 'nimani. nashik', '6 month', 'online'),
(179, 'mam', 'ydbhise@kkwagh.edu.in', 'Female', 1224567892, '2023-05-17', '2023-06-17', 'nimani. nashik', '1 month', 'online'),
(180, 'mam', 'ydbhise@kkwagh.edu.in', 'Female', 1224567892, '2023-05-17', '2023-06-17', 'nimani. nashik', '1 month', 'online'),
(181, 'sonal', 'sonalchokhande20@gmail.com', 'Female', 1224567892, '2023-05-17', '2024-05-17', 'nimani. nashik', '1 year', 'online'),
(182, 'mam', 'ydbhise@kkwagh.edu.in', 'Female', 1224567892, '2023-05-17', '2023-06-17', 'nimani. nashik', '1 month', 'online'),
(183, 'mam', 'sdchokhande010120@kkwagh.edu.in', 'Female', 1224567892, '2023-05-17', '2023-06-17', 'nimani. nashik', '1 month', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'yash', 'yashwantshirore3421@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
