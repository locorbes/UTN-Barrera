-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql.orbescarlos.com.ar
-- Tiempo de generación: 20-04-2019 a las 22:26:53
-- Versión del servidor: 5.6.34-log
-- Versión de PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `utn1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DETALLES`
--

CREATE TABLE `DETALLES` (
  `id` int(11) NOT NULL,
  `idrecibo` int(11) NOT NULL,
  `idtarifa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ENTRADAS`
--

CREATE TABLE `ENTRADAS` (
  `id` int(11) NOT NULL,
  `idpuesto` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `idtarjeta` int(11) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ESTADOSTARJETA`
--

CREATE TABLE `ESTADOSTARJETA` (
  `id` int(11) NOT NULL,
  `estado` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ESTADOSTARJETA`
--

INSERT INTO `ESTADOSTARJETA` (`id`, `estado`) VALUES
(1, 'habilitada'),
(2, 'deshabilitada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EVENTOSXCUENTAS`
--

CREATE TABLE `EVENTOSXCUENTAS` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `descripcion` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EVENTOSXTARJETAS`
--

CREATE TABLE `EVENTOSXTARJETAS` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idusuario` int(11) DEFAULT NULL,
  `idtarjeta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PAGOS`
--

CREATE TABLE `PAGOS` (
  `id` int(11) NOT NULL,
  `pago` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PERSONAS`
--

CREATE TABLE `PERSONAS` (
  `dni` int(11) NOT NULL,
  `nombre` varchar(32) DEFAULT NULL,
  `apellido` varchar(32) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `saldo` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PERSONAXRELACIONXSECTOR`
--

CREATE TABLE `PERSONAXRELACIONXSECTOR` (
  `id` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `idrelacion` int(11) NOT NULL,
  `idsector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PUESTOS`
--

CREATE TABLE `PUESTOS` (
  `id` int(11) NOT NULL,
  `puesto` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `PUESTOS`
--

INSERT INTO `PUESTOS` (`id`, `puesto`) VALUES
(1, 'estacionamiento docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RECIBOS`
--

CREATE TABLE `RECIBOS` (
  `id` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idpago` int(11) NOT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RELACION`
--

CREATE TABLE `RELACION` (
  `id` int(11) NOT NULL,
  `relacion` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `RELACION`
--

INSERT INTO `RELACION` (`id`, `relacion`) VALUES
(1, 'empleado'),
(2, 'docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SALIDAS`
--

CREATE TABLE `SALIDAS` (
  `id` int(11) NOT NULL,
  `idpuesto` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `idtarjeta` int(11) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SECTORES`
--

CREATE TABLE `SECTORES` (
  `id` int(11) NOT NULL,
  `sector` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `SECTORES`
--

INSERT INTO `SECTORES` (`id`, `sector`) VALUES
(1, 'TSP'),
(2, 'RRHH');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TARIFAS`
--

CREATE TABLE `TARIFAS` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(32) DEFAULT NULL,
  `tarifa` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `TARIFAS`
--

INSERT INTO `TARIFAS` (`id`, `descripcion`, `tarifa`) VALUES
(1, 'estadía 1 día', '45.00'),
(2, 'estadía 5 días', '210.00'),
(3, 'estadía 10 días', '400.00'),
(4, 'estadía 15 días', '570.00'),
(5, 'estadía 20 días', '710.00'),
(6, 'estadía 25 días', '840.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TARJETAS`
--

CREATE TABLE `TARJETAS` (
  `id` int(11) NOT NULL,
  `idestado` int(11) NOT NULL,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TARJETASXPERSONA`
--

CREATE TABLE `TARJETASXPERSONA` (
  `id` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `idtarjeta` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TIPOS`
--

CREATE TABLE `TIPOS` (
  `id` int(11) NOT NULL,
  `tipo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `TIPOS`
--

INSERT INTO `TIPOS` (`id`, `tipo`) VALUES
(1, 'recepcionista'),
(2, 'administrador'),
(3, 'superior');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIOS`
--

CREATE TABLE `USUARIOS` (
  `id` int(11) NOT NULL,
  `idtipo` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `mail` varchar(320) DEFAULT NULL,
  `clave` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `DETALLES`
--
ALTER TABLE `DETALLES`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idrecibo` (`idrecibo`),
  ADD KEY `idtarifa` (`idtarifa`);

--
-- Indices de la tabla `ENTRADAS`
--
ALTER TABLE `ENTRADAS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpuesto` (`idpuesto`),
  ADD KEY `dni` (`dni`);

--
-- Indices de la tabla `ESTADOSTARJETA`
--
ALTER TABLE `ESTADOSTARJETA`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `EVENTOSXCUENTAS`
--
ALTER TABLE `EVENTOSXCUENTAS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `EVENTOSXTARJETAS`
--
ALTER TABLE `EVENTOSXTARJETAS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idusuario` (`idusuario`),
  ADD KEY `idtarjeta` (`idtarjeta`);

--
-- Indices de la tabla `PAGOS`
--
ALTER TABLE `PAGOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `PERSONAS`
--
ALTER TABLE `PERSONAS`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `PERSONAXRELACIONXSECTOR`
--
ALTER TABLE `PERSONAXRELACIONXSECTOR`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dni` (`dni`),
  ADD KEY `idrelacion` (`idrelacion`),
  ADD KEY `idsector` (`idsector`);

--
-- Indices de la tabla `PUESTOS`
--
ALTER TABLE `PUESTOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `RECIBOS`
--
ALTER TABLE `RECIBOS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dni` (`dni`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `RELACION`
--
ALTER TABLE `RELACION`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `SALIDAS`
--
ALTER TABLE `SALIDAS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpuesto` (`idpuesto`),
  ADD KEY `dni` (`dni`);

--
-- Indices de la tabla `SECTORES`
--
ALTER TABLE `SECTORES`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `TARIFAS`
--
ALTER TABLE `TARIFAS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `TARJETAS`
--
ALTER TABLE `TARJETAS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idestado` (`idestado`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `TARJETASXPERSONA`
--
ALTER TABLE `TARJETASXPERSONA`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dni` (`dni`),
  ADD KEY `idtarjeta` (`idtarjeta`);

--
-- Indices de la tabla `TIPOS`
--
ALTER TABLE `TIPOS`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtipo` (`idtipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `DETALLES`
--
ALTER TABLE `DETALLES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ENTRADAS`
--
ALTER TABLE `ENTRADAS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ESTADOSTARJETA`
--
ALTER TABLE `ESTADOSTARJETA`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `EVENTOSXCUENTAS`
--
ALTER TABLE `EVENTOSXCUENTAS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `EVENTOSXTARJETAS`
--
ALTER TABLE `EVENTOSXTARJETAS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `PAGOS`
--
ALTER TABLE `PAGOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `PERSONAXRELACIONXSECTOR`
--
ALTER TABLE `PERSONAXRELACIONXSECTOR`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `PUESTOS`
--
ALTER TABLE `PUESTOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `RECIBOS`
--
ALTER TABLE `RECIBOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `RELACION`
--
ALTER TABLE `RELACION`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `SALIDAS`
--
ALTER TABLE `SALIDAS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `SECTORES`
--
ALTER TABLE `SECTORES`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `TARIFAS`
--
ALTER TABLE `TARIFAS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `TARJETAS`
--
ALTER TABLE `TARJETAS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `TARJETASXPERSONA`
--
ALTER TABLE `TARJETASXPERSONA`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `TIPOS`
--
ALTER TABLE `TIPOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `DETALLES`
--
ALTER TABLE `DETALLES`
  ADD CONSTRAINT `DETALLES_ibfk_1` FOREIGN KEY (`idrecibo`) REFERENCES `RECIBOS` (`id`),
  ADD CONSTRAINT `DETALLES_ibfk_2` FOREIGN KEY (`idtarifa`) REFERENCES `TARIFAS` (`id`);

--
-- Filtros para la tabla `ENTRADAS`
--
ALTER TABLE `ENTRADAS`
  ADD CONSTRAINT `ENTRADAS_ibfk_1` FOREIGN KEY (`idpuesto`) REFERENCES `PUESTOS` (`id`),
  ADD CONSTRAINT `ENTRADAS_ibfk_2` FOREIGN KEY (`dni`) REFERENCES `PERSONAS` (`dni`);

--
-- Filtros para la tabla `EVENTOSXCUENTAS`
--
ALTER TABLE `EVENTOSXCUENTAS`
  ADD CONSTRAINT `EVENTOSXCUENTAS_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `USUARIOS` (`id`);

--
-- Filtros para la tabla `EVENTOSXTARJETAS`
--
ALTER TABLE `EVENTOSXTARJETAS`
  ADD CONSTRAINT `EVENTOSXTARJETAS_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `USUARIOS` (`id`),
  ADD CONSTRAINT `EVENTOSXTARJETAS_ibfk_2` FOREIGN KEY (`idtarjeta`) REFERENCES `TARJETAS` (`id`);

--
-- Filtros para la tabla `PERSONAXRELACIONXSECTOR`
--
ALTER TABLE `PERSONAXRELACIONXSECTOR`
  ADD CONSTRAINT `PERSONAXRELACIONXSECTOR_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `PERSONAS` (`dni`),
  ADD CONSTRAINT `PERSONAXRELACIONXSECTOR_ibfk_2` FOREIGN KEY (`idrelacion`) REFERENCES `RELACION` (`id`),
  ADD CONSTRAINT `PERSONAXRELACIONXSECTOR_ibfk_3` FOREIGN KEY (`idsector`) REFERENCES `SECTORES` (`id`);

--
-- Filtros para la tabla `RECIBOS`
--
ALTER TABLE `RECIBOS`
  ADD CONSTRAINT `RECIBOS_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `PERSONAS` (`dni`),
  ADD CONSTRAINT `RECIBOS_ibfk_2` FOREIGN KEY (`id`) REFERENCES `PAGOS` (`id`),
  ADD CONSTRAINT `RECIBOS_ibfk_3` FOREIGN KEY (`idusuario`) REFERENCES `USUARIOS` (`id`);

--
-- Filtros para la tabla `SALIDAS`
--
ALTER TABLE `SALIDAS`
  ADD CONSTRAINT `SALIDAS_ibfk_1` FOREIGN KEY (`idpuesto`) REFERENCES `PUESTOS` (`id`),
  ADD CONSTRAINT `SALIDAS_ibfk_2` FOREIGN KEY (`dni`) REFERENCES `PERSONAS` (`dni`);

--
-- Filtros para la tabla `TARJETAS`
--
ALTER TABLE `TARJETAS`
  ADD CONSTRAINT `TARJETAS_ibfk_1` FOREIGN KEY (`idestado`) REFERENCES `ESTADOSTARJETA` (`id`),
  ADD CONSTRAINT `TARJETAS_ibfk_2` FOREIGN KEY (`idusuario`) REFERENCES `USUARIOS` (`id`);

--
-- Filtros para la tabla `TARJETASXPERSONA`
--
ALTER TABLE `TARJETASXPERSONA`
  ADD CONSTRAINT `TARJETASXPERSONA_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `PERSONAS` (`dni`),
  ADD CONSTRAINT `TARJETASXPERSONA_ibfk_2` FOREIGN KEY (`idtarjeta`) REFERENCES `TARJETAS` (`id`);

--
-- Filtros para la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  ADD CONSTRAINT `USUARIOS_ibfk_1` FOREIGN KEY (`idtipo`) REFERENCES `TIPOS` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
