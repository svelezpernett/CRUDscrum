-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2022 a las 23:46:47
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lista_usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ususarios`
--

CREATE TABLE `ususarios` (
  `id` int(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ususarios`
--

INSERT INTO `ususarios` (`id`, `nombre`, `email`) VALUES
(1, 'santiago', 'svp@hotmail.com'),
(2, 'Santiago velez', 'svp@gmail.com'),
(232, 'juan', 'juan@gmail.com'),
(111111, 'asdf', 'asdf'),
(121212, 'yuliana ', 'y12@gmail.com'),
(13243434, 'juliana vargas', 'jv@gmail.com'),
(121212121, 'asdf', 'asdfdsfd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ususarios`
--
ALTER TABLE `ususarios`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
