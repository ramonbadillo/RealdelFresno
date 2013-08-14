-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2013 at 07:45 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `espartan_punto`
--

-- --------------------------------------------------------

--
-- Table structure for table `asientos`
--

CREATE TABLE `asientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `id_Punto` int(11) NOT NULL,
  `idSalida` int(11) NOT NULL,
  `origen` varchar(50) NOT NULL,
  `destino` varchar(50) NOT NULL,
  `dollares` float NOT NULL,
  `pesos` float NOT NULL,
  `observaciones` varchar(80) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `idEstado` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `estados`
--

INSERT INTO `estados` (`id`, `descripcion`) VALUES
(1, 'Reservado'),
(2, 'Pagado'),
(3, 'Cancelado');

-- --------------------------------------------------------

--
-- Table structure for table `puntos`
--

CREATE TABLE `puntos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `puntos`
--

INSERT INTO `puntos` (`id`, `descripcion`) VALUES
(1, 'Jessy'),
(2, 'Yolanda'),
(3, 'Joel'),
(4, 'Jaime Muro'),
(5, 'Rosy'),
(6, 'Celso'),
(7, 'Betty'),
(8, 'Veronica'),
(9, 'Berta'),
(10, 'Topacio'),
(11, 'Conchita'),
(12, 'Dinora'),
(13, 'Oscar'),
(14, 'Soledad'),
(15, 'Francisco'),
(16, 'Gama'),
(17, 'Chuyita'),
(18, 'Herman'),
(19, 'Eloisa'),
(20, 'Venicia'),
(21, 'Emilia'),
(22, 'Mayra');

-- --------------------------------------------------------

--
-- Table structure for table `salidas`
--

CREATE TABLE `salidas` (
  `id` int(11) NOT NULL,
  `Destino` varchar(50) NOT NULL,
  `max` int(11) NOT NULL DEFAULT '46',
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lugar` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `password`, `lugar`) VALUES
(1, 'admin', '1234', 'Fresnillo');
