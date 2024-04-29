-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 11:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makeup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `phone` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `service` varchar(70) NOT NULL,
  `date` date NOT NULL,
  `slot` varchar(60) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `phone`, `email`, `service`, `date`, `slot`, `message`) VALUES
(5, 'priya', '9876992115', 'priya@gmail.com', 'Engagement Makup', '2024-03-15', '9:00 AM', 'good'),
(7, 'sachin', '9872131456', 'sachin@gmail.com', 'Bridal Makup', '2024-03-14', '9:00 AM', 'jhyhh'),
(9, 'mann ', '9872131456', 'mann@gmail.com', 'Party Makeup', '2024-03-29', '1:00 PM', 'hello'),
(10, 'mamta', '98735426', 'sachin@gmail.com', 'Pedicure', '2024-03-30', '4:00 PM', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `date` varchar(80) NOT NULL,
  `heading` varchar(600) NOT NULL,
  `description` varchar(800) NOT NULL,
  `content` varchar(7000) NOT NULL,
  `image` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `date`, `heading`, `description`, `content`, `image`) VALUES
(24, '2024-03-30', 'hairstyle', ' \"Elevate your style with our precision manicure services. Treat yourself to expert nail care, stunning designs, and long-lasting results for perfectly polished fingertips.', 'iuohjcbkjdbjdhjbhjbdhjd', 'uploads/hair.jpg'),
(25, '2024-03-23', 'Facial', '\"Indulge in our exquisite bridal services, tailored to make your special day unforgettable. From elegant updos to flawless makeup, radiate beauty on your wedding day.', 'vhgcvd', 'uploads/facial.jpg'),
(27, '2024-03-24', 'roka makeup', ' \"Revitalize your skin with our luxurious facials. Experience deep cleansing, exfoliation, and rejuvenation for a radiant complexion that glows with health and vitality', 'ghugfhhjkufjevgj', 'uploads/bridal.jpg'),
(28, '2024-03-30', 'hairstyle', ' \"Revitalize your skin with our luxurious facials. Experience deep cleansing, exfoliation, and rejuvenation for a radiant complexion that glows with health and vitality', 'jvjbn bkvb', 'uploads/bridal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `f_name` varchar(70) NOT NULL,
  `l_name` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `subject` varchar(70) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `f_name`, `l_name`, `email`, `subject`, `message`) VALUES
(3, 'sachin', 'yadav', 'sachin@gmail.com', 'gggg', 'kjjlkhj'),
(5, 'shivam', 'kumar', 'gaurishanker97790@gmail.com', 'dddd', 'makeup'),
(6, 'shivam', 'kumar', 'gaurishanker97790@gmail.com', 'dddd', 'makeup');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `heading` varchar(300) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `content` varchar(12000) NOT NULL,
  `price` int(20) NOT NULL,
  `duration` int(10) NOT NULL,
  `image` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `heading`, `description`, `content`, `price`, `duration`, `image`) VALUES
(3, 'makeup ', 'course', ' \"Revitalize your skin with our luxurious facials. Experience deep cleansing, exfoliation, and rejuvenation for a radiant complexion that glows with health and vitality', 'jbjbjd', 34, 4, 'uploads/facial.jpg'),
(4, 'full makeup', 'fullll', 'description', 'content content', 345, 5, 'uploads/facial.jpg'),
(5, 'foundation principal', 'foundation', '\"Indulge in our exquisite bridal services, tailored to make your special day unforgettable. From elegant updos to flawless makeup, radiate beauty on your wedding day.', 'vgygvgvhdccdv', 4567, 6, 'uploads/manicure.jpg'),
(6, 'product knowledge', 'product knowlegeee', 'product knowlwge is good ', 'contentes', 877, 2, 'uploads/hair.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
