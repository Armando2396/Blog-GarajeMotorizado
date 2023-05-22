-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2023 a las 05:54:50
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `intro` varchar(200) DEFAULT NULL,
  `contenido` varchar(2000) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `cta` varchar(500) DEFAULT NULL,
  `fecha_hora` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `titulo`, `intro`, `contenido`, `img`, `cta`, `fecha_hora`) VALUES
(7, 'Probamos el Ford Mustang Shelby GT500: deliciosa y salvaje fruta prohibida en Europa', 'Carroll Shelby siguió de cerca el proyecto del Ford Mustang desde su inicio. Su primera colaboración se materializó en el GT350, tan solo nueve meses después del lanzamiento del Mustang, pero su obra ', 'Carroll Shelby siguió de cerca el proyecto del Ford Mustang desde su inicio. Su primera colaboración se materializó en el GT350, tan solo nueve meses después del lanzamiento del Mustang, pero su obra maestra no nació hasta 1966, con el primer Mustang Shelby GT500.\r\n\r\nEl objetivo de la compañía era que aquel coupé, que nació como un deportivo asequible, alcanzara un nivel de desempeño en circuito digno de deportivos de renombre. El mismo Carroll Shelby dijo que ese GT500 era el primer coche del que realmente se sentía orgulloso.', 'mustang.jpg', 'https://www.motorpasion.com/pruebas-de-coches/ford-mustang-shelby-gt500-2020-prueba', '2023-05-21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
