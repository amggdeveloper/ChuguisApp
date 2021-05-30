-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2021 a las 21:33:05
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
  `name` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `babies`
--

INSERT INTO `babies` (`id`, `name`, `date`, `height`, `weight`, `notes`, `gender`, `usuario`) VALUES
(51, 'Diana', '2021-05-22', 98, 2500, 'añldkjñaslkjdf', 'Femenino', 1),
(55, 'pepito', '2021-05-05', 65, 3500, 'uuuuuuuuuuuuuuuuuuuuuuu', '', 1),
(78, 'Pedro', '2002-02-25', 78, 3500, 'sdfsdfsdfdfs', 'Masculino', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `week` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `food`
--

INSERT INTO `food` (`id`, `name`, `date`, `week`, `iduser`) VALUES
(3, 'Zanahoria', '2021-05-06', 'Jueves', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `height`
--

CREATE TABLE `height` (
  `id` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `idbaby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `height`
--

INSERT INTO `height` (`id`, `height`, `date`, `notes`, `idbaby`) VALUES
(94, 98, '2021-05-26', 'qwrwqe', 78);

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
(22, 'holacaracola@gmail.com', '2021-05-27 23:21:02'),
(23, 'holacaracola@gmail.com', '2021-05-27 23:21:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `movil` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'vacio',
  `descrip` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'vacio',
  `country` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'vacio',
  `local` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'vacio',
  `color` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'blue',
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`id`, `movil`, `descrip`, `country`, `local`, `color`, `iduser`) VALUES
(1, '666666666', 'adsfadfasdfdsfsdfadfasdfasdfasdf', 'España', 'Murcia', 'dark', 1),
(24, '000 000 000', 'pues parace que ahora va prueba bien dafasfdasdfasdf', 'España', 'Murcia', 'dark', 3),
(34, 'vacio', 'vacio', 'vacio', 'vacio', 'purple', 26),
(35, '888888888', 'sddssd', 'España', 'Murcia', 'orange', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `takes`
--

CREATE TABLE `takes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `breast` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sleep` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `time` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `takes`
--

INSERT INTO `takes` (`id`, `name`, `breast`, `sleep`, `date`, `time`, `iduser`) VALUES
(24, 'Contacto', 'Derecho', 'Si', '2021-05-04', '34\'', 3);

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
(1, 'admin', 'admin@gmail.com', '$2y$10$vU6xNAAw2DKMI8emoE/iuOcONG0vfJ4n5a58nhTZVJBoleJaYqWXm', '$2y$10$vU6xNAAw2DKMI8emoE/iuOcONG0vfJ4n5a58nhTZVJBoleJaYqWXm', 'default.png', '2021-05-23 04:22:04', 1),
(3, 'prueba', 'prueba@gmail.com', '$2y$10$47CfMPVcrYRsK/S2mMoemu0TjjZaFnW1B6n.ivXfJBjve1dBsZp52', '$2y$10$47CfMPVcrYRsK/S2mMoemu0TjjZaFnW1B6n.ivXfJBjve1dBsZp52', 'capitana.jpg', '2021-05-23 16:34:36', 0),
(26, 'Hola', 'hola@gmail.com', '$2y$10$zQBk/GL6UYJg6b5qodq40uQTit5L7YtXBW5wvbUtZ8OQF01llEHSq', '$2y$10$zQBk/GL6UYJg6b5qodq40uQTit5L7YtXBW5wvbUtZ8OQF01llEHSq', 'fig_desdentao_pop.jpg', '2021-05-30 18:54:37', 0),
(27, 'pedro', 'pedro@gmail.com', '$2y$10$Q35T4ioY0KpABCWDIhipmO0Cxe7L0lIWaio0lqB.dCPaX1MSQLaWG', '$2y$10$Q35T4ioY0KpABCWDIhipmO0Cxe7L0lIWaio0lqB.dCPaX1MSQLaWG', 'fig_Harry_Potter.jpg', '2021-05-30 19:25:28', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vaccines`
--

CREATE TABLE `vaccines` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `vaccines`
--

INSERT INTO `vaccines` (`id`, `name`, `date`, `notes`, `iduser`) VALUES
(58, 'Vesero 1', '3333-02-01', 'sdasd', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `weight`
--

CREATE TABLE `weight` (
  `id` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `idbaby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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
-- Indices de la tabla `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`);

--
-- Indices de la tabla `height`
--
ALTER TABLE `height`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idbaby` (`idbaby`);

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
-- Indices de la tabla `takes`
--
ALTER TABLE `takes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`);

--
-- Indices de la tabla `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idbaby` (`idbaby`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `babies`
--
ALTER TABLE `babies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `height`
--
ALTER TABLE `height`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `takes`
--
ALTER TABLE `takes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `weight`
--
ALTER TABLE `weight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `babies`
--
ALTER TABLE `babies`
  ADD CONSTRAINT `babies_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `food_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `height`
--
ALTER TABLE `height`
  ADD CONSTRAINT `height_ibfk_1` FOREIGN KEY (`idbaby`) REFERENCES `babies` (`id`);

--
-- Filtros para la tabla `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `takes`
--
ALTER TABLE `takes`
  ADD CONSTRAINT `takes_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `takes_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `vaccines`
--
ALTER TABLE `vaccines`
  ADD CONSTRAINT `vaccines_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `weight`
--
ALTER TABLE `weight`
  ADD CONSTRAINT `weight_ibfk_1` FOREIGN KEY (`idbaby`) REFERENCES `babies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
