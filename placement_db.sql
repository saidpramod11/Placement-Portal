-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 06:40 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cmpedit_profile`
--

CREATE TABLE `cmpedit_profile` (
  `username` varchar(10) NOT NULL,
  `company` varchar(30) NOT NULL,
  `established` text NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` text NOT NULL,
  `address` text NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmpedit_profile`
--

INSERT INTO `cmpedit_profile` (`username`, `company`, `established`, `state`, `city`, `pincode`, `address`, `url`) VALUES
('BL20171234', 'Bhilwara Limited', '1997', 'Maharashtra', 'MUMBAI', '435345', 'sdvxv', 'www.sjidjs.com'),
('TC20171231', 'Tata Consultancy Services', '1998', 'Maharashtra', 'MUMBAI', '435345', 'sdvxv', 'wwwhvvjv'),
('wipro1992', 'WIPRO LIMITED', '1999-12-03', 'Delhi', 'Delhi', '263139', 'Sector-17, Noida', 'www.wipro.ltd');

-- --------------------------------------------------------

--
-- Table structure for table `cmp_login`
--

CREATE TABLE `cmp_login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmp_login`
--

INSERT INTO `cmp_login` (`username`, `password`, `email`, `contact`) VALUES
('BL20171234', 'BL20171234', 'jayant123@gmail.com', 8535000118),
('TC20171231', 'TC20171231', 'hdant123@gmail.com', 9978979779),
('wipro1992', '1992#@', 'kamaljoshi12@gmail.com', 9435435353);

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE `static` (
  `static_id` int(11) NOT NULL,
  `page` varchar(128) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`static_id`, `page`, `status`) VALUES
(1, 'AboutUs', 1),
(2, 'Terms&Conditions', 1),
(3, 'ContactUs', 1),
(4, 'FAQs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stdedit_profile`
--

