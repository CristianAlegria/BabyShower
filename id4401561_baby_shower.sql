-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-01-2018 a las 20:46:24
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id4401561_baby_shower`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baby_shower`
--

CREATE TABLE `baby_shower` (
  `id_baby_shower` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `fecha_registro` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `baby_shower`
--

INSERT INTO `baby_shower` (`id_baby_shower`, `id_persona`, `id_prod`, `fecha_registro`) VALUES
(7, 1143830638, 14, '13/01/2018'),
(8, 1130639336, 53, '25/01/2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombre_completo` varchar(60) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre_completo`, `telefono`) VALUES
(1130639336, 'Angela Cristian Ana Cecilia', '3166819345'),
(1143830638, 'Cristian Alegria', '3135563875');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prod` int(11) NOT NULL,
  `nomb_prod` varchar(100) NOT NULL,
  `id_tipo_producto` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `fecha_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prod`, `nomb_prod`, `id_tipo_producto`, `estado`, `fecha_reg`) VALUES
(14, 'BAÑERA', 1, 'DISPONIBLE', '2018-01-25'),
(15, 'TOALLA', 1, 'DISPONIBLE', '2018-01-25'),
(16, 'TOALLA', 1, 'DISPONIBLE', '2018-01-25'),
(17, 'TOALLA', 1, 'DISPONIBLE', '2018-01-25'),
(18, 'SACO PROTECTOR PARA COCHE', 1, 'DISPONIBLE', '2018-01-25'),
(19, 'MANTA DE LACTANCIA', 1, 'DISPONIBLE', '2018-01-25'),
(20, 'MANTA ANTIALERGICA', 1, 'DISPONIBLE', '2018-01-25'),
(21, 'MANTA ANTIALERGICA', 1, 'DISPONIBLE', '2018-01-25'),
(22, 'MANTA ANTIALERGICA', 1, 'DISPONIBLE', '2018-01-25'),
(23, 'TERMO PARA AGUA CALIENTE', 1, 'DISPONIBLE', '2018-01-25'),
(24, 'SILLA COMEDOR PARA BEBE', 1, 'DISPONIBLE', '2018-01-25'),
(25, 'VASO ENTRENADOR ANTIDERRAME', 1, 'DISPONIBLE', '2018-01-25'),
(26, 'SILLA MESEDORA PARA BEBE', 1, 'DISPONIBLE', '2018-01-25'),
(27, 'GIMNASIO PARA BEBE ESTIMULADOR', 1, 'DISPONIBLE', '2018-01-25'),
(28, 'CARGADOR TIPO CANGURO PARA BEBE', 1, 'DISPONIBLE', '2018-01-25'),
(29, 'PAÑALES ETAPA 1 Y PAÑITOS ', 1, 'DISPONIBLE', '2018-01-25'),
(30, 'PAÑALES ETAPA 2 Y PAÑITOS ', 1, 'DISPONIBLE', '2018-01-25'),
(31, 'PAÑALES ETAPA 3 Y PAÑITOS ', 1, 'DISPONIBLE', '2018-01-25'),
(32, 'COLCHONETA ANTIREFLUJO', 1, 'DISPONIBLE', '2018-01-25'),
(33, 'LAMPARA DE NOCHE', 1, 'DISPONIBLE', '2018-01-25'),
(34, 'PIJAMA TALLA 6 - 9 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(35, 'PIJAMA TALLA 6 - 9 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(36, 'PIJAMA TALLA 9 - 12 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(37, 'PIJAMA TALLA 9 - 12 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(38, 'MAMELUCO TALLA 6 - 9 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(39, 'MAMELUCO TALLA 6 - 9 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(40, 'MAMELUCO TALLA 9 - 12 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(41, 'MAMELUCO TALLA 9 - 12 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(42, 'ROPA PARA SALIR TALLA 3 - 6 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(43, 'ROPA PARA SALIR TALLA 3 - 6 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(44, 'ROPA PARA SALIR TALLA 6 - 9 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(45, 'ROPA PARA SALIR TALLA 6 - 9 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(46, 'ROPA PARA SALIR TALLA 9 - 12 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(47, 'ROPA PARA SALIR TALLA 9 - 12 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(48, 'SACO TALLA 6 - 9 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(49, 'SACO TALLA 12 - 18 MESES', 1, 'DISPONIBLE', '2018-01-25'),
(50, 'PAÑALES ETAPA 3 Y PAÑITOS', 1, 'DISPONIBLE', '2018-01-25'),
(51, 'BABEROS - SET DE ALIMENTACION', 1, 'DISPONIBLE', '2018-01-25'),
(52, 'PAÑALES ETAPA 4 Y PAÑITOS', 1, 'DISPONIBLE', '2018-01-25'),
(53, 'LENCERIA CAMA CUNA - KIT COMPLETO', 1, 'ASIGNADO', '2018-01-25'),
(54, 'COJIN PARA LACTANCIA', 1, 'DISPONIBLE', '2018-01-25'),
(55, 'COPAS RECOLECTORAS DE LECHE MATERNA', 1, 'DISPONIBLE', '2018-01-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id_tipo_producto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id_tipo_producto`, `nombre`) VALUES
(1, 'accesorios'),
(2, 'salud');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `baby_shower`
--
ALTER TABLE `baby_shower`
  ADD PRIMARY KEY (`id_baby_shower`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_prod`),
  ADD KEY `id_tipo_producto` (`id_tipo_producto`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`id_tipo_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `baby_shower`
--
ALTER TABLE `baby_shower`
  MODIFY `id_baby_shower` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1143830639;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id_tipo_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
