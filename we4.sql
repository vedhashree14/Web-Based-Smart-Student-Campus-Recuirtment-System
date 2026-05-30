-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2025 at 09:18 AM
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
-- Database: `we4`
--

-- --------------------------------------------------------

--
-- Table structure for table `achiev`
--

CREATE TABLE `achiev` (
  `aid` int(4) NOT NULL,
  `achiev` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achiev`
--

INSERT INTO `achiev` (`aid`, `achiev`) VALUES
(1, 'essay writting,speech'),
(2, 'essay writting,speech'),
(3, 'essay writting,speech'),
(4, 'Java certified'),
(5, 'Java certified'),
(6, 'wefsdfsfsd'),
(7, 'Java certified'),
(8, 'Java certified'),
(9, 'swqas');

-- --------------------------------------------------------

--
-- Table structure for table `company1`
--

CREATE TABLE `company1` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL,
  `ctc` float NOT NULL,
  `email` varchar(10) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `eligibility` varchar(1000) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company1`
--

INSERT INTO `company1` (`id`, `name`, `role`, `ctc`, `email`, `phone`, `eligibility`, `file`, `type`, `size`) VALUES
(11, 'infosys', 'software e', 5, 'mahay@gmai', 9731950634, 'c,html', '61605-DT20222614067_Application.pdf', 'applicatio', 28886),
(10, 'tcs', 'System Eng', 6, 'mahay@gmai', 9731950634, 'c,html', '59993-DT20222614067_Application.pdf', 'applicatio', 28886),
(9, 'wipro', 'software e', 7, 'mahay@gmai', 9731950634, 'c,html', '46843-Resume (19).pdf', 'applicatio', 16099);

-- --------------------------------------------------------

--
-- Table structure for table `creg`
--

CREATE TABLE `creg` (
  `user_id` varchar(10) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creg`
--

INSERT INTO `creg` (`user_id`, `name`, `password`, `email`, `phone`) VALUES
('fathima080', 'mahay', 'mahayZ12345', 'mahayz@gmail.com', 7022023569),
('123456789', 'jhon', 'sdfghjk1234567@', 'tcs@gmail.com', 1234567890),
('123456789', 'jhon', 'sdfghjk1234567@', 'tcs@gmail.com', 1234567890),
('asdfghjk34', 'weryhjk', 'qwertyui@1', 'pashay119@gmail.com', 7022023569),
('asdfghjk34', 'weryhjk', 'qwertyui@1', 'pashay119@gmail.com', 7022023569),
('123456789k', 'sdfghjk', 'pashay119@', 'pashay119@gmail.com', 1234567890),
('123456789k', 'sdfghjk', 'pashay119@', 'pashay119@gmail.com', 1234567890),
('1ck22cs179', 'yarab', 'pashay119@', 'pashay119@gmail.com', 1234567890),
('1ck22cs17', 'dfghjk', 'pashay119@', 'pashay119@gmail.com', 1234567890),
('1ck22cs17', 'dfghjk', 'pashay119@', 'pashay119@gmail.com', 1234567890),
('1ck22cs179', 'yarab', 'pashay119@', 'pashay119@gmail.com', 7022023569),
('1ck22cs179', 'yarab', 'pashay119@', 'pashay119@gmail.com', 7022023569),
('1ck22cs179', 'yarab', 'pashay119@', 'pashay119@gmail.com', 7022023569),
('1ck22cs170', 'yarab', 'pasha119@', 'pashay119@gmail.com', 7022023569);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(4) NOT NULL,
  `course` varchar(30) NOT NULL,
  `college` varchar(400) NOT NULL,
  `grade` float NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `course`, `college`, `grade`, `year`) VALUES
(1, 'B E', 'SDM Institute Of Technology Ujire', 90, '2022'),
(2, 'B E', 'SDM Institute Of Technology Ujire', 90, '2022'),
(3, 'B E', 'SDM Institute Of Technology Ujire', 90, '2022'),
(4, 'SSLC', 'Vani', 85, '2016'),
(5, 'BE', 'Vani', 85, '2018'),
(6, 'SSLC,BE', 'cbit', 85, '2016'),
(7, 'SSLC', 'Vani', 85, '2016'),
(8, 'BE', 'Vani', 85, '2018'),
(9, 'BE', 'cbit', 85, '2018'),
(10, 'sq', 'sq', 0, '0000');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `num` int(4) NOT NULL,
  `hobbies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`num`, `hobbies`) VALUES
(1, 'playing rubics cube'),
(2, 'playing rubics cube'),
(3, 'playing rubics cube'),
(4, 'sdfdscdv'),
(5, 'chdjgtdyjd'),
(6, 'fedwqsq');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `nu` int(4) NOT NULL,
  `language` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`nu`, `language`) VALUES
