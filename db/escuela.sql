-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2014 a las 21:03:25
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `escuela`
--
CREATE DATABASE IF NOT EXISTS `escuela` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `escuela`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `idalumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `dni` varchar(255) DEFAULT NULL,
  `cursoactualid` int(11) DEFAULT NULL,
  `codigoalumno` varchar(45) DEFAULT NULL,
  `padreid` int(11) DEFAULT NULL,
  `madreid` int(11) DEFAULT NULL,
  PRIMARY KEY (`idalumno`),
  UNIQUE KEY `idalumno_UNIQUE` (`idalumno`),
  KEY `padre_idx` (`padreid`),
  KEY `madre_idx` (`madreid`),
  KEY `cursoactualid` (`cursoactualid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`idalumno`, `nombre`, `apellido`, `dni`, `cursoactualid`, `codigoalumno`, `padreid`, `madreid`) VALUES
(4, 'Alan', 'Pomerantz', '35969454', 4, 'apomeran', 1, 2),
(5, 'Pedro', 'Scarano', '35919454', 4, 'pscarano', 1, 2),
(6, 'Alberto', 'Ramirez', '32969454', 4, 'aramirez', 1, 2),
(7, 'Gonzalo', 'Castano', '35685454', 4, 'gcastano', 1, 2),
(8, 'Facundo', 'Mora', '35969000', 4, 'fmora', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartado`
--

CREATE TABLE IF NOT EXISTS `apartado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `apartado`
--

INSERT INTO `apartado` (`id`, `titulo`) VALUES
(1, 'Comprende lo que se escucha'),
(2, 'Se expresa oralmente'),
(3, 'Comprende lo que se lee'),
(4, 'Produce textos escritos'),
(5, 'Conducta'),
(6, 'Primer Parcial'),
(7, 'Segundo Parcial'),
(8, 'Tercer Parcial'),
(9, 'Calificacion Final');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartado_materia`
--

CREATE TABLE IF NOT EXISTS `apartado_materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materia` int(11) NOT NULL,
  `apartado` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `materia` (`materia`,`apartado`),
  KEY `apartado` (`apartado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `apartado_materia`
--

INSERT INTO `apartado_materia` (`id`, `materia`, `apartado`) VALUES
(1, 5, 1),
(2, 5, 2),
(3, 5, 3),
(4, 5, 4),
(5, 5, 5),
(6, 5, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartado_materia_nota`
--

CREATE TABLE IF NOT EXISTS `apartado_materia_nota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_apartado_materia` int(11) NOT NULL,
  `alumno` int(11) NOT NULL,
  `nota_conceptual` int(11) NOT NULL,
  `nota_numerica` int(11) NOT NULL DEFAULT '-1',
  `periodo` int(11) NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_apartado_materia` (`id_apartado_materia`,`nota_conceptual`),
  KEY `nota_conceptual` (`nota_conceptual`),
  KEY `alumno` (`alumno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `apartado_materia_nota`
--

INSERT INTO `apartado_materia_nota` (`id`, `id_apartado_materia`, `alumno`, `nota_conceptual`, `nota_numerica`, `periodo`, `observaciones`) VALUES
(2, 0, 4, 0, -1, 0, ''),
(3, 0, 4, 0, -1, 0, ''),
(4, 5, 8, 3, -1, 1, ''),
(5, 0, 8, 0, -1, 0, ''),
(6, 0, 8, 0, -1, 0, ''),
(7, 0, 8, 0, -1, 0, ''),
(8, 0, 8, 0, -1, 0, ''),
(9, 0, 8, 0, -1, 0, ''),
(10, 4, 4, 2, -1, 1, ''),
(11, 0, 4, 0, -1, 0, ''),
(12, 0, 4, 0, -1, 0, ''),
(13, 0, 4, 0, -1, 0, ''),
(14, 1, 4, 1, -1, 2, ''),
(15, 0, 4, 0, -1, 0, ''),
(16, 1, 8, 5, -1, 2, ''),
(17, 5, 8, 9, -1, 2, ''),
(18, 0, 8, 0, -1, 0, ''),
(19, 1, 4, 5, -1, 3, ''),
(20, 0, 4, 0, -1, 0, ''),
(21, 0, 7, 0, -1, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `cursoid` int(11) NOT NULL AUTO_INCREMENT,
  `ano_calendario` int(11) DEFAULT '2014',
  `ano_academico` text NOT NULL,
  `nivelid` int(11) DEFAULT NULL,
  `turnoid` int(11) DEFAULT NULL,
  `division_salita` text,
  `titular` int(11) NOT NULL,
  PRIMARY KEY (`cursoid`),
  KEY `nivel_idx` (`nivelid`),
  KEY `turno_idx` (`turnoid`),
  KEY `titular` (`titular`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`cursoid`, `ano_calendario`, `ano_academico`, `nivelid`, `turnoid`, `division_salita`, `titular`) VALUES
(4, 2014, '1º', 2, 1, 'A', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_alumno`
--

CREATE TABLE IF NOT EXISTS `curso_alumno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso` int(11) NOT NULL,
  `alumno` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `z` (`curso`,`alumno`),
  KEY `alumno` (`alumno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `curso_alumno`
--

INSERT INTO `curso_alumno` (`id`, `curso`, `alumno`) VALUES
(2, 4, 4),
(1, 4, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_materia`
--

CREATE TABLE IF NOT EXISTS `curso_materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso` int(11) NOT NULL,
  `materia` int(11) NOT NULL,
  `profesor` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `curso` (`curso`),
  KEY `materia` (`materia`),
  KEY `profesor` (`profesor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `curso_materia`
--

INSERT INTO `curso_materia` (`id`, `curso`, `materia`, `profesor`) VALUES
(1, 4, 1, 1),
(2, 4, 2, 1),
(3, 4, 3, 1),
(4, 4, 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE IF NOT EXISTS `docentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `dni` text NOT NULL,
  `notas` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nombre`, `apellido`, `dni`, `notas`) VALUES
(1, 'Silvia', 'Gomez', '13004998', 'Profesora de la materia de Biología de Primer Año');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `falta_alumno`
--

CREATE TABLE IF NOT EXISTS `falta_alumno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alumno` int(11) NOT NULL,
  `valor` double NOT NULL,
  `curso` int(11) NOT NULL,
  `date_inasistencia` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `alumno` (`alumno`,`curso`),
  KEY `curso` (`curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `falta_alumno`
--

INSERT INTO `falta_alumno` (`id`, `alumno`, `valor`, `curso`, `date_inasistencia`) VALUES
(2, 7, 0, 0, '0000-00-00'),
(4, 7, 0.5, 4, '0000-00-00'),
(5, 7, 1, 4, '0000-00-00'),
(6, 7, 0.25, 4, '2014-08-30'),
(7, 7, 1, 4, '2014-08-29'),
(8, 7, 0, 0, '0000-00-00'),
(9, 7, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE IF NOT EXISTS `materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `nivelid` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nivelid` (`nivelid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `materia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
  `idnivel` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL COMMENT 'Ingresa el nombre del nivel',
  PRIMARY KEY (`idnivel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `nivel`
--

INSERT INTO `nivel` (`idnivel`, `nombre`) VALUES
(1, 'Jardin'),
(2, 'Primaria'),
(3, 'Secundario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_conceptuales`
--

CREATE TABLE IF NOT EXISTS `notas_conceptuales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` text NOT NULL,
  `codigo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `notas_conceptuales`
--

INSERT INTO `notas_conceptuales` (`id`, `valor`, `codigo`) VALUES
(1, 'Regular', 'REG'),
(2, 'Regular +', 'REG+'),
(3, 'Bien -', 'B-'),
(4, 'Bien', 'B'),
(5, 'Bien +', 'B+'),
(6, 'Muy Bien -', 'MB-'),
(7, 'Muy Bien', 'MB'),
(8, 'Muy Bien +', 'MB+'),
(9, 'Sobresaliente', 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE IF NOT EXISTS `padres` (
  `idpadre` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `dni` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `telefono_fijo` varchar(45) DEFAULT NULL,
  `telefono_celular` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpadre`),
  UNIQUE KEY `idpadre_UNIQUE` (`idpadre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`idpadre`, `nombre`, `apellido`, `observaciones`, `dni`, `mail`, `telefono_fijo`, `telefono_celular`) VALUES
(1, 'Julian', 'Medina', 'Observaciones', '35.667.666', 'julian@sourcingup.com', '4-776-9008', '11-3-142-9987'),
(2, 'Mirtha', 'Legrand', 'Observaciones', '14.003.200', 'mirta@legrand.com.ar', '4-776-9009', '11-3-142-9986');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preceptores`
--

CREATE TABLE IF NOT EXISTS `preceptores` (
  `idpreceptor` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idpreceptor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas_materia`
--

CREATE TABLE IF NOT EXISTS `temas_materia` (
  `idtemas_materiaid` int(11) NOT NULL,
  `materiaid` int(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idtemas_materiaid`),
  KEY `materiasdtemas_idx` (`materiaid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE IF NOT EXISTS `turnos` (
  `idturno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL COMMENT 'Ingresa el nombre del turno',
  PRIMARY KEY (`idturno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`idturno`, `nombre`) VALUES
(1, 'Mañana'),
(2, 'Noche'),
(3, 'Tarde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`cursoactualid`) REFERENCES `curso` (`cursoid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `madres` FOREIGN KEY (`madreid`) REFERENCES `padres` (`idpadre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `padres` FOREIGN KEY (`padreid`) REFERENCES `padres` (`idpadre`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `apartado_materia`
--
ALTER TABLE `apartado_materia`
  ADD CONSTRAINT `apartado_materia_ibfk_1` FOREIGN KEY (`materia`) REFERENCES `materia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `apartado_materia_ibfk_2` FOREIGN KEY (`apartado`) REFERENCES `apartado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `apartado_materia_nota`
--
ALTER TABLE `apartado_materia_nota`
  ADD CONSTRAINT `apartado_materia_nota_ibfk_3` FOREIGN KEY (`alumno`) REFERENCES `alumnos` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`titular`) REFERENCES `docentes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `nivel` FOREIGN KEY (`nivelid`) REFERENCES `nivel` (`idnivel`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `turno` FOREIGN KEY (`turnoid`) REFERENCES `turnos` (`idturno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso_alumno`
--
ALTER TABLE `curso_alumno`
  ADD CONSTRAINT `curso_alumno_ibfk_1` FOREIGN KEY (`curso`) REFERENCES `curso` (`cursoid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `curso_alumno_ibfk_2` FOREIGN KEY (`alumno`) REFERENCES `alumnos` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `curso_materia`
--
ALTER TABLE `curso_materia`
  ADD CONSTRAINT `curso_materia_ibfk_1` FOREIGN KEY (`curso`) REFERENCES `curso` (`cursoid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `curso_materia_ibfk_2` FOREIGN KEY (`materia`) REFERENCES `materia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `curso_materia_ibfk_3` FOREIGN KEY (`profesor`) REFERENCES `docentes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `falta_alumno`
--
ALTER TABLE `falta_alumno`
  ADD CONSTRAINT `falta_alumno_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumnos` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`nivelid`) REFERENCES `nivel` (`idnivel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `temas_materia`
--
ALTER TABLE `temas_materia`
  ADD CONSTRAINT `materiasdtemas` FOREIGN KEY (`materiaid`) REFERENCES `materia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
