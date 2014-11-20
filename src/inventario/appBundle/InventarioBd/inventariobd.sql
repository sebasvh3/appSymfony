-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 20-11-2014 a las 00:53:44
-- Versión del servidor: 5.5.40
-- Versión de PHP: 5.3.10-1ubuntu3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventariobd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cliente`
--

CREATE TABLE IF NOT EXISTS `Cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `afiliado` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Cliente`
--

INSERT INTO `Cliente` (`id`, `nombre`, `apellido`, `telefono`, `direccion`, `afiliado`) VALUES
(1, 'Laura', 'Martinez', '3145896321', 'Mz 21 Casa 18 Los Alpez', 'SI'),
(2, 'Pedro', 'Jimenez', '3148965237', 'Cr 12 No 17-28', 'NO'),
(3, 'Sebastian', 'Garcia', '3125687452', 'Av Circunvalar 3-01', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Empleado`
--

CREATE TABLE IF NOT EXISTS `Empleado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `Telefono` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Bonificacion` int(11) NOT NULL,
  `Sueldo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Inventario`
--

CREATE TABLE IF NOT EXISTS `Inventario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) DEFAULT NULL,
  `cantidad` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_25444D25D6E4E18` (`idproducto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Inventario`
--

INSERT INTO `Inventario` (`id`, `idproducto`, `cantidad`) VALUES
(1, 2, '25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Movimiento`
--

CREATE TABLE IF NOT EXISTS `Movimiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `idtransaccion` int(11) DEFAULT NULL,
  `garantia` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_87A213AA2B18C94B` (`idcliente`),
  KEY `IDX_87A213AAFD61E233` (`idusuario`),
  KEY `IDX_87A213AAD6E4E18` (`idproducto`),
  KEY `IDX_87A213AA79381A58` (`idtransaccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE IF NOT EXISTS `Producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idproveedor` int(11) DEFAULT NULL,
  `nombre` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `precio` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `iva` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5ECD644368DBC13B` (`idproveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`id`, `idproveedor`, `nombre`, `precio`, `iva`) VALUES
(1, 1, 'Televisor 48 Pulgadas', '850000', '16'),
(2, 1, 'Computador Dell', '1000000', '16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proveedor`
--

CREATE TABLE IF NOT EXISTS `Proveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `garantia` int(11) NOT NULL,
  `tiempoEntrega` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Proveedor`
--

INSERT INTO `Proveedor` (`id`, `nombre`, `apellido`, `telefono`, `direccion`, `garantia`, `tiempoEntrega`, `precio`) VALUES
(1, 'Manuel', 'Garcia', '314256852', 'Cr 5 No 38-45', 10, 15, 24000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Rol`
--

CREATE TABLE IF NOT EXISTS `Rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Transaccion`
--

CREATE TABLE IF NOT EXISTS `Transaccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Transaccion`
--

INSERT INTO `Transaccion` (`id`, `descripcion`) VALUES
(1, 'Compra'),
(2, 'Venta'),
(3, 'Devolucion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `bonificacion` int(11) NOT NULL,
  `sueldo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Inventario`
--
ALTER TABLE `Inventario`
  ADD CONSTRAINT `FK_25444D25D6E4E18` FOREIGN KEY (`idproducto`) REFERENCES `Producto` (`id`);

--
-- Filtros para la tabla `Movimiento`
--
ALTER TABLE `Movimiento`
  ADD CONSTRAINT `FK_87A213AA2B18C94B` FOREIGN KEY (`idcliente`) REFERENCES `Cliente` (`id`),
  ADD CONSTRAINT `FK_87A213AA79381A58` FOREIGN KEY (`idtransaccion`) REFERENCES `Transaccion` (`id`),
  ADD CONSTRAINT `FK_87A213AAD6E4E18` FOREIGN KEY (`idproducto`) REFERENCES `Producto` (`id`),
  ADD CONSTRAINT `FK_87A213AAFD61E233` FOREIGN KEY (`idusuario`) REFERENCES `Usuario` (`id`);

--
-- Filtros para la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD CONSTRAINT `FK_5ECD644368DBC13B` FOREIGN KEY (`idproveedor`) REFERENCES `Proveedor` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
