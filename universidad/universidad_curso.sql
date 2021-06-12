-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2020 a las 23:31:15
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `universidad_curso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `codigo` int(10) UNSIGNED NOT NULL COMMENT 'C├│digo de la carrera',
  `descripcion` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Descripci├│n de la carrera',
  `uc_totales` tinyint(3) UNSIGNED NOT NULL COMMENT 'UC totales de la carrera',
  `letra` char(1) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Letra de la carrera',
  `trayectos` tinyint(3) UNSIGNED NOT NULL COMMENT 'Cantidad de trayectos'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla que almacena la informaci├│n de las carreras';

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`codigo`, `descripcion`, `uc_totales`, `letra`, `trayectos`) VALUES
(1, 'INFORMATICA', 193, 'I', 4),
(2, 'ELECTRONICA', 193, 'E', 4),
(3, 'MECANICA', 190, 'M', 4),
(4, 'ALIMENTOS', 190, 'A', 4),
(5, 'AGRO', 123, 'G', 4),
(6, 'ADMINISTRACION', 150, 'C', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `codigo` int(10) UNSIGNED NOT NULL COMMENT 'Código de la materia',
  `descripcion` varchar(20) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Descripción de la materia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla que almacena los datos de las materias';

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`codigo`, `descripcion`) VALUES
(1, 'PROGRAMACION'),
(2, 'MATEMATICA'),
(3, 'BASE DE DATOS'),
(4, 'LOGICA'),
(5, 'CONTABILIDAD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `cedula` int(10) UNSIGNED NOT NULL COMMENT 'C├®dula del estudiante',
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Apellido del estudiante',
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Nombre del estudiante',
  `fecha_nac` date NOT NULL COMMENT 'Fecha de nacimiento',
  `correo_elec` varchar(70) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Correo electr├│nico',
  `telefono` char(12) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Tel├®fono personal',
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Direcci├│n de habitaci├│n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla que almacena la informaci├│n de los estudiantes';

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`cedula`, `apellido`, `nombre`, `fecha_nac`, `correo_elec`, `telefono`, `direccion`) VALUES
(10138163, 'MENDOZA', 'VICENTE', '1998-11-15', 'franciscoelhombre@gmail.com', '0276-1524666', 'BARRIO EL LOBO CALLE CAPERUCITA TOLDO ROJO'),
(21322415, 'PEREZ', 'PEDRO', '2000-10-20', 'elcorreo@hotmail.com', '0414-5555555', 'PALO GORDO CALLE DEL MEDIO #124'),
(21322416, 'ESCALANTE', 'JUAN PABLO', '2002-05-20', 'elcorreoviejo@hotmail.com', '0414-5555556', 'CALLE PRINCIPAL #12'),
(28271638, 'CHACON', 'NEYIBETH', '2002-04-10', 'neyi1004@gmail.com', '04247634470', 'Av principal Vegas de Tariba, Residencias Don Luis Edif. Rio Sarare Piso 4 apart 4-7'),
(27893048, 'PEREZ', 'GABRIEL', '2001-01-13', 'jgperezp03@gmail.com', '04267731804', 'urb.marco tulio rangel casa nÂ°10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'C├│digo de la carrera', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `codigo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Código de la materia', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