CREATE TABLE `stdedit_profile` (
  `username` varchar(10) NOT NULL,
  `fullname` char(30) NOT NULL,
  `father_name` char(30) NOT NULL,
  `mother_name` char(30) NOT NULL,
  `gender` char(6) NOT NULL,
  `nationality` char(15) NOT NULL,
  `date_of_birth` varchar(10) NOT NULL,
  `X_percentage` float NOT NULL,
  `year_of_passing1` int(11) NOT NULL,
  `X_Board` varchar(30) NOT NULL,
  `XII_percentage` float NOT NULL,
  `year_of_passing2` int(11) NOT NULL,
  `XII_Board` varchar(30) NOT NULL,
  `graduation` char(30) NOT NULL,
  `year_of_passing3` int(11) NOT NULL,
  `university` varchar(30) NOT NULL,
  `post_graduation` char(20) NOT NULL,
  `year_of_passing4` int(11) NOT NULL,
  `university2` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `landmark` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `pincode` int(6) NOT NULL,
  `status` int(10) NOT NULL,
  `status2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdedit_profile`
--

INSERT INTO `stdedit_profile` (`username`, `fullname`, `father_name`, `mother_name`, `gender`, `nationality`, `date_of_birth`, `X_percentage`, `year_of_passing1`, `X_Board`, `XII_percentage`, `year_of_passing2`, `XII_Board`, `graduation`, `year_of_passing3`, `university`, `post_graduation`, `year_of_passing4`, `university2`, `address`, `landmark`, `city`, `state`, `pincode`, `status`, `status2`) VALUES
('jatin123', 'Jatin Sanwal', 'fdfdfddgdsf', 'sdsfdsfdfggfdfd', 'male', 'INDIAN', '1997-12-02', 54.3, 2013, 'select', 67.6, 2015, 'CBSE', 'BBA', 2018, 'Kumaun University', 'select', 0, '', '', '', '', 'state', 0, 0, 0),
('MD20171237', 'Mansi Dogra', 'Ram Singh Dogra', 'Kamla Dogra', 'female', 'INDIAN', '1998-01-26', 60, 0, '', 84, 0, '', 'BCA', 0, 'Kumaun University', 'MCA', 2020, '', '', '', 'Haldwani', 'Uttarakhand', 263139, 0, 0),
('mj74518', 'Mohit Chandra Joshi', 'Girish Chandra Joshi', 'Meera Joshi', 'male', 'INDIAN', '1998-07-16', 70.3, 2013, 'CBSE', 58.3, 2015, 'CBSE', 'BCA', 2018, 'Kumaun University', 'MCA', 2020, '', 'Vindhyanchal Colony', 'Kathghariya', 'Haldwani', 'Uttarakhand', 263139, 1, 1),
('MT20171243', 'Mohit Tiwari', 'hghhgh', 'htdhh', 'male', 'INDIAN', '1997-04-25', 56, 0, '', 87, 0, '', 'BCA', 0, 'Kumaun University', '', 0, '', '', '', 'Haldwani', 'Uttarakhand', 263139, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `std_login`
--

CREATE TABLE `std_login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_login`
--

INSERT INTO `std_login` (`username`, `password`, `email`, `contact`) VALUES
('jatin123', 'jatin12', 'jatinsanwal@gmail.com', 9456464655),
('MD20171237', 'MD20171237', 'dogramansi420@gmail.com', 8393925951),
('mj74518', '12345', 'mj74518@gmail.com', 9639172018),
('MT20171243', 'MT20171243', 'mtmohit76@gmail.com', 9242342323);

-- --------------------------------------------------------

--
-- Table structure for table `std_placed`
--

CREATE TABLE `std_placed` (
  `username` varchar(10) NOT NULL,
  `fullname` char(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `company` varchar(30) NOT NULL,
  `year` text NOT NULL,
  `course` varchar(30) NOT NULL,
  `desc_` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_placed`
--

INSERT INTO `std_placed` (`username`, `fullname`, `email`, `contact`, `company`, `year`, `course`, `desc_`) VALUES
('mj74518', 'Mohit Chandra Joshi', 'mj74518@gmail.com', 9639172018, 'WIPRO LIMITED', '2018', 'BCA', '----');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `username` varchar(10) NOT NULL,
  `recruiter_name` text NOT NULL,
  `designation` varchar(30) NOT NULL,
  `arrival_date` date NOT NULL,
  `vacancy_type` text NOT NULL,
  `rqd_skill` text NOT NULL,
  `url_` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`username`, `recruiter_name`, `designation`, `arrival_date`, `vacancy_type`, `rqd_skill`, `url_`) VALUES
('BL20171234', '', '', '0000-00-00', '', '', ''),
('TC20171231', '', '', '0000-00-00', '', '', ''),
('wipro1992', 'Kamal Joshi', 'HR', '2018-02-12', 'Mass Recruiting', 'BCA,B.Tech', 'www.sads.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cmpedit_profile`
--
ALTER TABLE `cmpedit_profile`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cmp_login`
--
ALTER TABLE `cmp_login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `static`
--
ALTER TABLE `static`
  ADD PRIMARY KEY (`static_id`);

--
-- Indexes for table `stdedit_profile`
--
ALTER TABLE `stdedit_profile`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `std_login`
--
ALTER TABLE `std_login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `std_placed`
--
ALTER TABLE `std_placed`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `static`
--
ALTER TABLE `static`
  MODIFY `static_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cmpedit_profile`
--
ALTER TABLE `cmpedit_profile`
  ADD CONSTRAINT `cmpedit_profile_ibfk_1` FOREIGN KEY (`username`) REFERENCES `cmp_login` (`username`);

--
-- Constraints for table `stdedit_profile`
--
ALTER TABLE `stdedit_profile`
  ADD CONSTRAINT `stdedit_profile_ibfk_1` FOREIGN KEY (`username`) REFERENCES `std_login` (`username`);

--
-- Constraints for table `std_placed`
--
ALTER TABLE `std_placed`
  ADD CONSTRAINT `std_placed_ibfk_1` FOREIGN KEY (`username`) REFERENCES `std_login` (`username`);

--
-- Constraints for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD CONSTRAINT `vacancy_ibfk_1` FOREIGN KEY (`username`) REFERENCES `cmp_login` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
