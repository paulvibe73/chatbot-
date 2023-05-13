-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 09:50 AM
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
-- Database: `bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot1`
--

CREATE TABLE `chatbot1` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot1`
--

INSERT INTO `chatbot1` (`id`, `queries`, `replies`) VALUES
(1, 'hello|hi|hey|whats up|how are you', 'Hello there, how can i help you'),
(2, 'what\'s your name|who are you|what are you', 'Hi, I am ChatOnline. A student generated prototype chatbot here to communicate with you'),
(3, 'what can you do', 'I wasn\'t programmed to do much. We can have just basic conversations. '),
(4, 'who created you|who made you', 'I was created as a project for Paul Ashu, a year 1 software engineering student.  '),
(5, 'how do you work', 'I was built using PHP and mysqli for my back-end operations(which enables me answer basic questions)  and HTML and CSS as front end(which is basically how the page looks)'),
(6, 'can you help me|i need help|help me please|i need help with something', 'Yeah sure, how can i help you');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot1`
--
ALTER TABLE `chatbot1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot1`
--
ALTER TABLE `chatbot1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
