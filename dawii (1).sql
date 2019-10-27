-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2019 a las 00:54:19
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dawii`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `idimagenes` int(11) NOT NULL,
  `fecha_creacion` varchar(45) DEFAULT NULL,
  `descripcion` varchar(450) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `noticias_idnoticias` int(11) NOT NULL,
  `usuarios_idusuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `idjuegos` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(4500) DEFAULT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `distribuidora` varchar(45) DEFAULT NULL,
  `lanzamiento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos_has_imagenes`
--

CREATE TABLE `juegos_has_imagenes` (
  `juegos_idjuegos` int(11) NOT NULL,
  `imagenes_idimagenes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idnoticias` int(11) NOT NULL,
  `fecha_creacion` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL,
  `fecha_ingreso` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `saldo` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `fecha_ingreso`, `tipo`, `nombre`, `saldo`, `estado`) VALUES
(1, 'sadasd', 'Administrador', 'dsfagf', 'fasd', 'sadf'),
(2, '123123', '1231', '23123', '123', '123123'),
(3, '28/02/52', 'Cliente', 'Richard SUarez', '231', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idimagenes`),
  ADD KEY `fk_imagenes_noticias_idx` (`noticias_idnoticias`),
  ADD KEY `fk_imagenes_usuarios1_idx` (`usuarios_idusuarios`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`idjuegos`);

--
-- Indices de la tabla `juegos_has_imagenes`
--
ALTER TABLE `juegos_has_imagenes`
  ADD PRIMARY KEY (`juegos_idjuegos`,`imagenes_idimagenes`),
  ADD KEY `fk_juegos_has_imagenes_imagenes1_idx` (`imagenes_idimagenes`),
  ADD KEY `fk_juegos_has_imagenes_juegos1_idx` (`juegos_idjuegos`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idnoticias`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idimagenes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `idjuegos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idnoticias` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `fk_imagenes_noticias` FOREIGN KEY (`noticias_idnoticias`) REFERENCES `noticias` (`idnoticias`),
  ADD CONSTRAINT `fk_imagenes_usuarios1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idusuarios`);

--
-- Filtros para la tabla `juegos_has_imagenes`
--
ALTER TABLE `juegos_has_imagenes`
  ADD CONSTRAINT `fk_juegos_has_imagenes_imagenes1` FOREIGN KEY (`imagenes_idimagenes`) REFERENCES `imagenes` (`idimagenes`),
  ADD CONSTRAINT `fk_juegos_has_imagenes_juegos1` FOREIGN KEY (`juegos_idjuegos`) REFERENCES `juegos` (`idjuegos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
