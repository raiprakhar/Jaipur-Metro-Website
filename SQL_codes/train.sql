-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 09:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metro`
--

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `train_id` bigint(255) NOT NULL,
  `route_id` bigint(255) NOT NULL,
  `train_name` varchar(100) NOT NULL,
  `capacity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`train_id`, `route_id`, `train_name`, `capacity`) VALUES
(1001, 5001, 'maharajas', 160),
(1002, 5002, 'duronto', 150),
(1003, 5003, 'janta', 150),
(1004, 5004, 'rajdhani', 140),
(1005, 5005, 'vandeBharat', 120),
(1006, 5006, 'ajanta', 160),
(123, 1235, 'tr', 221004);

--
-- Triggers `train`
--
DELIMITER $$
CREATE TRIGGER `new` AFTER INSERT ON `train` FOR EACH ROW begin 

insert into newtrain values(new.train_id,new.train_name,curdate());
end
$$
DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
