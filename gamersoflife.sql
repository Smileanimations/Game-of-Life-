-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2024 at 09:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameoflife`
--

-- --------------------------------------------------------

--
-- Table structure for table `patterns`
--

CREATE TABLE `patterns` (
  `id` mediumint(9) NOT NULL,
  `title` varchar(25) DEFAULT NULL,
  `details` varchar(300) DEFAULT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patterns`
--

INSERT INTO `patterns` (`id`, `title`, `details`, `image`) VALUES
(1, 'Glider', 'Het kleinste spaceship, volgt een diagonale lijn. De richting wordt bepaald door de \"punt\" in het patroon.', 'glider.png'),
(2, 'Acorn', 'Een simpele methuselah gevonden rondt 1971.', 'acorn.png'),
(3, 'Butterfly', 'Vormt twee beehives na 33 generaties.', 'butterfly.png'),
(4, 'Toad', 'A periode 2 oscillator. De tweede meest voorkomende oscillator (na de blinker).', 'toad.png'),
(5, 'Blinker', 'De meest voorkomende en kleinste oscillator.', 'blinker.png'),
(6, 'Block and glider', 'Een methuselah die eindigt met een losse glider.', 'blockandglider.png'),
(7, 'Diehard', 'Een methuselah die totaal sterft na 130 generaties.', 'diehard.png'),
(8, 'Fox', 'De kleinste asymmetrische periode 2 oscillator.', 'fox.png'),
(20, 'Bozotje', 'IK HAAT alles', 'emoji-desintegrandose.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patterns`
--
ALTER TABLE `patterns`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patterns`
--
ALTER TABLE `patterns`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
