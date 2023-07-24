-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 03:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qid` int(25) NOT NULL,
  `question` varchar(255) NOT NULL,
  `tid` int(11) NOT NULL,
  `ansid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `question`, `tid`, `ansid`) VALUES
(1, '1) What is the maximum possible length of an identifier?', 1, 5),
(2, '2) In which year was the Python language developed?', 1, 6),
(3, '3) Which one of the following is the correct extension of the Python file?', 1, 11),
(4, '4) Which character is used in Python to make a single line comment?', 1, 16),
(5, '5) What is the method inside the class in python language?', 1, 19),
(6, '6) Which of the following is not a keyword in Python language?', 1, 22),
(7, '7) Which of the following declarations is incorrect in python language?', 1, 27),
(8, '8) Which of the following operators is the correct option for power(ab)?', 1, 33),
(9, '9) Which of the following functions is a built-in function in python language?', 1, 38),
(10, '10) Which of the following declarations is incorrect?', 1, 42),
(11, '1) Which of the following is the correct syntax to add the header file in the C++ program?', 2, 48),
(12, '2) Which of the following is the correct syntax to print the message in C++ language?', 2, 49),
(13, '3) Which of the following is the address operator?', 2, 55),
(14, '4) Which of the following features must be supported by any programming language to become a pure object-oriented programming language?', 2, 60),
(15, '5) The programming language that has the ability to create new data types is called___.', 2, 64),
(16, '6) Which of the following is the original creator of the C++ language?', 2, 68),
(17, '7) The C++ language is ______ object-oriented language.', 2, 71),
(18, '8) Which of the following comment syntax is correct to create a single-line comment in the C++ program?', 2, 73),
(19, '9) C++ is a ___ type of language.', 2, 79),
(20, '10) Which one of the following represents the tab?', 2, 82),
(21, '1) Which of the following is not a Java features?', 3, 87),
(22, '2) What is the return type of the hashCode() method in the Object class?', 3, 90),
(23, '3) What does the expression float a = 35 / 0 return?', 3, 95),
(24, '4) Which method of the Class.class is used to determine the name of a class represented by the class object as a String?', 3, 99),
(25, '5) In which process, a local variable has the same name as one of the instance variables?', 3, 105),
(26, '6) Which package contains the Random class?', 3, 105),
(27, '7) Which of the following is false?', 3, 110),
(28, '8) Which keyword is used for accessing the features of a package?', 3, 114),
(29, '9) Which of the following is a marker interface?', 3, 118),
(30, '10) In which memory a String is stored, when we create a string using new operator?', 3, 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
