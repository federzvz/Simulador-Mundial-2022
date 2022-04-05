-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-04-2022 a las 22:35:51
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simuladormundial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

DROP TABLE IF EXISTS `grupo`;
CREATE TABLE IF NOT EXISTS `grupo` (
  `Nombre_grupo` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_grupo` int NOT NULL AUTO_INCREMENT,
  `id_pais1` int NOT NULL,
  `id_pais2` int NOT NULL,
  `id_pais3` int NOT NULL,
  `id_pais4` int NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`Nombre_grupo`, `id_grupo`, `id_pais1`, `id_pais2`, `id_pais3`, `id_pais4`) VALUES
('a', 1, 1, 2, 3, 4),
('b', 2, 5, 6, 7, 8),
('c', 3, 9, 10, 11, 12),
('d', 4, 13, 14, 15, 16),
('e', 5, 17, 18, 19, 20),
('f', 6, 21, 22, 23, 24),
('g', 7, 25, 26, 27, 28),
('h', 8, 29, 30, 31, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

DROP TABLE IF EXISTS `paises`;
CREATE TABLE IF NOT EXISTS `paises` (
  `Nombre` varchar(50) NOT NULL,
  `Mundiales_jugados` int NOT NULL,
  `Cant_victorias` int NOT NULL,
  `Cant_empates` int NOT NULL,
  `Cant_derrotas` int NOT NULL,
  `id_pais` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_pais`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`Nombre`, `Mundiales_jugados`, `Cant_victorias`, `Cant_empates`, `Cant_derrotas`, `id_pais`) VALUES
('Qatar', 1, 0, 0, 0, 1),
('Ecuador', 4, 0, 0, 0, 2),
('Senegal', 3, 0, 0, 0, 3),
('Netherlands', 11, 0, 0, 0, 4),
('England', 16, 0, 0, 0, 5),
('Iran', 6, 0, 0, 0, 6),
('USA', 12, 0, 0, 0, 7),
('Repechaje1', 0, 0, 0, 0, 8),
('Argentina', 18, 0, 0, 0, 9),
('Saudi Arabia', 6, 0, 0, 0, 10),
('Mexico', 16, 0, 0, 0, 11),
('Poland', 9, 0, 0, 0, 12),
('France', 15, 0, 0, 0, 13),
('Repechaje2', 0, 0, 0, 0, 14),
('Denmark', 6, 0, 0, 0, 15),
('Tunisia', 6, 0, 0, 0, 16),
('Spain', 15, 0, 0, 0, 17),
('Repechaje3', 0, 0, 0, 0, 18),
('Germany', 19, 0, 0, 0, 19),
('Japan', 6, 0, 0, 0, 20),
('Belgium', 14, 0, 0, 0, 21),
('Canada', 2, 0, 0, 0, 22),
('Morocco', 6, 0, 0, 0, 23),
('Croatia', 6, 0, 0, 0, 24),
('Brazil', 21, 0, 0, 0, 25),
('Serbia', 15, 0, 0, 0, 26),
('Switzerland', 11, 0, 0, 0, 27),
('Cameroon', 8, 0, 0, 0, 28),
('Portugal', 8, 0, 0, 0, 29),
('Ghana', 4, 0, 0, 0, 30),
('Uruguay', 14, 0, 0, 0, 31),
('Korea Republic', 11, 0, 0, 0, 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

DROP TABLE IF EXISTS `partido`;
CREATE TABLE IF NOT EXISTS `partido` (
  `id_partido` int NOT NULL AUTO_INCREMENT,
  `pais1` varchar(50) NOT NULL,
  `pais2` varchar(50) NOT NULL,
  `resultado_anterior` varchar(50) NOT NULL,
  PRIMARY KEY (`id_partido`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prediccion`
--

DROP TABLE IF EXISTS `prediccion`;
CREATE TABLE IF NOT EXISTS `prediccion` (
  `id_usuario` int NOT NULL,
  `id_partido` int NOT NULL,
  `gol_visitante` int NOT NULL,
  `gol_local` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
