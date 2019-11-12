-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Nov-2019 às 15:29
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dawii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagenes`
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
-- Extraindo dados da tabela `imagenes`
--

INSERT INTO `imagenes` (`idimagenes`, `fecha_creacion`, `descripcionn`, `nombre`, `noticias_idnoticias`, `usuarios_idusuarios`, `juegos_idjuegos`) VALUES
(3, '28/0', 'jssor', 'img/news/11.jpg', 1, 1, NULL),
(4, 'asdas', 'jssor', 'img/news/1.jpg', 1, NULL, NULL),
(5, '123', 'jssor', 'img/wallpaper/capa_doom.jpg', NULL, NULL, 7),
(6, 'teste', 'teste', 'img/wallpaper/capa_metro.jpg', NULL, NULL, 8),
(9, '12321', 'qwerqewr', 'qwerqwer', 1, NULL, NULL),
(12, '$fecha_creacion', '$descripcion', '$nombre', NULL, NULL, NULL),
(14, '30/10/2019', 'testeError', 'testeError', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `juegos`
--

CREATE TABLE `juegos` (
  `idjuegos` int(11) NOT NULL,
  `nombree` varchar(45) DEFAULT NULL,
  `descripcion` varchar(4500) DEFAULT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `distribuidora` varchar(45) DEFAULT NULL,
  `lanzamiento` varchar(45) DEFAULT NULL,
  `capa` varchar(200) DEFAULT NULL,
  `precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `juegos`
--

INSERT INTO `juegos` (`idjuegos`, `nombree`, `descripcion`, `autor`, `distribuidora`, `lanzamiento`, `capa`, `precio`) VALUES
(7, 'Doom(2016)', 'Ahora incluye los tres paquetes de contenido descargable premium (Unto the Evil-Hell Followed-Bloodfall), mapas, modos y armas, así como todas las actualizaciones de funcionalidades, como el modo Arcade, el modo Foto y la actualización 6.66, la más reciente, que trae más mejoras multijugador.', ' id Software', ' Bethesda Softworks', '13 MAY 2016', 'img/capa/doom.jpg', 10),
(8, 'Metro Exodus', 'Huye de las ruinas devastadas del metro de Moscú y embárcate en un viaje épico por todo el continente en las estepas de la Rusia postapocalíptica. Explora niveles no lineales enormes, sobrevive en un mundo abierto y sigue una narrativa apasionante que abarca todo un año en la mayor aventura de Metro hasta ahora.', ' 4A Games', 'Deep Silver', '15 FEB 2019', 'img/capa/metro.jpg', 29.99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `idnoticias` int(11) NOT NULL,
  `fecha_creacion` varchar(45) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `descripcion` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`idnoticias`, `fecha_creacion`, `titulo`, `descripcion`) VALUES
(1, '21/05/2018', 'Lorem ipsum dolor sit', 'Lorem ipsum dolor sit amet, \r\n				consectetur adipisicing elit. Vero \r\n				nulla delectus sit vel magnam, ad vo\r\n				luptatem hic. Maxime ipsam quibusdam\r\n				eius exercitationem iusto, totam poss\r\n				imus dolore magnam voluptatum illum consequuntur.</p>\r\n				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. \r\n				Vero nulla delectus sit vel magnam, ad voluptatem hic. Maxim\r\n				e ipsam quibusdam eius exercitationem iusto, totam possimus \r\n				dolore magnam voluptatum illum consequuntur.</p><p>\r\n\r\nDeserunt cupiditate error repudiandae doloribus est sit id ad repellendus \r\nvoluptates molestiae ratione eaque, iure, odit culpa delectus harum asperio\r\nres ab a aut, molestias possimus! Tempore commodi iste soluta voluptatibus.</p><p>\r\n\r\nQuaerat vero velit voluptatem nostrum natus ipsa, eius dicta veritatis iste \r\nodio maiores harum nesciunt reiciendis, dolore eum animi error quia earum enim\r\n beatae omnis, laudantium minima ab ut accusamus.</p><p>\r\n\r\nVoluptatem, ullam, beatae. Libero ad nemo, id. Quidem facilis, eaque iste \r\nducimus dicta quia quaerat quisquam cum ab, velit voluptate at optio vero, \r\nostrum enim, a officiis rerum recusandae eum?</p><p>\r\n\r\nLaboriosam recusandae vitae aliquid veritatis facilis omnis architecto offi\r\ncia, explicabo deleniti doloribus odio sequi, harum id suscipit ipsa laborum,\r\n ducimus. Sequi quasi vitae necessitatibus harum ab pariatur eos perspiciatis quo!'),
(2, '28/10/2019', 'test2', 'test'),
(7, '30/10/2019', 'testeError', 'testeError'),
(8, '30/10/', 'oo', 'oooo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
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
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `fecha_ingreso`, `tipo`, `nombre`, `saldo`, `estado`, `pass`, `sobremi`) VALUES
(1, 'sadness', 'Administrador', 'Richard', 'fasd', 'sadf', '123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pulvinar sem hendrerit tempus euismod. Duis fermentum lacus eu sapien varius luctus. Quisque imperdiet sed elit non egestas. Nunc pulvinar dui ac gravida tincidunt. Maecenas sit amet lorem ut erat faucibus iaculis id vel libero. Nunc et vestibulum ex. Suspendisse consectetur vel nulla at ornare.'),
(3, '28/02/52', 'Cliente', 'Richard SUarez', '231', 'Activo', NULL, NULL),
(7, '888', 'iii666', '123@hotmail.com', 'iii555', 'iii444', '123', NULL),
(8, 'i', 'iu', 'h', 'uih', 'uh', 'iup', 'hpiu'),
(9, 'kj', 'nbok', 'ino', 'ij', 'j', 'oij', 'oi'),
(10, 'oi', 'oi', 'ji', 'oj', 'oij', 'oi', 'jo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idimagenes`),
  ADD KEY `fk_imagenes_noticias_idx` (`noticias_idnoticias`),
  ADD KEY `fk_imagenes_usuarios1_idx` (`usuarios_idusuarios`),
  ADD KEY `fk_imagenes_juegos1_idx` (`juegos_idjuegos`);

--
-- Indexes for table `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`idjuegos`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idnoticias`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idimagenes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `juegos`
--
ALTER TABLE `juegos`
  MODIFY `idjuegos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idnoticias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `fk_imagenes_juegos1` FOREIGN KEY (`juegos_idjuegos`) REFERENCES `juegos` (`idjuegos`),
  ADD CONSTRAINT `fk_imagenes_noticias` FOREIGN KEY (`noticias_idnoticias`) REFERENCES `noticias` (`idnoticias`),
  ADD CONSTRAINT `fk_imagenes_usuarios1` FOREIGN KEY (`usuarios_idusuarios`) REFERENCES `usuarios` (`idusuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
