-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2017 a las 16:50:50
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_hermanomayor`
--
CREATE DATABASE IF NOT EXISTS `bd_hermanomayor` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_hermanomayor`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alumno`
--

DROP TABLE IF EXISTS `tbl_alumno`;
CREATE TABLE IF NOT EXISTS `tbl_alumno` (
  `alu_id` int(11) NOT NULL AUTO_INCREMENT,
  `alu_matricula` int(11) NOT NULL,
  `alu_nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alu_apellidos` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `alu_etapa` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alu_curso` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `for_id` int(11) NOT NULL,
  PRIMARY KEY (`alu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_denuncia`
--

DROP TABLE IF EXISTS `tbl_denuncia`;
CREATE TABLE IF NOT EXISTS `tbl_denuncia` (
  `den_id` int(11) NOT NULL,
  `den_mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `den_tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dialogo`
--

DROP TABLE IF EXISTS `tbl_dialogo`;
CREATE TABLE IF NOT EXISTS `tbl_dialogo` (
  `dia_id` int(11) NOT NULL AUTO_INCREMENT,
  `dia_mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `hme_id` int(11) NOT NULL,
  `hma_id` int(11) NOT NULL,
  `dia_data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`dia_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_formulario`
--

DROP TABLE IF EXISTS `tbl_formulario`;
CREATE TABLE IF NOT EXISTS `tbl_formulario` (
  `for_id` int(11) NOT NULL AUTO_INCREMENT,
  `for_etapa` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `for_curso` int(2) NOT NULL,
  `for_pre1` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `for_pre2` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `for_pre3` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `for_pre4` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `for_pre5` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `for_pre6` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `for_pre7` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `for_pre8` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `for_pre9` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `for_pre10` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `for_pre11` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `for_pre12` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`for_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_historial`
--

DROP TABLE IF EXISTS `tbl_historial`;
CREATE TABLE IF NOT EXISTS `tbl_historial` (
  `his_id` int(11) NOT NULL AUTO_INCREMENT,
  `hma_id` int(11) NOT NULL,
  `hme_id` int(11) NOT NULL,
  `his_data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`his_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hmayor`
--

DROP TABLE IF EXISTS `tbl_hmayor`;
CREATE TABLE IF NOT EXISTS `tbl_hmayor` (
  `hma_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`hma_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hmenor`
--

DROP TABLE IF EXISTS `tbl_hmenor`;
CREATE TABLE IF NOT EXISTS `tbl_hmenor` (
  `hme_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`hme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_psico`
--

DROP TABLE IF EXISTS `tbl_psico`;
CREATE TABLE IF NOT EXISTS `tbl_psico` (
  `psi_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`psi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_resultado`
--

DROP TABLE IF EXISTS `tbl_resultado`;
CREATE TABLE IF NOT EXISTS `tbl_resultado` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `alu_id` int(11) NOT NULL,
  `res_verbal` int(11) NOT NULL,
  `res_fisico` int(11) NOT NULL,
  `res_relacional` int(11) NOT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_matricula` int(10) NOT NULL,
  `user_pwd` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
