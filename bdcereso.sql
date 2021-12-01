-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 11:00 PM
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
-- Database: `bdcereso`
--

-- --------------------------------------------------------

--
-- Table structure for table `guardias`
--

CREATE TABLE `guardias` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `edad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guardias`
--

INSERT INTO `guardias` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`) VALUES
('1', 'Sebastian', 'Delgado', 'Martinez', '28'),
('2', 'Arturo', 'Rosales', 'Perez', '34');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `edad` varchar(10) NOT NULL,
  `ocupacion` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `ocupacion`, `email`) VALUES
(1, 'Jomara', 'Torres', 'Olvera', '17', 'guardia', 'jomaratorres@cereso.com');

-- --------------------------------------------------------

--
-- Table structure for table `policias`
--

CREATE TABLE `policias` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `edad` varchar(10) NOT NULL,
  `puesto` varchar(100) NOT NULL,
  `experiencia` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policias`
--

INSERT INTO `policias` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `puesto`, `experiencia`) VALUES
(1, 'Arturo', 'Rodriguez', 'Guzman', '30', 'Comandante', '15 años');

-- --------------------------------------------------------

--
-- Table structure for table `reo`
--

CREATE TABLE `reo` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `edad` varchar(10) NOT NULL,
  `motivo` varchar(100) NOT NULL,
  `curp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reo`
--

INSERT INTO `reo` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `edad`, `motivo`, `curp`) VALUES
(1, 'Kevin', 'Roacho', 'Guzman', '33', 'Robo', 'ROKG331207MHYTGFD7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guardias`
--
ALTER TABLE `guardias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policias`
--
ALTER TABLE `policias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reo`
--
ALTER TABLE `reo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `policias`
--
ALTER TABLE `policias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reo`
--
ALTER TABLE `reo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
