-- Host: 127.0.0.1
-- Generation Time: Dec 20 , 2020 at 01:07 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crime_analysis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pwd`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE IF NOT EXISTS `citizen` (
  `name` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `aadhar` varchar(15) NOT NULL,
  PRIMARY KEY (`aadhar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `c_id` int(11) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `c_date` varchar(20) NOT NULL,
  `c_by` varchar(30) NOT NULL,
  `c_against` varchar(30) NOT NULL,
  `c_case` varchar(30) NOT NULL,
  `c_contact` varchar(20) NOT NULL,
  `c_desc` varchar(100) NOT NULL,
  `c_status` varchar(20) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`c_id`, `s_name`, `c_date`, `c_by`, `c_against`, `c_case`, `c_contact`, `c_desc`, `c_status`) VALUES
(334418, 'Tilakwadi', '2017-03-04', 'aaa', 'bbb', 'robbery', '9876543210', 'fhjdh dhfdk dhfdkjhfkdjf ', 'Solved'),
(563993, 'Tilakwadi', '2017-03-01', 'aaa', 'bbb', 'accident', '9876543210', 'gfhj', 'Pending'),
(733804, 'Computronics Belgaum', '2017-04-16', 'aa', 'bb', 'aaa', '9448182163', 'aaaa', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `station_admin`
--

CREATE TABLE IF NOT EXISTS `station_admin` (
  `stn_no` int(11) NOT NULL,
  `stn_name` varchar(50) NOT NULL,
  `stn_contact` varchar(20) NOT NULL,
  `stn_address` varchar(300) NOT NULL,
  `stn_city` varchar(20) NOT NULL,
  `stn_dist` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `mail` varchar(30) NOT NULL,
  PRIMARY KEY (`stn_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station_admin`
--

INSERT INTO `station_admin` (`stn_no`, `stn_name`, `stn_contact`, `stn_address`, `stn_city`, `stn_dist`, `pwd`, `mail`) VALUES
(100142, 'Tilakwadi Station', '9448182163', 'Somwar Peth, Tilakwadi\r\na', 'Belgaum', 'Belgaum', '85CTR42T', 'tilakwadistation@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `station_officer`
--

CREATE TABLE IF NOT EXISTS `station_officer` (
  `o_id` int(11) NOT NULL,
  `stn_name` varchar(30) NOT NULL,
  `off_name` varchar(30) NOT NULL,
  `off_doj` varchar(30) NOT NULL,
  `off_gender` varchar(30) NOT NULL,
  `off_height` varchar(30) NOT NULL,
  `off_weight` varchar(30) NOT NULL,
  `off_mail` varchar(50) NOT NULL,
  `off_contact` varchar(30) NOT NULL,
  `off_address` varchar(300) NOT NULL,
  `off_pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`o_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station_officer`
--

INSERT INTO `station_officer` (`o_id`, `stn_name`, `off_name`, `off_doj`, `off_gender`, `off_height`, `off_weight`, `off_mail`, `off_contact`, `off_address`, `off_pwd`) VALUES
(238050, 'Tilakwadi Station', 'Computronics Belgaum', '2017-01-01', 'Male', '5.5', '100', 'computronics.belgaum@gmail.com', '9448182163', 'Somwar Peth, Tilakwadi\r\na', 'GGVKH4TE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
