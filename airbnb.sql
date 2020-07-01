-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-07-2020 a las 02:52:22
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `airbnb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `type` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `rooms` int(10) NOT NULL,
  `price` int(20) NOT NULL,
  `area` int(20) NOT NULL,
  `iduser` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `property`
--

INSERT INTO `property` (`id`, `title`, `type`, `address`, `rooms`, `price`, `area`, `iduser`) VALUES
(2, 'villa', 'casa', 'calle22220', 6, 5000, 10, 1),
(3, 'the rouse', 'penhouse', 'circular 13 ', 10, 20000, 15, 1),
(4, 'the rouse', 'apartamento', 'calle 20', 5, 10000, 24, 2),
(9, 'la agonia', 'casa de verano', 'rionegro ', 10, 100000, 240, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `type_id` int(2) NOT NULL,
  `identification` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `email`, `type_id`, `identification`, `password`) VALUES
(2, 'juan', 'gallego', 'juan@hotmail.com', 1, '103554', '123456'),
(3, 'camilo', 'castrillom', 'kmylon@hotmail.com', 2, '425255', 'ñakiti'),
(8, 'miryam', 'rojas', 'rojitas@hotmail.com', 104553554, '1', ' 1234562445 '),
(31, 'miryamj', 'rojakns', 'rojitas@hotmail.com', 104553554, '1', ' 123456244278347'),
(33, 'david', 'rojakns', 'rojitashotmail.com', 104553554, '1', ' 123456244278347'),
(34, 'david', 'rojakndfghjkjhgfdfghjhgfdfghgfdfgs', 'rojitashotmail.com', 104553554, '1', ' 123456244278347'),
(36, 'david', 'flores', 'rojitas@hotmail.com', 104553554, '1', ' 123456244278347'),
(37, 'david', 'flores', 'rojitas@hotmail.com', 104553554, '1', ' 123456244278347'),
(38, 'david', 'flores', 'rojitas@hotmail.com', 104553554, '1', ' 123456244278347'),
(39, 'david', 'flor', 'rojitas@hotmail.com', 104553554, '1', ' 123456244278347');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
