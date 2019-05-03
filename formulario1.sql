-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2019 a las 22:15:33
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `edad` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `intereses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `sexo`, `edad`, `email`, `intereses`) VALUES
(1, 'Fatima Romero ', 'Femenino', '25', 'Baile', 'larissa@gmail.com'),
(2, 'Jose Espinola', 'Masculino', '35', 'deportes', ''),
(3, 'Carla Espinola', 'Femenino', '23', 'Pintura', 'carla@hotmail.com'),
(4, 'Mario', 'Casas', '28', 'deportes', 'mario@gmail.com'),
(5, 'larissa  ZARACHO', 'FEMENINO', '45', 'LECTURA', 'lari@hotmail.com'),
(6, 'Luis Prieto', 'Masculino', '45', 'Juegos', ''),
(7, 'Federico Barrios', 'Masculino', '20', 'pintura', 'fede@gmail.com'),
(8, 'Liz Ortega', 'FEMENINO', '45', 'Manualidades', ''),
(9, 'Carina Lopez', 'Femenino', '21', 'Baile', 'cari@gmail.com'),
(10, 'Leila Lopez', 'Femenino', '21', 'musica', ''),
(11, 'Fatima Romero', 'Femenino', '25', 'pintura', ''),
(12, 'Larissa Romero', 'Femenino', '25', 'manualidades', ''),
(13, 'Carla Medina', 'Femenino', '25', 'Baile', 'carla@gmail.com'),
(14, 'Liz Avalos', 'Femenino', '24', 'Canto', ''),
(15, 'Liza Flores', 'femenino', '12', 'baile', 'larirr@gmail.com'),
(16, 'Liza Flores', 'femenino', '12', 'baile', 'larirr@gmail.com'),
(17, 'Liza Flores', 'femenino', '12', 'baile', 'larirr@gmail.com'),
(18, 'Maria Sosa', 'femenino', '12', 'baile', ''),
(19, 'Maria Sosa', 'masculino', '12', 'baile', ''),
(20, 'Ricardo ', 'MASCULINO', '45', 'FUTBOL', ''),
(21, '', '', '', '', ''),
(22, 'Lilian ', 'MASCULINO', '25', 'varios', ''),
(23, 'Lilian ', 'femenino', '25', 'varios', ''),
(24, 'Larissa Romero', 'femenino', '25', 'baile', ''),
(25, 'Carlos Luna', 'MASCULINO', '25', 'juegos', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
