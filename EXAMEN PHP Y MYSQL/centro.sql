-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2015 a las 13:49:59
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `centro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `dni` varchar(9) NOT NULL,
  `nom_alum` varchar(20) NOT NULL,
  `fecha_nac` date NOT NULL,
  `provincia` varchar(15) NOT NULL,
  `beca` set('si','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`dni`, `nom_alum`, `fecha_nac`, `provincia`, `beca`) VALUES
('11111111Z', 'Lucia', '1992-05-12', 'Granada', 'no'),
('12345678C', 'Luis', '1995-01-03', 'Granada', 'si'),
('22222222B', 'Monica', '1998-12-18', 'Jaen', 'si'),
('33333333R', 'Cesar', '1993-09-08', 'Granada', 'no'),
('55555555T', 'Roberto', '1998-11-24', 'Malaga', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE IF NOT EXISTS `asignaturas` (
`cod_asig` bigint(20) unsigned NOT NULL,
  `nom_asig` varchar(15) NOT NULL,
  `creditos` int(2) DEFAULT NULL,
  `curso` set('1','2','3') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`cod_asig`, `nom_asig`, `creditos`, `curso`) VALUES
(1, 'Lengua', 14, '1'),
(2, 'Matematicas', 8, '1'),
(3, 'Ciencias', NULL, '2'),
(4, 'Literatura', 7, '2'),
(5, 'Historia', NULL, '1'),
(6, 'Dibujo', 12, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula`
--

CREATE TABLE IF NOT EXISTS `aulas` (
  `cod_aula` varchar(3) NOT NULL,
  `capacidad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aula`
--

INSERT INTO `aulas` (`cod_aula`, `capacidad`) VALUES
('A1', 25),
('A2', 20),
('A3', 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `cod_gru` varchar(3) NOT NULL,
  `cod_asig` bigint(20) NOT NULL,
  `cod_aula` varchar(3) NOT NULL,
  `tipo` set('M','T') NOT NULL,
  `NRP` int(2) NOT NULL,
  `max_al` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`cod_gru`, `cod_asig`, `cod_aula`, `tipo`, `NRP`, `max_al`) VALUES
('G1', 2, 'A1', 'M', 21, 23),
('G2', 1, 'A2', 'M', 15, 18),
('G3', 3, 'A3', 'M', 21, 20),
('G4', 3, 'A3', 'T', 15, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

CREATE TABLE IF NOT EXISTS `matriculas` (
  `cod_asig` bigint(20) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `convocatoria` int(1) NOT NULL DEFAULT '1',
  `calificacion` decimal(3,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `matriculas`
--

INSERT INTO `matriculas` (`cod_asig`, `dni`, `convocatoria`, `calificacion`) VALUES
(1, '11111111Z', 1, '3.0'),
(1, '11111111Z', 2, '6.0'),
(1, '12345678C', 1, '8.0'),
(1, '12345678C', 2, '2.0'),
(2, '11111111Z', 1, '5.0'),
(2, '33333333R', 1, '4.0'),
(2, '55555555T', 1, '7.0'),
(3, '11111111Z', 1, '7.0'),
(4, '12345678C', 1, '3.0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE IF NOT EXISTS `profesores` (
  `NRP` int(2) NOT NULL,
  `nom_prof` varchar(10) NOT NULL,
  `categoria` set('titular','suplente') NOT NULL,
  `area` varchar(15) NOT NULL,
  `cod_depto` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`NRP`, `nom_prof`, `categoria`, `area`, `cod_depto`) VALUES
(15, 'Francisco', 'suplente', 'Lengua', 3),
(21, 'Alfonso', 'titular', 'Ciencias', 1),
(34, 'Helena', 'titular', 'Ciencias', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
 ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
 ADD PRIMARY KEY (`cod_asig`), ADD UNIQUE KEY `cod_asig` (`cod_asig`);

--
-- Indices de la tabla `aula`
--
ALTER TABLE `aulas`
 ADD PRIMARY KEY (`cod_aula`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
 ADD PRIMARY KEY (`cod_gru`);

--
-- Indices de la tabla `matriculas`
--
ALTER TABLE `matriculas`
 ADD PRIMARY KEY (`cod_asig`,`dni`,`convocatoria`), ADD KEY `dni` (`dni`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
 ADD PRIMARY KEY (`NRP`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
MODIFY `cod_asig` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `matriculas`
--
ALTER TABLE `matriculas`
ADD CONSTRAINT `matriculas_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `alumnos` (`dni`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
