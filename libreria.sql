-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2023 a las 21:39:32
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `email`, `password`, `Nombre`, `is_admin`) VALUES
(2, 'guilleluit18@gmail.com', 'guille1806', 'Guillermina', 1),
(3, 'marianaliptak2@gmail.com', 'mariana0403', 'Mariana', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_clientes`
--

CREATE TABLE `compra_clientes` (
  `id_libro` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nombre_libro` varchar(25) NOT NULL,
  `Total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libro` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libro`, `nombre`, `precio`) VALUES
(1, 'La insoportable levedad del ser', 5200),
(2, 'El duelo', 2600),
(3, 'El psicoanalista', 4580),
(4, 'El retrato de Dorian Gray', 6500),
(5, 'Misery ', 4500),
(6, 'Mujercitas', 3500);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `compra_clientes`
--
ALTER TABLE `compra_clientes`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id_libro` (`id_libro`) USING BTREE;

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra_clientes`
--
ALTER TABLE `compra_clientes`
  ADD CONSTRAINT `compra_clientes_ibfk_1` FOREIGN KEY (`email`) REFERENCES `cliente` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_compra_libro` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
