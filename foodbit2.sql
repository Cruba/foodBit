-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 09:47 AM
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
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` text COLLATE utf8_spanish_ci NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `solicitud`
--

INSERT INTO `solicitud` (`identificador`, `idusuario`, `nombre`, `correo`, `telefono`, `empresa`, `mensaje`) VALUES
(1, 8, 'Javier', 'javier@hotmail.com', '0', 'Caritas felices', 'hola, estoy interesado en adquirir uno de sus paquetes, ya que somos una asociación sin fines de lucro, en la cual nos dedicamos a rescatar a personas que se encuentran en situaciones de calle, y tratamos de hacer lo mejor posible para reubicarlos, pero e'),
(2, 5, 'Marco gonzalo', 'gonzo@hotmail.com', '0', 'Personal', 'hola soy mario gonzo, actualmente soy alguien que no tiene muchos recursos pero con su ayuda al menos podria ayudar a mis hijos a ser mas felices'),
(3, 8, 'Alain Cruz', 'cruba@gmail.com', '0', 'Personal', 'Estoy planeando una fiesta para mis hijos pero no cuento con los recursos, por favor solicito su apoyo'),
(4, 8, 'serla', 'serla@hotmail.com', '', 'Helados para todos', 'estoy interesado en adquirir alguno de sus productos'),
(5, 2, 'Clare Villanueva', 'clare@hotmail.com', '', 'manitas sangrantes', 'necesitamos ayuda con los inmigrantes y damnificados'),
(6, 8, 'James Ecozia', 'james@hotmail.com', '', 'Anchies', 'Somos una empresa dedicada a ayudar a las personas damnificadas, las reubicamos '),
(7, 1, 'Asia Mar', 'asi@hotmail.com', '265 262 3323', 'carlos asosiation', 'estamos interesados en sus informacion');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `identificador` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` longblob NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`identificador`, `nombre`, `empresa`, `imagen`, `telefono`, `correo`, `direccion`, `pass`, `descripcion`) VALUES
(1, 'arturo lopez', 'KFC', 0x62656e65666163746f72362e706e67, '0', 'kfc@hotmail.com', 'Perif, Carr. Libre Monterrey - Reynosa 1000, Col. Loma Real De Jara, 88750 Reynosa, Tamps.', '202cb962ac59075b964b07152d234b70', 'comprometidos a ayudar '),
(2, 'Carlos Cerceda', 'Ihop', 0x62656e65666163746f72332e706e67, '899', 'ihop@hotmail.com', '1900 S 10th St, McAllen, TX 78503, Estados Unidos', '202cb962ac59075b964b07152d234b70', 'comprometidos a ayudar a las personas '),
(3, 'Marco Castillo', 'Wings Stop', 0x62656e65666163746f72322e706e67, '899', 'wingsstop@hotmail.com', 'Carr. Libre Monterrey - Reynosa 106 D, Fuentes del Valle, 88710 Reynosa, Tamps.', '202cb962ac59075b964b07152d234b70', 'comprometidos a ayudar a las personas '),
(4, 'Karla Nar', 'Applebee´s', 0x62656e65666163746f72312e706e67, '898 985 6566', 'Apple@hotmail.com', 'Carr. Libre Monterrey - Reynosa km 103-5 126, Fuentes del Valle, 88746 Reynosa, Tamps.', '202cb962ac59075b964b07152d234b70', 'comprometidos a ayudar a las personas '),
(5, 'Clare Villanueva', 'Pizza Hut', 0x62656e65666163746f72342e706e67, '789 889 9565', 'pizzahut@hotmail.com', '8001 S Jackson Rd, Pharr, TX 78577, Estados Unidos', '202cb962ac59075b964b07152d234b70', 'comprometidos a ayudar a las personas '),
(6, 'Diana Hamburgesas', 'Burger King', 0x62656e65666163746f72352e706e67, '787 745 1233', 'burgerking@hotmail.com', 'Carretera Reynosa-Matamoros, Plaza Periférico No. 100, Lomas del Real de Jarachinas, 88730 Reynosa, Tamps.', '202cb962ac59075b964b07152d234b70', 'comprometidos a ayudar a las personas '),
(7, 'Carlos Serrucho', 'Sierra Madre Brewing Co.', 0x7369657272612d6d616472652d62726577696e672d636f6d70616e792d7371756172656c6f676f2d313535343434343132343933362e706e67, '882 233 2323', 'madresierra@hotmail.com', 'Blvd. Miguel Hidalgo 101, Las Fuentes, 88740 Reynosa, Tamps.', '202cb962ac59075b964b07152d234b70', 'comprometidos a ayudar a las personas '),
(8, 'Edwin desconozido', 'FoodBit', 0x6c6f676f2e706e67, '785 626 2332', 'foodbit@hotmail.com', 'Lomas del Real de Jarachina Sur, 88730 Reynosa, Tamps.', '202cb962ac59075b964b07152d234b70', 'comprometidos a ayudar a las personas ');

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
  MODIFY `identificador` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `identificador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
