-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2023 a las 01:25:07
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lds`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `Id` int(11) NOT NULL,
  `URLImagen` varchar(255) NOT NULL,
  `title` varchar(250) NOT NULL,
  `Texto` text DEFAULT NULL,
  `UsuarioCreador` varchar(10) DEFAULT NULL,
  `FechaCreacion` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`Id`, `URLImagen`, `title`, `Texto`, `UsuarioCreador`, `FechaCreacion`) VALUES
(1, '', 'LENGUAJE DE SEÑAS', '\r\nEl lenguaje de señas es una forma de comunicación gestual utilizada principalmente por personas sordas o con discapacidades auditivas para expresar ideas, emociones y conceptos sin utilizar el habla. A diferencia de los idiomas orales, el lenguaje de señas se basa en movimientos de las manos, expresiones faciales y gestos corporales.\r\n\r\nCada país o región puede tener su propio sistema de lenguaje de señas, con su gramática y vocabulario específicos. Estos sistemas son lenguajes visuales y espaciales completamente funcionales, con una complejidad comparable a los idiomas hablados. Los intérpretes de lenguaje de señas desempeñan un papel crucial al facilitar la comunicación entre personas sordas y oyentes, ayudando a cerrar la brecha lingüística y facilitar la inclusión. El lenguaje de señas es una forma vibrante y rica de expresión cultural que contribuye a la diversidad y la igualdad.', 'Duvan', '2023-12-11 01:06:20'),
(2, '5240913739.jpg', 'Complejidad y Estructura', 'El lenguaje de señas no es simplemente una serie de gestos arbitrarios. Tiene su propia gramática y estructura lingüística, que incluye elementos como la dirección y movimiento de las manos, expresiones faciales y cambios de espacio.', 'Duvan', '2023-12-11 01:10:34'),
(3, '3185396920.jpg', 'Cultura Sorda', 'El lenguaje de señas está estrechamente vinculado a la cultura sorda. Las personas sordas no solo comparten un medio de comunicación, sino también experiencias y perspectivas culturales únicas. Eventos, historias y tradiciones son transmitidos a través de la comunidad de personas que utilizan el lenguaje de señas.', 'Duvan', '2023-12-11 01:12:42'),
(4, '6488165350.jpg', '', '', 'Duvan', '2023-12-11 01:55:14'),
(5, '3305009316.jpg', 'Nuevas Tecnologias', '', 'Duvan', '2023-12-14 12:49:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `CodigoUsuario` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `FechaCreacion` date DEFAULT current_timestamp(),
  `HoraCreacion` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `name`, `CodigoUsuario`, `Email`, `Password`, `FechaCreacion`, `HoraCreacion`) VALUES
(2, 'Duvan Hernandez', 'admin', 'duvan13hernandez1415@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2023-12-09', '18:07:23'),
(4, 'Duvan Hernandez', 'duvan', 'duvan13hernandez1415@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2023-12-09', '21:41:07'),
(5, 'lucy', 'adm', 'duvan13hernandez1415@gmail.com', '01cfcd4f6b8770febfb40cb906715822', '2023-12-10', '07:12:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `CodigoUsuario` (`CodigoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
