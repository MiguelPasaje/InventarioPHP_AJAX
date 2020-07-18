-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2020 a las 21:06:16
-- Versión del servidor: 10.4.11-MariaDB-log
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre_marca` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre_marca`) VALUES
(1, 'xxxxxx'),
(2, 'yyyyyy'),
(3, 'Colacteos'),
(4, 'Alpina'),
(5, 'Ramo'),
(6, 'Noel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `idMarca` int(11) NOT NULL,
  `id_proveerdor` int(11) NOT NULL,
  `id_zona` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `descripcion_producto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `idMarca`, `id_proveerdor`, `id_zona`, `codigo`, `descripcion_producto`, `precio`) VALUES
(2, 2, 123, 2, 345, 'avena 500 gr 1 libra', 2000),
(3, 4, 126, 1, 998, 'Leche un litro ', 2600),
(4, 3, 125, 3, 755, 'Leche un litro ', 2400),
(5, 6, 123, 1, 393, 'Galletas Saltin 1 taco', 1000),
(6, 5, 124, 2, 651, 'pasteles 150 gr', 1200),
(7, 3, 125, 3, 997, 'Yogurt bolsa 90 gr', 700),
(11, 1, 126, 1, 996, 'arroz forHuila 1/2 kg 500gr', 2800),
(12, 1, 126, 1, 996, 'lenteja', 3000),
(14, 2, 126, 2, 2346, 'arbeja', 99999),
(15, 1, 123, 1, 3452345, 'croquetass', 3000),
(16, 1, 123, 1, 123123, 'arroz kg', 5200),
(17, 1, 123, 1, 123, 'fideos comarrico', 1000),
(18, 1, 123, 1, 8678, 'qwqwqw', 844540),
(20, 6, 124, 2, 12345667, 'dulces noel 5 gr', 200),
(1396, 2, 126, 2, 2346, 'uuuuuuuuuu', 99999),
(1398, 1, 123, 1, 2345, 'avena 1kg', 3600);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `descripcion_proveedor` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `descripcion_proveedor`) VALUES
(123, 'puyo'),
(124, 'corbeta'),
(125, 'Colacteos'),
(126, 'Alpina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `usuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_user` int(1) NOT NULL COMMENT '1 admin o 2 user',
  `estado` int(1) NOT NULL COMMENT '0 desact 1 activ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `tipo_user`, `estado`) VALUES
(1, 'admin', '$2y$10$iO9ViDeF4fkz8.sLBxbl9urnw47XpjWTPV96QBN43X49d7ku2pGrW', 1, 0),
(4, 'asdfasadf', '$2y$10$TbY4TdYJ6jWOc0J0iu0QkOLhX4nKpmXyKQhK98P0FrnElYJYncfo6', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id_zona` int(11) NOT NULL,
  `descripcion_zona` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id_zona`, `descripcion_zona`) VALUES
(1, 'estantA'),
(2, 'estantB'),
(3, 'Refrigerador'),
(4, 'Nevera');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_marca_2` (`id_marca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `idMarca` (`idMarca`),
  ADD KEY `id_proveerdor` (`id_proveerdor`),
  ADD KEY `id_zona` (`id_zona`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id_zona`),
  ADD KEY `id_zona` (`id_zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1400;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idMarca`) REFERENCES `marca` (`id_marca`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`id_proveerdor`) REFERENCES `proveedor` (`id_proveedor`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`id_zona`) REFERENCES `zonas` (`id_zona`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
