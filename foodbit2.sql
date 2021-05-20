-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 05:31 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodbit2`
--

-- --------------------------------------------------------

--
-- Table structure for table `solicitud`
--

CREATE TABLE `solicitud` (
  `identificador` int(100) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(10) NOT NULL,
  `empresa` text COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `solicitud`
--

INSERT INTO `solicitud` (`identificador`, `idusuario`, `nombre`, `correo`, `telefono`, `empresa`, `mensaje`) VALUES
(1, 2, 'Alain Cruz', 'cruba@gmail.com', 0, 'saas', 'asasas'),
(2, 2, 'Brandon', 'cruba@gmail.com', 0, 'saas', 'qsas'),
(3, 25, 'Alain Cruz', 'cruba@gmail.com', 0, 'CodRain', 'sddsds'),
(4, 25, 'Alain Cruz', 'cruba@gmail.com', 0, 'CodRain', 'sddsdsas'),
(5, 25, 'Brandon', 'cruba@gmail.com', 0, 'CodRain', '111141'),
(6, 25, 'Alain Cruz', 'cruba@gmail.com', 0, 'saas', 'asasas'),
(7, 25, 'Alain Cruz', 'cruba@gmail.com', 0, 'aass', 'sdsddss'),
(8, 25, 'Alain Cruz', 'cruba@gmail.com', 0, 'qasasass', 'asaas'),
(9, 25, 'Alain Cruz', 'cruba@gmail.com', 0, 'qasasass', 'asaassss'),
(10, 2, 'Brandon', 'aaa@gmail.com', 0, 'aass', 'asasa'),
(11, 2, 'Brandon', 'aaa@gmail.com', 0, 'aass', 'asasa'),
(12, 26, 'soy la prueba', 'delaprueba@gmail.com', 0, 'pruebillas', 'aala esto es otra prueba');

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
(2, 'BRANDON ALAIN', '', '', 0, 'ala1insc.bc@gmail.com', '', '', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(3, 'alain', '', '', 0, 'alainsc.bc@gmail.com', '', '', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(4, 'aalain', '', '', 0, 'alainsc.bc@gmail.com', '', '11212', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(5, 'alain', '', '', 0, 'alainsc.bc@gmail.com', '', 'a01610228fe998f515a72dd730294d87', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(6, 'BRANDON ALAIN', 'aass', '', 0, 'alainsc.bc@gmail.com', '', 'e110fb45bc4f7cc5d367b06bfbc8e5c3', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(7, 'BRANDON ALAIN', 'aass ptur', '', 0, 'alainsc.bc@gmail.com', '', '4c56ff4ce4aaf9573aa5dff913df997a', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(8, 'alain', 'aass', '', 0, 'alainsc.bc@gmail.com', '', 'e022c20ad33354cbec77cc9709996dd1', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(9, 'Brandon', 'prueba', '', 0, 'alainsc.bc@gmail.com', '', '7f6ffaa6bb0b408017b62254211691b5', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(10, 'alain', 'asas', '', 0, 'alainsc2.bc@gmail.com', '', 'a01610228fe998f515a72dd730294d87', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(11, 'BRANDON ALAIN', 'aass', '', 0, 'alainsc.bc@gmail.com', '', 'e110fb45bc4f7cc5d367b06bfbc8e5c3', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(12, 'aaaaaaaaaaaa', '', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(13, '', '', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(14, '', '', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(15, '', '', '', 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(16, '', '', 0x666f746f732f, 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(17, 'BRANDON ALAIN', 'prueba', 0x666f746f732f, 4555, 'alainsc.bc@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(18, '', '', 0x666f746f732f, 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(19, '', '', 0x666f746f732f, 0, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(20, '', '', 0x666f746f732f, 0, '', 'asas', 'd41d8cd98f00b204e9800998ecf8427e', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(21, 'Alain Cruz', 'cruba', 0x666f746f732f, 0, 'cruba@gmail.com', 'aaa', '1a1dc91c907325c69271ddf0c944bc72', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(22, 'Brandon', 'CodRain', '', 2147483647, 'cruba@gmail.com', 'Barranquillo 112, La Cima, La Cima, La Cima, La Cima', 'de872154ffbf91a5dcc0e539dd2d5106', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(23, 'Brandon', 'CodRain', '', 2147483647, 'cruba@gmail.com', 'Barranquillo 112, La Cima, La Cima, La Cima, La Cima', 'baa7a52965b99778f38ef37f235e9053', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(24, 'Brandon', 'CodRain', '', 2147483647, 'cruba@gmail.com', 'Barranquillo 112, La Cima, La Cima, La Cima, La Cima', '2f3e9eccc22ee583cf7bad86c751d865', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(25, 'Alain Cruz', 'codigorojo', '', 454545, 'cruba11@gmail.com', '3316 Queta Ave', '202cb962ac59075b964b07152d234b70', 'hola eso es la prueba de la prueba de la prueba\r\n'),
(26, 'esto es la prueba', 'prueba de prueba', '', 1234567, 'prueba@gmail.com', 'cas la prueba', 'c893bad68927b457dbed39460e6afd62', 'hola eso es la prueba de la prueba de la prueba\r\n');

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
  MODIFY `identificador` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
