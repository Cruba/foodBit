-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 10:18 PM
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
-- Database: `licencias2`
--

-- --------------------------------------------------------

--
-- Table structure for table `infracciones`
--

CREATE TABLE `infracciones` (
  `id_infraccion` int(11) NOT NULL,
  `identificador` int(11) NOT NULL,
  `curp` varchar(20) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fecha_multa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infracciones`
--

INSERT INTO `infracciones` (`id_infraccion`, `identificador`, `curp`, `nombre`, `ciudad`, `descripcion`, `fecha_multa`) VALUES
(60, 21, 'xscwd', 'wendy', 'Abasolo', 'AA', '2019-12-05'),
(61, 21, 'xscwd', 'wendy', 'Abasolo', 'asas', '2019-12-05'),
(62, 21, 'xscwd', 'wendy', 'Abasolo', 'sdsd', '2019-12-05'),
(63, 23, 'RHFR951223', 'Ricardo Hernandez', 'San Carlos', 'por menso', '2019-12-09'),
(64, 23, 'RHFR951223', 'Ricardo Hernandez', 'San Carlos', 'sdsd', '2019-12-09'),
(65, 23, 'RHFR951223', 'Ricardo Hernandez', 'San Carlos', 'sdsd', '2019-12-09'),
(66, 23, 'RHFR951223', 'Ricardo Hernandez', 'San Carlos', 'sd', '2019-12-09'),
(67, 23, 'RHFR951223', 'Ricardo Hernandez', 'San Carlos', 'sdsd', '2019-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `nombre_tabla`
--

CREATE TABLE `nombre_tabla` (
  `identificador` int(11) NOT NULL,
  `columna_usuario` varchar(255) NOT NULL,
  `columna_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nombre_tabla`
--

INSERT INTO `nombre_tabla` (`identificador`, `columna_usuario`, `columna_password`) VALUES
(1, 'hola', '$2y$10$NZl.qWPsjhusuLojbkL48.k8NJUhyV3yuO4Q8RMz3bmapQk06NL2m'),
(2, 'asas', '$2y$10$Isg5Nuj8Yq8cieptk7xb/eLPSzFYgkvNkDN3ms1esNWOyGjiz6ABe'),
(3, 'alain', '$2y$10$9EnDR6YPnAXR.TCK9hG0M.Nvd1avF2nY/sXz8o5m5tUXGBXtdq8/i'),
(4, 'admin', '$2y$10$ZavMBY5YGP6Hq7LpekdaGeOB5d1r/TiUcCpYfFclCG2kgxXbkRvLm'),
(5, 'asas', '$2y$10$KBNGWAYJtDUiwQiix9qUPORZ3ZngVtxNhEFIqiBscNmrRAJdvvSWu'),
(6, 'eso', '$2y$10$N9IDQfonOFjl/eZmUUCt/.CYXkszzfzO5r0MMgkhGeHDd9qIgptHi');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `identificador` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha_nac` date NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `curp` varchar(18) NOT NULL,
  `tipolicencia` varchar(255) NOT NULL,
  `codpos` int(5) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `colonia` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `donador` varchar(2) NOT NULL,
  `tiposangre` varchar(3) NOT NULL,
  `alergias` varchar(255) NOT NULL,
  `telefonoeme` varchar(15) NOT NULL,
  `examen` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`identificador`, `usuario`, `email`, `pass`, `nombre`, `fecha_nac`, `fecha_solicitud`, `curp`, `tipolicencia`, `codpos`, `direccion`, `colonia`, `ciudad`, `donador`, `tiposangre`, `alergias`, `telefonoeme`, `examen`) VALUES
(8, 'cruba', 'alainsc.bc@gmail.com', '202cb962ac59075b964b07152d234b70', 'Fernando Cruz', '0000-00-00', '0000-00-00', '12', '', 0, '', '', 'Reynosa', '', '', '', '', 8),
(9, 'cruback', 'alain@gmail.com', '202cb962ac59075b964b07152d234b70', 'nombre2', '0000-00-00', '0000-00-00', '12', '', 0, '', '', '', '', '', '', '', 7),
(10, 'ey', 'eleny1410@hotmail.com', 'fc55f7812ff414608e43bcb822271c4a', 'nombre', '0000-00-00', '0000-00-00', '123', '', 0, '', '', '', '', '', '', '', 7),
(11, 'Crubaa', 'normaali68@hotmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', '0000-00-00', '1344', '', 0, '', '', '', '', '', '', '', 7),
(12, 'godzilla', 'alainscc@gmail.com', '202cb962ac59075b964b07152d234b70', 'Godzilla Chisguete', '2018-03-18', '2019-12-02', 'asas', 'Tipo D', 88710, 'la cima #112', 'la cima', 'Reynosa', 'Si', 'B+', 'asas', '121212', 7),
(13, 'norma', 'alainscc@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', '0000-00-00', '1445', '', 0, '', '', '', '', '', '', '', 3),
(14, 'andy', 'alac.bc@gmail.com', '202cb962ac59075b964b07152d234b70', 'and', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', 7),
(15, 'freddy', 'alainsc.bc@gmail.com', '202cb962ac59075b964b07152d234b70', 'ey', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', 2),
(16, 'hola', 'alainsc.bc@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', 4),
(17, 'Seky', 'yo123@yo.com', 'e10adc3949ba59abbe56e057f20f883e', '', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', 0),
(18, 'seky', 'seky@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', 0),
(19, 'ey', 'alaisasan@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', 0),
(20, 'panchito', 'alan@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', 0),
(21, 'wendy', 'alainsc.bc@gmail.com', '202cb962ac59075b964b07152d234b70', 'wendy', '0012-02-12', '2019-12-05', 'xscwd', 'Tipo A', 0, 'we|w|w', 'erer', 'Abasolo', 'No', 'A+', 'er', '112', 4),
(22, 'prueba', 'alainschhh.bc@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', 0),
(23, 'Ricardo', 'alain@gmail.com', '202cb962ac59075b964b07152d234b70', 'Ricardo Hernandez', '1995-12-23', '2019-12-09', 'RHFR951223', 'Tipo D', 81281, 'La que sea #223', 'Donde sea', 'San Carlos', '', '', '', '', 4),
(24, 'alain', 'alainsc.bc@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', 0),
(25, 'jorge', 'asa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', 0),
(26, 'jorge2@gmail.com', 'alainsccsss@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', 0),
(27, 'prueba', 'assa@gmail.com', 'c893bad68927b457dbed39460e6afd62', '', '0000-00-00', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infracciones`
--
ALTER TABLE `infracciones`
  ADD PRIMARY KEY (`id_infraccion`);

--
-- Indexes for table `nombre_tabla`
--
ALTER TABLE `nombre_tabla`
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
-- AUTO_INCREMENT for table `infracciones`
--
ALTER TABLE `infracciones`
  MODIFY `id_infraccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `nombre_tabla`
--
ALTER TABLE `nombre_tabla`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
