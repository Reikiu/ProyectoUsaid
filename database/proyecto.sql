-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2019 a las 16:52:38
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
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `Id_Actividad` int(11) NOT NULL,
  `Nombre_Actividad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo_Documento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Municipio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Inicio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Fin` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `verificacion` varchar(180) COLLATE utf8_spanish_ci NOT NULL,
  `impacto` varchar(220) COLLATE utf8_spanish_ci NOT NULL,
  `ruta` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `resultado` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`Id_Actividad`, `Nombre_Actividad`, `Tipo_Documento`, `Municipio`, `Fecha_Inicio`, `Fecha_Fin`, `verificacion`, `impacto`, `ruta`, `resultado`) VALUES
(22, 'sin documento', 'AFM', 'Atiquizaya', '2019-12-24', '2019-12-24', 'plan probando', 'probando', 'Visita_(1).pdf', 'asdasdasda'),
(23, 'visitar municipio', 'WP', 'San Lorenzo', '2019-12-21', '2019-12-26', 'plan probando', '', 'Mauricio_ErnestoBaires_Martinez-ITE_C119_SIS13-certificate.pdf', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_finalizada`
--

CREATE TABLE `actividad_finalizada` (
  `idResultado` int(11) NOT NULL,
  `Agenda` varchar(180) COLLATE utf8_spanish_ci NOT NULL,
  `Observaciones` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `partOtrosM` int(11) NOT NULL,
  `partOtrosF` int(11) NOT NULL,
  `hReaInvertidas` double NOT NULL,
  `acividadRea` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fechaProSesion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegistro` date NOT NULL,
  `partMunicM` int(11) NOT NULL,
  `partMunicH` int(11) NOT NULL,
  `Acuerdos` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `idVisita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actividad_finalizada`
--

INSERT INTO `actividad_finalizada` (`idResultado`, `Agenda`, `Observaciones`, `partOtrosM`, `partOtrosF`, `hReaInvertidas`, `acividadRea`, `fechaProSesion`, `fechaRegistro`, `partMunicM`, `partMunicH`, `Acuerdos`, `idVisita`) VALUES
(8, 'asd', 'asd', 4, 6, 6, 'asd', '2019-12-13', '2019-12-21', 4, 4, 'lhajkshjdklasd', 40),
(9, 'agenda', 'por ver', 18, 26, 5, 'actividad realizada ', '2019-12-12', '2019-12-12', 20, 18, 'acuerdos', 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `Id_Area` int(11) NOT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `Supervisor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Tecnicos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre_Area` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `country`
--

INSERT INTO `country` (`id`, `name`, `status`) VALUES
(1, 'Afghanistan', 1),
(2, 'Albania', 1),
(3, 'Algeria', 1),
(4, 'Andorra', 1),
(5, 'Angola', 1),
(6, 'Antigua and Barbuda', 1),
(7, 'Argentina', 1),
(8, 'Armenia', 1),
(9, 'Australia', 1),
(10, 'Austria', 1),
(11, 'Azerbaijan', 1),
(12, 'Bahamas', 1),
(13, 'Bahrain', 1),
(14, 'Bangladesh', 1),
(15, 'Barbados', 1),
(16, 'Belarus', 1),
(17, 'Belgium', 1),
(18, 'Belize', 1),
(19, 'Benin', 1),
(20, 'Bhutan', 1),
(21, 'Bolivia', 1),
(22, 'Bosnia and Herzegovina', 1),
(23, 'Botswana', 1),
(24, 'Brazil', 1),
(25, 'Brunei', 1),
(26, 'Bulgaria', 1),
(27, 'Burkina Faso', 1),
(28, 'Burundi', 1),
(29, 'Cabo Verde', 1),
(30, 'Cambodia', 1),
(31, 'Cameroon', 1),
(32, 'Canada', 1),
(33, 'Central African Republic', 1),
(34, 'Chad', 1),
(35, 'Chile', 1),
(36, 'China', 1),
(37, 'Colombia', 1),
(38, 'Comoros', 1),
(39, 'Congo, Republic of the', 1),
(40, 'Congo, Democratic Republic of the', 1),
(41, 'Costa Rica', 1),
(42, 'Cote d Ivoire', 1),
(43, 'Croatia', 1),
(44, 'Cuba', 1),
(45, 'Cyprus', 1),
(46, 'Czech Republic', 1),
(47, 'Denmark', 1),
(48, 'Djibouti', 1),
(49, 'Dominica', 1),
(50, 'Dominican Republic', 1),
(51, 'Ecuador', 1),
(52, 'Egypt', 1),
(53, 'El Salvador', 1),
(54, 'Equatorial Guinea', 1),
(55, 'Eritrea', 1),
(56, 'Estonia', 1),
(57, 'Ethiopia', 1),
(58, 'Fiji', 1),
(59, 'Finland', 1),
(60, 'France', 1),
(61, 'Gabon', 1),
(62, 'Gambia', 1),
(63, 'Georgia', 1),
(64, 'Germany', 1),
(65, 'Ghana', 1),
(66, 'Greece', 1),
(67, 'Grenada', 1),
(68, 'Guatemala', 1),
(69, 'Guinea', 1),
(70, 'Guinea-Bissau', 1),
(71, 'Guyana', 1),
(72, 'Haiti', 1),
(73, 'Honduras', 1),
(74, 'Hungary', 1),
(75, 'Iceland', 1),
(76, 'India', 1),
(77, 'Indonesia', 1),
(78, 'Iran', 1),
(79, 'Iraq', 1),
(80, 'Ireland', 1),
(81, 'Italy', 1),
(82, 'Jamaica', 1),
(83, 'Japan', 1),
(84, 'Jordan', 1),
(85, 'Kazakhstan', 1),
(86, 'Kenya', 1),
(87, 'Kiribati', 1),
(88, 'Kosovo', 1),
(89, 'Kuwait', 1),
(90, 'Kyrgyzstan', 1),
(91, 'Laos', 1),
(92, 'Latvia', 1),
(93, 'Lebanon', 1),
(94, 'Lesotho', 1),
(95, 'Liberia', 1),
(96, 'Libya', 1),
(97, 'Liechtenstein', 1),
(98, 'Lithuania', 1),
(99, 'Luxembourg', 1),
(100, 'Macedonia', 1),
(101, 'Madagascar', 1),
(102, 'Malawi', 1),
(103, 'Malaysia', 1),
(104, 'Maldives', 1),
(105, 'Mali', 1),
(106, 'Malta', 1),
(107, 'Marshall Islands', 1),
(108, 'Mauritania', 1),
(109, 'Mauritius', 1),
(110, 'Mexico', 1),
(111, 'Micronesia', 1),
(112, 'Moldova', 1),
(113, 'Monaco', 1),
(114, 'Mongolia', 1),
(115, 'Montenegro', 1),
(116, 'Morocco', 1),
(117, 'Mozambique', 1),
(118, 'Myanmar (Burma)', 1),
(119, 'Namibia', 1),
(120, 'Nauru', 1),
(121, 'Nepal', 1),
(122, 'Netherlands', 1),
(123, 'New Zealand', 1),
(124, 'Nicaragua', 1),
(125, 'Niger', 1),
(126, 'Nigeria', 1),
(127, 'North Korea', 1),
(128, 'Norway', 1),
(129, 'Oman', 1),
(130, 'Pakistan', 1),
(131, 'Palau', 1),
(132, 'Palestine', 1),
(133, 'Panama', 1),
(134, 'Papua New Guinea', 1),
(135, 'Paraguay', 1),
(136, 'Peru', 1),
(137, 'Philippines', 1),
(138, 'Poland', 1),
(139, 'Portugal', 1),
(140, 'Qatar', 1),
(141, 'Romania', 1),
(142, 'Russia', 1),
(143, 'Rwanda', 1),
(144, 'St. Kitts and Nevis', 1),
(145, 'St. Lucia', 1),
(146, 'St. Vincent and The Grenadines', 1),
(147, 'Samoa', 1),
(148, 'San Marino', 1),
(149, 'Sao Tome and Principe', 1),
(150, 'Saudi Arabia', 1),
(151, 'Senegal', 1),
(152, 'Serbia', 1),
(153, 'Seychelles', 1),
(154, 'Sierra Leone', 1),
(155, 'Singapore', 1),
(156, 'Slovakia', 1),
(157, 'Slovenia', 1),
(158, 'Solomon Islands', 1),
(159, 'Somalia', 1),
(160, 'South Africa', 1),
(161, 'South Korea', 1),
(162, 'South Sudan', 1),
(163, 'Spain', 1),
(164, 'Sri Lanka', 1),
(165, 'Sudan', 1),
(166, 'Suriname', 1),
(167, 'Swaziland', 1),
(168, 'Sweden', 1),
(169, 'Switzerland', 1),
(170, 'Syria', 1),
(171, 'Taiwan', 1),
(172, 'Tajikistan', 1),
(173, 'Tanzania', 1),
(174, 'Thailand', 1),
(175, 'Timor-Leste', 1),
(176, 'Togo', 1),
(177, 'Tonga', 1),
(178, 'Trinidad and Tobago', 1),
(179, 'Tunisia', 1),
(180, 'Turkey', 1),
(181, 'Turkmenistan', 1),
(182, 'Tuvalu', 1),
(183, 'Uganda', 1),
(184, 'Ukraine', 1),
(185, 'United Arab Emirates', 1),
(186, 'United Kingdom (UK)', 1),
(187, 'United States of America (USA)', 1),
(188, 'Uruguay', 1),
(189, 'Uzbekistan', 1),
(190, 'Vanuatu', 1),
(191, 'Vatican City (Holy See)', 1),
(192, 'Venezuela', 1),
(193, 'Vietnam', 1),
(194, 'Yemen', 1),
(195, 'Zambia', 1),
(196, 'Zimbabwe', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `Id_Departamento` int(11) NOT NULL,
  `Id_Municipio` int(11) NOT NULL,
  `Nombre_Departamento` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_de_actividad`
--

CREATE TABLE `detalle_de_actividad` (
  `Id_Detalle` int(11) NOT NULL,
  `Lugar` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Equipo_Y_Material_Requerido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Hora_Retorno_Oficina` time NOT NULL,
  `Hora_Salida_Oficina` time NOT NULL,
  `Hora_Fin_Sesion` time NOT NULL,
  `Hora_Inicio_Sesion` time NOT NULL,
  `actividad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalle_de_actividad`
--

INSERT INTO `detalle_de_actividad` (`Id_Detalle`, `Lugar`, `Equipo_Y_Material_Requerido`, `Hora_Retorno_Oficina`, `Hora_Salida_Oficina`, `Hora_Fin_Sesion`, `Hora_Inicio_Sesion`, `actividad`) VALUES
(1, 'asd', 'asd', '12:03:00', '12:03:00', '12:03:00', '12:03:00', 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `Id_Municipio` int(11) NOT NULL,
  `Nombre_Municipio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Departamento` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`Id_Municipio`, `Nombre_Municipio`, `Departamento`) VALUES
(1, 'Ahuachapan', 'Ahuachapan'),
(2, 'Apaneca', 'Ahuachapan'),
(3, 'Atiquizaya', 'Ahuachapan'),
(4, 'Concepcion de Ataco', 'Ahuachapan'),
(5, 'El Refugio', 'Ahuachapan'),
(6, 'Guaymango', 'Ahuachapan'),
(7, 'Jujutla', 'Ahuachapan'),
(8, 'San Lorenzo (Ahuachapan)', 'Ahuachapan'),
(9, 'San Francisco Menendez', 'Ahuachapan'),
(10, 'San Pedro Puxtla', 'Ahuachapan'),
(11, 'Tacuba', 'Ahuachapan'),
(12, 'Turin', 'Ahuachapan'),
(13, 'Sensuntepeque', 'Cabañas'),
(14, 'Cinquera', 'Cabañas'),
(15, 'Dolores', 'Cabañas'),
(16, 'Guacotecti', 'Cabañas'),
(17, 'Ilobasco', 'Cabañas'),
(18, 'Jutiapa', 'Cabañas'),
(19, 'San Isidro (Cabañas)', 'Cabañas'),
(20, 'Tejutepeque', 'Cabañas'),
(21, 'Victoria', 'Cabañas'),
(22, 'Chalatenango', 'Chalatenango'),
(23, 'Agua Caliente', 'Chalatenango'),
(24, 'Arcatao', 'Chalatenango'),
(25, 'Azacualpa', 'Chalatenango'),
(26, 'Cancasque', 'Chalatenango'),
(27, 'Citala', 'Chalatenango'),
(28, 'Comalapa', 'Chalatenango'),
(29, 'Concepcion Quezaltepeque', 'Chalatenango'),
(30, 'Dulce Nombre de Maria', 'Chalatenango'),
(31, 'El Carrizal', 'Chalatenango'),
(32, 'El Paraiso', 'Chalatenango'),
(33, 'La Laguna', 'Chalatenango'),
(34, 'La Palma', 'Chalatenango'),
(35, 'La Reina', 'Chalatenango'),
(36, 'Las Flores', 'Chalatenango'),
(37, 'Las Vueltas', 'Chalatenango'),
(38, 'Nombre de Jesus', 'Chalatenango'),
(39, 'Nueva Concepcion', 'Chalatenango'),
(40, 'Nueva Trinidad', 'Chalatenango'),
(41, 'Ojos de Agua', 'Chalatenango'),
(42, 'Potonico', 'Chalatenango'),
(43, 'San Antonio de la Cruz', 'Chalatenango'),
(44, 'San Antonio Los Ranchos', 'Chalatenango'),
(45, 'San Fernando (Chalatenango)', 'Chalatenango');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planificacion`
--

CREATE TABLE `planificacion` (
  `Id_Planificacion` int(11) NOT NULL,
  `Personas_que_Viajan` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Responsable` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Objetivo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fechaProgramada` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `Estado_Actividad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `Id_Actividad` int(11) NOT NULL,
  `conductor` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `planificacion`
--

INSERT INTO `planificacion` (`Id_Planificacion`, `Personas_que_Viajan`, `Responsable`, `Objetivo`, `fechaProgramada`, `Estado_Actividad`, `municipio`, `Id_Actividad`, `conductor`) VALUES
(40, '12', 'mauricio baires', 'asd', '2019-11-29', 'Programada', 'Atiquizaya', 22, 'jose enrique'),
(41, '12', 'mauricio baires', 'hola', '2019-12-14', 'Programada', 'San Lorenzo', 23, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`, `estado`) VALUES
(1, 'Tecnico', 1),
(2, 'Motorista', 1),
(3, 'admin', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `country` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `role` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `puesto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `area` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `mobile`, `password`, `country`, `created_at`, `status`, `role`, `puesto`, `area`) VALUES
(4, 'Super', 'admin', 'admin@admin.com', '6315-4018', '21232f297a57a5a743894a0e4a801fc3', 53, '2019-11-26 09:39:09', 1, 'admin', 'Especialista', 'Operaciones'),
(8, 'jose', 'enrique', 'jose09@gmail.com', '7846-234', '81dc9bdb52d04dc20036dbd8313ed055', 10, '2019-11-26 15:48:13', 0, 'Motorista', 'Gerente', 'Objetivo 3'),
(17, 'mauricio', 'baires', 'mauriciobaires09@gmail.com', '6315-4018', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2019-12-03 12:42:08', 0, 'user', 'Chief of Party', 'Seguridad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_power`
--

CREATE TABLE `user_power` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `power_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user_power`
--

INSERT INTO `user_power` (`id`, `name`, `power_id`) VALUES
(1, 'Agregar', 1),
(2, 'Editar', 2),
(3, 'Eliminar', 3),
(4, 'Activar', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `action`) VALUES
(1, 11, 1),
(2, 11, 3),
(3, 12, 1),
(4, 12, 2),
(5, 12, 3),
(6, 12, 4),
(7, 13, 3),
(8, 3, 1),
(9, 3, 2),
(10, 3, 4),
(11, 5, 1),
(12, 5, 3),
(13, 6, 1),
(14, 6, 2),
(20, 17, 1),
(21, 17, 2),
(22, 18, 1),
(23, 18, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_Usuario` int(11) NOT NULL,
  `Correo_Electronico` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Tipo_Usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Puesto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Area` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombreUsuario` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(75) COLLATE utf8_spanish_ci NOT NULL,
  `salt` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_Usuario`, `Correo_Electronico`, `Telefono`, `Tipo_Usuario`, `Puesto`, `Nombre`, `Apellido`, `Area`, `nombreUsuario`, `pass`, `direccion`, `salt`, `rol_id`) VALUES
(61, 'mauriciobaires09@gmail.com', '7586-4016', '3', 'Deputy Chief of Party', 'mauri', 'baires', 'Objetivo 2', 'mauri09', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'sonsonate armenia', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 3),
(62, 'carloshernandez@gmail.com', '6945-7895', '1', 'Deputy Chief of Party', 'carlos', 'hernadez', 'MEL', 'carlos09', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'san salvador', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`Id_Actividad`);

--
-- Indices de la tabla `actividad_finalizada`
--
ALTER TABLE `actividad_finalizada`
  ADD PRIMARY KEY (`idResultado`),
  ADD KEY `fkIdVisita` (`idVisita`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`Id_Area`),
  ADD KEY `fk1` (`Id_Usuario`);

--
-- Indices de la tabla `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`Id_Departamento`),
  ADD KEY `fkMunicipio` (`Id_Municipio`);

--
-- Indices de la tabla `detalle_de_actividad`
--
ALTER TABLE `detalle_de_actividad`
  ADD PRIMARY KEY (`Id_Detalle`),
  ADD KEY `fkActividad` (`actividad`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`Id_Municipio`);

--
-- Indices de la tabla `planificacion`
--
ALTER TABLE `planificacion`
  ADD PRIMARY KEY (`Id_Planificacion`),
  ADD KEY `fknombreActividad` (`Id_Actividad`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_power`
--
ALTER TABLE `user_power`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_Usuario`),
  ADD KEY `fk_usuario_rol` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `Id_Actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `actividad_finalizada`
--
ALTER TABLE `actividad_finalizada`
  MODIFY `idResultado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `Id_Area` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `Id_Departamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_de_actividad`
--
ALTER TABLE `detalle_de_actividad`
  MODIFY `Id_Detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `Id_Municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `planificacion`
--
ALTER TABLE `planificacion`
  MODIFY `Id_Planificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `user_power`
--
ALTER TABLE `user_power`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad_finalizada`
--
ALTER TABLE `actividad_finalizada`
  ADD CONSTRAINT `fkIdVisita` FOREIGN KEY (`idVisita`) REFERENCES `planificacion` (`Id_Planificacion`) ON DELETE CASCADE;

--
-- Filtros para la tabla `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuarios` (`Id_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `fkMunicipio` FOREIGN KEY (`Id_Municipio`) REFERENCES `municipio` (`Id_Municipio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_de_actividad`
--
ALTER TABLE `detalle_de_actividad`
  ADD CONSTRAINT `fkActividad` FOREIGN KEY (`actividad`) REFERENCES `planificacion` (`Id_Planificacion`) ON DELETE CASCADE;

--
-- Filtros para la tabla `planificacion`
--
ALTER TABLE `planificacion`
  ADD CONSTRAINT `fknombreActividad` FOREIGN KEY (`Id_Actividad`) REFERENCES `actividades` (`Id_Actividad`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
