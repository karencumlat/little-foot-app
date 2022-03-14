-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 08:04 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `littlefoot_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'littlefoot');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `card_number` varchar(255) NOT NULL,
  `cvv` int(3) NOT NULL,
  `expiry_date` int(4) NOT NULL,
  `donation_amount` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `name`, `card_number`, `cvv`, `expiry_date`, `donation_amount`) VALUES
(2, 'Karen', '$2y$10$qOioE8.ExfQmVPsxEz5esO8bIheD/ZaAIBTRH0z3uGDtG48KM0LGu', 321, 4312, '123'),
(3, 'Juno', '$2y$10$.v2xkfuX6ZdG10US.8aVCOG6UFPbG/m8LrHfeLPwurfZvcK5gHTou', 143, 1235, '0');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_desc` longtext NOT NULL,
  `post_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_title`, `post_desc`, `post_deleted`) VALUES
(6, 'Science Cannot Stop Global Warming', 'With current efforts or those committed to under the Paris agreement, there is absolutely no chance that humanity will limit the warming of the Earth’s surface to an average of 1.5 degrees Celsius. This finding emerges from a special report of the Intergovernmental Panel on Climate Change (IPCC) on 1.5 degrees released on Monday 8 October 2018. It will take extraordinary effort to achieve this target, a real change of track. At the same time, climate change will bring a dramatic rise in extreme events, a sea level rise that will be much larger if we continue heating our planet unabated rather than halt the temperature increase. The sea level rise will continue over centuries as Greenland and Antarctic glaciers slowly disintegrate and the ocean slowly absorbs more heat and expands. The consequences for coastal cities home to hundreds of millions will be dramatic as storm surges rise. The IPCC speaks with a clear voice of the threats to lives, physical infrastructure, ecosystems, and associate economic cost but does not quantify the consequences of political collapse, civil strife and war that may quite well arise from a hothouse Earth.', 0),
(7, 'Will more expensive metals impede economic growth in the US?', 'As the US government justifies new tariffs on steel and aluminum imports with their military importance, the role of metals in society comes into focus. New research shows that metals are an important ingredient in economic upswings. Conversely, metal use declines rapidly in recessions. Restricting the access to metals or increasing their price may come at a cost to the economy.\r\n\r\nMetals are key enablers of economic development and human progress, being widely used for their superior structural properties, durability, and increasingly for their special chemical properties that are the basis for technological wizardry from drones to brain imaging. Access to metals is important for a modern economy. Taxing an important input to production may cause disruption in global supply chains. New research published in Nature Geoscience by a team of scientists from Yale, Tsinghua University, and NTNU tried to unravel the relationship between metal use and economic activity.', 0),
(8, 'Energy efficiency offers win-win for climate, health, and ecosystems', 'A potential increase in metal consumption emerges as only concern in a broad-based investigation of the clean-energy transition\r\n\r\nThe history of environmental protection is full of unforeseen consequences: taller chimneys only led to pollutants spreading wide and far, and safe refrigerants replacing hydrocarbons turned out to damage the ozone hole. How can we ensure that technologies we employ to reduce greenhouse gas emissions do not give rise to the next generation of problems? Protecting the climate demands a fundamental reorganization of some aspects of our economy. How can we make sure that we select and develop solutions that offer us the largest net benefit?', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `card_number` (`card_number`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
