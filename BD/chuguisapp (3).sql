-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2021 a las 04:59:30
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chuguisapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `babies`
--

CREATE TABLE `babies` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `altura` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `alimentos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `pecho` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `sueño` int(11) NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `date`) VALUES
(1, 'hola@gmail.com', '2021-05-22 10:19:19'),
(2, 'hola@gmail.com', '2021-05-22 10:19:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `movil` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `descrip` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `local` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `color` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pass2` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `mail`, `pass`, `pass2`, `picture`, `created`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$vU6xNAAw2DKMI8emoE/iuOcONG0vfJ4n5a58nhTZVJBoleJaYqWXm', '$2y$10$vU6xNAAw2DKMI8emoE/iuOcONG0vfJ4n5a58nhTZVJBoleJaYqWXm', 'capitana.jpg', '2021-05-23 04:22:04', 0),
(2, 'hola', 'hola@gmail.com', '$2y$10$XiFntESJizOVDRHufsO6JOT4dcZZqrF5KIxPf3lXdaKUAC8zb8RZm', '$2y$10$XiFntESJizOVDRHufsO6JOT4dcZZqrF5KIxPf3lXdaKUAC8zb8RZm', 'fig_desdentao_pop.jpg', '2021-05-23 04:28:12', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `babies`
--
ALTER TABLE `babies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `babies`
--
ALTER TABLE `babies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `babies`
--
ALTER TABLE `babies`
  ADD CONSTRAINT `babies_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
