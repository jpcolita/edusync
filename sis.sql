-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 06:16 PM
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
-- Database: `sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course`) VALUES
(1, 'BSIT'),
(2, 'BSCE'),
(3, 'BITM'),
(4, 'BSM');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `middlename` varchar(40) NOT NULL,
  `dofb` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `institute` varchar(40) NOT NULL,
  `course` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `lastname`, `firstname`, `middlename`, `dofb`, `gender`, `institute`, `course`, `email`) VALUES
('2021-0001', 'Gomez', 'Janny', 'Cuba', '1998-04-07', 'Male', 'FCDSET', 'BSIT', 'janny@gmail.com'),
('2021-0002', 'Gencianeo', 'Jena', 'Cruz', '2000-07-12', 'Female', 'FCDSET', 'BSIT', 'jena@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(11) NOT NULL,
  `gender` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `gender`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `file` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `file`) VALUES
(1, 'logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` int(11) NOT NULL,
  `institute` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `institute`) VALUES
(1, 'FCDSET');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `middlename` varchar(40) NOT NULL,
  `dofb` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `institute` varchar(40) NOT NULL,
  `course` varchar(40) NOT NULL,
  `subject1` varchar(40) NOT NULL,
  `section1` varchar(40) NOT NULL,
  `time1` varchar(40) NOT NULL,
  `room1` varchar(40) NOT NULL,
  `day1` varchar(40) NOT NULL,
  `subject2` varchar(40) NOT NULL,
  `section2` varchar(40) NOT NULL,
  `time2` varchar(40) NOT NULL,
  `room2` varchar(40) NOT NULL,
  `day2` varchar(40) NOT NULL,
  `subject3` varchar(40) NOT NULL,
  `section3` varchar(40) NOT NULL,
  `time3` varchar(40) NOT NULL,
  `room3` varchar(40) NOT NULL,
  `day3` varchar(40) NOT NULL,
  `subject4` varchar(40) NOT NULL,
  `section4` varchar(40) NOT NULL,
  `time4` varchar(40) NOT NULL,
  `room4` varchar(40) NOT NULL,
  `day4` varchar(40) NOT NULL,
  `subject5` varchar(40) NOT NULL,
  `section5` varchar(40) NOT NULL,
  `time5` varchar(40) NOT NULL,
  `room5` varchar(40) NOT NULL,
  `day5` varchar(40) NOT NULL,
  `subject6` varchar(40) NOT NULL,
  `section6` varchar(40) NOT NULL,
  `time6` varchar(40) NOT NULL,
  `room6` varchar(40) NOT NULL,
  `day6` varchar(40) NOT NULL,
  `subject7` varchar(40) NOT NULL,
  `section7` varchar(40) NOT NULL,
  `time7` varchar(40) NOT NULL,
  `room7` varchar(40) NOT NULL,
  `day7` varchar(40) NOT NULL,
  `subject8` varchar(40) NOT NULL,
  `section8` varchar(40) NOT NULL,
  `time8` varchar(40) NOT NULL,
  `room8` varchar(40) NOT NULL,
  `day8` varchar(40) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `lastname`, `firstname`, `middlename`, `dofb`, `gender`, `institute`, `course`, `subject1`, `section1`, `time1`, `room1`, `day1`, `subject2`, `section2`, `time2`, `room2`, `day2`, `subject3`, `section3`, `time3`, `room3`, `day3`, `subject4`, `section4`, `time4`, `room4`, `day4`, `subject5`, `section5`, `time5`, `room5`, `day5`, `subject6`, `section6`, `time6`, `room6`, `day6`, `subject7`, `section7`, `time7`, `room7`, `day7`, `subject8`, `section8`, `time8`, `room8`, `day8`, `file`) VALUES
('2023-0001', 'Colita', 'John Paul', 'Colits', '2002-10-19', 'Male', 'FCDSET', 'BSIT', 'ITP123ADVANCE DATABASE', 'A', '00:47', 'TBA', 'TTH', 'ITP123ADVANCE DATABASE', ' A', '00:47', 'TBA', 'MWF', 'ITP123ADVANCE DATABASE', 'A', '00:47', 'TBA', 'MTH', 'ITP123ADVANCE DATABASE', 'A', '00:47', 'TBA', 'WF', 'ITP123ADVANCE DATABASE', 'A', '00:47', 'TBA', 'F', 'ITP123ADVANCE DATABASE', 'A', '00:47', 'TBA', 'TTH', 'ITP123ADVANCE DATABASE', 'A', '00:47', 'TBA', 'MW', 'ITP123ADVANCE DATABASE', 'A', '00:47', 'TBA', 'TTH', 'cols.jpg'),
('2023-0002', 'Rinconada', 'Ben Ryan', 'Cruz', '2002-04-19', 'Male', 'FCDSET', 'BSIT', 'IPTIntegrative', 'A', '01:01', 'TBA', 'TTH', 'IPTIntegrative', ' A', '01:01', 'TBA', 'MWF', 'IPTIntegrative', 'A', '01:01', 'TBA', 'MTH', 'IPTIntegrative', 'A', '01:01', 'TBA', 'WF', 'IPTIntegrative', 'A', '01:02', 'TBA', 'F', 'IPTIntegrative', 'A', '01:02', 'TBA', 'TTH', 'IPTIntegrative', 'A', '01:02', 'TBA', 'MW', 'IPTIntegrative', 'A', '01:02', 'TBA', 'TTH', 'ben.jpg'),
('2023-0003', 'Jamisola', 'Rhosebrian', 'Seno', '2002-10-01', 'Male', 'FCDSET', 'BSIT', 'ITP333Agains The World', 'A', '01:03', 'TBA', 'TTH', 'ITP333Agains The World', ' A', '01:03', 'TBA', 'MWF', 'ITP333Agains The World', 'A', '01:03', 'TBA', 'MTH', 'ITP333Agains The World', 'A', '13:03', 'TBA', 'WF', 'ITP333Agains The World', 'A', '13:03', 'TBA', 'F', 'ITP333Agains The World', 'A', '13:04', 'TBA', 'TTH', 'ITP333Agains The World', 'A', '13:04', 'TBA', 'MW', 'ITP123ADVANCE DATABASE', 'A', '01:04', 'TBA', 'TTH', 'rhose.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `code` varchar(40) NOT NULL,
  `description` varchar(40) NOT NULL,
  `unit` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`code`, `description`, `unit`, `type`) VALUES
('IPT', 'Integrative', '3', 'Laboratory'),
('ITP123', 'ADVANCE DATABASE', '3', 'Laboratory'),
('ITP333', 'Agains The World', '3', 'Laboratory');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
