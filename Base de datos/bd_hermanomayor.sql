-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2017 a las 17:05:52
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adm_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alumno`
--

CREATE TABLE `tbl_alumno` (
  `alu_id` int(11) NOT NULL,
  `alu_matricula` int(11) NOT NULL,
  `alu_nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alu_apellidos` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `alu_etapa` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alu_curso` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_denuncia`
--

CREATE TABLE `tbl_denuncia` (
  `den_id` int(11) NOT NULL,
  `den_mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `den_tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dialogo`
--

CREATE TABLE `tbl_dialogo` (
  `dia_id` int(11) NOT NULL,
  `dia_mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `his_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_historial`
--

CREATE TABLE `tbl_historial` (
  `his_id` int(11) NOT NULL,
  `hma_id` int(11) NOT NULL,
  `hme_id` int(11) NOT NULL,
  `his_data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `his_comentario` text COLLATE utf8_unicode_ci NOT NULL,
  `psi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hmayor`
--

CREATE TABLE `tbl_hmayor` (
  `hma_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hma_notas` text COLLATE utf8_unicode_ci NOT NULL,
  `hma_estado` enum('libre','ocupado','desactivado') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hmenor`
--

CREATE TABLE `tbl_hmenor` (
  `hme_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hme_notas` text COLLATE utf8_unicode_ci NOT NULL,
  `hme_estado` enum('libre','ocupado','inactivo') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_psico`
--

CREATE TABLE `tbl_psico` (
  `psi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_respuesta`
--

CREATE TABLE `tbl_respuesta` (
  `res_id` int(11) NOT NULL,
  `alu_id` int(11) NOT NULL,
  `res_pregunta` int(2) NOT NULL,
  `res_tipo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `res_respuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_resultado`
--

CREATE TABLE `tbl_resultado` (
  `res_id` int(11) NOT NULL,
  `alu_id` int(11) NOT NULL,
  `res_verbal` int(11) NOT NULL,
  `res_fisico` int(11) NOT NULL,
  `res_relacional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_matricula` int(10) NOT NULL,
  `user_pwd` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indices de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  ADD PRIMARY KEY (`alu_id`);

--
-- Indices de la tabla `tbl_dialogo`
--
ALTER TABLE `tbl_dialogo`
  ADD PRIMARY KEY (`dia_id`);

--
-- Indices de la tabla `tbl_historial`
--
ALTER TABLE `tbl_historial`
  ADD PRIMARY KEY (`his_id`);

--
-- Indices de la tabla `tbl_hmayor`
--
ALTER TABLE `tbl_hmayor`
  ADD PRIMARY KEY (`hma_id`);

--
-- Indices de la tabla `tbl_hmenor`
--
ALTER TABLE `tbl_hmenor`
  ADD PRIMARY KEY (`hme_id`);

--
-- Indices de la tabla `tbl_psico`
--
ALTER TABLE `tbl_psico`
  ADD PRIMARY KEY (`psi_id`);

--
-- Indices de la tabla `tbl_respuesta`
--
ALTER TABLE `tbl_respuesta`
  ADD PRIMARY KEY (`res_id`);

--
-- Indices de la tabla `tbl_resultado`
--
ALTER TABLE `tbl_resultado`
  ADD PRIMARY KEY (`res_id`);

--
-- Indices de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  MODIFY `alu_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_dialogo`
--
ALTER TABLE `tbl_dialogo`
  MODIFY `dia_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_historial`
--
ALTER TABLE `tbl_historial`
  MODIFY `his_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_hmayor`
--
ALTER TABLE `tbl_hmayor`
  MODIFY `hma_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_hmenor`
--
ALTER TABLE `tbl_hmenor`
  MODIFY `hme_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_psico`
--
ALTER TABLE `tbl_psico`
  MODIFY `psi_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_respuesta`
--
ALTER TABLE `tbl_respuesta`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_resultado`
--
ALTER TABLE `tbl_resultado`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
