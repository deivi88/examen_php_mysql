-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-04-2015 a las 14:27:56
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE IF NOT EXISTS `peliculas` (
  `P` varchar(3) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `califEdad` set('18','TP') DEFAULT NULL,
  `ciudadProduccion` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`P`, `Nombre`, `califEdad`, `ciudadProduccion`) VALUES
('P1', 'La dama y el vagabundo', 'TP', 'EEUU'),
('P2', 'Independence Day', '18', 'EEUU'),
('P3', 'Amelie', NULL, 'Francia'),
('P4', 'Torrente', '18', 'España'),
('P5', 'Todo sobre mi madre', '18', 'España'),
('P6', 'La clase', 'TP', 'Alemania');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecciones`
--

CREATE TABLE IF NOT EXISTS `proyecciones` (
  `S` varchar(3) NOT NULL,
  `P` varchar(3) NOT NULL,
  `Hora` time NOT NULL,
  `Ocupacion` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecciones`
--

INSERT INTO `proyecciones` (`S`, `P`, `Hora`, `Ocupacion`) VALUES
('S1', 'P1', '12:00:00', 75),
('S1', 'P1', '18:00:00', 84),
('S1', 'P2', '23:00:00', 100),
('S2', 'P3', '12:00:00', 89),
('S2', 'P3', '18:00:00', 104),
('S2', 'P3', '23:00:00', 200),
('S3', 'P2', '17:00:00', 100),
('S3', 'P2', '20:00:00', 120),
('S4', 'P4', '12:00:00', 14),
('S4', 'P4', '17:00:00', 60),
('S4', 'P4', '20:00:00', 78),
('S4', 'P6', '23:00:00', 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salas`
--

CREATE TABLE IF NOT EXISTS `salas` (
  `S` varchar(3) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Capacidad` int(3) NOT NULL,
  `Filas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `salas`
--

INSERT INTO `salas` (`S`, `Nombre`, `Capacidad`, `Filas`) VALUES
('S1', 'Africa', 125, 10),
('S2', 'America', 255, 24),
('S3', 'Europa', 136, 14),
('S4', 'Asia', 85, 7),
('S5', 'Oceania', 100, 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
 ADD PRIMARY KEY (`P`);

--
-- Indices de la tabla `proyecciones`
--
ALTER TABLE `proyecciones`
 ADD PRIMARY KEY (`S`,`P`,`Hora`);

--
-- Indices de la tabla `salas`
--
ALTER TABLE `salas`
 ADD PRIMARY KEY (`S`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
