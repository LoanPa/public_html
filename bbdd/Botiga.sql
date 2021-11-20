-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2021 at 06:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Botiga`
--

-- --------------------------------------------------------

--
-- Table structure for table `Album`
--

CREATE TABLE `Album` (
  `id` int(1) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `preu_cd` decimal(6,2) NOT NULL,
  `preu_vinil` decimal(6,2) NOT NULL,
  `preu_mp3` decimal(6,2) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `alt_foto` varchar(50) NOT NULL,
  `descripció` varchar(500) NOT NULL,
  `estil_id` int(1) NOT NULL,
  `artista` varchar(50) NOT NULL,
  `segell` varchar(50) NOT NULL,
  `data_publicacio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Album`
--

INSERT INTO `Album` (`id`, `nom`, `preu_cd`, `preu_vinil`, `preu_mp3`, `foto`, `alt_foto`, `descripció`, `estil_id`, `artista`, `segell`, `data_publicacio`) VALUES
(1, '569', '14.00', '20.00', '4.00', './media/569.jpg', 'portada 569', 'Un album que mola molt', 1, 'GO!GO!7188', 'BMG', '2007-10-24'),
(2, 'After hours', '14.00', '20.00', '4.00', './media/After_hours.jpg', 'portada After hours', 'Un album que mola molt', 2, 'The Weekend', 'XO, Republic Records', '2020-03-20'),
(3, 'Bad Habits', '14.00', '20.00', '4.00', './media/Bon_Jovi.jpg', 'portada Bon Jovi', 'Un album que mola molt', 2, 'Ed Sheeran', 'Asylum Records UK', '2021-06-25'),
(4, 'Cold Heart', '14.00', '20.00', '4.00', './media/Cold_Heart.jpg', 'portada Cold Heart', 'Un album que mola molt', 2, '', '', '1970-01-01'),
(5, 'Don\'t shoot me', '14.00', '20.00', '4.00', './media/Dont_Shoot_Me.jpg', 'portada Don\'t shoot me', 'Un album que mola molt', 2, '', '', '1970-01-01'),
(6, 'Higher Power', '14.00', '20.00', '4.00', './media/Higher_Power.jpg', 'portada Higher power', 'Un album que mola molt', 2, '', '', '1970-01-01'),
(7, 'Honky Chateau', '14.00', '20.00', '4.00', './media/Honky_Chateau.jpg', 'Honky chateau', 'Un album que mola molt', 2, '', '', '1970-01-01'),
(8, 'Shivers', '14.00', '20.00', '4.00', './media/Shivers.png', 'portada shivers', 'Un album que mola molt', 2, '', '', '1970-01-01'),
(9, 'Voy a pasarmelo bien', '14.00', '20.00', '4.00', './media/Voy_a_pasarmelo_bien.jpg', 'portada Voy a pasarmelo bien', 'Un album que mola molt', 2, '', '', '1970-01-01'),
(10, 'The arrival of the birds', '14.00', '20.00', '4.00', './media/The_Arrival_of_the_Birds.jpg', 'portada The arrival of the birds', 'Un album que mola molt', 4, '', '', '1970-01-01'),
(11, 'The four seasons', '14.00', '20.00', '4.00', './media/The_Four_Seasons.jpg', 'portada The four seasons', 'Un album que mola molt', 4, '', '', '1970-01-01'),
(12, 'The razor\'s edge', '14.00', '20.00', '4.00', './media/The_Razors_Edge.jpg', 'portada The razor\'s edge', 'Un album que mola molt', 2, '', '', '1970-01-01'),
(13, 'Rage against the machine', '14.00', '20.00', '4.00', './media/Rage_against_the_machine.jpg', 'portada Rage against the machine', 'Un album que mola molt', 1, '', '', '1992-11-03'),
(14, 'The battle of Los Angeles', '14.00', '20.00', '4.00', './media/The_battle_of_los_angeles.jpg', 'portada The battle of Los Angeles', 'Un album que mola molt', 1, '', '', '1999-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `Comandes`
--

CREATE TABLE `Comandes` (
  `id` int(1) NOT NULL,
  `usr_id` int(1) NOT NULL,
  `data` datetime(1) NOT NULL,
  `import_total` decimal(5,2) NOT NULL,
  `total_elements` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Comandes`
--

INSERT INTO `Comandes` (`id`, `usr_id`, `data`, `import_total`, `total_elements`) VALUES
(1, 1, '2021-11-13 16:37:22.0', '11.55', 1),
(2, 2, '2021-11-25 16:37:22.0', '11.55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Estil`
--

CREATE TABLE `Estil` (
  `id` int(1) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Estil`
--

INSERT INTO `Estil` (`id`, `nom`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(3, 'Jazz'),
(4, 'Classica');

-- --------------------------------------------------------

--
-- Table structure for table `Linies_comanda`
--

CREATE TABLE `Linies_comanda` (
  `id` int(1) NOT NULL,
  `comanda_id` int(1) NOT NULL,
  `album_id` int(1) NOT NULL,
  `quantitat` int(1) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `preu` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Linies_comanda`
--

INSERT INTO `Linies_comanda` (`id`, `comanda_id`, `album_id`, `quantitat`, `nom`, `preu`) VALUES
(1, 1, 1, 1, 'album', '11.55');

-- --------------------------------------------------------

--
-- Table structure for table `Usuaris`
--

CREATE TABLE `Usuaris` (
  `id` int(1) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `direcció` varchar(50) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Usuaris`
--

INSERT INTO `Usuaris` (`id`, `nom`, `direcció`, `cp`, `email`, `passwd`) VALUES
(1, 'Jaume', 'Casa seva', '08924', 'Jaume@ajuntamentdesantaco.cat', 'contrasenya'),
(2, 'Joan', 'Casa seva', '08195', 'Jaume@ajuntamentdesantqgat.cat', 'contrasenya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Album`
--
ALTER TABLE `Album`
  ADD PRIMARY KEY (`id`),
  ADD KEY `estil` (`estil_id`);

--
-- Indexes for table `Comandes`
--
ALTER TABLE `Comandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuari` (`usr_id`) USING BTREE;

--
-- Indexes for table `Estil`
--
ALTER TABLE `Estil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Linies_comanda`
--
ALTER TABLE `Linies_comanda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comanda_id` (`comanda_id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `Usuaris`
--
ALTER TABLE `Usuaris`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Album`
--
ALTER TABLE `Album`
  ADD CONSTRAINT `estil` FOREIGN KEY (`estil_id`) REFERENCES `Estil` (`id`);

--
-- Constraints for table `Comandes`
--
ALTER TABLE `Comandes`
  ADD CONSTRAINT `fa` FOREIGN KEY (`usr_id`) REFERENCES `Usuaris` (`id`);

--
-- Constraints for table `Linies_comanda`
--
ALTER TABLE `Linies_comanda`
  ADD CONSTRAINT `Linies_comanda_ibfk_1` FOREIGN KEY (`comanda_id`) REFERENCES `Comandes` (`id`),
  ADD CONSTRAINT `album` FOREIGN KEY (`album_id`) REFERENCES `Album` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
