-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db:3306
-- Tiempo de generación: 28-12-2021 a las 12:51:03
-- Versión del servidor: 8.0.20
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int NOT NULL,
  `n_expediente` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` tinyint(1) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grado_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `n_expediente`, `nombre`, `apellidos`, `fecha_nacimiento`, `sexo`, `email`, `telefono`, `grado_id`) VALUES
(1, 13472, 'Carlos ', 'Herrera Conejero', '2017-10-10', 0, 'carherco@gmail.com', '197687432', 1),
(4, 13483, 'Carmen', 'Hernández Colomina', '2007-10-10', 0, 'carherco+2@gmail.com', '545758758768', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos_asignaturas`
--

CREATE TABLE `alumnos_asignaturas` (
  `asignatura_id` int NOT NULL,
  `alumno_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumnos_asignaturas`
--

INSERT INTO `alumnos_asignaturas` (`asignatura_id`, `alumno_id`) VALUES
(3, 1),
(4, 1),
(6, 4),
(7, 1),
(8, 4),
(10, 4),
(11, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id` int NOT NULL,
  `grado_id` int NOT NULL,
  `codigo` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_ingles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creditos` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id`, `grado_id`, `codigo`, `nombre`, `nombre_ingles`, `creditos`) VALUES
(3, 1, 1343, 'Física I', 'Physics I', 6),
(4, 1, 4231, 'Física II', 'Physics II', 6),
(5, 1, 435354, 'Cálculo', 'Cálculo', 3),
(6, 2, 5565, 'Comunicaciones ópticas', 'Comunicaciones ópticas', 5),
(7, 1, 334, 'Programación', 'Programación', 8),
(8, 2, 24124, 'Antenas', 'Antenas', 4),
(9, 1, 765432, 'Geografía', 'Geografía', 6),
(10, 2, 2147483647, 'Microondas', 'Microondas', 6),
(11, 2, 542552345, 'Programación', 'Programación', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211223183211', '2021-12-23 19:33:17', 266);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grado`
--

CREATE TABLE `grado` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grado`
--

INSERT INTO `grado` (`id`, `nombre`) VALUES
(1, 'Ingeniería de montes'),
(2, 'Ingeniería de telecomunicaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `id` int NOT NULL,
  `asignatura_id` int DEFAULT NULL,
  `alumno_id` int DEFAULT NULL,
  `n_convocatoria` int NOT NULL,
  `fecha` date NOT NULL,
  `nota` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1435D52D91A441CC` (`grado_id`);

--
-- Indices de la tabla `alumnos_asignaturas`
--
ALTER TABLE `alumnos_asignaturas`
  ADD PRIMARY KEY (`asignatura_id`,`alumno_id`),
  ADD KEY `IDX_D57EE88C5C70C5B` (`asignatura_id`),
  ADD KEY `IDX_D57EE88FC28E5EE` (`alumno_id`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9243D6CE91A441CC` (`grado_id`);

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `grado`
--
ALTER TABLE `grado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C8D03E0DC5C70C5B` (`asignatura_id`),
  ADD KEY `IDX_C8D03E0DFC28E5EE` (`alumno_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `grado`
--
ALTER TABLE `grado`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `FK_1435D52D91A441CC` FOREIGN KEY (`grado_id`) REFERENCES `grado` (`id`);

--
-- Filtros para la tabla `alumnos_asignaturas`
--
ALTER TABLE `alumnos_asignaturas`
  ADD CONSTRAINT `FK_D57EE88C5C70C5B` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`id`),
  ADD CONSTRAINT `FK_D57EE88FC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`);

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `FK_9243D6CE91A441CC` FOREIGN KEY (`grado_id`) REFERENCES `grado` (`id`);

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `FK_C8D03E0DC5C70C5B` FOREIGN KEY (`asignatura_id`) REFERENCES `asignatura` (`id`),
  ADD CONSTRAINT `FK_C8D03E0DFC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
