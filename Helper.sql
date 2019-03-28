-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2018 at 05:47 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Helper`
--

-- --------------------------------------------------------

--
-- Table structure for table `ctype`
--

CREATE TABLE `ctype` (
  `idctype` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ctype`
--

INSERT INTO `ctype` (`idctype`, `name`, `img`) VALUES
(1, 'Cooking', 'Cooking'),
(2, 'Cleaning', 'Cleaning'),
(3, 'Driving', 'Driving'),
(5, 'Nursing', 'Nursing');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `sessionid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`id`, `userid`, `sessionid`) VALUES
(1, 1, 3),
(2, 1, 6),
(8, 1, 1),
(9, 1, 1),
(10, 1, 1),
(24, 22, 34),
(25, 22, 32),
(26, 22, 35),
(27, 22, 63),
(28, 22, 64);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `idreview` int(11) NOT NULL,
  `comment` longtext,
  `rating` int(5) DEFAULT NULL,
  `users_idusers` int(11) NOT NULL,
  `sessionid` int(11) NOT NULL,
  `trainerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`idreview`, `comment`, `rating`, `users_idusers`, `sessionid`, `trainerid`) VALUES
(14, 'asdasdad', 5, 1, 1, 2),
(15, 'Test comment', 5, 1, 28, 2);

-- --------------------------------------------------------

--
-- Table structure for table `servicesessions`
--

CREATE TABLE `servicesessions` (
  `idtable1` int(10) UNSIGNED NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `tdate` date DEFAULT NULL,
  `time` varchar(25) NOT NULL,
  `fee` float DEFAULT NULL,
  `notes` varchar(500) DEFAULT NULL,
  `stype` int(2) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `createdby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `servicesessions`
--

INSERT INTO `servicesessions` (`idtable1`, `title`, `tdate`, `time`, `fee`, `notes`, `stype`, `status`, `createdby`) VALUES
(63, 'testing', '2018-12-31', '12:59', 12123, 'wewer2', 1, 'Pending', 23),
(64, 'aweqwe', '2018-12-31', '12:59', 12312, 'notes', 5, 'Pending', 23),
(65, 'new', '2018-12-31', '12:59', 12, 'wdedew', 3, 'Pending', 23);

-- --------------------------------------------------------

--
-- Table structure for table `ulevel`
--

CREATE TABLE `ulevel` (
  `idulevel` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `users_idusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `fname` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `level` int(2) DEFAULT NULL,
  `usertype` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `username`, `password`, `fname`, `email`, `address`, `level`, `usertype`) VALUES
(1, 'hassan', '$2y$10$FeWeSvieU4R.8fvapdU.rOctFzmO9j2uh08xTleojhOeryqqiHHf.', 'Hassans', 'hass@gmail.com', 'nos', 3, 1),
(22, 'basheeep', '$2y$10$fpo2RwpafUDb7QZAS0Pd0.l4zkMRycBR1P0/m8jZBLi6wgKL0n6P6', 'Bashim Mahir', 'undefined', 'no', 1, 1),
(23, 'abeer', '$2y$10$QzKusGQZiTfflvD1quAKu.7ASZPFUyJVA6k1OgMqsHBAnk0hMTkY2', 'Abeer Khashiff', 'abeer@gmail.com', 'no', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `usrspeciality`
--

CREATE TABLE `usrspeciality` (
  `idusrspeciality` int(11) NOT NULL,
  `speciality` varchar(45) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `users_idusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utype`
--

CREATE TABLE `utype` (
  `idutype` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  `users_idusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ctype`
--
ALTER TABLE `ctype`
  ADD PRIMARY KEY (`idctype`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`idreview`,`users_idusers`),
  ADD KEY `fk_review_users1_idx` (`users_idusers`);

--
-- Indexes for table `servicesessions`
--
ALTER TABLE `servicesessions`
  ADD PRIMARY KEY (`idtable1`,`stype`),
  ADD KEY `ctype_idx` (`stype`);

--
-- Indexes for table `ulevel`
--
ALTER TABLE `ulevel`
  ADD PRIMARY KEY (`idulevel`,`users_idusers`),
  ADD KEY `fk_ulevel_users1_idx` (`users_idusers`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- Indexes for table `usrspeciality`
--
ALTER TABLE `usrspeciality`
  ADD PRIMARY KEY (`idusrspeciality`,`users_idusers`),
  ADD KEY `fk_usrspeciality_users1_idx` (`users_idusers`);

--
-- Indexes for table `utype`
--
ALTER TABLE `utype`
  ADD PRIMARY KEY (`idutype`,`users_idusers`),
  ADD KEY `fk_utype_users_idx` (`users_idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ctype`
--
ALTER TABLE `ctype`
  MODIFY `idctype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `idreview` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `servicesessions`
--
ALTER TABLE `servicesessions`
  MODIFY `idtable1` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `ulevel`
--
ALTER TABLE `ulevel`
  MODIFY `idulevel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usrspeciality`
--
ALTER TABLE `usrspeciality`
  MODIFY `idusrspeciality` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utype`
--
ALTER TABLE `utype`
  MODIFY `idutype` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_review_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `servicesessions`
--
ALTER TABLE `servicesessions`
  ADD CONSTRAINT `ctype` FOREIGN KEY (`stype`) REFERENCES `ctype` (`idctype`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ulevel`
--
ALTER TABLE `ulevel`
  ADD CONSTRAINT `fk_ulevel_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usrspeciality`
--
ALTER TABLE `usrspeciality`
  ADD CONSTRAINT `fk_usrspeciality_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `utype`
--
ALTER TABLE `utype`
  ADD CONSTRAINT `fk_utype_users` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
