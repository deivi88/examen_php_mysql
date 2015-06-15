-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-05-2015 a las 14:35:03
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `fruteria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `codigo` int(2) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`codigo`, `nombre`, `telefono`) VALUES
(1, 'Ramón Torres', '111111111'),
(2, 'María López', '222222222'),
(3, 'Paloma Ruiz', '333333333'),
(4, 'Isabel Perea', '444444444'),
(5, 'Luisa Marín', '555555555'),
(6, 'Pedro Macias', '666666666'),
(7, 'Teresa Vilchez', '777777777'),
(8, 'Ricardo Muñoz', '888888888'),
(9, 'Muriel Mina', '999999999');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `cod_cliente` int(2) NOT NULL,
  `cod_producto` int(2) NOT NULL,
  `mes` set('1','2','3','4','5','6','7','8','9','10','11','12') NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`cod_cliente`,`cod_producto`,`mes`),
  KEY `cod_producto` (`cod_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `compras`
--

INSERT INTO `compras` (`cod_cliente`, `cod_producto`, `mes`, `cantidad`) VALUES
(1, 1, '1', 2),
(1, 3, '1', 3),
(1, 4, '1', 1),
(2, 3, '2', 5),
(2, 5, '2', 8),
(3, 1, '2', 5),
(3, 4, '3', 3),
(4, 4, '4', 5),
(5, 3, '3', 3),
(5, 6, '4', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `codigo` int(2) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `precio` double(3,1) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo`, `nombre`, `precio`) VALUES
(1, 'melon', 0.6),
(2, 'sandia', 0.7),
(3, 'manzana', 1.2),
(4, 'tomate', 1.5),
(5, 'papaya', 0.3),
(6, 'patata', 0.1);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`codigo`),
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`cod_cliente`) REFERENCES `clientes` (`codigo`);
