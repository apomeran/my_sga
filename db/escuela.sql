-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2014 a las 16:33:22
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`idalumno`, `nombre`, `apellido`, `dni`, `cursoactualid`, `codigoalumno`, `padreid`, `madreid`) VALUES
(1, 'Alan', 'Pomerantz', '23999000', 12, 'apomeran', 1, 2),
(2, 'Gaston', 'Farro', '48000932', 30, 'gfarro', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_materia_previa`
--

CREATE TABLE IF NOT EXISTS `alumno_materia_previa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alumno` int(11) NOT NULL,
  `materia` int(11) NOT NULL,
  `curso` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `alumno` (`alumno`,`materia`),
  KEY `curso` (`curso`),
  KEY `materia` (`materia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartado`
--

CREATE TABLE IF NOT EXISTS `apartado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Volcado de datos para la tabla `apartado`
--

INSERT INTO `apartado` (`id`, `titulo`) VALUES
(10, 'Demuestra leer comprensivamente'),
(11, 'Produce textos escritos'),
(12, 'Se expresa oralmente utilizando vocabulario específico'),
(13, 'Demuestra comprender el contenido'),
(14, 'Realiza cálculos con exactitud y eficacia'),
(15, 'Resuelve problemas y explica las soluciones'),
(16, 'Demuestra capacidad de pensar científicamente'),
(17, 'Demuestra capacidad de aplicar los conocimientos de las Ciencias Sociales'),
(18, 'Comprende lo que escucha'),
(19, 'Se expresa oralmente'),
(20, 'Comprende lo que lee'),
(21, 'Produce textos escritos'),
(22, 'Desarrolla la capacidad creativa'),
(23, 'Comprende los procedimientos artísticos'),
(24, 'Desarrolla la capacidad creativa'),
(25, 'Comprende los procedimientos artísticos'),
(26, 'Comprende y respeta las consignas'),
(27, 'Desarrolla habilidades motrices'),
(28, 'Participa activamente en clase'),
(29, 'Posee conceptos básicos teóricos'),
(30, 'Aplica en la práctica los contenidos'),
(31, 'Utiliza técnicas propias del juego'),
(32, 'Se relaciona con su compañero'),
(33, 'Trabaja y juega con los demás en forma cooperativa'),
(34, 'Respeta la normativa de la clase y de la escuela'),
(35, 'Calificación Final'),
(36, '1º Parcial'),
(37, '2º Parcial'),
(38, '3º Parcial'),
(39, '4º Parcial'),
(40, '5º Parcial');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Volcado de datos para la tabla `apartado_materia`
--

INSERT INTO `apartado_materia` (`id`, `materia`, `apartado`) VALUES
(4, 19, 13),
(5, 19, 14),
(6, 19, 15),
(7, 19, 35),
(1, 20, 10),
(2, 20, 11),
(3, 20, 12),
(37, 20, 35),
(8, 21, 13),
(9, 21, 16),
(38, 21, 35),
(10, 22, 13),
(11, 22, 17),
(12, 22, 35),
(25, 23, 26),
(27, 23, 28),
(28, 23, 35),
(19, 24, 22),
(20, 24, 25),
(21, 24, 35),
(16, 25, 11),
(17, 25, 11),
(13, 25, 18),
(14, 25, 19),
(15, 25, 20),
(18, 25, 35),
(29, 26, 29),
(30, 26, 30),
(31, 26, 35),
(22, 27, 22),
(23, 27, 23),
(24, 27, 35),
(32, 28, 31),
(33, 28, 32),
(34, 28, 35),
(26, 33, 27),
(43, 57, 36),
(44, 57, 37),
(45, 57, 38),
(46, 57, 39),
(47, 57, 40),
(39, 60, 36),
(40, 60, 37),
(41, 60, 38),
(42, 60, 39),
(35, 64, 33),
(36, 64, 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apartado_materia_nota`
--

CREATE TABLE IF NOT EXISTS `apartado_materia_nota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_apartado_materia` int(11) NOT NULL,
  `alumno` int(11) NOT NULL,
  `nota_conceptual` int(11) NOT NULL,
  `nota_numerica` double NOT NULL DEFAULT '-1',
  `periodo` int(11) NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_apartado_materia` (`id_apartado_materia`,`nota_conceptual`),
  KEY `nota_conceptual` (`nota_conceptual`),
  KEY `alumno` (`alumno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `apartado_materia_nota`
--

INSERT INTO `apartado_materia_nota` (`id`, `id_apartado_materia`, `alumno`, `nota_conceptual`, `nota_numerica`, `periodo`, `observaciones`) VALUES
(1, 0, 1, 0, -1, 0, ''),
(2, 0, 2, 0, -1, 0, ''),
(3, 39, 2, 0, -1, 1, ''),
(4, 39, 2, 0, -1, 1, ''),
(5, 41, 2, 0, -1, 3, ''),
(6, 39, 2, 0, -1, 1, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`cursoid`, `ano_calendario`, `ano_academico`, `nivelid`, `turnoid`, `division_salita`, `titular`) VALUES
(12, 2014, '1º', 2, 1, 'A', 5),
(13, 2014, '1º', 2, 3, 'A', 5),
(14, 2014, '2º', 2, 1, 'A', 5),
(15, 2014, '2º', 2, 3, 'A', 5),
(16, 2014, '3º', 2, 1, 'A', 5),
(17, 2014, '3º', 2, 1, 'B', 5),
(18, 2014, '3º', 2, 3, 'A', 5),
(19, 2014, '4º', 2, 1, 'A', 5),
(20, 2014, '4º', 2, 3, 'A', 5),
(21, 2014, '5º', 2, 1, 'A', 5),
(22, 2014, '5º', 2, 3, 'A', 5),
(23, 2014, '6º', 2, 1, 'A', 5),
(24, 2014, '6º', 2, 3, 'A', 5),
(25, 2014, '7º', 2, 1, 'A', 5),
(26, 2014, '7º', 2, 1, 'B', 5),
(27, 2014, '7º', 2, 3, 'A', 5),
(28, 2014, 'Jardin', 1, 1, 'Sala Azul', 5),
(29, 2014, 'Jardin', 1, 1, 'Sala Naranja', 5),
(30, 2014, '1º', 3, 1, 'A', 5),
(31, 2014, '2º', 3, 1, 'A', 5),
(32, 2014, '3º', 3, 1, 'A', 5),
(33, 2014, '4º', 3, 1, 'A', 5),
(34, 2014, '5º', 3, 1, 'A', 5);

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
(1, 12, 1),
(2, 30, 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `curso_materia`
--

INSERT INTO `curso_materia` (`id`, `curso`, `materia`, `profesor`) VALUES
(8, 12, 19, 5),
(9, 12, 20, 5),
(10, 12, 21, 5),
(11, 12, 22, 5),
(12, 12, 23, 5),
(13, 12, 24, 5),
(14, 12, 25, 5),
(15, 12, 26, 5),
(17, 12, 27, 5),
(18, 12, 28, 5),
(19, 13, 19, 5),
(20, 13, 20, 5),
(21, 13, 21, 5),
(22, 13, 22, 5),
(23, 13, 23, 5),
(24, 13, 24, 5),
(25, 13, 25, 5),
(26, 13, 26, 5),
(27, 13, 27, 5),
(28, 13, 28, 5),
(29, 30, 57, 5),
(30, 30, 60, 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nombre`, `apellido`, `dni`, `notas`) VALUES
(5, 'Mario ', 'Barrios', '-', '-'),
(6, 'Ivana', 'Schettino', '-', '-'),
(7, 'Mabel', 'Valenzuela', '-', '-'),
(8, 'Jesica', 'Zauner', '-', '-'),
(9, 'Andrea', 'Franco', '-', '-'),
(10, 'Roberto', 'Biscia', '-', '-'),
(11, 'Esteban', 'Marquez', '-', '-'),
(12, 'Noelia', 'Veron', '-', '-'),
(13, 'Federico', 'Baragiola', '-', '-'),
(14, 'Diego', 'Igarzabal', '-', '-'),
(15, 'Omar', 'Felis', '-', '-'),
(16, 'Paula', 'Sanchez', '-', '-'),
(17, 'Perla', 'Blanco', '-', '-'),
(18, 'Eliana', 'Liuni', '-', '-'),
(19, 'Mariel', 'Viveros', '-', '-'),
(20, 'Marien', 'Beremlisky', '-', '-'),
(21, 'Roberto', 'Biscia', '-', '-'),
(22, 'Esteban', 'Marquez', '-', '-');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `falta_alumno`
--

INSERT INTO `falta_alumno` (`id`, `alumno`, `valor`, `curso`, `date_inasistencia`) VALUES
(6, 1, 0, 0, '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `nombre`, `descripcion`, `nivelid`) VALUES
(19, 'Matemática', '', 2),
(20, 'Prácticas del Lenguaje', '', 2),
(21, 'Ciencias Naturales y Tecnología', '', 2),
(22, 'Ciencias Sociales y Formación Ética y Ciudadana', '', 2),
(23, 'Educación Física', '', 2),
(24, 'Música', '', 2),
(25, 'Inglés', '', 2),
(26, 'Informática', '', 2),
(27, 'Plástica', '', 2),
(28, 'Ajedrez', '', 2),
(29, 'Lengua y Literatura', '', 3),
(30, 'Lengua Extranjera (Inglés)', '', 3),
(31, 'Educación Estética (Plástica o Teatro)', '', 3),
(32, 'Educación Práctica (Computación)', '', 3),
(33, 'Educación Física', '', 3),
(34, 'Matemática', '', 3),
(35, 'Ciencias Biológicas', '', 3),
(36, 'Historia', '', 3),
(37, 'Geografía', '', 3),
(38, 'Educación Cívica', '', 3),
(39, 'Metodología', '', 3),
(40, 'Físico - Química', '', 3),
(41, 'Economía', '', 3),
(42, 'Historia Argentina', '', 3),
(43, 'Sociología Argentina I', '', 3),
(44, 'Física y su aplicación en la tecnología', '', 3),
(45, 'Química y su aplicación a la tecnología', '', 3),
(46, 'Plástica', '', 3),
(47, 'Psicología', '', 3),
(48, 'Principios de Economía', '', 3),
(49, 'Taller Anual de Comunicación', '', 3),
(50, 'Taller Cuatrimestral de Investigación de Mercado', '', 3),
(51, 'Taller Cuatrimestral de Medios Audiovisuales', '', 3),
(52, 'Computación', '', 3),
(53, 'Sociología Argentina II', '', 3),
(54, 'Filosofía y Ética', '', 3),
(55, 'Geografía Argentina', '', 3),
(56, 'Educación para la Salud', '', 3),
(57, 'Marketing Operacional', '', 3),
(58, 'Marketing Estratégico', '', 3),
(59, 'Comunicación Publicitaria', '', 3),
(60, 'Teoría de la Publicidad', '', 3),
(61, 'Taller Anual de Estrategias Comerciales', '', 3),
(62, 'Taller Cuatrimestral de Campaña Publicitaria', '', 3),
(63, 'Taller Cuatrimestral de Perfil del Consumidor', '', 3),
(64, 'Conducta personal y social', '', 2);

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
  `usuario` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `observaciones` varchar(255) DEFAULT NULL,
  `dni` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `telefono_fijo` varchar(45) DEFAULT NULL,
  `telefono_celular` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idpadre`),
  UNIQUE KEY `idpadre_UNIQUE` (`idpadre`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`idpadre`, `usuario`, `nombre`, `apellido`, `observaciones`, `dni`, `mail`, `telefono_fijo`, `telefono_celular`) VALUES
(1, 2, 'Julian', 'Medina', 'Observaciones', '35.667.666', 'julian@sourcingup.com', '4-776-9008', '11-3-142-9987'),
(2, 3, 'Mirtha', 'Legrand', 'Observaciones', '14.003.200', 'mirta@legrand.com.ar', '4-776-9009', '11-3-142-9986');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preceptores`
--

CREATE TABLE IF NOT EXISTS `preceptores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `curso` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `curso` (`curso`),
  KEY `usuario` (`usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `preceptores`
--

INSERT INTO `preceptores` (`id`, `curso`, `usuario`) VALUES
(13, 12, 2),
(14, 30, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE IF NOT EXISTS `programas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `titulo`) VALUES
(1, 'Primario sin Ajedrez'),
(2, 'Primario con Ajedrez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_materia`
--

CREATE TABLE IF NOT EXISTS `programa_materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `programa` int(11) NOT NULL,
  `materia` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `programa` (`programa`,`materia`),
  KEY `materia` (`materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `programa_materia`
--

INSERT INTO `programa_materia` (`id`, `programa`, `materia`) VALUES
(1, 1, 19),
(2, 1, 20),
(3, 1, 21),
(4, 1, 22),
(5, 1, 23),
(6, 1, 24),
(7, 1, 25),
(8, 1, 26),
(9, 1, 27),
(10, 2, 19),
(11, 2, 20),
(12, 2, 21),
(13, 2, 22),
(14, 2, 23),
(15, 2, 24),
(16, 2, 25),
(19, 2, 26),
(20, 2, 27),
(18, 2, 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `level` int(11) NOT NULL COMMENT ' 1 - Usuario // 2 - Preceptor // 3 - SuperUser',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `level`) VALUES
(1, 'Padre/Madre/Responsable', 1),
(2, 'Preceptor', 2),
(3, 'Admin', 3),
(4, 'Desasignado', 4);

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
  `codigo` text NOT NULL,
  PRIMARY KEY (`idturno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`idturno`, `nombre`, `codigo`) VALUES
(1, 'Mañana', 'TM'),
(2, 'Noche', 'TN'),
(3, 'Tarde', 'TT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `rol` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rol` (`rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `rol`) VALUES
(2, 'alan', '$1$f0..6A/.$43qCQeoIgVEyEkCPSM./30', 'alan@a.com', 2),
(3, 'julianmedina', '$1$RM2.G04.$IoojUv.8jXa7VlyL88/v6.', 'a@a.com', 1),
(4, 'mirthalegrand', '$1$0U..HI1.$AQbpvHlKXbaqIlODyqWRz.', 'a@a.com', 1),
(5, 'admin', '$1$Q11.ZL..$yR6xjU5epZAkevPpkacw9.', 'admin@admin.com', 3),
(6, 'preceptor', '$1$Zm5.uV..$tffEZ/1NPNMcoDfQ7.YL81', 'preceptor@preceptor.com', 2),
(7, 'preceptor_secundario', '$1$nx3.ks3.$WFb2ChUb.5SemhzoSe0F10', 'preceptor_secundario@a.com', 2),
(8, 'preceptor_secundario', '$1$KG1.LU2.$kwW8FG8CmmCuwYKHTUmTS.', 'preceptor_secundario@a.com', 1),
(9, 'preceptor_jardin', '$1$2E4.hr5.$Zf0qnh7VouakkesZ7Wbeg1', 'precep_jardin@gmail.com', 4);

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
-- Filtros para la tabla `alumno_materia_previa`
--
ALTER TABLE `alumno_materia_previa`
  ADD CONSTRAINT `alumno_materia_previa_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumnos` (`idalumno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `alumno_materia_previa_ibfk_2` FOREIGN KEY (`materia`) REFERENCES `materia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `alumno_materia_previa_ibfk_3` FOREIGN KEY (`curso`) REFERENCES `curso` (`cursoid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `falta_alumno_ibfk_1` FOREIGN KEY (`alumno`) REFERENCES `alumnos` (`idalumno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`nivelid`) REFERENCES `nivel` (`idnivel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `padres`
--
ALTER TABLE `padres`
  ADD CONSTRAINT `padres_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `preceptores`
--
ALTER TABLE `preceptores`
  ADD CONSTRAINT `preceptores_ibfk_1` FOREIGN KEY (`curso`) REFERENCES `curso` (`cursoid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `preceptores_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `programa_materia`
--
ALTER TABLE `programa_materia`
  ADD CONSTRAINT `programa_materia_ibfk_1` FOREIGN KEY (`programa`) REFERENCES `programas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `programa_materia_ibfk_2` FOREIGN KEY (`materia`) REFERENCES `materia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `temas_materia`
--
ALTER TABLE `temas_materia`
  ADD CONSTRAINT `materiasdtemas` FOREIGN KEY (`materiaid`) REFERENCES `materia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