(1, 'hindi,english'),
(2, 'hindi,english'),
(3, 'hindi,english'),
(4, 'Hind, Urdu'),
(5, 'Hind, Urdu'),
(6, 'dsafdf'),
(7, 'Hind, Urdu'),
(8, 'kandaaa'),
(9, 's2swsw');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `name`, `email`, `mobile`, `comment`) VALUES
(1, 'mahaynoor fathima', 'mahay@gmail.com', 9731950634, 'dfghj'),
(2, 'mahaynoor fathima', 'mahay@gmail.com', 9731950634, 'dfghj'),
(3, 'mahaynoor fathima', 'mahay@gmail.com', 9731950634, 'dfghj'),
(4, 'mahaynoor fathima', 'mahay@gmail.com', 9731950634, 'dfghj'),
(5, 'mahaynoor fathima', 'mahay@gmail.com', 9731950634, 'dfghj'),
(6, 'mahaynoor fathima', 'mahay@gmail.com', 9731950634, 'dfghj'),
(7, 'mahaynoor fathima', 'mahay@gmail.com', 9731950634, 'dfghj'),
(8, 'mahaynoor fathima', 'mahay@gmail.com', 9731950634, 'dfghj'),
(9, 'mahaynoor fathima', 'mahay@gmail.com', 9731950634, 'dfghj'),
(10, 'nishmitha', 'mahaynoorf@gmail.com', 9731950634, '');

-- --------------------------------------------------------

--
-- Table structure for table `objective`
--

