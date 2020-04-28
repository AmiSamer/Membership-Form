-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2020 at 07:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `friends`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(20) UNSIGNED NOT NULL,
  `image` varchar(200) CHARACTER SET utf8 NOT NULL,
  `full_name` text CHARACTER SET utf8 NOT NULL,
  `fathers_name` text CHARACTER SET utf8 NOT NULL,
  `mothers_name` text CHARACTER SET utf8 NOT NULL,
  `present_address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `permanent_address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `nid` int(200) UNSIGNED NOT NULL,
  `gender` text CHARACTER SET utf8 NOT NULL,
  `religion` text CHARACTER SET utf8 NOT NULL,
  `blood_group` varchar(10) CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `mobile` varchar(15) CHARACTER SET utf8 NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `qualification` varchar(200) CHARACTER SET utf8 NOT NULL,
  `occupation` varchar(200) CHARACTER SET utf8 NOT NULL,
  `company_name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `position` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `image`, `full_name`, `fathers_name`, `mothers_name`, `present_address`, `permanent_address`, `nid`, `gender`, `religion`, `blood_group`, `date`, `mobile`, `email`, `qualification`, `occupation`, `company_name`, `position`) VALUES
(24, '4396494batman-dc-comics.jpg', 'Bruce Wayne (Batman)', 'Thomas Wayne', 'Martha Wayne', 'Hall of Justice, Washington', 'Gotham, New Work', 123456, 'Male', 'Christianity', 'O+', '1985-10-02', '01513470190', 'bat@gmail.com', 'Ph.D', 'Businessman', 'Wayne Industries', 'Owner'),
(25, '15112494713164668-superman.jpg.png', 'Clark Kent (Superman)', 'Thomas Kent', 'Martha Kent', 'Hall of Justice, Washington', 'Smallville', 123789, 'Male', 'Christianity', 'A+', '1986-10-10', '01813470130', 'sup@gmail.com', 'Honours', 'Job Holder', 'Daily Planet, Metropolish', 'News Reporter'),
(26, '1708151871wonder-woman-DC-75.jpg.480x0_q71_crop-scale.jpg', 'Diana Prince (Wonder Woman)', 'Zeus', 'Hepolita', 'Hall of Justice, Washington', 'Themyscira', 789123, 'Female', 'Christianity', 'B-', '1600-02-10', '01513470180', 'diana@gmail.com', 'Masters', 'Job Holder', 'New Work National Museum', 'Museum Curator'),
(27, '892377778hero.jpg', 'Arthur Curry (Aquaman)', 'Thomas Curry', 'Atlana', 'Hall of Justice, Washington', 'Atlantis City', 777888, 'Male', 'Christianity', 'AB-', '1985-12-02', '01813470130', 'aqua@gmail.com', 'Bachelors', 'Unemployed', 'N/A', 'N/A'),
(28, '139111224flash-ft.jpg', 'Barry Allen (Flash)', 'Henry Allen', 'Nora Allen', 'Hall of Justice, Washington', 'Central City', 789654, 'Male', 'Christianity', 'O+', '1990-10-14', '01213470131', 'flash@gmail.com', 'Masters', 'Job Holder', 'Central City Police Department', 'Detective'),
(29, '1400640565Cyborg.jpg', 'Victor Stone (Cyborg)', 'Silas Stone', 'Mary Stone', 'Hall of Justice, Washington', 'Star City', 123654, 'Male', 'Christianity', 'O+', '1992-10-10', '01813470130', 'vic@gmail.com', 'Bachelors', 'Student', 'N/A', 'N/A'),
(31, '1039187332171183.jpg', 'Hal Jordan (Green Lantern)', 'Martin Jordan', 'Jessica Jordan', 'Hall of Justice, Washington', 'Oa, Space', 852741, 'Male', 'Christianity', 'A+', '1990-02-21', '01513470180', 'green@gmail.com', 'Bachelors', 'Job Holder', 'Washington Air Force', 'Pilot');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(3, 'Samer Kauser', 'samer@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
