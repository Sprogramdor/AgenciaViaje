-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2023 a las 01:56:06
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vuelosbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aerolinea`
--

CREATE TABLE `aerolinea` (
  `aerolinea_id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `aeropuerto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `aerolinea`
--

INSERT INTO `aerolinea` (`aerolinea_id`, `nombre`, `aeropuerto`) VALUES
(1, 'Aeropuerto Internacional de Santa Rosa	', 'Santa Rosa, El Oro	'),
(2, 'Aeropuerto Internacional José Joaquín de Olmedo	', 'Guayaquil, Guayas	'),
(3, 'Aeropuerto Internacional Mariscal Sucre	', 'Quito, Pichincha	');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agentes`
--

CREATE TABLE `agentes` (
  `agente_id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `Apellido` varchar(255) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `agentes`
--

INSERT INTO `agentes` (`agente_id`, `nombre`, `Apellido`, `Correo`, `password`) VALUES
(1, 'Jesús ', 'Acosta', 'jesus.acosta@gmail.com', '12345'),
(2, 'Edwin', 'Chilán', 'edwin.chilan@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `ciudades_id` int(11) NOT NULL,
  `nombreCiudad` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`ciudades_id`, `nombreCiudad`) VALUES
(1, 'Guayaquil'),
(2, 'Manta'),
(3, 'Cuenca'),
(4, 'Quito\r\n'),
(5, 'Machala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `Apellido` varchar(255) DEFAULT NULL,
  `Correo` varchar(255) DEFAULT NULL,
  `cedula` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Ciudad_FK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `nombre`, `Apellido`, `Correo`, `cedula`, `telefono`, `Direccion`, `Ciudad_FK`) VALUES
(1, 'Alex', 'Gómez ', 'alex20@gmail.com', '0951827530', '0951827531', 'Guasmo norte', 1),
(2, 'Luis', 'Hurtado', 'luis1010@gmail.com', '0951827566', '0951827560', 'Av. Centinela #4584152', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE `detallefactura` (
  `detalleF_id` int(11) NOT NULL,
  `Factura_fk` int(11) DEFAULT NULL,
  `reserva_fk` int(11) DEFAULT NULL,
  `subtotal` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `Factura_id` int(11) NOT NULL,
  `detalleFactura` int(11) DEFAULT NULL,
  `Total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(11) NOT NULL,
  `nombre_hotel` varchar(255) DEFAULT NULL,
  `valoracion` int(11) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `precioNoche` float DEFAULT NULL,
  `ciudadhotel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `nombre_hotel`, `valoracion`, `direccion`, `precioNoche`, `ciudadhotel`) VALUES
(1, 'TRYP by Wyndham Guayaquil\r\n', 5, 'Av. Joaquín Orrantia y L. Benitez', 79, 1),
(2, 'Unipark by Oro Verde Hotels\r\n', 4, 'Clemente Ballén 406 y Chile', 80, 1),
(3, 'Ibis Quito', 3, 'Avenida Diego De Almagro E8 19 Y Bello Horizonte', 65, 4),
(4, 'Four Points by Sheraton Cuenca\r\n', 5, 'Ave. Circunvalación Sur y Ave. Felipe II', 66.6, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `paquete_id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `Pvuelo_fk` int(11) DEFAULT NULL,
  `Photel_fk` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`paquete_id`, `nombre`, `Pvuelo_fk`, `Photel_fk`, `precio`) VALUES
(1, 'Paquete duo', 1, 4, 300),
(2, 'Paquete VIP', 1, 1, 350);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `reserva_id` int(11) NOT NULL,
  `cliente_FK` int(11) DEFAULT NULL,
  `agente_Fk` int(11) DEFAULT NULL,
  `fechacreacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_hotel`
--

