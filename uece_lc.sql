-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-06-2018 a las 22:46:07
-- Versión del servidor: 5.7.22-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uece_lc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Canaima`
--

CREATE TABLE `Canaima` (
  `id_canaima` bigint(20) UNSIGNED NOT NULL,
  `p_canaima` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `e_canaima` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `s_canaima` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Canaima`
--

INSERT INTO `Canaima` (`id_canaima`, `p_canaima`, `e_canaima`, `s_canaima`) VALUES
(1, 'Si', 'En uso', 'q1w23e4rtr45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Datos_acad`
--

CREATE TABLE `Datos_acad` (
  `id_da` bigint(20) UNSIGNED NOT NULL,
  `rep` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `asig_cur` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `mat_pend` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `mat_pend_c` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `beca` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Datos_acad`
--

INSERT INTO `Datos_acad` (`id_da`, `rep`, `asig_cur`, `mat_pend`, `mat_pend_c`, `beca`) VALUES
(1, 'No', 'Todas', 'No', 'Ninguna', 'Si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Diversidad_fun`
--

CREATE TABLE `Diversidad_fun` (
  `id_df` bigint(20) UNSIGNED NOT NULL,
  `p_df` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p_inf` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ind_cond` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Diversidad_fun`
--

INSERT INTO `Diversidad_fun` (`id_df`, `p_df`, `p_inf`, `ind_cond`) VALUES
(1, 'No', 'No', 'N/P');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Documentos`
--

CREATE TABLE `Documentos` (
  `id_doc` bigint(20) UNSIGNED NOT NULL,
  `ci_est` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `ci_rep` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `ci_ma` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `ci_pa` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `part_nac` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `corgcert` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `corg_b` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `f_est` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `f_rep` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `funda` varchar(2) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Documentos`
--

INSERT INTO `Documentos` (`id_doc`, `ci_est`, `ci_rep`, `ci_ma`, `ci_pa`, `part_nac`, `corgcert`, `corg_b`, `f_est`, `f_rep`, `funda`) VALUES
(1, 'Si', 'Si', 'Si', 'Si', 'Si', 'No', 'Si', 'Si', 'Si', 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estudiantes`
--

CREATE TABLE `Estudiantes` (
  `id_estudiantes` bigint(20) UNSIGNED NOT NULL,
  `nom_ap` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(255) NOT NULL,
  `edad` int(2) NOT NULL,
  `fecha_nac` date NOT NULL,
  `pais_nac` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `op_tlf` int(4) NOT NULL,
  `num_tlf` int(7) NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Estudiantes`
--

INSERT INTO `Estudiantes` (`id_estudiantes`, `nom_ap`, `cedula`, `edad`, `fecha_nac`, `pais_nac`, `estado`, `municipio`, `nacionalidad`, `op_tlf`, `num_tlf`, `direccion`) VALUES
(1, 'JesÃºs Sandino RodrÃ­guez Figuera', 26997629, 20, '1998-04-10', 'Venezuela', 'Monagas', 'CedeÃ±o', 'Venezolano(a)', 412, 8351393, 'Calle Ennio Gaudio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Madre`
--

CREATE TABLE `Madre` (
  `id_madre` bigint(20) UNSIGNED NOT NULL,
  `nom_ap` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(255) NOT NULL,
  `edad` int(2) NOT NULL,
  `lug_nac` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `op_hab` int(4) NOT NULL,
  `num_hab` int(7) NOT NULL,
  `op_cel` int(4) NOT NULL,
  `num_cel` int(7) NOT NULL,
  `profesion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `lugar_trab` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Madre`
--

INSERT INTO `Madre` (`id_madre`, `nom_ap`, `cedula`, `edad`, `lug_nac`, `estado`, `municipio`, `op_hab`, `num_hab`, `op_cel`, `num_cel`, `profesion`, `lugar_trab`, `direccion`) VALUES
(1, 'Maria Figuera', 9898255, 49, 'Venezuela', 'Monagas', 'CedeÃ±o', 292, 3311644, 424, 9105993, 'Docente', 'L.N. Juan Francisco Mila de la Roca', 'Calle Ennio Gaudio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Medidas`
--

CREATE TABLE `Medidas` (
  `id_medidas` bigint(20) UNSIGNED NOT NULL,
  `lateralidad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `peso` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estatura` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `talla_c` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `talla_p` int(2) NOT NULL,
  `talla_z` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Medidas`
--

INSERT INTO `Medidas` (`id_medidas`, `lateralidad`, `genero`, `peso`, `estatura`, `talla_c`, `talla_p`, `talla_z`) VALUES
(1, 'Derecho', 'M', '53', '1,72', 'S', 28, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Padre`
--

CREATE TABLE `Padre` (
  `id_padre` bigint(20) UNSIGNED NOT NULL,
  `nom_ap` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(255) NOT NULL,
  `edad` int(2) NOT NULL,
  `lug_nac` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `op_hab` int(4) NOT NULL,
  `num_hab` int(7) NOT NULL,
  `op_cel` int(4) NOT NULL,
  `num_cel` int(7) NOT NULL,
  `profesion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `lugar_trab` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Padre`
--

INSERT INTO `Padre` (`id_padre`, `nom_ap`, `cedula`, `edad`, `lug_nac`, `estado`, `municipio`, `op_hab`, `num_hab`, `op_cel`, `num_cel`, `profesion`, `lugar_trab`, `direccion`) VALUES
(1, 'Keli Vladimir Rodriguez Maza', 8888888, 54, 'Venezuela', 'Monagas', 'CedeÃ±o', 292, 8888888, 414, 8237756, 'Docente', 'Universidad Simon Rodriguez', 'La murallita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Plantel_pro`
--

CREATE TABLE `Plantel_pro` (
  `id_pp` bigint(20) UNSIGNED NOT NULL,
  `plantel_p` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `period1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `period2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `period3` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `p3` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Plantel_pro`
--

INSERT INTO `Plantel_pro` (`id_pp`, `plantel_p`, `period1`, `p1`, `period2`, `p2`, `period3`, `p3`) VALUES
(1, 'E.B.B. "Luis Felipe Turmero Corvo"', '2010 - 2011', 'E.B.B. "Jose Francisco Bermudez"', '2011 - 2012', 'L.N.B. "Juan Francisco Mila de la Roca"', '2012 - 2013', 'U.E.C.E. "Las Carolinas"');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Representante`
--

CREATE TABLE `Representante` (
  `id_rep` bigint(20) UNSIGNED NOT NULL,
  `nom_ap` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(255) NOT NULL,
  `fecha_nac` date NOT NULL,
  `pais_nac` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estado_civil` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `profesion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `op_emp` int(4) NOT NULL,
  `num_emp` int(7) NOT NULL,
  `op_hab` int(4) NOT NULL,
  `num_hab` int(7) NOT NULL,
  `op_cel` int(4) NOT NULL,
  `num_cel` int(7) NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Representante`
--

INSERT INTO `Representante` (`id_rep`, `nom_ap`, `cedula`, `fecha_nac`, `pais_nac`, `estado`, `nacionalidad`, `estado_civil`, `profesion`, `empresa`, `op_emp`, `num_emp`, `op_hab`, `num_hab`, `op_cel`, `num_cel`, `correo`, `direccion`) VALUES
(1, 'Mariangela del JesÃºs Rodriguez Figuera', 22708373, '1995-02-12', 'Venezuela', 'Monagas', 'Venezolana', 'Soltero(a)', 'Docente', 'L.N. Juan Francisco Mila de la Roca', 292, 4563217, 292, 3311644, 414, 7686400, 'bichoalegre@tupapo.com', 'Calle Ennio Gaudio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `nom_u` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pass` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nom_ap` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(255) NOT NULL,
  `f_ingreso` date NOT NULL,
  `desemp` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cond_lab` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `horas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id_users`, `nom_u`, `pass`, `nom_ap`, `cedula`, `f_ingreso`, `desemp`, `cond_lab`, `horas`) VALUES
(1, 'admin', '123456', 'Administrador principal', 1, '2018-05-09', 'Docente', 'Titular', 24),
(2, 'Jesus', '26997629', 'Jesus Sandino Rodriguez Figuera', 26997629, '2018-04-10', 'Docente', 'Contratado', 10),
(3, 'root', 'root', 'Maria Figuera', 9898255, '2007-04-03', 'Administrativo', 'Titular', 30),
(4, 'Mangui', 'Ã±', 'Mariangela del JesÃºs Rodriguez Figuera', 22708373, '2018-05-01', 'Administrativo', 'Contratado', 12),
(5, 'Nilaska', '1234', 'Nilaska Ramos', 1234567, '2018-06-06', 'Docente', 'Titular', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Vivienda`
--

CREATE TABLE `Vivienda` (
  `id_vivienda` bigint(20) UNSIGNED NOT NULL,
  `tp_vivienda` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cond_vivienda` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `infraestr_vivienda` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Vivienda`
--

INSERT INTO `Vivienda` (`id_vivienda`, `tp_vivienda`, `cond_vivienda`, `infraestr_vivienda`) VALUES
(1, 'Apartamento', 'Optima', 'Estable');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Canaima`
--
ALTER TABLE `Canaima`
  ADD PRIMARY KEY (`id_canaima`),
  ADD UNIQUE KEY `id_canaima` (`id_canaima`),
  ADD UNIQUE KEY `s_canima` (`s_canaima`);

--
-- Indices de la tabla `Datos_acad`
--
ALTER TABLE `Datos_acad`
  ADD PRIMARY KEY (`id_da`),
  ADD UNIQUE KEY `id_da` (`id_da`);

--
-- Indices de la tabla `Diversidad_fun`
--
ALTER TABLE `Diversidad_fun`
  ADD PRIMARY KEY (`id_df`),
  ADD UNIQUE KEY `id_df` (`id_df`);

--
-- Indices de la tabla `Documentos`
--
ALTER TABLE `Documentos`
  ADD PRIMARY KEY (`id_doc`),
  ADD UNIQUE KEY `id_doc` (`id_doc`);

--
-- Indices de la tabla `Estudiantes`
--
ALTER TABLE `Estudiantes`
  ADD PRIMARY KEY (`id_estudiantes`),
  ADD UNIQUE KEY `id_estudiantes` (`id_estudiantes`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `Madre`
--
ALTER TABLE `Madre`
  ADD PRIMARY KEY (`id_madre`),
  ADD UNIQUE KEY `id_madres` (`id_madre`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `Medidas`
--
ALTER TABLE `Medidas`
  ADD PRIMARY KEY (`id_medidas`),
  ADD UNIQUE KEY `id_medidas` (`id_medidas`);

--
-- Indices de la tabla `Padre`
--
ALTER TABLE `Padre`
  ADD PRIMARY KEY (`id_padre`),
  ADD UNIQUE KEY `id_padres` (`id_padre`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `Plantel_pro`
--
ALTER TABLE `Plantel_pro`
  ADD PRIMARY KEY (`id_pp`),
  ADD UNIQUE KEY `id_pp` (`id_pp`);

--
-- Indices de la tabla `Representante`
--
ALTER TABLE `Representante`
  ADD PRIMARY KEY (`id_rep`),
  ADD UNIQUE KEY `id_rep` (`id_rep`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `id_users` (`id_users`),
  ADD UNIQUE KEY `nom_u` (`nom_u`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `Vivienda`
--
ALTER TABLE `Vivienda`
  ADD PRIMARY KEY (`id_vivienda`),
  ADD UNIQUE KEY `id_vivienda` (`id_vivienda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Canaima`
--
ALTER TABLE `Canaima`
  MODIFY `id_canaima` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Datos_acad`
--
ALTER TABLE `Datos_acad`
  MODIFY `id_da` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Diversidad_fun`
--
ALTER TABLE `Diversidad_fun`
  MODIFY `id_df` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Documentos`
--
ALTER TABLE `Documentos`
  MODIFY `id_doc` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Estudiantes`
--
ALTER TABLE `Estudiantes`
  MODIFY `id_estudiantes` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Madre`
--
ALTER TABLE `Madre`
  MODIFY `id_madre` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Medidas`
--
ALTER TABLE `Medidas`
  MODIFY `id_medidas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Padre`
--
ALTER TABLE `Padre`
  MODIFY `id_padre` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Plantel_pro`
--
ALTER TABLE `Plantel_pro`
  MODIFY `id_pp` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Representante`
--
ALTER TABLE `Representante`
  MODIFY `id_rep` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `id_users` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `Vivienda`
--
ALTER TABLE `Vivienda`
  MODIFY `id_vivienda` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
