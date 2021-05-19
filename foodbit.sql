-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 04:44 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodbit`
--

-- --------------------------------------------------------

--
-- Table structure for table `solicitud`
--

CREATE TABLE `solicitud` (
  `identificador` int(100) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(10) NOT NULL,
  `empresa` text COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `identificador` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` longblob NOT NULL,
  `telefono` int(50) NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`identificador`, `nombre`, `empresa`, `imagen`, `telefono`, `correo`, `direccion`, `pass`, `descripcion`) VALUES
(2, 'BRANDON ALAIN', '', '', 0, 'ala1insc.bc@gmail.com', '', '', ''),
(3, 'alain', '', '', 0, 'alainsc.bc@gmail.com', '', '', ''),
(4, 'aalain', '', '', 0, 'alainsc.bc@gmail.com', '', '11212', ''),
(5, 'alain', '', '', 0, 'alainsc.bc@gmail.com', '', 'a01610228fe998f515a72dd730294d87', ''),
(6, 'BRANDON ALAIN', 'aass', '', 0, 'alainsc.bc@gmail.com', '', 'e110fb45bc4f7cc5d367b06bfbc8e5c3', ''),
(7, 'BRANDON ALAIN', 'aass ptur', '', 0, 'alainsc.bc@gmail.com', '', '4c56ff4ce4aaf9573aa5dff913df997a', ''),
(8, 'alain', 'aass', '', 0, 'alainsc.bc@gmail.com', '', 'e022c20ad33354cbec77cc9709996dd1', ''),
(9, 'Brandon', 'prueba', '', 0, 'alainsc.bc@gmail.com', '', '7f6ffaa6bb0b408017b62254211691b5', ''),
(10, 'alain', 'asas', '', 0, 'alainsc2.bc@gmail.com', '', 'a01610228fe998f515a72dd730294d87', ''),
(11, 'BRANDON ALAIN', 'aass', '', 0, 'alainsc.bc@gmail.com', '', 'e110fb45bc4f7cc5d367b06bfbc8e5c3', ''),
(12, 'aaaaaaaaaaaa', '', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(13, '', '', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(14, '', '', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(15, '', '', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(16, '', '', 0x666f746f732f, 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(17, 'BRANDON ALAIN', 'prueba', 0x666f746f732f, 4555, 'alainsc.bc@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(18, '', '', 0x666f746f732f, 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(19, '', '', 0x666f746f732f, 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(20, '', '', 0x666f746f732f, 0, '', 'asas', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(21, 'alain', 'cruba', 0x666f746f732f, 0, 'cruba@gmail.com', 'aaa', '202cb962ac59075b964b07152d234b70', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`identificador`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`identificador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `identificador` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
