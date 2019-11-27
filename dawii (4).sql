-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2019 a las 03:13:49
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
  `descripcionn` varchar(450) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `noticias_idnoticias` int(11) DEFAULT NULL,
  `usuarios_idusuarios` int(11) DEFAULT NULL,
  `juegos_idjuegos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idimagenes`, `fecha_creacion`, `descripcionn`, `nombre`, `noticias_idnoticias`, `usuarios_idusuarios`, `juegos_idjuegos`) VALUES
(4, 'asdas', 'jssor', 'img/news/1.jpg', 1, NULL, NULL),
(5, '12', 'jssor', 'img/wallpaper/capa_doom.jpg', NULL, NULL, 7),
(8, 'asdsa', 'jssor', 'img/news/11.jpg', NULL, NULL, NULL),
(9, '25/11/2019', 'jssor', 'img/wallpaper/capa_metro.jpg', NULL, NULL, 8),
(12, '321', '654', '9', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `idjuegos` int(11) NOT NULL,
  `nombree` varchar(45) DEFAULT NULL,
  `descripcion` varchar(4500) DEFAULT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `distribuidora` varchar(45) DEFAULT NULL,
  `lanzamiento` varchar(45) DEFAULT NULL,
  `capa` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`idjuegos`, `nombree`, `descripcion`, `autor`, `distribuidora`, `lanzamiento`, `capa`) VALUES
(7, 'Doom(2016)', 'Ahora incluye los tres paquetes de contenido descargable premium (Unto the Evil-Hell Followed-Bloodfall), mapas, modos y armas, así como todas las actualizaciones de funcionalidades, como el modo Arcade, el modo Foto y la actualización 6.66, la más reciente, que trae más mejoras multijugador.', ' id Software', ' Bethesda Softworks', '13 MAY 2016', 'img/capa/doom.jpg'),
(8, 'Metro Exodus', 'Huye de las ruinas devastadas del metro de Moscú y embárcate en un viaje épico por todo el continente en las estepas de la Rusia postapocalíptica. Explora niveles no lineales enormes, sobrevive en un mundo abierto y sigue una narrativa apasionante que abarca todo un año en la mayor aventura de Metro hasta ahora.', ' 4A Games', 'Deep Silver', '15 FEB 2019', 'img/capa/metro.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idnoticias` int(11) NOT NULL,
  `fecha_ingreso` varchar(45) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `descripcion` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idnoticias`, `fecha_ingreso`, `titulo`, `descripcion`) VALUES
(1, '21/05/2018', 'Lorem ipsum dolor sit', 'Lorem ipsum dolor sit amet, \r\n				consectetur adipisicing elit. Vero \r\n				nulla delectus sit vel magnam, ad vo\r\n				luptatem hic. Maxime ipsam quibusdam\r\n				eius exercitationem iusto, totam poss\r\n				imus dolore magnam voluptatum illum consequuntur.</p>\r\n				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. \r\n				Vero nulla delectus sit vel magnam, ad voluptatem hic. Maxim\r\n				e ipsam quibusdam eius exercitationem iusto, totam possimus \r\n				dolore magnam voluptatum illum consequuntur.</p><p>\r\n\r\nDeserunt cupiditate error repudiandae doloribus est sit id ad repellendus \r\nvoluptates molestiae ratione eaque, iure, odit culpa delectus harum asperio\r\nres ab a aut, molestias possimus! Tempore commodi iste soluta voluptatibus.</p><p>\r\n\r\nQuaerat vero velit voluptatem nostrum natus ipsa, eius dicta veritatis iste \r\nodio maiores harum nesciunt reiciendis, dolore eum animi error quia earum enim\r\n beatae omnis, laudantium minima ab ut accusamus.</p><p>\r\n\r\nVoluptatem, ullam, beatae. Libero ad nemo, id. Quidem facilis, eaque iste \r\nducimus dicta quia quaerat quisquam cum ab, velit voluptate at optio vero, \r\nostrum enim, a officiis rerum recusandae eum?</p><p>\r\n\r\nLaboriosam recusandae vitae aliquid veritatis facilis omnis architecto offi\r\ncia, explicabo deleniti doloribus odio sequi, harum id suscipit ipsa laborum,\r\n ducimus. Sequi quasi vitae necessitatibus harum ab pariatur eos perspiciatis quo!');

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
  `estado` varchar(45) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `sobremi` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `fecha_ingreso`, `tipo`, `nombre`, `saldo`, `estado`, `pass`, `sobremi`) VALUES
(3, '28/02/52', 'Cliente', 'ricardittox', '231', 'Acasd', '1233', 'zxc'),
(4, '123', '123', '123', '123', '123', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idimagenes`),
  ADD KEY `fk_imagenes_noticias_idx` (`noticias_idnoticias`),
  ADD KEY `fk_imagenes_usuarios1_idx` (`usuarios_idusuarios`),
  ADD KEY `fk_imagenes_juegos1_idx` (`juegos_idjuegos`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`idjuegos`);

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
  MODIFY `idimagenes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `idjuegos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idnoticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `fk_imagenes_juegos1` FOREIGN KEY (`juegos_idjuegos`) REFERENCES `juegos` (`idjuegos`),
  ADD CONSTRAINT `fk_imagenes_noticias` FOREIGN KEY (`noticias_idnoticias`) REFERENCES `noticias` (`idnoticias`),
  ADD CONSTRAINT `fk_imagenes_usuarios1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idusuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
