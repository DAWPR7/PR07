-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2017 a las 16:00:19
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

--
-- Volcado de datos para la tabla `tbl_admin`
--

INSERT INTO `tbl_admin` (`adm_id`, `user_id`) VALUES
(1, 3);

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
(1, 100005525, 'Daniel', 'Vargas Benítez', 'DAW', '2'),
(2, 100005525, 'Ruben', 'Perez', 'ASIX', '2'),
(4, 32131, 'Laura', 'Gonzalo Pérez', 'OTROS', '2'),
(5, 9248450, 'Pilar', 'García Suarez', 'ESO', '1'),
(6, 7755886, 'Lionel', 'Messi ', 'PRIMARIA', '6'),
(7, 6590833, 'Raul', 'González Blanco', 'ESO', '1'),
(8, 987446, 'Elena', 'Nito Del Bosque', 'ESO', '1'),
(9, 8664, 'Mustafa', 'Chouati Ahmed', 'DAW', '2'),
(10, 38256, 'Sergi', 'Falgar García', 'DAW', '2'),
(11, 9574, 'Miguel ', 'Tello Sanz', 'DAW', '2'),
(12, 87456, 'Miguel', 'Lopez Galán', 'DAW', '2'),
(13, 12345, 'Esther', 'Rovira Sancho', 'DAW', '2'),
(14, 65486, 'Roger', 'Fusté Arroyo', 'DAW', '2'),
(15, 8564, 'Marc', 'Petit Fernandez', 'DAW', '2'),
(16, 265489, 'Eric', 'Petit Fernandez', 'DAW', '2'),
(17, 1000256, 'Ronald Edhuardo', 'Chacaliaza Huarcaya', 'DAW', '2'),
(18, 753951, 'Mikel', 'López de Viñaspre Hidalgo', 'DAW', '2'),
(19, 96589, 'Aarón', 'Muñoz Cuenca', 'DAW', '2'),
(20, 78547, 'Alejandro', 'Rodríguez Alba', 'DAW', '2'),
(21, 36523, 'Israel Alexey', ' erea Castro', 'DAW', '2'),
(22, 252541, 'Javier', 'Acebo Cordova', 'DAW', '2');

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

--
-- Volcado de datos para la tabla `tbl_denuncia`
--

