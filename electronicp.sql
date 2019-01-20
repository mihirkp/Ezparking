-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 08:41 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electronicp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `password`) VALUES
(1, 'mihir', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `areaid` int(11) NOT NULL,
  `areaname` varchar(100) NOT NULL,
  `cityid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`areaid`, `areaname`, `cityid`) VALUES
(2, 'Memnagar', 17),
(3, 'Ghatlodia', 17),
(4, 'Chandlodia', 17),
(5, 'Bapunagar', 17),
(6, 'Adajan', 18),
(7, 'Amroli', 18),
(8, 'Bardoli', 18),
(9, 'Kadodara', 18),
(10, 'Bhayli', 19),
(11, 'Kevdabaug', 19),
(12, 'Akota', 19),
(13, 'Alkapuri', 19),
(14, 'Motavada', 20),
(15, 'Bhakti Nagar', 20),
(16, '150 Feet Ring Road', 20),
(17, 'Vavdi', 20),
(19, 'Karamsad', 21),
(20, 'VV Nagar', 21),
(21, 'Petlad', 21),
(22, 'Gamdi', 21),
(23, 'Dadiya', 22),
(24, 'Kamdar Colony', 22),
(25, 'Lalpur', 22),
(26, 'Gokul Nagar', 22),
(27, 'Bagwadar', 23),
(28, 'Bhadrakali Road', 23),
(29, 'Dharampur', 23),
(30, 'Khapat', 23);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `pbid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `parkid` int(11) NOT NULL,
  `vehicle_type` varchar(100) NOT NULL,
  `nplate` varchar(100) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` date NOT NULL,
  `priceee` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`pbid`, `uid`, `parkid`, `vehicle_type`, `nplate`, `start_time`, `end_time`, `priceee`) VALUES
(12, 1, 2, '1', 'sdfsdf', '2017-09-14', '2017-09-17', 462),
(13, 1, 2, '1', 'efevedvsdvs', '2017-09-06', '2018-04-04', 30251);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityid` int(11) NOT NULL,
  `cityname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `cityname`) VALUES
(17, 'Ahmedabad'),
(18, 'Surat'),
(19, 'vadodara'),
(20, 'Rajkot'),
(21, 'Anand'),
(22, 'Jamnagar'),
(23, 'Porbandar');

-- --------------------------------------------------------

--
-- Table structure for table `client_reg`
--

CREATE TABLE `client_reg` (
  `cid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `areaid` int(11) NOT NULL,
  `cityid` int(11) NOT NULL,
  `status` enum('block','unblock') NOT NULL DEFAULT 'unblock',
  `state` varchar(100) NOT NULL,
  `carcapacity` int(100) NOT NULL,
  `twowheelercapacity` int(100) NOT NULL,
  `c8hr` int(100) NOT NULL,
  `c12hr` int(100) NOT NULL,
  `c24hr` int(100) NOT NULL,
  `c1day` int(100) NOT NULL,
  `t8hr` int(100) NOT NULL,
  `t12hr` int(100) NOT NULL,
  `t24hr` int(100) NOT NULL,
  `t1day` int(100) NOT NULL,
  `file1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_reg`
--

INSERT INTO `client_reg` (`cid`, `cname`, `password`, `email`, `phone`, `address`, `areaid`, `cityid`, `status`, `state`, `carcapacity`, `twowheelercapacity`, `c8hr`, `c12hr`, `c24hr`, `c1day`, `t8hr`, `t12hr`, `t24hr`, `t1day`, `file1`) VALUES
(2, 'zoom', '1234', 'p1@gmail.com', '8273645638', 'xyza memnaga, ahmedabad', 2, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (79).png'),
(3, 'unzoom', '1234', 'p2@gmail.com', '9834756534', 'qwerty memnaga, ahmedabad', 2, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 160, 8, 30, 45, 80, 4, 'Screenshot (80).png'),
(4, 'kamal', '1234', 'p3@gmail.com', '7465378723', 'hgdfs memnagar, ahmedabad', 2, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (75).png'),
(5, 'vidhey', '1234', 'p4@gmail.com', '8346529876', 'uyter ghatlodia ahmedabad', 3, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 160, 8, 30, 45, 80, 4, 'Screenshot (82).png'),
(6, 'harsh', '1234', 'p5@gmail.com', '7465342654', 'dhfgol ghatlodia, ahmedabad', 3, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (78).png'),
(7, 'harshit', '1234', 'p6@gmail.com', '9835467876', 'aossn ghatlodia, ahmedabad', 3, 17, 'unblock', 'gujarat', 200, 150, 60, 80, 160, 8, 30, 40, 80, 4, 'Screenshot (81).png'),
(8, 'yo yo', '1234', 'p7@gmail.com', '8374653898', 'auahs chandlodia, ahmedabad', 4, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (79).png'),
(9, 'na na baka', '1234', 'p8@gmail.com', '9823456765', 'isjshd chndlodia, ahmedabad', 3, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 160, 8, 30, 45, 80, 4, 'Screenshot (85).png'),
(10, 'himalaya', '1234', 'p9@gmail.com', '9374657834', 'kajcka chandlodia, ahmedabad', 4, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (74).png'),
(11, 'changu', '1234', 'p10@gmail.com', '8364573654', 'dosij bapunagar, ahmedabad', 5, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 180, 8, 30, 45, 90, 4, 'Screenshot (72).png'),
(12, 'mangu', '1234', 'p11@gmail.com', '8776453765', 'kbsidb bapunagar, ahmedabad', 5, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (74).png'),
(13, 'iscon', '1234', 'p12@gmail.com', '9826354787', 'jvcsuh bapunagar, ahmedabad', 5, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 180, 8, 30, 45, 90, 4, 'Screenshot (80).png'),
(14, 'jaaneman', '1234', 'p13@gmail.com', '9827356798', 'avcsdv  adajan, ahmedabad', 6, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 180, 8, 30, 45, 90, 4, 'Screenshot (81).png'),
(15, 'yea yae', '1234', 'p14@gmail.com', '8945637654', 'svysv adajan, ahmedabad', 6, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (80).png'),
(16, 'baki bol', '1234', 'p15@gmail.com', '9835467898', 'ivcuv adajan, ahmedabad', 6, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 180, 8, 30, 45, 90, 4, 'Screenshot (83).png'),
(17, 'na hoy', '1234', 'p16@gmail.com', '9292387827', 'asvavs amroli ahmedabad', 7, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (80).png'),
(18, 'ha hoy baka', '1234', 'p17@gmail.com', '9374657898', 'idsddv amroli, ahmedabad', 7, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 180, 8, 30, 45, 90, 4, 'Screenshot (89).png'),
(19, 'joi le baka', '1234', 'p18@gmail.com', '2834872378', 'jshchd amroli, ahmedabad', 7, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (79).png'),
(20, 'kakariya', '1234', 'p19@gmail.com', '9823415654', 'asxasg bardoli, ahmedabad', 8, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 180, 8, 30, 45, 90, 4, 'Screenshot (75).png'),
(21, 'nakki lake', '1234', 'p20@gmail.com', '8735467873', 'ajshajh bardoli ahmedabad', 8, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (77).png'),
(22, 'buffalo', '1234', 'p21@gmail.com', '9172635242', 'asjcasc bardoli ahmedabad', 8, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 180, 8, 30, 45, 90, 4, 'Screenshot (80).png'),
(23, 'shreya', '1234', 'p22@gmail.com', '9815247898', 'auasv kadodara, ahmedabad', 9, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (94).png'),
(24, 'alpha one', '1234', 'p23@gmail.com', '9273645638', 'suchsd kadodara ahmedabad', 9, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 180, 8, 30, 45, 90, 4, 'Screenshot (99).png'),
(25, 'gallops', '1234', 'p24@gmail.com', '87345467253', 'sycjhdf kadodara, ahmedabad', 9, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (100).png'),
(26, 'chakachak', '1234', 'p25@gmail.com', '9817635467', 'ajssjasv  bhayli ahmedabad', 10, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 180, 8, 30, 45, 90, 4, 'Screenshot (97).png'),
(27, 'hansa', '1234', 'p26@gmail.com', '2987654567', 'sgsdg bhayli ahmedabad', 10, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 4, 'Screenshot (93).png'),
(28, 'bakul', '1234', 'p27@gmail.com', '9876546789', 'sgjhsg bhayli ahmedabad', 10, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 180, 8, 30, 45, 90, 4, 'Screenshot (92).png'),
(29, 'hoy hoy', '1234', 'p28@gmail.com', '9817634567', 'sudvgsdv kevdabaug ahmedabad', 11, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (93).png'),
(30, 'joyu ne ', '1234', 'p29@gmail.com', '8987677676', 'vsfyjx kevdabaug ahmedabad', 11, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 180, 8, 30, 45, 90, 4, 'Screenshot (87).png'),
(31, 'lakehotel', '1234', 'p30@gmail.com', '8945298989', 'jsjhsd kevdabaug ahmedabad', 11, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (76).png'),
(32, 'anjali', '1234', 'p31@gmail.com', '9834527365', 'sudguhs akota ahmedabad', 12, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 180, 8, 30, 45, 90, 4, 'Screenshot (88).png'),
(33, 'bagha', '1234', 'p32@gmail.com', '71626427641', 'sdvcvd akota ahmedabad', 12, 17, 'unblock', 'gujarat', 200, 150, 50, 80, 150, 6, 25, 40, 75, 3, 'Screenshot (99).png'),
(34, 'taarak', '1234', 'p33@gmail.com', '2874563787', 'sjdcjsh akota ahmedabad', 12, 17, 'unblock', 'gujarat', 200, 150, 60, 90, 180, 8, 30, 45, 90, 4, 'Screenshot (93).png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gfeedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `email`, `gfeedback`) VALUES
(1, 'kamal', 'test@GMAIL.COM', 'BT4B34YU4564VU645');

-- --------------------------------------------------------

--
-- Table structure for table `parkdetail`
--

CREATE TABLE `parkdetail` (
  `pdatailid` int(11) NOT NULL,
  `parkid` int(11) NOT NULL,
  `vehid` int(11) NOT NULL,
  `timeperiod` varchar(100) NOT NULL,
  `hour` int(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkdetail`
--

INSERT INTO `parkdetail` (`pdatailid`, `parkid`, `vehid`, `timeperiod`, `hour`, `price`) VALUES
(4, 2, 1, 'hour', 8, 80),
(5, 2, 1, 'hour', 12, 100),
(6, 2, 1, 'hour', 24, 150),
(7, 2, 1, 'day', 1, 6),
(8, 2, 2, 'hour', 8, 40),
(9, 2, 2, 'hour', 12, 50),
(10, 2, 2, 'hour', 24, 75),
(11, 2, 2, 'day', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `parkinglot`
--

CREATE TABLE `parkinglot` (
  `parkid` int(11) NOT NULL,
  `parkingname` varchar(100) NOT NULL,
  `paddress` varchar(200) NOT NULL,
  `cityid` int(11) NOT NULL,
  `areaid` int(11) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `vendorid` int(11) NOT NULL,
  `file1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkinglot`
--

INSERT INTO `parkinglot` (`parkid`, `parkingname`, `paddress`, `cityid`, `areaid`, `phone`, `vendorid`, `file1`) VALUES
(2, 'zoom', 'xyza memnaga, ahmedabad', 17, 2, '8273645638', 2, 'Screenshot (79).png'),
(3, 'unzoom', 'qwerty memnaga, ahmedabad', 17, 2, '9834756534', 3, 'Screenshot (80).png'),
(4, 'kamal', 'hgdfs memnagar, ahmedabad', 17, 2, '7465378723', 4, 'Screenshot (75).png'),
(5, 'vidhey', 'uyter ghatlodia ahmedabad', 17, 3, '8346529876', 5, 'Screenshot (82).png'),
(6, 'harsh', 'dhfgol ghatlodia, ahmedabad', 17, 3, '7465342654', 6, 'Screenshot (78).png'),
(7, 'harshit', 'aossn ghatlodia, ahmedabad', 17, 3, '9835467876', 7, 'Screenshot (81).png'),
(8, 'yo yo', 'auahs chandlodia, ahmedabad', 17, 4, '8374653898', 8, 'Screenshot (79).png'),
(9, 'na na baka', 'isjshd chndlodia, ahmedabad', 17, 3, '9823456765', 9, 'Screenshot (85).png'),
(10, 'himalaya', 'kajcka chandlodia, ahmedabad', 17, 4, '9374657834', 10, 'Screenshot (74).png'),
(11, 'changu', 'dosij bapunagar, ahmedabad', 17, 5, '8364573654', 11, 'Screenshot (72).png'),
(12, 'mangu', 'kbsidb bapunagar, ahmedabad', 17, 5, '8776453765', 12, 'Screenshot (74).png'),
(13, 'iscon', 'jvcsuh bapunagar, ahmedabad', 17, 5, '9826354787', 13, 'Screenshot (80).png'),
(14, 'jaaneman', 'avcsdv  adajan, ahmedabad', 17, 6, '9827356798', 14, 'Screenshot (81).png'),
(15, 'yea yae', 'svysv adajan, ahmedabad', 17, 6, '8945637654', 15, 'Screenshot (80).png'),
(16, 'baki bol', 'ivcuv adajan, ahmedabad', 17, 6, '9835467898', 16, 'Screenshot (83).png'),
(17, 'na hoy', 'asvavs amroli ahmedabad', 17, 7, '9292387827', 17, 'Screenshot (80).png'),
(18, 'ha hoy baka', 'idsddv amroli, ahmedabad', 17, 7, '9374657898', 18, 'Screenshot (89).png'),
(19, 'joi le baka', 'jshchd amroli, ahmedabad', 17, 7, '2834872378', 19, 'Screenshot (79).png'),
(20, 'kakariya', 'asxasg bardoli, ahmedabad', 17, 8, '9823415654', 20, 'Screenshot (75).png'),
(21, 'nakki lake', 'ajshajh bardoli ahmedabad', 17, 8, '8735467873', 21, 'Screenshot (77).png'),
(22, 'buffalo', 'asjcasc bardoli ahmedabad', 17, 8, '9172635242', 22, 'Screenshot (80).png'),
(23, 'shreya', 'auasv kadodara, ahmedabad', 17, 9, '9815247898', 23, 'Screenshot (94).png'),
(24, 'alpha one', 'suchsd kadodara ahmedabad', 17, 9, '9273645638', 24, 'Screenshot (99).png'),
(25, 'gallops', 'sycjhdf kadodara, ahmedabad', 17, 9, '87345467253', 25, 'Screenshot (100).png'),
(26, 'chakachak', 'ajssjasv  bhayli ahmedabad', 17, 10, '9817635467', 26, 'Screenshot (97).png'),
(27, 'hansa', 'sgsdg bhayli ahmedabad', 17, 10, '2987654567', 27, 'Screenshot (93).png'),
(28, 'bakul', 'sgjhsg bhayli ahmedabad', 17, 10, '9876546789', 28, 'Screenshot (92).png'),
(29, 'hoy hoy', 'sudvgsdv kevdabaug ahmedabad', 17, 11, '9817634567', 29, 'Screenshot (93).png'),
(30, 'joyu ne ', 'vsfyjx kevdabaug ahmedabad', 17, 11, '8987677676', 30, 'Screenshot (87).png'),
(31, 'lakehotel', 'jsjhsd kevdabaug ahmedabad', 17, 11, '8945298989', 31, 'Screenshot (76).png'),
(32, 'anjali', 'sudguhs akota ahmedabad', 17, 12, '9834527365', 32, 'Screenshot (88).png'),
(33, 'bagha', 'sdvcvd akota ahmedabad', 17, 12, '71626427641', 33, 'Screenshot (99).png'),
(34, 'taarak', 'sjdcjsh akota ahmedabad', 17, 12, '2874563787', 34, 'Screenshot (93).png');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` enum('block','unblock') NOT NULL DEFAULT 'unblock'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`uid`, `name`, `password`, `phone`, `email`, `status`) VALUES
(1, 'kamal', '1234', '7600769212', 'kp.kamalp@gmail.com', 'unblock'),
(2, 'parth', '1234', '9913436068', 'parth555@gmail.com', 'unblock'),
(3, '1234', '', '', '', 'unblock');

-- --------------------------------------------------------

--
-- Table structure for table `rentspace`
--

CREATE TABLE `rentspace` (
  `reid` int(11) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `space` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentspace`
--

INSERT INTO `rentspace` (`reid`, `rname`, `password`, `phone`, `email`, `space`) VALUES
(1, 'harsh', '1234', '1234432112', 'qw@smw.com', '123'),
(2, 'harsh', '1234', '1234432112', 'ass@smn.com', '123'),
(3, 'mihir', '1234', '1234321344', 'dvfv@dff.com', '122334'),
(4, 'mihir', '', '1234321344', 'dvfv@dff.com', '122334'),
(5, 'kamal', '', '1234432112', 'kp@gmail.com', '1233'),
(6, 'kamal', '', '1234432112', 'kp@gmail.com', '1233'),
(7, 'kamal', '', '1234432112', 'kp@gmail.com', '1233'),
(8, 'harsh', '', '12344321', 're@gmail.com', '123'),
(9, 'kamal', '', '12343432', 'jij@fgmsd.com', '123'),
(10, 'kamal', '', '12343432', 'jij@fgmsd.com', '123'),
(11, 'kamal', '', '12332123', 'kok@gmail.cpo', '123'),
(12, 'kamal', '', '12332123', 'kok@gmail.cpo', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `vehid` int(11) NOT NULL,
  `vehicletype` varchar(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`vehid`, `vehicletype`, `status`) VALUES
(1, 'Car', 1),
(2, 'Two-wheeler', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendorid` int(11) NOT NULL,
  `vendorname` varchar(100) NOT NULL,
  `vpassword` varchar(100) NOT NULL,
  `vemail` varchar(100) NOT NULL,
  `vphone` varchar(15) NOT NULL,
  `vaddress` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendorid`, `vendorname`, `vpassword`, `vemail`, `vphone`, `vaddress`) VALUES
(2, 'zoom', '1234', 'p1@gmail.com', '8273645638', 'xyza memnaga, ahmedabad'),
(3, 'unzoom', '1234', 'p2@gmail.com', '9834756534', 'qwerty memnaga, ahmedabad'),
(4, 'kamal', '1234', 'p3@gmail.com', '7465378723', 'hgdfs memnagar, ahmedabad'),
(5, 'vidhey', '1234', 'p4@gmail.com', '8346529876', 'uyter ghatlodia ahmedabad'),
(6, 'harsh', '1234', 'p5@gmail.com', '7465342654', 'dhfgol ghatlodia, ahmedabad'),
(7, 'harshit', '1234', 'p6@gmail.com', '9835467876', 'aossn ghatlodia, ahmedabad'),
(8, 'yo yo', '1234', 'p7@gmail.com', '8374653898', 'auahs chandlodia, ahmedabad'),
(9, 'na na baka', '1234', 'p8@gmail.com', '9823456765', 'isjshd chndlodia, ahmedabad'),
(10, 'himalaya', '1234', 'p9@gmail.com', '9374657834', 'kajcka chandlodia, ahmedabad'),
(11, 'changu', '1234', 'p10@gmail.com', '8364573654', 'dosij bapunagar, ahmedabad'),
(12, 'mangu', '1234', 'p11@gmail.com', '8776453765', 'kbsidb bapunagar, ahmedabad'),
(13, 'iscon', '1234', 'p12@gmail.com', '9826354787', 'jvcsuh bapunagar, ahmedabad'),
(14, 'jaaneman', '1234', 'p13@gmail.com', '9827356798', 'avcsdv  adajan, ahmedabad'),
(15, 'yea yae', '1234', 'p14@gmail.com', '8945637654', 'svysv adajan, ahmedabad'),
(16, 'baki bol', '1234', 'p15@gmail.com', '9835467898', 'ivcuv adajan, ahmedabad'),
(17, 'na hoy', '1234', 'p16@gmail.com', '9292387827', 'asvavs amroli ahmedabad'),
(18, 'ha hoy baka', '1234', 'p17@gmail.com', '9374657898', 'idsddv amroli, ahmedabad'),
(19, 'joi le baka', '1234', 'p18@gmail.com', '2834872378', 'jshchd amroli, ahmedabad'),
(20, 'kakariya', '1234', 'p19@gmail.com', '9823415654', 'asxasg bardoli, ahmedabad'),
(21, 'nakki lake', '1234', 'p20@gmail.com', '8735467873', 'ajshajh bardoli ahmedabad'),
(22, 'buffalo', '1234', 'p21@gmail.com', '9172635242', 'asjcasc bardoli ahmedabad'),
(23, 'shreya', '1234', 'p22@gmail.com', '9815247898', 'auasv kadodara, ahmedabad'),
(24, 'alpha one', '1234', 'p23@gmail.com', '9273645638', 'suchsd kadodara ahmedabad'),
(25, 'gallops', '1234', 'p24@gmail.com', '87345467253', 'sycjhdf kadodara, ahmedabad'),
(26, 'chakachak', '1234', 'p25@gmail.com', '9817635467', 'ajssjasv  bhayli ahmedabad'),
(27, 'hansa', '1234', 'p26@gmail.com', '2987654567', 'sgsdg bhayli ahmedabad'),
(28, 'bakul', '1234', 'p27@gmail.com', '9876546789', 'sgjhsg bhayli ahmedabad'),
(29, 'hoy hoy', '1234', 'p28@gmail.com', '9817634567', 'sudvgsdv kevdabaug ahmedabad'),
(30, 'joyu ne ', '1234', 'p29@gmail.com', '8987677676', 'vsfyjx kevdabaug ahmedabad'),
(31, 'lakehotel', '1234', 'p30@gmail.com', '8945298989', 'jsjhsd kevdabaug ahmedabad'),
(32, 'anjali', '1234', 'p31@gmail.com', '9834527365', 'sudguhs akota ahmedabad'),
(33, 'bagha', '1234', 'p32@gmail.com', '71626427641', 'sdvcvd akota ahmedabad'),
(34, 'taarak', '1234', 'p33@gmail.com', '2874563787', 'sjdcjsh akota ahmedabad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `aname` (`aname`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`areaid`),
  ADD KEY `cityid` (`cityid`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`pbid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `parkid` (`parkid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `client_reg`
--
ALTER TABLE `client_reg`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `cityid` (`cityid`),
  ADD KEY `areaid` (`areaid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `parkdetail`
--
ALTER TABLE `parkdetail`
  ADD PRIMARY KEY (`pdatailid`),
  ADD KEY `parkid` (`parkid`),
  ADD KEY `vehid` (`vehid`);

--
-- Indexes for table `parkinglot`
--
ALTER TABLE `parkinglot`
  ADD PRIMARY KEY (`parkid`),
  ADD KEY `cityid` (`cityid`),
  ADD KEY `areaid` (`areaid`),
  ADD KEY `vendorid` (`vendorid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `rentspace`
--
ALTER TABLE `rentspace`
  ADD PRIMARY KEY (`reid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`vehid`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `areaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `pbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `client_reg`
--
ALTER TABLE `client_reg`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `parkdetail`
--
ALTER TABLE `parkdetail`
  MODIFY `pdatailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `parkinglot`
--
ALTER TABLE `parkinglot`
  MODIFY `parkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rentspace`
--
ALTER TABLE `rentspace`
  MODIFY `reid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `vehid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `city` (`cityid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `registration` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`parkid`) REFERENCES `parkinglot` (`parkid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `client_reg`
--
ALTER TABLE `client_reg`
  ADD CONSTRAINT `client_reg_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `city` (`cityid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `client_reg_ibfk_2` FOREIGN KEY (`areaid`) REFERENCES `area` (`areaid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parkdetail`
--
ALTER TABLE `parkdetail`
  ADD CONSTRAINT `parkdetail_ibfk_1` FOREIGN KEY (`parkid`) REFERENCES `parkinglot` (`parkid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parkdetail_ibfk_2` FOREIGN KEY (`vehid`) REFERENCES `vehicle_type` (`vehid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parkinglot`
--
ALTER TABLE `parkinglot`
  ADD CONSTRAINT `parkinglot_ibfk_1` FOREIGN KEY (`cityid`) REFERENCES `city` (`cityid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parkinglot_ibfk_2` FOREIGN KEY (`areaid`) REFERENCES `area` (`areaid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parkinglot_ibfk_3` FOREIGN KEY (`vendorid`) REFERENCES `vendor` (`vendorid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
