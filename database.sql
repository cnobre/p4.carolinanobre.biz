-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2013 at 11:01 PM
-- Server version: 5.1.68-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `caroli11_p4_carolinanobre_biz`
--

-- --------------------------------------------------------

--
-- Table structure for table `cruises`
--

CREATE TABLE IF NOT EXISTS `cruises` (
  `cruise_id` int(11) NOT NULL AUTO_INCREMENT,
  `dboLine` int(11) NOT NULL,
  `cruiseID` varchar(255) NOT NULL,
  `chiefSci` varchar(255) NOT NULL,
  `sDate` int(11) NOT NULL,
  `eDate` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `vessel` varchar(255) NOT NULL,
  `contactName` varchar(255) NOT NULL,
  `contactEmail` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL,
  PRIMARY KEY (`cruise_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `cruises`
--

INSERT INTO `cruises` (`cruise_id`, `dboLine`, `cruiseID`, `chiefSci`, `sDate`, `eDate`, `year`, `vessel`, `contactName`, `contactEmail`, `status`) VALUES
(26, 5, 'AON', 'Carin Ashjian', 1345608000, 1347681600, 2012, 'Healy', 'Carin Ashjian', 'cashjian@whoi.edu', 'submitted'),
(27, 5, 'HLY1201', 'Robert Pickart', 1349409600, 1351137600, 2012, 'Healy', 'Robert Pickart', 'rpickart@whoi.edu', 'submitted'),
(28, 5, 'BOWFEST', 'Carin Ashjian', 1312516800, 1313121600, 2011, 'Annika Marie', 'Carin Ashjian', 'cashjian@whoi.edu', 'submitted'),
(29, 4, 'CHAOZ', 'Catherine Berchok', 1273032000, 1275019200, 2010, 'Mystery Bay', 'Catherine Berchok', 'cberchok@noaa.gov', 'submitted'),
(30, 4, 'SHELL', 'Bob Day', 1298523600, 1300161600, 2011, 'Westward Wind', 'Tom Weingartner', 'tom@noaa.gov', 'submitted'),
(31, 3, 'HLY1202', 'Jackie Grebmeier', 1367985600, 1369195200, 2013, 'Healy', 'Jackie Grebmeier', 'jackie@whoi.edu', 'submitted'),
(32, 3, 'Rusalca', 'Rebecca Woodgate', 1329282000, 1329886800, 2012, 'Khromov', 'Rebecca Woodgate', 'rwoodgate@nasa.gov', 'submitted'),
(33, 2, 'SWL', 'Svein Vagle', 1276142400, 1276574400, 2010, 'Sir Wilfred Laurier', 'Svein Vagle', 'svagle@uscd.edu', 'submitted'),
(34, 2, 'CHINARE', 'Svein Vagle', 1304481600, 1305086400, 2011, 'Sir Wilfred Laurier', 'Svein Vagle', 'svagle@uscd.edu', 'submitted'),
(35, 1, 'HLY1301', 'Robert Pickart', 1373342400, 1375243200, 2013, 'Healy', 'Robert Pickart', 'rpickart@whoi.edu', 'submitted'),
(36, 1, 'HLY1302', 'Robert Pickart', 1368676800, 1370404800, 2013, 'Healy', 'Robert Pickart', 'rpickart@whoi.edu', 'submitted');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
