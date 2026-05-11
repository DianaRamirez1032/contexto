-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2026 a las 08:29:06
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `id_contrato` int(11) NOT NULL,
  `titulo_contrato` varchar(100) NOT NULL,
  `proveedor_contrato` varchar(50) NOT NULL,
  `descripcion_contrato` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_contrato` date NOT NULL DEFAULT curdate(),
  `estado_contrato` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Contratos';

--
-- Volcado de datos para la tabla `contratos`
--

INSERT INTO `contratos` (`id_contrato`, `titulo_contrato`, `proveedor_contrato`, `descripcion_contrato`, `id_usuario`, `fecha_contrato`, `estado_contrato`) VALUES
(1, 'Prueba 1', 'azure', 'prueba 1', 123456789, '0000-00-00', 'Borrador'),
(2, 'Prueba 1', 'azure', 'prueba 1', 123456789, '0000-00-00', 'Borrador'),
(3, 'Prueba 2', 'aws', 'prueba 3', 123456789, '2026-05-11', 'Borrador'),
(4, 'Prueba 2', 'aws', 'prueba 3', 123456789, '2026-05-11', 'Borrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partes_contratos`
--

CREATE TABLE `partes_contratos` (
  `id_parte` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `nombre_parte` varchar(100) NOT NULL,
  `rol_parte` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Partes de los contratos';

--
-- Volcado de datos para la tabla `partes_contratos`
--

INSERT INTO `partes_contratos` (`id_parte`, `id_contrato`, `nombre_parte`, `rol_parte`) VALUES
(1, 2, 'DIANA RAMIREZ', 'Cliente'),
(2, 4, 'DIANA RAMIREZ', 'Cliente'),
(3, 4, 'SAMUEL DIAZ', 'Proveedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `contraseña_usuario` varchar(200) NOT NULL,
  `estado_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Usuarios para el logIn';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `email_usuario`, `contraseña_usuario`, `estado_usuario`) VALUES
(123456789, 'Usuario Prueba', 'desarrollador9@gmail.com', '$2y$10$udTFgeQWl3dRqVGCultYveOK.qSezxu0zEfM/DtPwQ86YEg1Ka.OO', 'ACTIVO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id_contrato`);

--
-- Indices de la tabla `partes_contratos`
--
ALTER TABLE `partes_contratos`
  ADD PRIMARY KEY (`id_parte`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contratos`
--
ALTER TABLE `contratos`
  MODIFY `id_contrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `partes_contratos`
--
ALTER TABLE `partes_contratos`
  MODIFY `id_parte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123456790;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
