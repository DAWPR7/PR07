-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2017 a las 17:53:56
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
  `den_mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `den_tipo` varchar(20) COLLATE utf8_unicode_ci NOT NULL
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
-- Estructura de tabla para la tabla `tbl_respuesta`
--

DROP TABLE IF EXISTS `tbl_respuesta`;
CREATE TABLE `tbl_respuesta` (
  `res_id` int(11) NOT NULL,
  `alu_id` int(11) NOT NULL,
  `res_pregunta` int(2) NOT NULL,
  `res_tipo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `res_respuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_respuesta`:
--   `alu_id`
--       `tbl_alumno` -> `alu_id`
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
  MODIFY `alu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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

--
-- Metadatos
--
USE `phpmyadmin`;

--
-- Metadatos para tbl_admin
--

--
-- Metadatos para tbl_alumno
--

--
-- Metadatos para tbl_denuncia
--

--
-- Metadatos para tbl_dialogo
--

--
-- Metadatos para tbl_historial
--

--
-- Metadatos para tbl_hmayor
--

--
-- Metadatos para tbl_hmenor
--

--
-- Metadatos para tbl_psico
--

--
-- Metadatos para tbl_respuesta
--

--
-- Metadatos para tbl_resultado
--

--
-- Metadatos para tbl_user
--

--
-- Metadatos para bd_hermanomayor
--

--
-- Volcado de datos para la tabla `pma__relation`
--

INSERT INTO `pma__relation` (`master_db`, `master_table`, `master_field`, `foreign_db`, `foreign_table`, `foreign_field`) VALUES
('bd_hermanomayor', 'tbl_admin', 'user_id', 'bd_hermanomayor', 'tbl_user', 'user_id'),
('bd_hermanomayor', 'tbl_dialogo', 'his_id', 'bd_hermanomayor', 'tbl_historial', 'his_id'),
('bd_hermanomayor', 'tbl_historial', 'hma_id', 'bd_hermanomayor', 'tbl_hmayor', 'hma_id'),
('bd_hermanomayor', 'tbl_historial', 'hme_id', 'bd_hermanomayor', 'tbl_hmenor', 'hme_id'),
('bd_hermanomayor', 'tbl_historial', 'psi_id', 'bd_hermanomayor', 'tbl_psico', 'psi_id'),
('bd_hermanomayor', 'tbl_hmayor', 'user_id', 'bd_hermanomayor', 'tbl_user', 'user_id'),
('bd_hermanomayor', 'tbl_hmenor', 'user_id', 'bd_hermanomayor', 'tbl_user', 'user_id'),
('bd_hermanomayor', 'tbl_psico', 'user_id', 'bd_hermanomayor', 'tbl_user', 'user_id'),
('bd_hermanomayor', 'tbl_respuesta', 'alu_id', 'bd_hermanomayor', 'tbl_alumno', 'alu_id'),
('bd_hermanomayor', 'tbl_resultado', 'alu_id', 'bd_hermanomayor', 'tbl_alumno', 'alu_id');

--
-- Volcado de datos para la tabla `pma__pdf_pages`
--

INSERT INTO `pma__pdf_pages` (`db_name`, `page_descr`) VALUES
('bd_hermanomayor', 'relaciones1');

SET @LAST_PAGE = LAST_INSERT_ID();

--
-- Volcado de datos para la tabla `pma__table_coords`
--

INSERT INTO `pma__table_coords` (`db_name`, `table_name`, `pdf_page_number`, `x`, `y`) VALUES
('bd_hermanomayor', 'tbl_admin', @LAST_PAGE, 321, 360),
('bd_hermanomayor', 'tbl_alumno', @LAST_PAGE, 996, 294),
('bd_hermanomayor', 'tbl_denuncia', @LAST_PAGE, 44, 485),
('bd_hermanomayor', 'tbl_dialogo', @LAST_PAGE, 690, 21),
('bd_hermanomayor', 'tbl_historial', @LAST_PAGE, 685, 194),
('bd_hermanomayor', 'tbl_hmayor', @LAST_PAGE, 320, 27),
('bd_hermanomayor', 'tbl_hmenor', @LAST_PAGE, 322, 153),
('bd_hermanomayor', 'tbl_psico', @LAST_PAGE, 322, 278),
('bd_hermanomayor', 'tbl_respuesta', @LAST_PAGE, 686, 463),
('bd_hermanomayor', 'tbl_resultado', @LAST_PAGE, 1001, 53),
('bd_hermanomayor', 'tbl_user', @LAST_PAGE, 42, 151);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