CREATE TABLE `objective` (
  `number` int(4) NOT NULL,
  `objective` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `objective`
--

INSERT INTO `objective` (`number`, `objective`) VALUES
(1, 'your company is best for the f'),
(2, 'your company is best for the f'),
(3, 'your company is best for the f'),
(4, 'Iam good at team leading'),
(5, 'ljvhljscsdf'),
(6, 'Iam good at team leading'),
(7, 'Iam good at team leading'),
(8, 'Iam good at team leading'),
(9, 'wedEAEDCF');

-- --------------------------------------------------------

--
-- Table structure for table `personall`
--

CREATE TABLE `personall` (
  `username` varchar(20) NOT NULL,
  `pid` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personall`
--

INSERT INTO `personall` (`username`, `pid`, `name`, `lname`, `address`, `email`, `phone`) VALUES
('0045mah', 1, 'mahaynoor', 'fathima', 'Mart road ujire', 'mahay@gmail.com', 9731950634),
('4su18cs049', 2, 'nishmitha', 'katte', 'Mart road ujire', 'mahay@gmail.com', 9731950634),
('4su18cs025', 3, 'dharani', 'gokhale', 'Mart road ujire', 'dharani@gmail.com', 8277336147),
('4SU18CS038', 4, 'mahay', 'fathima', 'hagadurumain road', 'mahayfathima@gmail.com', 9786547095),
('1ck22cs178', 5, 'yarab', 'pasha', 'klip', 'pashay119@gmail.com', 7022023569),
('4SU18CS040', 6, 'mahay', 'fathima', 'hagadurumain road', 'mahayfathima@gmail.com', 7022023569),
('pasha', 7, 'yarab', 'pasha', 'qwertyuio', 'pashay119@gmail.com', 7022023569),
('vhbjk', 8, 'dffghjkl', 'gvbhjnkl', 'vhbjnkl', 'sdfghj@gmail.com', 1234567890),
('1ck22cs178', 9, 'yarab', 'pasha', 'hagadurumain road', 'pashay119@gmail.com', 7022023569);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `prid` int(4) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`prid`, `title`, `description`) VALUES
(1, 'campus', 'Web based app to help the students to get placed'),
(2, 'campus', 'Web based app to help the students to get placed'),
(3, 'campus', 'Web based app to help the students to get placed'),
(4, 'ewar', 'weadfawe'),
(5, 'web based selection', 'campus selection'),
(6, 'q', 'sqwA');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `qualified_as` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `name`, `password`, `email`, `phone`, `qualified_as`) VALUES
('00345', 'nishmitha', 'nishi1234', 'mahaynoorf@gmail.com', 9731950634, 'Student'),
('033336', 'mahaynoorfathima', 'mahay789', 'mahay@gmail.com', 9731950634, 'Student'),
('1ck22cs170', 'yarab', 'pashay119@', 'pashay119@gmail.com', 7022023569, ''),
('1ck22cs171', 'yarab', 'pashay119@', 'pashay119@gmail.com', 7022023569, ''),
('1ck22cs173', 'yarab', 'pasha123@#', 'pashay119@gmail.com', 7022023569, ''),
('1ck22cs178', 'mahay', 'mahayZ1234', 'mahayz@gmail.com', 4567890548, ''),
('1ck22cs179', 'yarab', 'pashay119@', 'pashay119@gmail.com', 7022023569, ''),
('4su18cs025', 'dharani', 'dharani202', 'dharani@gmail.com', 8277336147, 'Student'),
('4SU18CS038', 'mahay', 'mahayZ1234', 'mahayz@gmail.com', 9786547095, ''),
('mahaypasha', 'mahay', 'mahayZ1234', 'mahayz@gmail.com', 4567890548, ''),
('yarabpasha', 'pasha', '12345pasha', 'pashay119@gmail.com', 7022023569, '');

-- --------------------------------------------------------

--
-- Table structure for table `resume1`
--

CREATE TABLE `resume1` (
  `id` int(10) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `placed` varchar(20) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume1`
--

INSERT INTO `resume1` (`id`, `fname`, `lname`, `roll`, `age`, `gender`, `phone`, `cgpa`, `email`, `placed`, `file`, `type`, `size`, `username`) VALUES
(8, 'Mahay', 'Fathima', '4SU18CS038', 24, 'Fe-Male', '9786547095', '8.0', 'mahayz@gmail.com', 'yes', '81454-Resume (5).pdf', 'applicatio', 19852, '4SU18CS038'),
(9, 'Mahay', 'Fathima', '4SU18CS038', 24, 'Fe-Male', '9786547095', '8.0', 'mahayz@gmail.com', 'NO', '79458-Resume (5).pdf', 'applicatio', 19852, '4SU18CS038');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `sid` int(4) NOT NULL,
  `skill` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`sid`, `skill`) VALUES
(1, 'css java'),
(2, 'css java'),
(3, 'css java'),
(4, 'HTML, CSS, JAVA'),
(5, 'bvnghd,jkjydfs,jbjhkdjs'),
(6, 'HTML, CSS, JAVA'),
(7, 'HTML, CSS, JAVA'),
(8, 'w2q');

-- --------------------------------------------------------

--
-- Table structure for table `student2`
--

CREATE TABLE `student2` (
  `id` int(10) NOT NULL,
  `company` varchar(200) NOT NULL,
  `des` varchar(100) NOT NULL,
  `cgpa` float NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student2`
--

INSERT INTO `student2` (`id`, `company`, `des`, `cgpa`, `file`, `type`, `size`) VALUES
(1, '', 'dfghj', 7, '56645-', '', 0),
(2, '', 'abcd', 6, '64969-', '', 0),
(3, '', 'abcd', 6, '9361-', '', 0),
(4, 'wipro', 'abcd', 6, '89178-ಕಂಪ್ಯೂಟರ್ ಸಾಫ್ಟ್.pdf', 'applicatio', 655669),
(5, 'wipro', 'abcd', 6, '11532-yarab pasha.pdf', 'applicatio', 136811),
(6, 'infosys', 'software engineering', 7, '10215-yarab pasha.pdf', 'applicatio', 136811),
(7, 'tcs', 'software engineering', 6, '89247-software and hardware difference.pdf', 'applicatio', 655905),
(8, 'infosys', 'product company', 6, '74857-DT20222614067_Application.pdf', 'applicatio', 28886),
(9, 'infosys', 'product company', 6, '58817-DT20222614067_Application.pdf', 'applicatio', 28886),
(10, 'tcs', 'abc', 8, '95240-', '', 0),
(11, '', '', 0, '97847-', '', 0),
(12, 'mahay', 'abc', 4, '8205-pdf 2.pdf', 'applicatio', 457713),
(13, 'TCS', 'abc', 8, '9511-Resume (6).pdf', 'applicatio', 20157);

-- --------------------------------------------------------

--
-- Table structure for table `student3`
--

CREATE TABLE `student3` (
  `id` int(10) NOT NULL,
  `company` varchar(10) NOT NULL,
  `des` varchar(10) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student3`
--

INSERT INTO `student3` (`id`, `company`, `des`, `cgpa`, `file`, `type`, `size`) VALUES
(1, 'tcs', 'software e', '7', '20167-yarab pasha.pdf', 'applicatio', 136811);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achiev`
--
ALTER TABLE `achiev`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `company1`
--
ALTER TABLE `company1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`nu`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objective`
--
ALTER TABLE `objective`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `personall`
--
ALTER TABLE `personall`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `resume1`
--
ALTER TABLE `resume1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student2`
--
ALTER TABLE `student2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student3`
--
ALTER TABLE `student3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achiev`
--
ALTER TABLE `achiev`
  MODIFY `aid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `company1`
--
ALTER TABLE `company1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `num` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `nu` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `objective`
--
ALTER TABLE `objective`
  MODIFY `number` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personall`
--
ALTER TABLE `personall`
  MODIFY `pid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `prid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resume1`
--
ALTER TABLE `resume1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `sid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student2`
--
ALTER TABLE `student2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student3`
--
ALTER TABLE `student3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
