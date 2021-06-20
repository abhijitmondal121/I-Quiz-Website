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
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ansid` int(25) NOT NULL,
  `answers` varchar(255) NOT NULL,
  `qid` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ansid`, `answers`, `qid`) VALUES
(1, '16', 1),
(2, '32', 1),
(4, '64', 1),
(5, 'None of these above', 1),
(6, '1989', 2),
(7, '1981', 2),
(8, '1972', 2),
(9, '1995', 2),
(10, '.python', 3),
(11, '.py', 3),
(12, 'None of these', 3),
(13, '.P', 3),
(14, '//', 4),
(15, '//', 4),
(16, '#', 4),
(17, '!', 4),
(18, 'Object', 5),
(19, 'Function', 5),
(20, 'Attribute', 5),
(21, 'Argument', 5),
(22, 'val', 6),
(23, 'raise', 6),
(24, 'try', 6),
(25, 'with', 6),
(26, 'xyzp = 5,000,000', 7),
(27, 'x y z p = 5000 6000 7000 8000', 7),
(28, 'x,y,z,p = 5000, 6000, 7000, 8000', 7),
(29, 'x_y_z_p = 5,000,000', 7),
(33, 'a ^ b', 8),
(34, 'a ^ * b', 8),
(35, 'a ^ ^ b', 8),
(36, 'a**b', 8),
(37, 'val()', 9),
(38, 'print()', 9),
(39, 'print', 9),
(40, 'None of these', 9),
(41, '__xyz__ = 5', 10),
(42, 'None of these', 10),
(43, '_x = 2', 10),
(44, '__x = 3', 10),
(45, 'a: #include<userdefined>', 11),
(46, 'b: #include \"userdefined.h\"', 11),
(47, 'c: <include> \"userdefined.h\"', 11),
(48, 'd: Both A and B', 11),
(49, 'cout <<\"Hello world!\";', 12),
(50, 'Cout << Hello world! ;', 12),
(51, 'Out <<\"Hello world!;', 12),
(52, 'None of the above', 12),
(53, '@', 13),
(54, '#', 13),
(55, '&', 13),
(56, '%', 13),
(57, 'Encapsulation', 14),
(58, 'Inheritance', 14),
(59, 'Polymorphism', 14),
(60, 'All of the above', 14),
(61, 'Overloaded', 15),
(62, 'Encapsulated', 15),
(63, 'Reprehensible', 15),
(64, 'Extensible', 15),
(65, 'Dennis Ritchie', 16),
(66, 'Ken Thompson', 16),
(67, 'Bjarne Stroustrup', 16),
(68, 'Brian Kernighan', 16),
(69, 'Pure Object oriented', 17),
(70, 'Not Object oriented\r\n', 17),
(71, 'Semi Object-oriented or Partial Object-oriented', 17),
(72, 'None of the above', 17),
(73, '//Comment', 18),
(74, '/Comment/', 18),
(75, 'Comment//', 18),
(76, 'None of the above', 18),
(77, 'High-level Language\r\n', 19),
(78, 'Low-level language\r\n', 19),
(79, 'Middle-level language', 19),
(80, 'None of the above', 19),
(81, '\\n\r\n', 20),
(82, '\\t\r\n', 20),
(83, '\\r', 20),
(84, 'None of the above', 20),
(85, 'Dynamic', 21),
(86, 'Architecture Neutral\r\n', 21),
(87, 'Use of pointers', 21),
(88, 'Object-oriented', 21),
(89, 'Object\r\n', 22),
(90, 'int\r\n', 22),
(91, 'long\r\n', 22),
(92, 'void', 22),
(93, '0\r\n', 23),
(94, 'Not a Number\r\n', 23),
(95, 'Infinity\r\n', 23),
(96, 'Run time exception', 23),
(97, 'getClass()', 24),
(98, 'intern()', 24),
(99, 'getName()', 24),
(100, 'toString()', 24),
(101, 'Serialization', 25),
(102, 'Variable Shadowing', 25),
(103, 'Abstraction', 25),
(104, 'Multi-threading', 25),
(105, 'java.util package', 26),
(106, 'java.lang package', 26),
(107, 'java.awt package', 26),
(108, 'java.io package', 26),
(109, 'The rt.jar stands for the runtime jar\r\n', 27),
(110, 'It is an optional jar file\r\n', 27),
(111, 'It contains all the compiled class files', 27),
(112, 'All the classes available in rt.jar is known to the JVM', 27),
(113, 'package', 28),
(114, 'import', 28),
(115, 'extends\r\n', 28),
(116, 'export', 28),
(117, 'Runnable interface\r\n', 29),
(118, 'Remote interface\r\n', 29),
(119, 'Readable interface\r\n', 29),
(120, 'Result interface', 29),
(121, 'Stack\r\n', 30),
(122, 'String memory\r\n', 30),
(123, 'Heap memory\r\n', 30),
(124, 'Random storage space', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ansid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ansid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
