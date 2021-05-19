-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 10:06 PM
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
-- Database: `licencias`
--

-- --------------------------------------------------------

--
-- Table structure for table `datosgenerales`
--

CREATE TABLE `datosgenerales` (
  `id_generales` int(11) NOT NULL,
  `identificador` int(11) NOT NULL,
  `donador` varchar(2) NOT NULL,
  `tiposangre` varchar(3) NOT NULL,
  `alergias` varchar(255) NOT NULL,
  `telefonoeme` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datosgenerales`
--

INSERT INTO `datosgenerales` (`id_generales`, `identificador`, `donador`, `tiposangre`, `alergias`, `telefonoeme`) VALUES
(1, 0, 'Si', 'A-', 'asas', 'asasasas'),
(2, 0, 'No', 'A+', 'qqwqw', '12121211212');

-- --------------------------------------------------------

--
-- Table structure for table `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(5) NOT NULL,
  `identificador` int(11) NOT NULL,
  `codpos` int(5) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `colonia` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `direccion`
--

INSERT INTO `direccion` (`id_direccion`, `identificador`, `codpos`, `direccion`, `colonia`, `ciudad`) VALUES
(1, 0, 88710, 'Barranquillo 112, La Cima', 'La Cima', 'Reynosa'),
(2, 0, 88710, 'Barranquillo 112, La Cima', 'La Cima', 'GozÃ¡lez'),
(3, 0, 88715, 'Filipinas #107', 'Fracc. Loma Real', 'Reynosa');

-- --------------------------------------------------------

--
-- Table structure for table `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL,
  `identificador` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha_nac` date NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `curp` varchar(18) NOT NULL,
  `tipolicencia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `solicitud`
--

INSERT INTO `solicitud` (`id_solicitud`, `identificador`, `nombre`, `fecha_nac`, `fecha_solicitud`, `curp`, `tipolicencia`) VALUES
(4, 0, 'Alain', '1212-12-12', '2019-11-26', '121212', 'Tipo A'),
(5, 0, 'yatziri', '1121-12-12', '2019-11-26', '121212', 'Tipo C'),
(6, 0, 'Luis Fernando Cruz Gonzalez', '1995-12-02', '2019-11-26', '', 'Tipo D'),
(7, 0, '', '0000-00-00', '2019-11-26', '', 'Tipo A');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `identificador` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`identificador`, `usuario`, `email`, `pass`) VALUES
(1, 'hola', 'alainsc.bc@gmail.com', '$2y$10$dJ7TfZm0Y82x8mauugm/f.9PRSqLNFlzELdF4J2cgLD2JpH3anyfW'),
(2, 'alain', 'alainsc.baac@gmail.com', '$2y$10$mVzqn07Qo1dz.O5CW54qq.8k4mkEYDFSfE7QPGGtvQiV0s.FGgPMG'),
(3, 'fer', 'normaali68@hotmail.com', '$2y$10$8NPJyVMWK63Wv2Bg0A8/lu9QX0shgYQkkmFkhEb1WJabimAL1Qxcq'),
(4, 'erre', 'alascaa.bc@gmail.com', '$2y$10$V9k58GKMJvKVmw4rI8hnBetKdiD9FBidGWtB3wuatCwmG2FsdPUQC'),
(5, 'cruba', 'alainsc.bc@gmail.com', '$2y$10$ol4FkA4fx9/JUDmHqdETPu/TZ083bkzF5isq2wcz5EhcBjl6CsKWa'),
(6, 'Cruba', 'alinsc.bc@gmail.com', '$2y$10$GDMqL4ILib//eBkP.Dydg.06YQ2i8Lc7dyuCo8p.OAh2VyKXUo8cS'),
(7, 'yat', 'yat@hotmail.com', '$2y$10$KmDErnLitmgfvjIZoaIV0uVn1DJ3VDSE9T.1vjjb.Z7uqF.yZwZhy'),
(8, 'hola', 'normaali68@hotmail.com', '$2y$10$oXL2bzp3dGNzusOvaKtVmeUXq97eXs49a6itiB0NAGe7Q4N0Seue.'),
(9, 'er', 'alainsc.bc@gmail.com', '$2y$10$d/6XNy2wOHYQtPPLfDQqneFH4B7AjirfzchJtHraJvBjNyFKEcHnS'),
(10, 'et', 'normaali68@hotmail.com', '$2y$10$j2D40WJblPO4Xb2cp1O14etO6DwAgWHxoxSvHokQaQOD/F5sb28Ee'),
(11, 'cruba', 'alainsc.bc@gmail.com', '$2y$10$m/Ik6Iu6lR.0bj.2KYd4auOv13LN5mQR7eV7xdXUVJmT9158BgXzC'),
(12, '15580762', 'alainsc.bc@gmail.com', '$2y$10$R5tgOCRrPK0Ah6vSQKP5vObNDeV7GmPu95CdlMOetJxRXjW7ueXm6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datosgenerales`
--
ALTER TABLE `datosgenerales`
  ADD PRIMARY KEY (`id_generales`);

--
-- Indexes for table `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indexes for table `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `identificador` (`identificador`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`identificador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datosgenerales`
--
ALTER TABLE `datosgenerales`
  MODIFY `id_generales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`identificador`) REFERENCES `usuarios` (`identificador`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
