-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2024 a las 00:09:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admindb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(33) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin_user`
--

INSERT INTO `admin_user` (`id`, `user_name`, `password`) VALUES
(1, 'maxi', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directivos`
--

CREATE TABLE `directivos` (
  `id_dir` int(11) NOT NULL,
  `img_url` varchar(33) NOT NULL,
  `nombre` varchar(33) NOT NULL,
  `cargo` varchar(70) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `directivos`
--

INSERT INTO `directivos` (`id_dir`, `img_url`, `nombre`, `cargo`, `descripcion`) VALUES
(1, '', 'Ezequiel Torres', 'Director', 'Esta es la información completa del directivo. Aqu'),
(2, '', 'Daniel Segnini', 'Vicedirector', 'Esta es la información completa del directivo. Aqu'),
(3, '', 'Mariana Bonetti', 'Vicedirectora', 'Esta es la información completa del directivo. Aqu'),
(4, '', 'Karin Cuervo', 'Vicedirectora', 'Esta es la información completa del directivo. Aqu'),
(5, '', 'Esteban Lemos', 'Jefe de Area', 'Esta es la información completa del directivo. Aqu'),
(6, '', 'Alejandro Hsia', 'Jefe de Departamento Técnico Profesional', 'Esta es la información completa del directivo. Aqu'),
(7, '', 'Pablo Heredia', 'Jefe de Departamento de Educación Física', 'Esta es la información completa del directivo. Aqu'),
(8, '', 'Nancy Dunjo', 'Jefa de Departamendo de Comunicaciones', 'Esta es la información completa del directivo. Aqu'),
(9, '', 'Matias Gutierrez', 'Jefe de Departamento de Ciencias Naturales y Exactas', 'Esta es la información completa del directivo. Aqu'),
(10, '', 'Diana Cozzani', 'Jefa de Departamento de Ciencias Sociales\r\n', 'Esta es la información completa del directivo. Aqu'),
(11, '', 'Victorello', 'Jefa de Preceptoria', 'Esta es la información completa del directivo. Aqu'),
(12, '', 'Cristina Goméz', 'Secretaría', 'Esta es la información completa del directivo. Aqu'),
(13, '', 'Alejandra Basack', 'Prosecretaria', 'Esta es la información completa del directivo. Aqu'),
(14, '', 'Martín Lopez', 'Encargado en Jefe y apoyo Informatico\r\n', 'Esta es la información completa del directivo. Aqu'),
(15, '', 'Alejandro Miguel San Martín', 'Padrino', 'Esta es la información completa del directivo. Aqu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `nombre` varchar(33) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mail`
--

INSERT INTO `mail` (`id`, `nombre`, `mensaje`, `mail`) VALUES
(9, 'hola', 'hola', 'hola@gmail.com'),
(10, 'thomas', 'thrt', 'hola@gmail.com'),
(11, 'hjgkij', 'ghjfhgbf', 'jiktjhio@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `directivos`
--
ALTER TABLE `directivos`
  ADD PRIMARY KEY (`id_dir`);

--
-- Indices de la tabla `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `directivos`
--
ALTER TABLE `directivos`
  MODIFY `id_dir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