INSERT INTO `tbl_denuncia` (`den_id`, `den_mensaje`) VALUES
(1, 'denunciado'),
(2, 'denunciado'),
(3, 'DENUNCIADO ADFASDFASDF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_dialogo`
--

DROP TABLE IF EXISTS `tbl_dialogo`;
CREATE TABLE `tbl_dialogo` (
  `dia_id` int(11) NOT NULL,
  `dia_mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `his_id` int(11) NOT NULL,
  `dia_tipo` enum('h_ma','h_me') COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_dialogo`:
--   `his_id`
--       `tbl_historial` -> `his_id`
--

--
-- Volcado de datos para la tabla `tbl_dialogo`
--

INSERT INTO `tbl_dialogo` (`dia_id`, `dia_mensaje`, `his_id`, `dia_tipo`, `dia_fecha`) VALUES
(4, 'Hola, soy tu hermano Mayor!!!', 4, 'h_ma', '2017-03-26 10:24:18'),
(5, 'Hola, encantado de conocerte, yo soy tu hermano menor!!', 4, 'h_me', '2017-03-26 10:24:18'),
(6, 'Tengo un problema, me puedes ayudar?', 4, 'h_me', '2017-03-26 10:24:18'),
(7, 'Hola, te puedo contar una cosa?', 1, 'h_ma', '2017-03-26 10:34:17'),
(8, 'Claro que si guapi!!', 1, 'h_ma', '2017-03-26 10:35:45'),
(9, 'Claro que si guapi!', 1, 'h_ma', '2017-03-26 10:36:11'),
(10, 'Hola 123', 1, 'h_ma', '2017-03-26 12:03:50'),
(11, 'hola 456\r\n', 1, 'h_ma', '2017-03-26 12:04:45'),
(12, 'Claro que si guapi, te gana siempre', 1, 'h_ma', '2017-03-26 12:09:21'),
(13, 'Hola', 1, 'h_ma', '2017-03-26 12:13:41'),
(14, 'Hola soy tu hermano menor', 1, 'h_me', '2017-03-26 12:14:36'),
(15, 'Yo tu hermano mayor', 1, 'h_ma', '2017-03-26 12:15:01'),
(16, 'hola sergio\r\n', 1, 'h_me', '2017-03-27 15:57:05'),
(17, 'hola dani', 1, 'h_ma', '2017-03-27 15:57:18'),
(18, 'Hola miguel', 1, 'h_ma', '2017-03-27 15:57:46'),
(19, 'HOla musta', 1, 'h_me', '2017-03-27 15:57:56');

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
(125, 2, 'pre_6', 'Hi ha tranquil·litat i ordre per a fer-hi classe?', '2017-03-23'),
(126, 3, 'pre_1', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-24'),
(127, 3, 'pre_2', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-24'),
(128, 3, 'pre_3', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-24'),
(129, 3, 'pre_4', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-24'),
(130, 3, 'pre_5', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-24'),
(131, 3, 'pre_6', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-24'),
(132, 3, 'pre_1', '\r\nHi ha tranquil·litat i ordre per a fer-hi classe?', '2017-03-24'),
(133, 3, 'pre_2', '\r\nHi ha tranquil·litat i ordre per a fer-hi classe?', '2017-03-24'),
(134, 3, 'pre_3', ' Hi ha tranquil·litat i ordre per a fer-hi classe?', '2017-03-24'),
(135, 3, 'pre_4', '\r\nHi ha tranquil·litat i ordre per a fer-hi classe?', '2017-03-24'),
(136, 3, 'pre_5', '\r\nHi ha tranquil·litat i ordre per a fer-hi classe?', '2017-03-24'),
(137, 3, 'pre_6', '\r\nHi ha tranquil·litat i ordre per a fer-hi classe?', '2017-03-24'),
(138, 3, 'pre_2', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-24'),
(139, 3, 'pre_3', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-24'),
(140, 3, 'pre_4', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-24'),
(141, 3, 'pre_5', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-24'),
(142, 3, 'pre_6', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-24'),
(143, 0, 'pre_1', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-25'),
(144, 0, 'pre_2', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-25'),
(145, 0, 'pre_3', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-25'),
(146, 0, 'pre_4', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-25'),
(147, 0, 'pre_5', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-25'),
(148, 0, 'pre_6', 'Escriu els noms de 3 companys de classe que siguin els més amables, respectuosos i que ajudin als altres', '2017-03-25');

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
(597, 3, 2, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(598, 3, 2, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(599, 3, 2, 'SOCIAL', 'pre_4', 'SI', '2017-03-24'),
(600, 3, 2, 'FISICO', 'pre_5', 'SI', '2017-03-24'),
(601, 3, 2, 'SOCIAL', 'pre_7', 'SI', '2017-03-24'),
(602, 3, 2, 'SOCIAL', 'pre_8', 'SI', '2017-03-24'),
(603, 3, 2, 'FISICO', 'pre_10', 'SI', '2017-03-24'),
(604, 3, 2, 'FISICO', 'pre_11', 'SI', '2017-03-24'),
(605, 3, 2, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(606, 3, 1, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(607, 3, 4, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(608, 3, 2, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(609, 3, 4, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(610, 3, 1, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(611, 3, 2, 'SOCIAL', 'pre_4', 'SI', '2017-03-24'),
(612, 3, 4, 'SOCIAL', 'pre_4', 'SI', '2017-03-24'),
(613, 3, 2, 'FISICO', 'pre_5', 'SI', '2017-03-24'),
(614, 3, 1, 'FISICO', 'pre_5', 'SI', '2017-03-24'),
(615, 3, 4, 'FISICO', 'pre_5', 'SI', '2017-03-24'),
(616, 3, 2, 'VERBAL', 'pre_6', 'SI', '2017-03-24'),
(617, 3, 4, 'SOCIAL', 'pre_7', 'SI', '2017-03-24'),
(618, 3, 1, 'SOCIAL', 'pre_12', 'SI', '2017-03-24'),
(619, 3, 2, 'SOCIAL', 'pre_7', 'SI', '2017-03-24'),
(620, 3, 2, 'SOCIAL', 'pre_8', 'SI', '2017-03-24'),
(621, 3, 4, 'VERBAL', 'pre_9', 'SI', '2017-03-24'),
(622, 3, 2, 'VERBAL', 'pre_9', 'SI', '2017-03-24'),
(623, 3, 4, 'FISICO', 'pre_11', 'SI', '2017-03-24'),
(624, 3, 2, 'FISICO', 'pre_10', 'SI', '2017-03-24'),
(625, 3, 4, 'SOCIAL', 'pre_12', 'SI', '2017-03-24'),
(626, 3, 2, 'FISICO', 'pre_11', 'SI', '2017-03-24'),
(627, 3, 2, 'SOCIAL', 'pre_12', 'SI', '2017-03-24'),
(628, 3, 2, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(629, 3, 2, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(630, 3, 2, 'SOCIAL', 'pre_4', 'SI', '2017-03-24'),
(631, 3, 2, 'FISICO', 'pre_5', 'SI', '2017-03-24'),
(632, 3, 2, 'VERBAL', 'pre_6', 'SI', '2017-03-24'),
(633, 3, 2, 'SOCIAL', 'pre_7', 'SI', '2017-03-24'),
(634, 3, 2, 'SOCIAL', 'pre_8', 'SI', '2017-03-24'),
(635, 3, 2, 'VERBAL', 'pre_9', 'SI', '2017-03-24'),
(636, 3, 2, 'FISICO', 'pre_10', 'SI', '2017-03-24'),
(637, 3, 2, 'FISICO', 'pre_11', 'SI', '2017-03-24'),
(638, 3, 2, 'SOCIAL', 'pre_12', 'SI', '2017-03-24'),
(639, 3, 2, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(640, 3, 2, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(641, 3, 2, 'SOCIAL', 'pre_4', 'SI', '2017-03-24'),
(642, 3, 2, 'FISICO', 'pre_5', 'SI', '2017-03-24'),
(643, 3, 2, 'VERBAL', 'pre_6', 'SI', '2017-03-24'),
(644, 3, 2, 'SOCIAL', 'pre_7', 'SI', '2017-03-24'),
(645, 3, 2, 'SOCIAL', 'pre_8', 'SI', '2017-03-24'),
(646, 3, 2, 'VERBAL', 'pre_9', 'SI', '2017-03-24'),
(647, 3, 2, 'FISICO', 'pre_10', 'SI', '2017-03-24'),
(648, 3, 2, 'FISICO', 'pre_11', 'SI', '2017-03-24'),
(649, 3, 2, 'SOCIAL', 'pre_12', 'SI', '2017-03-24'),
(650, 3, 2, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(651, 3, 2, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(652, 3, 2, 'SOCIAL', 'pre_4', 'SI', '2017-03-24'),
(653, 3, 2, 'FISICO', 'pre_5', 'SI', '2017-03-24'),
(654, 3, 2, 'VERBAL', 'pre_6', 'SI', '2017-03-24'),
(655, 3, 2, 'SOCIAL', 'pre_7', 'SI', '2017-03-24'),
(656, 3, 2, 'SOCIAL', 'pre_8', 'SI', '2017-03-24'),
(657, 3, 2, 'VERBAL', 'pre_9', 'SI', '2017-03-24'),
(658, 3, 2, 'FISICO', 'pre_10', 'SI', '2017-03-24'),
(659, 3, 2, 'FISICO', 'pre_11', 'SI', '2017-03-24'),
(660, 3, 2, 'SOCIAL', 'pre_12', 'SI', '2017-03-24'),
(661, 3, 2, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(662, 3, 2, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(663, 3, 2, 'SOCIAL', 'pre_4', 'SI', '2017-03-24'),
(664, 3, 2, 'FISICO', 'pre_5', 'SI', '2017-03-24'),
(665, 3, 2, 'VERBAL', 'pre_6', 'SI', '2017-03-24'),
(666, 3, 2, 'SOCIAL', 'pre_7', 'SI', '2017-03-24'),
(667, 3, 2, 'SOCIAL', 'pre_8', 'SI', '2017-03-24'),
(668, 3, 2, 'VERBAL', 'pre_9', 'SI', '2017-03-24'),
(669, 3, 2, 'FISICO', 'pre_10', 'SI', '2017-03-24'),
(670, 3, 2, 'FISICO', 'pre_11', 'SI', '2017-03-24'),
(671, 3, 2, 'SOCIAL', 'pre_12', 'SI', '2017-03-24'),
(672, 3, 2, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(673, 3, 1, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(674, 3, 4, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(675, 3, 2, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(676, 3, 4, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(677, 3, 1, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(678, 3, 2, 'VERBAL', 'pre_3', 'SI', '2017-03-24'),
(679, 3, 4, 'VERBAL', 'pre_3', 'SI', '2017-03-24'),
(680, 3, 1, 'VERBAL', 'pre_3', 'SI', '2017-03-24'),
(681, 3, 2, 'VERBAL', 'pre_6', 'SI', '2017-03-24'),
(682, 3, 4, 'SOCIAL', 'pre_4', 'SI', '2017-03-24'),
(683, 3, 1, 'SOCIAL', 'pre_4', 'SI', '2017-03-24'),
(684, 3, 2, 'SOCIAL', 'pre_7', 'SI', '2017-03-24'),
(685, 3, 4, 'FISICO', 'pre_5', 'SI', '2017-03-24'),
(686, 3, 1, 'FISICO', 'pre_5', 'SI', '2017-03-24'),
(687, 3, 2, 'SOCIAL', 'pre_8', 'SI', '2017-03-24'),
(688, 3, 4, 'SOCIAL', 'pre_7', 'SI', '2017-03-24'),
(689, 3, 1, 'VERBAL', 'pre_6', 'SI', '2017-03-24'),
(690, 3, 4, 'SOCIAL', 'pre_8', 'SI', '2017-03-24'),
(691, 3, 1, 'SOCIAL', 'pre_7', 'SI', '2017-03-24'),
(692, 3, 2, 'FISICO', 'pre_10', 'SI', '2017-03-24'),
(693, 3, 4, 'VERBAL', 'pre_9', 'SI', '2017-03-24'),
(694, 3, 1, 'SOCIAL', 'pre_8', 'SI', '2017-03-24'),
(695, 3, 4, 'FISICO', 'pre_10', 'SI', '2017-03-24'),
(696, 3, 2, 'FISICO', 'pre_11', 'SI', '2017-03-24'),
(697, 3, 1, 'VERBAL', 'pre_9', 'SI', '2017-03-24'),
(698, 3, 4, 'FISICO', 'pre_11', 'SI', '2017-03-24'),
(699, 3, 2, 'SOCIAL', 'pre_12', 'SI', '2017-03-24'),
(700, 3, 1, 'FISICO', 'pre_10', 'SI', '2017-03-24'),
(701, 3, 4, 'SOCIAL', 'pre_12', 'SI', '2017-03-24'),
(702, 3, 1, 'FISICO', 'pre_11', 'SI', '2017-03-24'),
(703, 3, 1, 'SOCIAL', 'pre_12', 'SI', '2017-03-24'),
(704, 3, 1, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(705, 3, 1, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(706, 3, 1, 'VERBAL', 'pre_3', 'SI', '2017-03-24'),
(707, 3, 1, 'SOCIAL', 'pre_4', 'SI', '2017-03-24'),
(708, 3, 1, 'FISICO', 'pre_5', 'SI', '2017-03-24'),
(709, 3, 1, 'VERBAL', 'pre_6', 'SI', '2017-03-24'),
(710, 3, 1, 'SOCIAL', 'pre_7', 'SI', '2017-03-24'),
(711, 3, 1, 'SOCIAL', 'pre_8', 'SI', '2017-03-24'),
(712, 3, 1, 'VERBAL', 'pre_9', 'SI', '2017-03-24'),
(713, 3, 1, 'FISICO', 'pre_10', 'SI', '2017-03-24'),
(714, 3, 1, 'FISICO', 'pre_11', 'SI', '2017-03-24'),
(715, 3, 1, 'SOCIAL', 'pre_12', 'SI', '2017-03-24'),
(716, 3, 2, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(717, 3, 2, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(718, 3, 2, 'VERBAL', 'pre_3', 'SI', '2017-03-24'),
(719, 3, 2, 'VERBAL', 'pre_6', 'SI', '2017-03-24'),
(720, 3, 2, 'SOCIAL', 'pre_7', 'SI', '2017-03-24'),
(721, 3, 2, 'SOCIAL', 'pre_8', 'SI', '2017-03-24'),
(722, 3, 2, 'FISICO', 'pre_10', 'SI', '2017-03-24'),
(723, 3, 2, 'FISICO', 'pre_11', 'SI', '2017-03-24'),
(724, 3, 2, 'SOCIAL', 'pre_12', 'SI', '2017-03-24'),
(725, 3, 4, 'FISICO', 'pre_1', 'SI', '2017-03-24'),
(726, 3, 4, 'VERBAL', 'pre_2', 'SI', '2017-03-24'),
(727, 3, 4, 'VERBAL', 'pre_3', 'SI', '2017-03-24'),
(728, 3, 4, 'SOCIAL', 'pre_4', 'SI', '2017-03-24'),
(729, 3, 4, 'FISICO', 'pre_5', 'SI', '2017-03-24'),
(730, 3, 4, 'SOCIAL', 'pre_7', 'SI', '2017-03-24'),
(731, 3, 4, 'SOCIAL', 'pre_8', 'SI', '2017-03-24'),
(732, 3, 4, 'VERBAL', 'pre_9', 'SI', '2017-03-24'),
(733, 3, 4, 'FISICO', 'pre_10', 'SI', '2017-03-24'),
(734, 3, 4, 'FISICO', 'pre_11', 'SI', '2017-03-24'),
(735, 3, 4, 'SOCIAL', 'pre_12', 'SI', '2017-03-24'),
(736, 0, 2, 'FISICO', 'pre_1', 'SI', '2017-03-25'),
(737, 0, 4, 'VERBAL', 'pre_3', 'SI', '2017-03-25'),
(738, 0, 1, 'FISICO', 'pre_1', 'SI', '2017-03-25'),
(739, 0, 2, 'VERBAL', 'pre_6', 'SI', '2017-03-25'),
(740, 0, 4, 'FISICO', 'pre_5', 'SI', '2017-03-25'),
(741, 0, 1, 'VERBAL', 'pre_2', 'SI', '2017-03-25'),
(742, 0, 2, 'SOCIAL', 'pre_8', 'SI', '2017-03-25'),
(743, 0, 1, 'VERBAL', 'pre_3', 'SI', '2017-03-25'),
(744, 0, 4, 'SOCIAL', 'pre_8', 'SI', '2017-03-25'),
(745, 0, 2, 'FISICO', 'pre_10', 'SI', '2017-03-25'),
(746, 0, 1, 'SOCIAL', 'pre_4', 'SI', '2017-03-25'),
(747, 0, 2, 'FISICO', 'pre_11', 'SI', '2017-03-25'),
(748, 0, 4, 'FISICO', 'pre_11', 'SI', '2017-03-25'),
(749, 0, 1, 'VERBAL', 'pre_9', 'SI', '2017-03-25'),
(750, 0, 2, 'SOCIAL', 'pre_12', 'SI', '2017-03-25'),
(751, 0, 4, 'SOCIAL', 'pre_12', 'SI', '2017-03-25'),
(752, 0, 1, 'FISICO', 'pre_11', 'SI', '2017-03-25'),
(753, 0, 1, 'SOCIAL', 'pre_12', 'SI', '2017-03-25'),
(754, 0, 6, 'FISICO', 'pre_1', 'SI', '2017-03-25'),
(755, 0, 4, 'FISICO', 'pre_1', 'SI', '2017-03-25'),
(756, 0, 5, 'FISICO', 'pre_1', 'SI', '2017-03-25'),
(757, 0, 6, 'VERBAL', 'pre_2', 'SI', '2017-03-25'),
(758, 0, 4, 'VERBAL', 'pre_2', 'SI', '2017-03-25'),
(759, 0, 5, 'VERBAL', 'pre_2', 'SI', '2017-03-25'),
(760, 0, 6, 'VERBAL', 'pre_3', 'SI', '2017-03-25'),
(761, 0, 5, 'VERBAL', 'pre_3', 'SI', '2017-03-25'),
(762, 0, 6, 'SOCIAL', 'pre_4', 'SI', '2017-03-25'),
(763, 0, 4, 'VERBAL', 'pre_3', 'SI', '2017-03-25'),
(764, 0, 5, 'SOCIAL', 'pre_4', 'SI', '2017-03-25'),
(765, 0, 6, 'FISICO', 'pre_5', 'SI', '2017-03-25'),
(766, 0, 4, 'SOCIAL', 'pre_4', 'SI', '2017-03-25'),
(767, 0, 5, 'FISICO', 'pre_5', 'SI', '2017-03-25'),
(768, 0, 6, 'VERBAL', 'pre_6', 'SI', '2017-03-25'),
(769, 0, 4, 'FISICO', 'pre_5', 'SI', '2017-03-25'),
(770, 0, 5, 'VERBAL', 'pre_6', 'SI', '2017-03-25'),
(771, 0, 6, 'SOCIAL', 'pre_7', 'SI', '2017-03-25'),
(772, 0, 4, 'VERBAL', 'pre_6', 'SI', '2017-03-25'),
(773, 0, 5, 'SOCIAL', 'pre_7', 'SI', '2017-03-25'),
(774, 0, 6, 'SOCIAL', 'pre_8', 'SI', '2017-03-25'),
(775, 0, 4, 'SOCIAL', 'pre_7', 'SI', '2017-03-25'),
(776, 0, 5, 'SOCIAL', 'pre_8', 'SI', '2017-03-25'),
(777, 0, 6, 'VERBAL', 'pre_9', 'SI', '2017-03-25'),
(778, 0, 4, 'SOCIAL', 'pre_8', 'SI', '2017-03-25'),
(779, 0, 5, 'VERBAL', 'pre_9', 'SI', '2017-03-25'),
(780, 0, 6, 'FISICO', 'pre_10', 'SI', '2017-03-25'),
(781, 0, 5, 'FISICO', 'pre_10', 'SI', '2017-03-25'),
(782, 0, 4, 'VERBAL', 'pre_9', 'SI', '2017-03-25'),
(783, 0, 6, 'FISICO', 'pre_11', 'SI', '2017-03-25'),
(784, 0, 5, 'FISICO', 'pre_11', 'SI', '2017-03-25'),
(785, 0, 6, 'SOCIAL', 'pre_12', 'SI', '2017-03-25'),
(786, 0, 4, 'FISICO', 'pre_10', 'SI', '2017-03-25'),
(787, 0, 5, 'SOCIAL', 'pre_12', 'SI', '2017-03-25'),
(788, 0, 4, 'FISICO', 'pre_11', 'SI', '2017-03-25'),
(789, 0, 4, 'SOCIAL', 'pre_12', 'SI', '2017-03-25');

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

--
-- Volcado de datos para la tabla `tbl_historial`
--

INSERT INTO `tbl_historial` (`his_id`, `hma_id`, `hme_id`, `his_data`, `his_comentario`, `psi_id`) VALUES
(4, 1, 1, '2017-03-26 10:02:15', 'Primera relación', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hmayor`
--

DROP TABLE IF EXISTS `tbl_hmayor`;
CREATE TABLE `tbl_hmayor` (
  `hma_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hma_notas` text COLLATE utf8_unicode_ci NOT NULL,
  `hma_estado` enum('libre','ocupado','desactivado') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'libre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_hmayor`:
--   `user_id`
--       `tbl_user` -> `user_id`
--

--
-- Volcado de datos para la tabla `tbl_hmayor`
--

INSERT INTO `tbl_hmayor` (`hma_id`, `user_id`, `hma_notas`, `hma_estado`) VALUES
(1, 1, 'Hermano Mayor', 'ocupado'),
(2, 2, 'Hermano solo', 'libre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hmenor`
--

DROP TABLE IF EXISTS `tbl_hmenor`;
CREATE TABLE `tbl_hmenor` (
  `hme_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hme_notas` text COLLATE utf8_unicode_ci NOT NULL,
  `hme_estado` enum('libre','ocupado','inactivo','pendiente') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_hmenor`:
--   `user_id`
--       `tbl_user` -> `user_id`
--

--
-- Volcado de datos para la tabla `tbl_hmenor`
--

INSERT INTO `tbl_hmenor` (`hme_id`, `user_id`, `hme_notas`, `hme_estado`) VALUES
(1, 2, 'Hermano Menor', 'ocupado');

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
  `res_social` int(11) NOT NULL,
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

INSERT INTO `tbl_resultado` (`res_id`, `alu_id`, `res_verbal`, `res_fisico`, `res_social`, `res_data`) VALUES
(2, 2, 2, 3, 1, '2017-03-16'),
(8, 1, 4, 4, 4, '2017-03-23'),
(9, 1, 9, 10, 9, '2017-03-24'),
(10, 2, 22, 30, 29, '2017-03-24'),
(11, 4, 8, 11, 11, '2017-03-24'),
(12, 2, 1, 3, 2, '2017-03-25'),
(13, 4, 5, 6, 6, '2017-03-25'),
(14, 1, 3, 2, 2, '2017-03-25'),
(15, 6, 4, 4, 4, '2017-03-25'),
(16, 5, 4, 4, 4, '2017-03-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_matricula` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `user_pwd` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- RELACIONES PARA LA TABLA `tbl_user`:
--

--
-- Volcado de datos para la tabla `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_matricula`, `user_pwd`) VALUES
(1, '92484', '12345'),
(2, '92485', '12345'),
(3, 'admin', '1234'),
(5, 'penediente', '222222'),
(6, 'penediente3', '1233'),
(7, 'penediente3', '1233'),
(8, 'penediente3', '1233');

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
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  MODIFY `alu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `tbl_denuncia`
--
ALTER TABLE `tbl_denuncia`
  MODIFY `den_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_dialogo`
--
ALTER TABLE `tbl_dialogo`
  MODIFY `dia_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `tbl_for1_resp`
--
ALTER TABLE `tbl_for1_resp`
  MODIFY `for1_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT de la tabla `tbl_for2_resp`
--
ALTER TABLE `tbl_for2_resp`
  MODIFY `for2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=790;
--
-- AUTO_INCREMENT de la tabla `tbl_historial`
--
ALTER TABLE `tbl_historial`
  MODIFY `his_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_hmayor`
--
ALTER TABLE `tbl_hmayor`
  MODIFY `hma_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_hmenor`
--
ALTER TABLE `tbl_hmenor`
  MODIFY `hme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tbl_psico`
--
ALTER TABLE `tbl_psico`
  MODIFY `psi_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_resultado`
--
ALTER TABLE `tbl_resultado`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- Volcado de datos para la tabla `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'bd_hermanomayor', 'tbl_alumno', '{"sorted_col":"`tbl_alumno`.`alu_etapa` ASC"}', '2017-03-27 13:48:44');

--
-- Metadatos para tbl_denuncia
--

--
-- Metadatos para tbl_dialogo
--

--
-- Metadatos para tbl_for1_resp
--

--
-- Metadatos para tbl_for2_resp
--

--
-- Volcado de datos para la tabla `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'bd_hermanomayor', 'tbl_for2_resp', '{"sorted_col":"`for2_tipo` ASC"}', '2017-03-24 15:35:13');

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
('bd_hermanomayor', 'tbl_for1_resp', 'alu_id', 'bd_hermanomayor', 'tbl_alumno', 'alu_id'),
('bd_hermanomayor', 'tbl_for2_resp', 'alu_id', 'bd_hermanomayor', 'tbl_alumno', 'alu_id'),
('bd_hermanomayor', 'tbl_historial', 'hma_id', 'bd_hermanomayor', 'tbl_hmayor', 'hma_id'),
('bd_hermanomayor', 'tbl_historial', 'hme_id', 'bd_hermanomayor', 'tbl_hmenor', 'hme_id'),
('bd_hermanomayor', 'tbl_historial', 'psi_id', 'bd_hermanomayor', 'tbl_psico', 'psi_id'),
('bd_hermanomayor', 'tbl_hmayor', 'user_id', 'bd_hermanomayor', 'tbl_user', 'user_id'),
('bd_hermanomayor', 'tbl_hmenor', 'user_id', 'bd_hermanomayor', 'tbl_user', 'user_id'),
('bd_hermanomayor', 'tbl_psico', 'user_id', 'bd_hermanomayor', 'tbl_user', 'user_id'),
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
('bd_hermanomayor', 'tbl_alumno', @LAST_PAGE, 706, 394),
('bd_hermanomayor', 'tbl_denuncia', @LAST_PAGE, 44, 485),
('bd_hermanomayor', 'tbl_dialogo', @LAST_PAGE, 709, 41),
('bd_hermanomayor', 'tbl_for1_resp', @LAST_PAGE, 1031, 245),
('bd_hermanomayor', 'tbl_for2_resp', @LAST_PAGE, 1029, 414),
('bd_hermanomayor', 'tbl_historial', @LAST_PAGE, 706, 209),
('bd_hermanomayor', 'tbl_hmayor', @LAST_PAGE, 320, 27),
('bd_hermanomayor', 'tbl_hmenor', @LAST_PAGE, 322, 153),
('bd_hermanomayor', 'tbl_psico', @LAST_PAGE, 322, 278),
('bd_hermanomayor', 'tbl_resultado', @LAST_PAGE, 1029, 21),
('bd_hermanomayor', 'tbl_user', @LAST_PAGE, 42, 151);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
