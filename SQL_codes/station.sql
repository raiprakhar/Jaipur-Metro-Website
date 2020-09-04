-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 09:30 AM
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
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `station_id` int(100) NOT NULL,
  `route_id` int(100) NOT NULL,
  `station_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`station_id`, `route_id`, `station_name`) VALUES
(3001, 5001, 'MANSAROVAR'),
(3001, 5002, 'MANSAROVAR'),
(3001, 5003, 'MANSAROVAR'),
(3003, 5003, 'CHANDPOLE'),
(3003, 5004, 'CHANDPOLE'),
(3003, 5005, 'CHANDPOLE'),
(3005, 5001, 'AMBABADI'),
(3005, 5005, 'AMBABADI'),
(3005, 5006, 'AMBABADI'),
(3007, 5002, 'S.M.STADIUM'),
(3007, 5004, 'S.M.STADIUM'),
(3007, 5006, 'S.M.STADIUM'),
(3008, 5002, 'DURGAPURA'),
(3008, 5004, 'DURGAPURA'),
(3008, 5006, 'DURGAPURA'),
(3002, 5001, 'RAILWAY STATION'),
(3002, 5002, 'RAILWAY STATION'),
(3002, 5003, 'RAILWAY STATION'),
(3006, 5001, 'SUBHASH NAGAR'),
(3006, 5005, 'SUBHASH NAGAR'),
(3006, 5006, 'SUBHASH NAGAR'),
(3004, 5003, 'BADI CHOPAR'),
(3004, 5004, 'BADI CHOPAR'),
(3004, 5005, 'BADI CHOPAR');

--
-- Triggers `station`
--
DELIMITER $$
CREATE TRIGGER `new1` AFTER INSERT ON `station` FOR EACH ROW begin 

insert into newstation values (new.station_id,new.station_name,curdate());
end
$$
DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
