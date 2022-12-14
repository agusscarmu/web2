-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-10-2022 a las 21:45:31
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`ID`, `nombre`, `mail`, `pass`) VALUES
(3, 'Agustin Carmusciano', 'admin@admin.com', '$2a$12$tDUvEDyknie1mN5A7p6uEeaDIrfCaI0tSLYuo8mZr2bDSscCOvs8.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obrasocial`
--

CREATE TABLE `obrasocial` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `telefono` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `obrasocial`
--

INSERT INTO `obrasocial` (`ID`, `nombre`, `tipo`, `domicilio`, `telefono`) VALUES
(1, 'Avalian', 'Prepaga', 'Combate de los Pozos 220', '011 4129-0100'),
(2, 'Swiss Medical', 'Prepaga', 'Av. Corrientes 1891', '0800-222-7854'),
(13, 'Pami', 'Obra social', 'Moreno 1202', '011 4382-5533'),
(14, 'Sospegype', 'Prepaga', 'Hipólito Yrigoyen 2727', '011 4866-1225'),
(15, 'Osmedica', 'Obra social', 'Marcelo Torcuato de Alvear 871, C1058AAK CABA', '0800-999-5396'),
(16, 'Osde', 'Obra social', 'Av. Leandro N. Alem 1067, C1001 AAF, Buenos Aires', '0810-555-6733');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `edad` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `motivo` text NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `ID_obrasocial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`ID`, `nombre`, `edad`, `dni`, `motivo`, `imagen`, `ID_obrasocial`) VALUES
(39, 'Julian Gomez', 40, 29848732, 'Dolor en hipocondrio derecho', './imgs/634dae1d45c1e.jpg', 14),
(43, 'Francisco Sosa', 32, 34098838, 'Angor después de correr ', './imgs/634dae07e2177.jpg', 16),
(62, 'Bautista Saenz', 25, 40939932, 'Fiebre y dificultad para respirar ', './imgs/634dadfd190a3.jpg', 2),
(63, 'Florencia Fernandez', 42, 28484832, 'Fibroadenoma en mama derecha', './imgs/634dadf09dcd9.jpg', 1),
(71, 'Katarina Gomez', 34, 37848423, 'Cefalea ', NULL, 2),
(72, 'Mariana Bianchi', 31, 39498020, 'Dolor en fosa iliaca derecha con vomitos', './imgs/634dafcdb4ebb.jpg', 1),
(73, 'Raul Bonafide', 70, 13849231, 'Glucemia alta ', NULL, 13);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `obrasocial`
--
ALTER TABLE `obrasocial`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `pacientes_obrasocial_fk` (`ID_obrasocial`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `medicos`
--
ALTER TABLE `medicos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `obrasocial`
--
ALTER TABLE `obrasocial`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_obrasocial_fk` FOREIGN KEY (`ID_obrasocial`) REFERENCES `obrasocial` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
