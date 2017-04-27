-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2017 a las 08:33:53
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carro`
--

CREATE TABLE `carro` (
  `idcarro` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `lineascarr` int(11) NOT NULL,
  `total` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

INSERT INTO `carro` (`idcarro`, `cliente`, `lineascarr`, `total`) VALUES ('1', '1', '1', '99');
INSERT INTO `carro` (`idcarro`, `cliente`, `lineascarr`, `total`) VALUES ('2', '2', '2', '60');

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `carro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
INSERT INTO `clientes` (`idcliente`, `nombre`, `direccion`, `carro`) VALUES ('1', 'manolo lopez', 'jodnmo', '1');
INSERT INTO `clientes` (`idcliente`, `nombre`, `direccion`, `carro`) VALUES ('2', 'rosa paral', 'jodnmo', '2');

--
-- Estructura de tabla para la tabla `lineacarr`
--

CREATE TABLE `lineacarr` (
  `idlinea` int(11) NOT NULL,
  `carro` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `precio` decimal(2,0) NOT NULL,
  `cantidad` double NOT NULL,
  `subtotal` decimal(2,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

INSERT INTO `lineacarr` (`idlinea`, `carro`, `producto`, `precio`, `cantidad`, `subtotal`) VALUES ('1', '1', '1', '20', '5', '99');
INSERT INTO `lineacarr` (`idlinea`, `carro`, `producto`, `precio`, `cantidad`, `subtotal`) VALUES ('2', '1', '3', '30', '2', '60');


--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idprod` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `preciouni` decimal(2,0) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `productos` (`idprod`, `nombre`, `preciouni`, `descripcion`) VALUES ('1', 'monitor', '30', 'ij');
INSERT INTO `productos` (`idprod`, `nombre`, `preciouni`, `descripcion`) VALUES ('2', 'cable cobre', '5', 'ij');
INSERT INTO `productos` (`idprod`, `nombre`, `preciouni`, `descripcion`) VALUES ('3', 'euroconector', '10', 'ij');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`idcarro`),
  ADD KEY `cliente` (`cliente`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idcliente`),
  ADD KEY `carro` (`carro`);

--
-- Indices de la tabla `lineacarr`
--
ALTER TABLE `lineacarr`
  ADD PRIMARY KEY (`idlinea`),
  ADD KEY `producto` (`producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idprod`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carro`
--
ALTER TABLE `carro`
  ADD CONSTRAINT `carro_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`idcliente`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`carro`) REFERENCES `carro` (`idcarro`);

--
-- Filtros para la tabla `lineacarr`
--
ALTER TABLE `lineacarr`
  ADD CONSTRAINT `lineacarr_ibfk_1` FOREIGN KEY (`producto`) REFERENCES `productos` (`idprod`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