CREATE TABLE `reservas_hotel` (
  `RHotel_id` int(11) NOT NULL,
  `RHreserva_fk` int(11) DEFAULT NULL,
  `RHhotel_fk` int(11) DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_paquete`
--

CREATE TABLE `reservas_paquete` (
  `RPaquete_id` int(11) NOT NULL,
  `RPreserva_fk` int(11) DEFAULT NULL,
  `RPpaquete_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_vuelo`
--

CREATE TABLE `reservas_vuelo` (
  `RVuelol_id` int(11) NOT NULL,
  `RVreserva_fk` int(11) DEFAULT NULL,
  `RVvuelo_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelo`
--

CREATE TABLE `vuelo` (
  `vuelo_id` int(11) NOT NULL,
  `aerolinea_fk` int(11) DEFAULT NULL,
  `origen` int(11) DEFAULT NULL,
  `destino` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vuelo`
--

INSERT INTO `vuelo` (`vuelo_id`, `aerolinea_fk`, `origen`, `destino`, `precio`, `fecha`) VALUES
(1, 1, 3, 1, 150, '2023-06-09'),
(2, 2, 1, 4, 250, '2023-06-22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aerolinea`
--
ALTER TABLE `aerolinea`
  ADD PRIMARY KEY (`aerolinea_id`);

--
-- Indices de la tabla `agentes`
--
ALTER TABLE `agentes`
  ADD PRIMARY KEY (`agente_id`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`ciudades_id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`),
  ADD KEY `ciudad_fk` (`Ciudad_FK`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD PRIMARY KEY (`detalleF_id`),
  ADD KEY `factura_fk` (`Factura_fk`),
  ADD KEY `reserva_fk` (`reserva_fk`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Factura_id`),
  ADD KEY `detalleFactura_fk` (`detalleFactura`);

--
-- Indices de la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`),
  ADD KEY `ciudadHotel_fk` (`ciudadhotel`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`paquete_id`),
  ADD KEY `Pvuelo_fk` (`Pvuelo_fk`),
  ADD KEY `Photel_fk` (`Photel_fk`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`reserva_id`),
  ADD KEY `agente_fk` (`agente_Fk`),
  ADD KEY `cliente_fk` (`cliente_FK`);

--
-- Indices de la tabla `reservas_hotel`
--
ALTER TABLE `reservas_hotel`
  ADD PRIMARY KEY (`RHotel_id`),
  ADD KEY `RHreserva_fk` (`RHreserva_fk`),
  ADD KEY `RHhotel_fk` (`RHhotel_fk`);

--
-- Indices de la tabla `reservas_paquete`
--
ALTER TABLE `reservas_paquete`
  ADD PRIMARY KEY (`RPaquete_id`),
  ADD KEY `RPpaquete` (`RPpaquete_fk`),
  ADD KEY `Rpreserva_fk` (`RPreserva_fk`);

--
-- Indices de la tabla `reservas_vuelo`
--
ALTER TABLE `reservas_vuelo`
  ADD PRIMARY KEY (`RVuelol_id`),
  ADD KEY `RVreserva_fk` (`RVreserva_fk`),
  ADD KEY `RVvuelo_fk` (`RVvuelo_fk`);

--
-- Indices de la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD PRIMARY KEY (`vuelo_id`),
  ADD KEY `aeroline_fk` (`aerolinea_fk`),
  ADD KEY `origen_fk` (`origen`),
  ADD KEY `destino_fk` (`destino`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aerolinea`
--
ALTER TABLE `aerolinea`
  MODIFY `aerolinea_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `agentes`
--
ALTER TABLE `agentes`
  MODIFY `agente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `ciudades_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  MODIFY `detalleF_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `Factura_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `paquete_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `reserva_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas_hotel`
--
ALTER TABLE `reservas_hotel`
  MODIFY `RHotel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas_paquete`
--
ALTER TABLE `reservas_paquete`
  MODIFY `RPaquete_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas_vuelo`
--
ALTER TABLE `reservas_vuelo`
  MODIFY `RVuelol_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vuelo`
--
ALTER TABLE `vuelo`
  MODIFY `vuelo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `ciudad_fk` FOREIGN KEY (`Ciudad_FK`) REFERENCES `ciudades` (`ciudades_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD CONSTRAINT `factura_fk` FOREIGN KEY (`Factura_fk`) REFERENCES `factura` (`Factura_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserva_fk` FOREIGN KEY (`reserva_fk`) REFERENCES `reserva` (`reserva_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `detalleFactura_fk` FOREIGN KEY (`detalleFactura`) REFERENCES `detallefactura` (`detalleF_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `ciudadHotel_fk` FOREIGN KEY (`ciudadhotel`) REFERENCES `ciudades` (`ciudades_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD CONSTRAINT `Photel_fk` FOREIGN KEY (`Photel_fk`) REFERENCES `hotel` (`hotel_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Pvuelo_fk` FOREIGN KEY (`Pvuelo_fk`) REFERENCES `vuelo` (`vuelo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `agente_fk` FOREIGN KEY (`agente_Fk`) REFERENCES `agentes` (`agente_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente_fk` FOREIGN KEY (`cliente_FK`) REFERENCES `cliente` (`cliente_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas_hotel`
--
ALTER TABLE `reservas_hotel`
  ADD CONSTRAINT `RHhotel_fk` FOREIGN KEY (`RHhotel_fk`) REFERENCES `hotel` (`hotel_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RHreserva_fk` FOREIGN KEY (`RHreserva_fk`) REFERENCES `reserva` (`reserva_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas_paquete`
--
ALTER TABLE `reservas_paquete`
  ADD CONSTRAINT `RPpaquete` FOREIGN KEY (`RPpaquete_fk`) REFERENCES `paquetes` (`paquete_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Rpreserva_fk` FOREIGN KEY (`RPreserva_fk`) REFERENCES `reserva` (`reserva_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reservas_vuelo`
--
ALTER TABLE `reservas_vuelo`
  ADD CONSTRAINT `RVreserva_fk` FOREIGN KEY (`RVreserva_fk`) REFERENCES `reserva` (`reserva_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RVvuelo_fk` FOREIGN KEY (`RVvuelo_fk`) REFERENCES `vuelo` (`vuelo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vuelo`
--
ALTER TABLE `vuelo`
  ADD CONSTRAINT `aeroline_fk` FOREIGN KEY (`aerolinea_fk`) REFERENCES `aerolinea` (`aerolinea_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `destino_fk` FOREIGN KEY (`destino`) REFERENCES `ciudades` (`ciudades_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `origen_fk` FOREIGN KEY (`origen`) REFERENCES `ciudades` (`ciudades_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
