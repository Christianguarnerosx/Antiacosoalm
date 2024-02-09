-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3310
-- Tiempo de generación: 08-12-2023 a las 08:05:30
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
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id_actividad` int(11) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `responsable` varchar(50) DEFAULT NULL,
  `nombre_actividad` varchar(30) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_grado` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL,
  `id_docente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `id_usuario`, `id_grado`, `id_grupo`, `id_padre`, `id_docente`) VALUES
(1, 12, 3, 2, 1, 1),
(2, 13, 4, 3, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consejos`
--

CREATE TABLE `consejos` (
  `id_consejo` int(11) NOT NULL,
  `titulo` varchar(30) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `id_docente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_docente` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_grado` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docente`, `id_usuario`, `id_grado`, `id_grupo`) VALUES
(1, 2, 3, 2),
(2, 3, 2, 1),
(3, 4, 3, 3),
(5, 6, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `id_grado` int(11) NOT NULL,
  `nombre_grado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`id_grado`, `nombre_grado`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id_grupo` int(11) NOT NULL,
  `nombre_grupo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id_grupo`, `nombre_grupo`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `id_padre` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_grado` int(11) NOT NULL,
  `id_grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`id_padre`, `id_usuario`, `id_grado`, `id_grupo`) VALUES
(1, 9, 3, 2),
(2, 10, 3, 3),
(3, 11, 5, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `id_docente` int(11) DEFAULT NULL,
  `nombre_proyecto` varchar(30) DEFAULT NULL,
  `descripcion_proyecto` text DEFAULT NULL,
  `ejemplo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id_reporte` int(11) NOT NULL,
  `tipo` varchar(25) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `id_alumno_reportado` int(11) DEFAULT NULL,
  `fecha_reporte` date DEFAULT NULL,
  `texto_reporte` text DEFAULT NULL,
  `audio_reporte` blob DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL,
  `id_docente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes_acumulados`
--

CREATE TABLE `reportes_acumulados` (
  `id_reporte_acumulado` int(11) NOT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `total_reportes_generados` int(11) DEFAULT NULL,
  `total_reportes_recibidos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellidop` varchar(40) NOT NULL,
  `apellidom` varchar(40) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `estatus` varchar(8) NOT NULL,
  `tipo` varchar(13) NOT NULL,
  `avatar` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidop`, `apellidom`, `correo`, `telefono`, `contraseña`, `estatus`, `tipo`, `avatar`) VALUES
(1, 'Christian', 'Reyes', 'Guarneros', 'cris.guarners.joker777@gmail.com', '2481714022', '12345678', 'Activo', 'Administrador', ''),
(2, 'Vianney', 'Morales', 'Zamora', 'Vianney@gmail.com', '2225847475', '12345678', 'Activo', 'Docente', ''),
(3, 'Ivan', 'Sanchez', 'Juarez', 'Ivan@gmail.com', '2461234588', 'asdfghjklñ', 'Activo', 'Docente', ''),
(4, 'Maria Petra', 'Paredes', 'Xochihua', 'Petra@gmail.com', '2461472535', '12345678', 'Activo', 'Docente', ''),
(6, 'Raymundo', 'Montiel', 'Lira', 'ray@gmail.com', '2467854849', '12345678', 'Inactivo', 'Docente', ''),
(9, 'Cecilia', 'Guarneros', 'Ramirez', 'Ceciliaguarneros1983@gmail.com', '2481332000', '12345678', 'Activo', 'Docente', ''),
(10, 'Rocio', 'Roldan', 'Rodriguez', 'Rocio@gmail.com', '2461234545', 'asdfghjklñ', 'Activo', 'Docente', ''),
(11, 'Moises', 'Guarneros', 'Ramirez', 'moi@gmail.com', '2481754645', '12345678', 'Inactivo', 'Docente', ''),
(12, 'Christian Yair', 'Reyes', 'Guarneros', 'cris.guarners.joker777@gmail.com', '2481714022', '12345678', 'Activo', 'Alumno', ''),
(13, 'Dayra', 'Coraza', 'Roldan', 'dayraroldan1@gmail.com', '2461858586', '12345678', 'Activo', 'Alumno', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id_actividad`),
  ADD UNIQUE KEY `id_actividad` (`id_actividad`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_grado` (`id_grado`),
  ADD KEY `id_grupo` (`id_grupo`),
  ADD KEY `id_padre` (`id_padre`),
  ADD KEY `id_docente` (`id_docente`);

--
-- Indices de la tabla `consejos`
--
ALTER TABLE `consejos`
  ADD PRIMARY KEY (`id_consejo`),
  ADD UNIQUE KEY `id_consejo` (`id_consejo`),
  ADD KEY `id_docente` (`id_docente`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_docente`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_grado` (`id_grado`),
  ADD KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`id_grado`),
  ADD UNIQUE KEY `id_grado` (`id_grado`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id_grupo`),
  ADD UNIQUE KEY `id_grupo` (`id_grupo`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`id_padre`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `padres_ibfk_2` (`id_grado`),
  ADD KEY `padres_ibfk_3` (`id_grupo`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD UNIQUE KEY `id_proyecto` (`id_proyecto`),
  ADD KEY `id_docente` (`id_docente`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`id_reporte`),
  ADD UNIQUE KEY `id_reporte` (`id_reporte`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_alumno_reportado` (`id_alumno_reportado`),
  ADD KEY `id_padre` (`id_padre`),
  ADD KEY `id_docente` (`id_docente`);

--
-- Indices de la tabla `reportes_acumulados`
--
ALTER TABLE `reportes_acumulados`
  ADD PRIMARY KEY (`id_reporte_acumulado`),
  ADD KEY `id_alumno` (`id_alumno`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `consejos`
--
ALTER TABLE `consejos`
  MODIFY `id_consejo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `id_grado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `padres`
--
ALTER TABLE `padres`
  MODIFY `id_padre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`),
  ADD CONSTRAINT `alumnos_ibfk_3` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`),
  ADD CONSTRAINT `alumnos_ibfk_4` FOREIGN KEY (`id_padre`) REFERENCES `padres` (`id_padre`),
  ADD CONSTRAINT `alumnos_ibfk_5` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`);

--
-- Filtros para la tabla `consejos`
--
ALTER TABLE `consejos`
  ADD CONSTRAINT `consejos_ibfk_1` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`);

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `docentes_ibfk_2` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`),
  ADD CONSTRAINT `docentes_ibfk_3` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`);

--
-- Filtros para la tabla `padres`
--
ALTER TABLE `padres`
  ADD CONSTRAINT `padres_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `padres_ibfk_2` FOREIGN KEY (`id_grado`) REFERENCES `grados` (`id_grado`),
  ADD CONSTRAINT `padres_ibfk_3` FOREIGN KEY (`id_grupo`) REFERENCES `grupos` (`id_grupo`);

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `proyectos_ibfk_1` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reportes_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`),
  ADD CONSTRAINT `reportes_ibfk_2` FOREIGN KEY (`id_alumno_reportado`) REFERENCES `alumnos` (`id_alumno`),
  ADD CONSTRAINT `reportes_ibfk_3` FOREIGN KEY (`id_padre`) REFERENCES `padres` (`id_padre`),
  ADD CONSTRAINT `reportes_ibfk_4` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`);

--
-- Filtros para la tabla `reportes_acumulados`
--
ALTER TABLE `reportes_acumulados`
  ADD CONSTRAINT `reportes_acumulados_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
