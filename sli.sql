-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 30-11-2023 a las 13:22:40
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
-- Base de datos: `sli`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_trabajo`
--

CREATE TABLE `area_trabajo` (
  `id` int(11) NOT NULL,
  `nombre_area` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `area_trabajo`
--

INSERT INTO `area_trabajo` (`id`, `nombre_area`) VALUES
(1, 'Bodega'),
(2, 'Ventas'),
(3, 'Almacen'),
(4, 'Administraticion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id`, `nombre`) VALUES
(1, 'TARJETA IDENTIDAD'),
(2, 'CEDULA DE CIUDADANIA'),
(3, 'PASAPORTE'),
(4, 'CEDULA DE EXTRANJERIA'),
(5, 'NIT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombres` varchar(250) NOT NULL,
  `apellidos` varchar(250) NOT NULL,
  `id_tipo_documento` varchar(255) NOT NULL,
  `num_documento` varchar(255) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefono_contacto` varchar(255) NOT NULL,
  `direccion_domicilio` varchar(250) NOT NULL,
  `fecha_nacimiento` varchar(255) NOT NULL,
  `contrasena` varchar(250) NOT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `id_area` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `apellidos`, `id_tipo_documento`, `num_documento`, `email`, `telefono_contacto`, `direccion_domicilio`, `fecha_nacimiento`, `contrasena`, `estado`, `id_area`) VALUES
(2, 'JUAN CAMILO', 'BLANDON GARZON', '2', '1075284753', 'napaca32@gmail.com', '3212012366', 'CALLE 78', '2023-11-12', '123', NULL, NULL),
(3, 'OSCAR', 'ALVARADO', '2', '123456', 'EMAIL@.COM', '123456789', 'CALLE 75', '2023-11-05', '123', '1', 1),
(8, 'DEIMAR', 'CUCHIMBA', '2', '3232323', 'deimar.email@.com', '13222323', 'av 58 #56-53', '2023-10-30', 'o!L<Ic5DFo', NULL, NULL),
(9, 'FERNEY', 'ACOSTA', '2', '34343434', 'ferney13@gmail.com', '3125251', 'av 58 #56-53', '2023-10-31', '{sVJT*|Q_d', NULL, NULL),
(10, 'DIEGO', 'LARA', '2', '34343344334', 'napaca32@gmail.com', '3125251', 'av 58 #56-53', '2023-10-29', 's2pk3s<&B7', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area_trabajo`
--
ALTER TABLE `area_trabajo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area_trabajo`
--
ALTER TABLE `area_trabajo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
