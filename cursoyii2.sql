-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-07-2021 a las 09:04:39
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursoyii2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

DROP TABLE IF EXISTS `cita`;
CREATE TABLE IF NOT EXISTS `cita` (
  `idcita` char(11) NOT NULL,
  `codigo_postal` varchar(45) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `fecha_de_consulta` varchar(250) NOT NULL,
  `problema` varchar(250) NOT NULL,
  PRIMARY KEY (`idcita`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `country`
--

INSERT INTO `country` (`code`, `name`, `population`) VALUES
('AU', 'Australia', 24016400),
('BR', 'Brazil', 205722000),
('CA', 'Canada', 35985751),
('CN', 'China', 1375210000),
('DE', 'Germany', 81459000),
('FR', 'France', 64513242),
('GB', 'United Kingdom', 65097000),
('IN', 'India', 1285400000),
('RU', 'Russia', 146519759),
('US', 'United States', 322976000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `iddoctor` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_postal` varchar(250) NOT NULL,
  `nombre_completo` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  PRIMARY KEY (`iddoctor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `doctor`
--

INSERT INTO `doctor` (`iddoctor`, `codigo_postal`, `nombre_completo`, `direccion`, `telefono`) VALUES
(3, '97780', 'manuel ', 'calle 33 no.203 entre 60 y 62 x.corazon', '9851251944');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

DROP TABLE IF EXISTS `migration`;
CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1510611467),
('m130524_201442_init', 1510611484);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `idpaciente` char(11) NOT NULL,
  `codigo_postal` varchar(11) NOT NULL,
  `nombre_completo` varchar(45) NOT NULL,
  `numero_historial` varchar(11) NOT NULL,
  `fecha_nacimiento` varchar(100) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `motivo_consulta` varchar(45) NOT NULL,
  PRIMARY KEY (`idpaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`idpaciente`, `codigo_postal`, `nombre_completo`, `numero_historial`, `fecha_nacimiento`, `direccion`, `motivo_consulta`) VALUES
('A1', '97780', 'as', '55', '22 de rr', 'calle 33 no.203 entre 60 y 62 x.corazon', 'tt'),
('A5', '97780', 'asdqw1', '6', '22 de enerio', 'calle 33 no.203 entre 60 y 62 x.corazon', 'bb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

DROP TABLE IF EXISTS `pagos`;
CREATE TABLE IF NOT EXISTS `pagos` (
  `idpagos` char(11) NOT NULL,
  `nombre_deudor` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `fecha_de_consulta` varchar(100) NOT NULL,
  `cantidad_adeudada` varchar(10000) NOT NULL,
  `tratamiento` varchar(250) NOT NULL,
  PRIMARY KEY (`idpagos`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`idpagos`, `nombre_deudor`, `direccion`, `telefono`, `fecha_de_consulta`, `cantidad_adeudada`, `tratamiento`) VALUES
('1', 'kk', 'sa', '98514', '22 de maroz', '1500', 'caries');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `idPerfil` int(11) NOT NULL AUTO_INCREMENT,
  `apellido` varchar(45) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `numero_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idPerfil`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idPerfil`, `apellido`, `genero`, `nombre_usuario`, `numero_usuario`) VALUES
(5, '', '', 'ruben ', 123);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_clinico`
--

DROP TABLE IF EXISTS `reporte_clinico`;
CREATE TABLE IF NOT EXISTS `reporte_clinico` (
  `idreporte_clinico` char(45) NOT NULL,
  `codigo_postal` varchar(45) NOT NULL,
  `numero_historial` varchar(11) NOT NULL,
  `pieza_tratada` varchar(45) NOT NULL,
  `fecha_tratamiento` varchar(45) NOT NULL,
  `piezas_a_tratar` varchar(45) NOT NULL,
  PRIMARY KEY (`idreporte_clinico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reporte_clinico`
--

INSERT INTO `reporte_clinico` (`idreporte_clinico`, `codigo_postal`, `numero_historial`, `pieza_tratada`, `fecha_tratamiento`, `piezas_a_tratar`) VALUES
('5', '5', '5', '', '', 'ninguna'),
('6a', '97780', '3', 'muela', '22 de febrero', 'muela');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `idroles` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `super_usuario` varchar(45) NOT NULL,
  `usuarios_idusuarios` int(11) NOT NULL,
  PRIMARY KEY (`idroles`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idroles`, `usuario`, `super_usuario`, `usuarios_idusuarios`) VALUES
(5, 'ruben', 'manuel', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ruselliuit', 'MzUMgzTIPi6qtbc9L1mprseU9U-98rIG', '$2y$13$DGvcQvW/XxFxdXpU/aohW.pf.LBOOVWhR83681JGZ8cVb10rc.eSy', NULL, 'rusell75@hotmail.com', 10, 1511896802, 1511896802),
(2, 'lordcard123', 'cYGdrhga9WEd7khLGdkxRJGe1JpXXiGo', '$2y$13$fMXv3OQQ5pqcoBGPYEpX3OWA.9pbJqRCuKjfvVDm6942CpJsR1quW', NULL, 'santa_elias@live.com', 10, 1625172296, 1625172296);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `rol` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `perfil_idperfil` int(11) NOT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `usuario`, `rol`, `password`, `perfil_idperfil`) VALUES
(5, 'ruben', 'administrador', '123', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
