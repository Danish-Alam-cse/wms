-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 07:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbi`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `content`) VALUES
(13, 'The name of the SBI has been synonymous with trustworthy banking for decades. Since its inception in the 1800s, the bank has come a long way. The SBI student loan schemes are considered to be some of the best in the country, as the policies on the basis of which they were formed very much resonate to the common man. Even in this day and age, a majority of the Indian population prefers SBI to borrow an education loan from, due to its reliable way of conducting business.'),
(14, 'Even though it is one of the oldest functioning banks in the country, SBI has thoroughly updated its banking policies to suit the changing times. This brings us to the topic of discussion of today’s article, the SBI student loan calculator.'),
(15, 'If you are looking to borrow an education loan but are not sure about its particulars, then the SBI student loan calculator is the right tool for you to get started on your education loan journey'),
(16, 'It is perhaps the first of its kind of self-help tools that can be used to plan the student loan process in a hassle-free manner. However, before we take a deeper look at how students can use this tool to their benefit, let us take a brief look at the various education loan schemes offered by State bank of India for higher studies.'),
(17, 'SBI has introduced two different education loan schemes for higher education. These schemes cater to the financial needs of borrowers who need an education loan to study in India, as well as abroad. Here is a brief overview of each of these schemes and the benefits.'),
(18, 'The SBI Global Ed-Vantage Scheme is a collateral education loan scheme that has been exclusively put together for students who wish to pursue their higher education in notable, prestigious universities in countries like the USA, Canada, Germany, etc. This SBI education loan is granted especially to students who have secured admission for professional degrees like Masters, PhD & M.Phil courses in universities and colleges abroad.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
