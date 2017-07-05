-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-07-2017 a las 16:28:06
-- Versión del servidor: 5.7.18-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.18-0ubuntu0.16.04.1

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
-- Estructura de tabla para la tabla `Pedidos`
--

CREATE TABLE `Pedidos` (
  `id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Product`
--

CREATE TABLE `Product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `price` float NOT NULL,
  `active` tinyint(1) NOT NULL,
  `image` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `product_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Product`
--

INSERT INTO `Product` (`id`, `name`, `price`, `active`, `image`, `product_category_id`) VALUES
(11, 'mini laptop hp', 234099, 1, 'miniLaptopHP.jpg', 3),
(12, 'lapto canaima', 100000, 1, 'laptopCanaima.png', 3),
(13, 'Telvisor LG', 3000000, 1, 'televisorLG.jpg', 1),
(14, 'Televisor Haier', 500000, 0, 'televisorHaier.jpg', 1),
(15, 'Televisor Samsung', 4000000, 1, 'televisorSamsung.png', 1),
(16, 'Nevera LG', 6000000, 1, 'neveraLG.jpg', 4),
(18, 'Ventilador Taurus', 250000, 1, 'ventiladorParedTaurus.jpg', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ProductCategory`
--

CREATE TABLE `ProductCategory` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ProductCategory`
--

INSERT INTO `ProductCategory` (`id`, `name`, `description`) VALUES
(1, 'Televisores ', 'Estos son televisores'),
(2, 'Computadoras de escritorio', 'Estas computadoras se usan en una mesa fija'),
(3, 'Computadoras Portatiles', 'Estas computadoras no requieren de una mesa o lugar fijo para ser usadas'),
(4, 'Neveras', 'Su funciÃ³n es mantener los alimentos perecederos '),
(5, 'Ventiladores de piso', 'Poseen una base para ser apoyada sobre una superficie plana'),
(6, 'Ventiladores de Pared', 'Tienen una estructura para ser colgados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(16) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `User`
--

INSERT INTO `User` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'Freddy', 'Morillo', 'freddy@gmail.com', '16162020f'),
(2, 'Freddy', 'Morillo', 'root@gmail.com', '3367'),
(3, 'Usuario', 'Administrador', 'root', 'abdc1234'),
(4, 'Blanca', 'Aguirre', 'blanca@gmail.com', '1234'),
(5, 'Blanca', 'Maillyn', 'blancaa@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Pedidos`
--
ALTER TABLE `Pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indices de la tabla `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_id` (`product_category_id`),
  ADD KEY `image` (`image`);

--
-- Indices de la tabla `ProductCategory`
--
ALTER TABLE `ProductCategory`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Pedidos`
--
ALTER TABLE `Pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `Product`
--
ALTER TABLE `Product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `ProductCategory`
--
ALTER TABLE `ProductCategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Pedidos`
--
ALTER TABLE `Pedidos`
  ADD CONSTRAINT `Pedidos_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

--
-- Filtros para la tabla `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `Product_ibfk_1` FOREIGN KEY (`product_category_id`) REFERENCES `ProductCategory` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
