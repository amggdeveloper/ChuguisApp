-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2021 a las 14:09:14
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
(2, 'Diana', '2020-03-13', 45, 1500, 'Nace prematura. La alimentación la toma por sonda.', 'Femenino', 2);

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
(1, 'Pimiento', '2021-06-02', 'Lunes', 2);

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
(1, 60, '2021-06-02', 'primera medida 3 semanas después del nacimiento. ', 2);

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
(1, 'prueba@gmail.com', '2021-06-06 12:08:42');

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
(1, 'vacio', 'vacio', 'vacio', 'vacio', 'dark', 1),
(2, '666666666', 'usuario de prueba', 'España', 'Murcia', 'purple', 2);

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
(1, 'Primera toma de la Mañana', 'Izquierdo', 'No', '2021-06-10', '15\'', 2);

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
(1, 'admin', 'admin@gmail.com', '$2y$10$IvFtMnF3JrBZvmjzEaGPJuSIkSPKhJupy0akEM5/wceQr.CjiH5R6', '$2y$10$IvFtMnF3JrBZvmjzEaGPJuSIkSPKhJupy0akEM5/wceQr.CjiH5R6', 'default.png', '2021-06-06 13:55:22', 1),
(2, 'prueba', 'prueba@gmail.com', '$2y$10$.4/6c0izZr3ZWFEDclKXOeL/O20rm24NMToAhS5NsIvX4x9ehy0QG', '$2y$10$.4/6c0izZr3ZWFEDclKXOeL/O20rm24NMToAhS5NsIvX4x9ehy0QG', 'capitana.jpg', '2021-06-06 13:56:54', 0);

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
(1, 'Vesero', '2021-06-02', 'Primera dosis', 2);

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
-- Volcado de datos para la tabla `weight`
--

INSERT INTO `weight` (`id`, `weight`, `date`, `notes`, `idbaby`) VALUES
(1, 2500, '2021-06-10', 'Primera medida de peso, sin pañal.', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `height`
--
ALTER TABLE `height`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `takes`
--
ALTER TABLE `takes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `weight`
--
ALTER TABLE `weight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
