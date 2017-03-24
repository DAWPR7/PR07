-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2017 a las 15:51:14
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
(2, 100005525, 'Ruben', 'Perez', 'FP', '2'),
(4, 32131, 'Laura', 'Gonzalo Pérez', 'FP', '2');

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
(120, 2, 'pre_1', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-23'),
(121, 2, 'pre_2', 'Hi ha conflictes entre companys de classe?', '2017-03-23'),
(122, 2, 'pre_3', 'NOM I COGNOMS', '2017-03-23'),
(123, 2, 'pre_4', 'Com et sents a la teva classe?', '2017-03-23'),
(124, 2, 'pre_5', 'Hi tens amics, a la teva classe? quins?', '2017-03-23'),
(125, 2, 'pre_6', 'Hi ha tranquil·litat i ordre per a fer-hi classe?', '2017-03-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_for2_resp`
--

DROP TABLE IF EXISTS `tbl_for2_resp`;
CREATE TABLE `tbl_for2_resp` (
  `for2_id` int(11) NOT NULL,
  `alu_id` int(11) NOT NULL,
  `for2_alu_id` int(11) NOT NULL,
  `for2_tipo` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `for2_pregunta` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `for2_respuesta` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `for2_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_for2_resp`:
--   `alu_id`
--       `tbl_alumno` -> `alu_id`
--

--
-- Volcado de datos para la tabla `tbl_for2_resp`
--

INSERT INTO `tbl_for2_resp` (`for2_id`, `alu_id`, `for2_alu_id`, `for2_tipo`, `for2_pregunta`, `for2_respuesta`, `for2_fecha`) VALUES
(304, 2, 1, 'FISICO', 'pre_1', 'SI', '2017-03-23'),
(305, 2, 1, 'VERBAL', 'pre_2', 'SI', '2017-03-23'),
(306, 2, 1, 'VERBAL', 'pre_3', 'SI', '2017-03-23'),
(307, 2, 1, 'SOCIAL', 'pre_4', 'SI', '2017-03-23'),
(308, 2, 1, 'FISICO', 'pre_5', 'SI', '2017-03-23'),
(309, 2, 1, 'VERBAL', 'pre_6', 'SI', '2017-03-23'),
(310, 2, 1, 'SOCIAL', 'pre_7', 'SI', '2017-03-23'),
(311, 2, 1, 'SOCIAL', 'pre_8', 'SI', '2017-03-23'),
(312, 2, 1, 'VERBAL', 'pre_9', 'SI', '2017-03-23'),
(313, 2, 1, 'FISICO', 'pre_10', 'SI', '2017-03-23'),
(314, 2, 1, 'FISICO', 'pre_11', 'SI', '2017-03-23'),
(315, 2, 1, 'SOCIAL', 'pre_12', 'SI', '2017-03-23'),
(316, 2, 1, 'FISICO', 'pre_1', 'SI', '2017-03-23'),
(317, 2, 1, 'VERBAL', 'pre_2', 'SI', '2017-03-23'),
(318, 2, 1, 'VERBAL', 'pre_3', 'SI', '2017-03-23'),
(319, 2, 1, 'SOCIAL', 'pre_4', 'SI', '2017-03-23'),
(320, 2, 1, 'FISICO', 'pre_5', 'SI', '2017-03-23'),
(321, 2, 1, 'VERBAL', 'pre_6', 'SI', '2017-03-23'),
(322, 2, 1, 'SOCIAL', 'pre_7', 'SI', '2017-03-23'),
(323, 2, 1, 'SOCIAL', 'pre_8', 'SI', '2017-03-23'),
(324, 2, 1, 'VERBAL', 'pre_9', 'SI', '2017-03-23'),
(325, 2, 1, 'FISICO', 'pre_10', 'SI', '2017-03-23'),
(326, 2, 1, 'FISICO', 'pre_11', 'SI', '2017-03-23'),
(327, 2, 1, 'SOCIAL', 'pre_12', 'SI', '2017-03-23'),
(328, 2, 1, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(329, 2, 1, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(330, 2, 1, 'VERBAL', 'pre_3', 'SI', '2017-03-24'),
(331, 2, 1, 'SOCIAL', 'pre_4', 'SI', '2017-03-24'),
(332, 2, 1, 'FISICO', 'pre_5', 'SI', '2017-03-24'),
(333, 2, 1, 'VERBAL', 'pre_6', 'SI', '2017-03-24'),
(334, 2, 1, 'SOCIAL', 'pre_7', 'SI', '2017-03-24'),
(335, 2, 1, 'SOCIAL', 'pre_8', 'SI', '2017-03-24'),
(336, 2, 1, 'VERBAL', 'pre_9', 'SI', '2017-03-24'),
(337, 2, 1, 'FISICO', 'pre_10', 'SI', '2017-03-24'),
(338, 2, 1, 'FISICO', 'pre_11', 'SI', '2017-03-24'),
(339, 2, 1, 'SOCIAL', 'pre_12', 'SI', '2017-03-24');

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
  `res_relacional` int(11) NOT NULL,
  `res_data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_resultado`:
--   `alu_id`
--       `tbl_alumno` -> `alu_id`
--

--
-- Volcado de datos para la tabla `tbl_resultado`
--

INSERT INTO `tbl_resultado` (`res_id`, `alu_id`, `res_verbal`, `res_fisico`, `res_relacional`, `res_data`) VALUES
(1, 1, 1, 1, 1, '2017-03-10'),
(2, 2, 2, 3, 1, '2017-03-16'),
(8, 1, 4, 4, 4, '2017-03-23'),
(9, 1, 4, 4, 4, '2017-03-24');

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
-- Indices de la tabla `tbl_for2_resp`
--
ALTER TABLE `tbl_for2_resp`
  ADD PRIMARY KEY (`for2_id`);

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
  MODIFY `alu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `for1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT de la tabla `tbl_for2_resp`
--
ALTER TABLE `tbl_for2_resp`
  MODIFY `for2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;
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
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
