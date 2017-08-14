-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-08-2017 a las 16:29:46
-- Versión del servidor: 5.7.19-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productosPhp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `price` float NOT NULL,
  `active` tinyint(1) NOT NULL,
  `image` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `product_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `active`, `image`, `product_category_id`) VALUES
(15, 'Televisor Samsung', 4000000, 1, 'televisorSamsung.png', 1),
(16, 'Nevera LG', 6000000, 1, 'neveraLG.jpg', 4),
(32, 'Ventilador Taurus', 300000, 1, 'ventiladorParedTaurus.jpg', 13),
(33, 'Telvisor LG', 2500000, 1, 'televisorLG.jpg', 1),
(34, 'lapto canaima', 200000, 1, 'laptopCanaima.png', 3),
(35, 'mini laptop hp', 1200000, 1, 'miniLaptopHP.jpg', 3),
(36, 'Televisor Haier', 750000, 1, 'televisorHaier.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productCategory`
--

CREATE TABLE `productCategory` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productCategory`
--

INSERT INTO `productCategory` (`id`, `name`, `description`) VALUES
(1, 'Televisores ', 'Estos son televisores.'),
(3, 'Computadoras Portatiles', 'Estas computadoras no requieren de una mesa o lugar fijo para ser usadas'),
(4, 'Neveras', 'Su funciÃ³n es mantener los alimentos perecederos '),
(13, 'Ventiladores de Pared', 'EstÃ¡n diseÃ±ados para ser colgados en la pared'),
(14, 'Ventiladores de piso', 'Tienen un base para colocarlos en una superficie plana'),
(15, 'Computadoras de escritorio', 'diseÃ±adas para permanecer en un lugar fijo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(16) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(3, 'Usuario', 'Administrador', 'root', 'abdc1234'),
(4, 'Mai', 'Aguirre', 'blanca@gmail.com', '1234'),
(21, 'werty', 'qwerty', 'blancaa@gmail.com', '1234'),
(34, 'w', 'w', 'w', 'w'),
(35, 'R', 'R', 'R', 'R'),
(36, 'Ã±', 'Ã±', 'Ã±', 'Ã±');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_id` (`product_category_id`),
  ADD KEY `image` (`image`);

--
-- Indices de la tabla `productCategory`
--
ALTER TABLE `productCategory`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `productCategory`
--
ALTER TABLE `productCategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_category_id`) REFERENCES `productCategory` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
