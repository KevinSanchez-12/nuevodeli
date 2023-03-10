-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2021 at 10:27 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nuevodeli`
--

-- --------------------------------------------------------

--
-- Table structure for table `admi`
--

CREATE TABLE `admi` (
  `id` int(11) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `contra` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admi`
--

INSERT INTO `admi` (`id`, `correo`, `contra`) VALUES
(1, 'prueba@gmail.com', 'prueba');

-- --------------------------------------------------------

--
-- Table structure for table `tbldetalleventa`
--

CREATE TABLE `tbldetalleventa` (
  `ID` int(11) NOT NULL,
  `IDVENTA` int(11) NOT NULL,
  `IDPRODUCTO` int(11) NOT NULL,
  `PRECIOUNITARIO` decimal(20,2) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `DESCARGADO` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblproductos`
--

CREATE TABLE `tblproductos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,2) NOT NULL,
  `Descripcion` text NOT NULL,
  `Categoria` varchar(200) NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblproductos`
--

INSERT INTO `tblproductos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Categoria`, `Imagen`) VALUES
(1, 'Cerveza Pilsen 6 Pack', '23.00', '355 ml c/u', 'Cerveza', 'assets/img/productos/1.jpg'),
(2, 'Cerveza Pilsen 12 Pack', '46.00', '355 ml c/u', 'Cerveza', 'assets/img/productos/2.jpg'),
(3, 'Cerveza Corona 6 Pack', '29.00', '355 ml c/u', 'Cerveza', 'assets/img/productos/3.jpg'),
(4, 'Cerveza Pilsen 6 Botellas', '21.00', '305 ml c/u', 'Cerveza', 'assets/img/productos/4.jpg'),
(5, 'Cerveza Cusqueña Negra 6 Botellas', '26.00', '305 ml c/u', 'Cerveza', 'assets/img/productos/5.jpg'),
(6, 'Cerveza Cusqueña Trigo 6 Botellas', '26.00', '305 ml c/u', 'Cerveza', 'assets/img/productos/6.jpg'),
(7, 'Cerveza Cristal 6 Pack', '19.00', '355 ml c/u', 'Cerveza', 'assets/img/productos/7.jpg'),
(8, 'Cerveza Cusqueña Negra 6 Pack', '28.00', '355 ml c/u', 'Cerveza', 'assets/img/productos/8.jpg'),
(9, 'Cerveza Cusqueña Trigo 6 Pack', '28.00', '355 ml c/u', 'Cerveza', 'assets/img/productos/9.jpg'),
(10, 'Vino Tinto Santiago Queirolo Magdalena Semi Seco', '18.00', '750 ml', 'Vino', 'assets/img/productos/10.jpg'),
(11, 'Vino Tinto Tabernero Borgoña', '18.00', '750 ml', 'Vino', 'assets/img/productos/11.jpg'),
(12, 'Vino Rosé Semi Seco Tabernero', '18.00', '750 ml', 'Vino', 'assets/img/productos/12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblventas`
--

CREATE TABLE `tblventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransaccion` varchar(250) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(5000) NOT NULL,
  `Total` decimal(60,2) NOT NULL,
  `estado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `testimonios`
--

CREATE TABLE `testimonios` (
  `id` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `comentario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonios`
--

INSERT INTO `testimonios` (`id`, `foto`, `nombre`, `comentario`) VALUES
(1, 'assets/img/usuarios/0001.png', 'Kevin Sánchez', 'Buen servicio'),
(2, 'assets/img/usuarios/0013.png', 'Renato Yupanqui', 'Me agrada el servicio'),
(4, 'assets/img/usuarios/a6de9fd9-6141-47aa-b8e6-547e0358f276.jpg', 'Julieta Mendoza', 'Excelente servicio! Es muy rápido'),
(5, 'assets/img/usuarios/5b0ea998ae12895cfc7810484.png', 'Luis Torres', 'El servicio es muy bueno! Se los recomiendo'),
(6, 'assets/img/usuarios/000709854W.jpg', 'José Ceballos', 'Los pagos se hacen muy rápido, me ayuda mucho!'),
(7, 'assets/img/usuarios/descarga (1).jfif', 'Renato Morón', 'Se los recomiendo, tragos muy variados!'),
(8, 'assets/img/usuarios/descarga (2).jfif', 'Ana Hernández', 'NUEVODELI es muy bueno, este delivery es muy rápido!'),
(9, 'assets/img/usuarios/036b8916b3d89b29a4342d0e57d036a9.jpg', 'Fernanda Ramos', 'Los tragos tienen muy buenos precios! Muy bueno'),
(10, 'assets/img/usuarios/000507783W.jpg', 'Alejandra Ochoa', 'Los vinos son muy ricos y el delivery es muy bueno, se los recomiendo!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admi`
--
ALTER TABLE `admi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDVENTA` (`IDVENTA`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`);

--
-- Indexes for table `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `testimonios`
--
ALTER TABLE `testimonios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admi`
--
ALTER TABLE `admi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `testimonios`
--
ALTER TABLE `testimonios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbldetalleventa`
--
ALTER TABLE `tbldetalleventa`
  ADD CONSTRAINT `tbldetalleventa_ibfk_1` FOREIGN KEY (`IDVENTA`) REFERENCES `tblventas` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbldetalleventa_ibfk_2` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `tblproductos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
