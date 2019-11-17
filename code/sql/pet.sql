-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 09:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutme`
--

CREATE TABLE `aboutme` (
  `aid` int(11) NOT NULL,
  `imagename` varchar(28) NOT NULL,
  `skillname` varchar(28) NOT NULL,
  `name` varchar(28) NOT NULL,
  `phone` varchar(28) NOT NULL,
  `dob` varchar(28) NOT NULL,
  `address` varchar(28) NOT NULL,
  `email` varchar(28) NOT NULL,
  `nationality` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutme`
--

INSERT INTO `aboutme` (`aid`, `imagename`, `skillname`, `name`, `phone`, `dob`, `address`, `email`, `nationality`) VALUES
(1, 'eli.jpg', 'Developer / 3D Designer', 'Elison Tuscano', '+1 682-246-4666', '11 March 1998', '300 S cooper st', 'elisontuscano@gmail.com', 'Indian');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `hid` int(11) NOT NULL,
  `imagename` varchar(35) NOT NULL,
  `price` varchar(35) NOT NULL,
  `skillone` varchar(35) NOT NULL,
  `skilltwo` varchar(35) NOT NULL,
  `skillthree` varchar(35) NOT NULL,
  `skillfour` varchar(35) NOT NULL,
  `skillfive` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`hid`, `imagename`, `price`, `skillone`, `skilltwo`, `skillthree`, `skillfour`, `skillfive`) VALUES
(1, 'car4.png', '$400', 'Design for Natural People', 'Logo', 'Advrestising Image to print', 'Photo Editing', ''),
(2, 'car5.png', '$650', 'Information Web Design', 'Logo', 'Photo Editing', 'Site Construction', 'Maintenance for 6 months'),
(3, 'car6.png', '$1450', '3D Character Design', 'Character Sketch', 'Digitiaztion and Development', 'Animation', 'Video Demo');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `user` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `lid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `lname`, `user`, `email`, `password`, `lid`) VALUES
('Elison', 'Tuscano', 'elison', 'elituscano@gmail.com', 'Elison@123456', 1),
('demo', 'demo', 'demo', 'demo1@gmail.com', 'Qwerty@123456', 16),
('Blaise', 'Rodrigues', 'blaise', 'reblaise@gmail.com', 'Blaise@123456', 18);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `pid` int(11) NOT NULL,
  `imagename` varchar(28) NOT NULL,
  `domain` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`pid`, `imagename`, `domain`) VALUES
(1, 'asgardia.png', 'web development'),
(2, 'dise11.jpg', 'app development'),
(3, '16.jpg', 'Photography'),
(4, '1.jpg', 'web development'),
(5, 'app9.png', 'app development'),
(6, 'app8.png', 'app development'),
(7, 'dise4.png', 'Photography'),
(8, 'app7.png', 'web development'),
(9, '9.jpg', 'app development'),
(10, 'app5.png', 'Photography'),
(11, 'dise5.png', 'Photography'),
(12, 'player.png', 'app development');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `rid` int(11) NOT NULL,
  `imagename` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `position` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`rid`, `imagename`, `name`, `position`) VALUES
(1, 'joe.jpg', 'JOE RODRIGUEZ', 'Developer/Musician'),
(2, 'rosy.jpg', 'ROSY CORONADO', 'PSYCHOLOGIST'),
(3, 'yury.jpg', 'YURY JAJITZKY', 'CEO/Developer'),
(4, 'kyss.jpg', 'KYSS CHIRINOS', 'Marketing/Designer'),
(5, 'carhil.jpg', 'CARHIL MATOS', 'CEO/Developer'),
(6, 'leo.jpg', 'MARK ZUCKERBERG', 'Marketing/Designer');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `rid` int(11) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `position` varchar(25) NOT NULL,
  `startdate` varchar(25) NOT NULL,
  `enddate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`rid`, `cname`, `position`, `startdate`, `enddate`) VALUES
(1, 'Diaz Apps', 'Intern', 'July 2016', 'Present'),
(2, 'Nestle Venenzula', 'Front End Developer', 'Jan 2014', 'Dec 2015'),
(3, 'Polar Food CA', 'Manager Web Development', 'Jan 2013', 'Dec 2013'),
(4, 'Nestle Venenzula', 'Developer', 'July 2012', 'Dec 2013'),
(5, 'Government of State Lara', 'Intern', 'July 2006', 'Dec 2010');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutme`
--
ALTER TABLE `aboutme`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutme`
--
ALTER TABLE `aboutme`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hire`
--
ALTER TABLE `hire`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `lid` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
