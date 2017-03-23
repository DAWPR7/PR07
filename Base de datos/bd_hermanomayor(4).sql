-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2017 a las 16:51:35
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
CREATE TABLE `tbl_admin` (
  `adm_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_admin`:
--   `user_id`
--       `tbl_user` -> `user_id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alumno`
--

DROP TABLE IF EXISTS `tbl_alumno`;
CREATE TABLE `tbl_alumno` (
  `alu_id` int(11) NOT NULL,
  `alu_matricula` int(11) NOT NULL,
  `alu_nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alu_apellidos` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `alu_etapa` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alu_curso` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_alumno`:
--

--
-- Volcado de datos para la tabla `tbl_alumno`
--

INSERT INTO `tbl_alumno` (`alu_id`, `alu_matricula`, `alu_nombre`, `alu_apellidos`, `alu_etapa`, `alu_curso`) VALUES
(1, 100005525, 'Daniel', 'Vargas', 'FP', '2'),
(2, 100005525, 'Daniel', 'Vargas', 'FP', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_denuncia`
--

DROP TABLE IF EXISTS `tbl_denuncia`;
CREATE TABLE `tbl_denuncia` (
  `den_id` int(11) NOT NULL,
  `den_mensaje` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_denuncia`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dialogo`
--

DROP TABLE IF EXISTS `tbl_dialogo`;
CREATE TABLE `tbl_dialogo` (
  `dia_id` int(11) NOT NULL,
  `dia_mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `his_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_dialogo`:
--   `his_id`
--       `tbl_historial` -> `his_id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_for1_resp`
--

DROP TABLE IF EXISTS `tbl_for1_resp`;
CREATE TABLE `tbl_for1_resp` (
  `for1_id` int(11) NOT NULL,
  `alu_id` int(11) NOT NULL,
  `for1_pregunta` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `for1_respuesta` text COLLATE utf8_unicode_ci NOT NULL,
  `for1_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_for1_resp`:
--   `alu_id`
--       `tbl_alumno` -> `alu_id`
--

--
-- Volcado de datos para la tabla `tbl_for1_resp`
--

INSERT INTO `tbl_for1_resp` (`for1_id`, `alu_id`, `for1_pregunta`, `for1_respuesta`, `for1_fecha`) VALUES
(70, 2, 'pre_1', 'asdfasdf', '0000-00-00'),
(71, 2, 'pre_2', 'asdfasdf', '0000-00-00'),
(72, 2, 'pre_3', 'asdfasdf', '0000-00-00'),
(73, 2, 'pre_4', 'asdfasdf', '0000-00-00'),
(74, 2, 'pre_5', 'asddfasdf', '0000-00-00'),
(75, 2, 'pre_6', 'asdfasdf', '0000-00-00'),
(76, 2, 'pre_7_1', '1', '0000-00-00'),
(77, 2, 'pre_7_2', '1', '0000-00-00'),
(78, 2, 'pre_7_3', '1', '0000-00-00'),
(79, 2, 'pre_7_4', '1', '0000-00-00'),
(80, 2, 'pre_7_5', '1', '0000-00-00'),
(81, 2, 'pre_7_6', '1', '0000-00-00'),
(82, 2, 'pre_7_7', '1', '0000-00-00'),
(83, 2, 'pre_7_8', '1', '0000-00-00'),
(84, 2, 'pre_7_9', '1', '0000-00-00'),
(85, 2, 'pre_7_10', '1', '0000-00-00'),
(86, 2, 'pre_7_11', '1', '0000-00-00'),
(87, 2, 'pre_8_1', '2', '0000-00-00'),
(88, 2, 'pre_8_6', '2', '0000-00-00'),
(89, 2, 'pre_8_7', '2', '0000-00-00'),
(90, 2, 'pre_8_8', '2', '0000-00-00'),
(91, 2, 'pre_8_9', '2', '0000-00-00'),
(92, 2, 'pre_8_10', '2', '0000-00-00'),
(93, 2, 'pre_8_11', '2', '0000-00-00'),
(94, 2, 'pre_9_1', '1', '0000-00-00'),
(95, 2, 'pre_9_11', '1', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_for2_resp`
--

DROP TABLE IF EXISTS `tbl_for2_resp`;
CREATE TABLE `tbl_for2_resp` (
  `for2_id` int(11) NOT NULL,
  `alu_id` int(11) NOT NULL,
  `for2_alu_id` int(11) NOT NULL,
  `for2_tipo` int(11) NOT NULL,
  `for2_respuesta` int(11) NOT NULL,
  `for2_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_for2_resp`:
--   `alu_id`
--       `tbl_alumno` -> `alu_id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_historial`
--

DROP TABLE IF EXISTS `tbl_historial`;
CREATE TABLE `tbl_historial` (
  `his_id` int(11) NOT NULL,
  `hma_id` int(11) NOT NULL,
  `hme_id` int(11) NOT NULL,
  `his_data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `his_comentario` text COLLATE utf8_unicode_ci NOT NULL,
  `psi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_historial`:
--   `hma_id`
--       `tbl_hmayor` -> `hma_id`
--   `hme_id`
--       `tbl_hmenor` -> `hme_id`
--   `psi_id`
--       `tbl_psico` -> `psi_id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hmayor`
--

DROP TABLE IF EXISTS `tbl_hmayor`;
CREATE TABLE `tbl_hmayor` (
  `hma_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hma_notas` text COLLATE utf8_unicode_ci NOT NULL,
  `hma_estado` enum('libre','ocupado','desactivado') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_hmayor`:
--   `user_id`
--       `tbl_user` -> `user_id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hmenor`
--

DROP TABLE IF EXISTS `tbl_hmenor`;
CREATE TABLE `tbl_hmenor` (
  `hme_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hme_notas` text COLLATE utf8_unicode_ci NOT NULL,
  `hme_estado` enum('libre','ocupado','inactivo') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_hmenor`:
--   `user_id`
--       `tbl_user` -> `user_id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_psico`
--

DROP TABLE IF EXISTS `tbl_psico`;
CREATE TABLE `tbl_psico` (
  `psi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_psico`:
--   `user_id`
--       `tbl_user` -> `user_id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_resultado`
--

DROP TABLE IF EXISTS `tbl_resultado`;
CREATE TABLE `tbl_resultado` (
  `res_id` int(11) NOT NULL,
  `alu_id` int(11) NOT NULL,
  `res_verbal` int(11) NOT NULL,
  `res_fisico` int(11) NOT NULL,
  `res_relacional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_resultado`:
--   `alu_id`
--       `tbl_alumno` -> `alu_id`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_matricula` int(10) NOT NULL,
  `user_pwd` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_user`:
--

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
-- Indices de la tabla `tbl_denuncia`
--
ALTER TABLE `tbl_denuncia`
  ADD PRIMARY KEY (`den_id`);

--
-- Indices de la tabla `tbl_dialogo`
--
ALTER TABLE `tbl_dialogo`
  ADD PRIMARY KEY (`dia_id`);

--
-- Indices de la tabla `tbl_for1_resp`
--
ALTER TABLE `tbl_for1_resp`
  ADD PRIMARY KEY (`for1_id`);

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
  MODIFY `alu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_denuncia`
--
ALTER TABLE `tbl_denuncia`
  MODIFY `den_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_dialogo`
--
ALTER TABLE `tbl_dialogo`
  MODIFY `dia_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_for1_resp`
--
ALTER TABLE `tbl_for1_resp`
  MODIFY `for1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
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
