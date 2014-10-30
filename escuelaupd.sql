-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2014 a las 21:28:10
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('nfy.queue.read', '11', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('nfy.message.create', 0, 'Create a Message', NULL, 'N;'),
('nfy.message.read', 0, 'Read a Message', NULL, 'N;'),
('nfy.queue.read', 2, 'Role for Admin', NULL, 'N;'),
('nfy.queue.readParents', 2, 'Role for Padres', NULL, 'N;'),
('nfy.queue.readPreceptors', 2, 'Role for Preceptors', NULL, 'N;'),
('nfy.queue.subscribe', 0, 'Suscribe to a Queue', NULL, 'N;'),
('nfy.queue.unsubscribe', 0, 'Unsubscribe to a Queue', NULL, 'N;');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('nfy.queue.read', 'nfy.message.create'),
('nfy.queue.readParents', 'nfy.message.create'),
('nfy.queue.readPreceptors', 'nfy.message.create'),
('nfy.queue.read', 'nfy.message.read'),
('nfy.queue.readParents', 'nfy.message.read'),
('nfy.queue.readPreceptors', 'nfy.message.read'),
('nfy.queue.read', 'nfy.queue.subscribe'),
('nfy.queue.readParents', 'nfy.queue.subscribe'),
('nfy.queue.readPreceptors', 'nfy.queue.subscribe'),
('nfy.queue.read', 'nfy.queue.unsubscribe'),
('nfy.queue.readParents', 'nfy.queue.unsubscribe'),
('nfy.queue.readPreceptors', 'nfy.queue.unsubscribe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `{{nfy_messages}}`
--

CREATE TABLE IF NOT EXISTS `{{nfy_messages}}` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `queue_id` varchar(255) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sender_id` int(11) DEFAULT NULL,
  `message_id` int(11) DEFAULT NULL,
  `subscription_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `timeout` int(11) DEFAULT NULL,
  `reserved_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mimetype` varchar(255) NOT NULL DEFAULT 'text/plain',
  `body` text,
  PRIMARY KEY (`id`),
  KEY `{{nfy_messages}}_queue_id_idx` (`queue_id`),
  KEY `{{nfy_messages}}_sender_id_idx` (`sender_id`),
  KEY `{{nfy_messages}}_message_id_idx` (`message_id`),
  KEY `{{nfy_messages}}_status_idx` (`status`),
  KEY `{{nfy_messages}}_reserved_on_idx` (`reserved_on`),
  KEY `{{nfy_messages}}_subscription_id_idx` (`subscription_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Volcado de datos para la tabla `{{nfy_messages}}`
--

INSERT INTO `{{nfy_messages}}` (`id`, `queue_id`, `created_on`, `sender_id`, `message_id`, `subscription_id`, `status`, `timeout`, `reserved_on`, `deleted_on`, `mimetype`, `body`) VALUES
(65, 'queue_preceptores', '2014-10-23 21:51:09', 11, NULL, NULL, 0, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'text/plain', 'PUTOS'),
(66, 'queue_preceptores', '2014-10-23 18:52:02', 11, 65, 2, 2, 30, '0000-00-00 00:00:00', '2014-10-23 21:52:02', 'text/plain', 'PUTOS'),
(67, 'queue_preceptores', '2014-10-23 21:52:28', 11, NULL, NULL, 0, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'text/plain', 'puto el que lee'),
(68, 'queue_preceptores', '2014-10-23 21:52:46', 11, NULL, NULL, 0, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'text/plain', 'puto el que lee'),
(69, 'queue_preceptores', '2014-10-23 18:52:50', 11, 68, 2, 2, 30, '0000-00-00 00:00:00', '2014-10-23 21:52:50', 'text/plain', 'puto el que lee'),
(70, 'queue_preceptores', '2014-10-23 22:07:23', 11, NULL, NULL, 0, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'text/plain', 'asd'),
(71, 'queue_preceptores', '2014-10-23 19:07:25', 11, 70, 5, 2, 30, '0000-00-00 00:00:00', '2014-10-23 22:07:25', 'text/plain', 'asd'),
(72, 'queue_preceptores', '2014-10-23 22:07:41', 11, NULL, NULL, 0, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'text/plain', 'asd'),
(73, 'queue_preceptores', '2014-10-23 22:07:50', 11, NULL, NULL, 0, 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'text/plain', 'adsdassad'),
(74, 'queue_preceptores', '2014-10-23 19:07:53', 11, 73, 5, 2, 30, '0000-00-00 00:00:00', '2014-10-23 22:07:53', 'text/plain', 'adsdassad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `{{nfy_subscriptions}}`
--

CREATE TABLE IF NOT EXISTS `{{nfy_subscriptions}}` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `queue_id` varchar(255) NOT NULL,
  `label` varchar(255) DEFAULT NULL,
  `subscriber_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `{{nfy_subscriptions}}_queue_id_subscriber_id_idx` (`queue_id`,`subscriber_id`),
  KEY `{{nfy_subscriptions}}_queue_id_idx` (`queue_id`),
  KEY `{{nfy_subscriptions}}_subscriber_id_idx` (`subscriber_id`),
  KEY `{{nfy_subscriptions}}_is_deleted_idx` (`is_deleted`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `{{nfy_subscriptions}}`
--

INSERT INTO `{{nfy_subscriptions}}` (`id`, `queue_id`, `label`, `subscriber_id`, `created_on`, `is_deleted`) VALUES
(6, 'queue_preceptores', 'Notificaciones', 11, '2014-10-23 22:10:50', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `{{nfy_subscription_categories}}`
--

CREATE TABLE IF NOT EXISTS `{{nfy_subscription_categories}}` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscription_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `is_exception` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `{{nfy_subscription_categories}}_subscription_id_category_idx` (`subscription_id`,`category`),
  KEY `{{nfy_subscription_categories}}_subscription_id_idx` (`subscription_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `{{nfy_subscription_categories}}`
--

INSERT INTO `{{nfy_subscription_categories}}` (`id`, `subscription_id`, `category`, `is_exception`) VALUES
(1, 2, 'cat1', 0),
(2, 2, 'cat2', 1),
(3, 3, 'admin', 0),
(4, 3, 'preceptores', 0),
(6, 4, 'admin', 0),
(7, 5, 'cat1', 0),
(8, 5, 'cat2', 0),
(9, 6, 'admin', 0),
(10, 6, 'preceptores', 0),
(11, 6, 'padres', 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
