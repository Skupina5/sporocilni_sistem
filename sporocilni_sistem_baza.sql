-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2015 at 03:01 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sporocilni_sistem`
--

-- --------------------------------------------------------

--
-- Table structure for table `predal`
--

CREATE TABLE IF NOT EXISTS `predal` (
`predal_id` int(11) NOT NULL,
  `uporabnik_id` int(11) NOT NULL,
  `ime_predala` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `predal_vmesna`
--

CREATE TABLE IF NOT EXISTS `predal_vmesna` (
  `sporocilo_id` int(11) NOT NULL,
  `predal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skupine`
--

CREATE TABLE IF NOT EXISTS `skupine` (
`skupina_id` int(11) NOT NULL,
  `uporabnik_id` int(11) NOT NULL,
  `ime_skupine` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skupine`
--

INSERT INTO `skupine` (`skupina_id`, `uporabnik_id`, `ime_skupine`) VALUES
(12, 1, 'Najbolsi p'),
(13, 1, 'smrduhi'),
(14, 1, ''),
(15, 1, ''),
(16, 1, ''),
(17, 1, 'test'),
(18, 1, 'test111111'),
(19, 6, 'bedaki');

-- --------------------------------------------------------

--
-- Table structure for table `skupine_vmesna`
--

CREATE TABLE IF NOT EXISTS `skupine_vmesna` (
  `clan_id` int(11) NOT NULL,
  `skupina_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skupine_vmesna`
--

INSERT INTO `skupine_vmesna` (`clan_id`, `skupina_id`) VALUES
(3, 13),
(4, 13),
(1, 19),
(3, 19);

-- --------------------------------------------------------

--
-- Table structure for table `sporocilo`
--

CREATE TABLE IF NOT EXISTS `sporocilo` (
`sporocilo_id` int(11) NOT NULL,
  `posiljatelj_id` int(11) NOT NULL,
  `prejemnik_id` int(11) NOT NULL,
  `vsebina` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `prebrano` datetime DEFAULT NULL,
  `tema` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sporocilo`
--

INSERT INTO `sporocilo` (`sporocilo_id`, `posiljatelj_id`, `prejemnik_id`, `vsebina`, `datum`, `prebrano`, `tema`) VALUES
(1, 1, 2, 'Zdravo, kako si', '2015-04-10 11:09:43', NULL, 'prvo_sproocilo'),
(2, 2, 1, 'testiram 2', '2015-04-10 11:36:35', NULL, 'drugo sporocilo'),
(3, 1, 2, 'sdsdsdsdssdssd', '2015-04-10 11:52:34', NULL, 'dsdsdsd'),
(4, 2, 1, 'sdsdsdsdssdssd', '2015-04-10 11:52:59', NULL, 'dsdsdsd'),
(5, 3, 4, 'KAKO GRE ALJFA?!?!?!', '2015-04-10 12:39:13', NULL, 'alfe ne delajo'),
(6, 1, 3, 'hrvati smdijo', '2015-04-10 12:39:13', NULL, 'yesyes'),
(7, 1, 3, 'testiram, ce dela kej bols k alfa', '2015-04-10 12:52:33', NULL, 'testiram'),
(8, 1, 3, 'testiram, ce dela kej bols k alfa', '2015-04-10 12:53:05', NULL, 'testiram'),
(9, 1, 2, 'kuscar smrdiii\r\n', '2015-04-10 12:53:38', NULL, 'smrdim'),
(10, 1, 3, 'je bedna', '2015-04-11 07:21:10', NULL, 'alfa'),
(11, 3, 1, '', '2015-04-11 07:21:44', NULL, 'smrdi'),
(12, 3, 1, '', '2015-04-11 07:24:39', NULL, 'smrdi'),
(13, 1, 3, 'sdsds', '2015-05-01 09:32:41', NULL, 'asdasd'),
(14, 1, 3, 'sdasd', '2015-05-01 09:33:05', NULL, 'sdsds'),
(15, 1, 3, 'sdsd', '2015-05-01 09:37:00', NULL, 'sdsd'),
(16, 1, 3, 'sdsdsd', '2015-05-01 09:38:16', NULL, 'sdsds'),
(17, 1, 3, 'testiram skupinsko posiljanje', '2015-05-01 11:39:21', NULL, 'testiram skupino'),
(18, 1, 4, 'testiram skupinsko posiljanje', '2015-05-01 11:39:21', NULL, 'testiram skupino'),
(19, 1, 3, 'testiram2222', '2015-05-01 11:41:17', NULL, 'testiram2222'),
(20, 1, 4, 'testiram2222', '2015-05-01 11:41:17', NULL, 'testiram2222'),
(21, 4, 1, 'sdsdsd', '2015-05-01 12:45:45', NULL, 'sdsds'),
(22, 4, 1, 'ZADNIC', '2015-05-01 12:47:12', NULL, 'TESTIRAM ZADNIC'),
(23, 6, 1, 'ZDRAVO KUÅ ÄŒAR', '2015-05-02 12:31:19', NULL, '2332'),
(24, 6, 1, 'O TROLÄŒINE', '2015-05-02 12:31:58', NULL, 'ZIVJO TROLI'),
(25, 6, 3, 'O TROLÄŒINE', '2015-05-02 12:31:58', NULL, 'ZIVJO TROLI'),
(26, 9, 1, 'adadasd', '2015-05-02 12:57:47', NULL, 'asdad');

-- --------------------------------------------------------

--
-- Table structure for table `uporabniki`
--

CREATE TABLE IF NOT EXISTS `uporabniki` (
`uporabnik_id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `tip` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uporabniki`
--

INSERT INTO `uporabniki` (`uporabnik_id`, `username`, `password`, `tip`) VALUES
(1, 'kadunc', '1111', 'uporabnik'),
(2, 'smrduh', '2222', 'uporabnik'),
(3, 'horvat', '1111', ''),
(4, 'kristjan', '2222', ''),
(5, 'dsds', 's11121', 'uporabnik'),
(6, 'trolcina', '3333', 'uporabnik'),
(7, 'adasd', '1111', 'uporabnik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `predal`
--
ALTER TABLE `predal`
 ADD PRIMARY KEY (`predal_id`);

--
-- Indexes for table `skupine`
--
ALTER TABLE `skupine`
 ADD PRIMARY KEY (`skupina_id`);

--
-- Indexes for table `sporocilo`
--
ALTER TABLE `sporocilo`
 ADD PRIMARY KEY (`sporocilo_id`);

--
-- Indexes for table `uporabniki`
--
ALTER TABLE `uporabniki`
 ADD PRIMARY KEY (`uporabnik_id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `predal`
--
ALTER TABLE `predal`
MODIFY `predal_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skupine`
--
ALTER TABLE `skupine`
MODIFY `skupina_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `sporocilo`
--
ALTER TABLE `sporocilo`
MODIFY `sporocilo_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `uporabniki`
--
ALTER TABLE `uporabniki`
MODIFY `uporabnik_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
