-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2022 a las 17:17:09
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
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bolsas`
--

CREATE TABLE `bolsas` (
  `bolsa_id` int(10) NOT NULL,
  `peso` int(5) NOT NULL DEFAULT 1000,
  `lote_id` int(10) NOT NULL,
  `estatus` varchar(10) NOT NULL DEFAULT 'Deposito',
  `soft_delate` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bolsas`
--

INSERT INTO `bolsas` (`bolsa_id`, `peso`, `lote_id`, `estatus`, `soft_delate`) VALUES
(2, 1000, 3, 'Deposito', 1),
(3, 1000, 3, 'Deposito', 1),
(4, 1000, 3, 'Deposito', 1),
(5, 1000, 3, 'Producción', 1),
(6, 900, 3, 'Producción', 1),
(7, 1000, 3, 'Deposito', 1),
(8, 1000, 3, 'Deposito', 1),
(9, 1000, 3, 'Deposito', 1),
(10, 1000, 3, 'Deposito', 1),
(11, 1000, 3, 'Deposito', 1),
(12, 1000, 5, 'Deposito', 1),
(13, 1000, 5, 'Deposito', 1),
(14, 1000, 5, 'Deposito', 1),
(15, 1000, 5, 'Deposito', 1),
(16, 1000, 5, 'Deposito', 1),
(17, 1000, 5, 'Deposito', 1),
(18, 1000, 5, 'Deposito', 1),
(19, 1000, 5, 'Deposito', 1),
(20, 1000, 5, 'Deposito', 1),
(21, 1000, 5, 'Deposito', 1),
(22, 1000, 6, 'Deposito', 1),
(23, 1000, 6, 'Deposito', 1),
(24, 1000, 6, 'Deposito', 1),
(25, 1000, 6, 'Deposito', 1),
(26, 1000, 6, 'Deposito', 1),
(27, 1000, 6, 'Deposito', 1),
(28, 1000, 6, 'Deposito', 1),
(29, 1000, 6, 'Deposito', 1),
(30, 1000, 6, 'Deposito', 1),
(31, 1000, 6, 'Deposito', 1),
(146185, 1000, 8, 'Deposito', 1),
(146186, 1000, 8, 'Deposito', 1),
(146187, 1000, 8, 'Deposito', 1),
(146188, 1000, 8, 'Deposito', 1),
(146189, 1000, 8, 'Deposito', 1),
(146190, 1000, 8, 'Deposito', 1),
(146191, 1000, 8, 'Deposito', 1),
(146192, 1000, 8, 'Deposito', 1),
(146193, 1000, 8, 'Deposito', 1),
(146194, 1000, 8, 'Deposito', 1),
(146195, 1000, 9, 'Deposito', 1),
(146196, 1000, 9, 'Deposito', 1),
(146197, 1000, 9, 'Deposito', 1),
(146198, 1000, 9, 'Deposito', 1),
(146199, 1000, 9, 'Deposito', 1),
(146200, 1000, 9, 'Deposito', 1),
(146201, 1000, 9, 'Deposito', 1),
(146202, 1000, 9, 'Deposito', 1),
(146203, 1000, 9, 'Deposito', 1),
(146204, 1000, 9, 'Deposito', 1),
(146205, 1000, 10, 'Deposito', 1),
(146206, 1000, 10, 'Deposito', 1),
(146207, 1000, 10, 'Deposito', 1),
(146208, 1000, 10, 'Deposito', 1),
(146209, 1000, 10, 'Deposito', 1),
(146210, 1000, 10, 'Deposito', 1),
(146211, 1000, 10, 'Deposito', 1),
(146212, 1000, 10, 'Deposito', 1),
(146213, 1000, 10, 'Deposito', 1),
(146214, 1000, 10, 'Deposito', 1),
(146215, 1000, 11, 'Deposito', 1),
(146216, 1000, 11, 'Deposito', 1),
(146217, 1000, 11, 'Deposito', 1),
(146218, 1000, 11, 'Deposito', 1),
(146219, 1000, 11, 'Deposito', 1),
(146220, 1000, 11, 'Deposito', 1),
(146221, 1000, 11, 'Deposito', 1),
(146222, 1000, 11, 'Deposito', 1),
(146223, 1000, 11, 'Deposito', 1),
(146224, 1000, 11, 'Deposito', 1),
(146225, 1000, 12, 'Deposito', 1),
(146226, 1000, 12, 'Deposito', 1),
(146227, 1000, 12, 'Deposito', 1),
(146228, 1000, 12, 'Deposito', 1),
(146229, 1000, 12, 'Deposito', 1),
(146230, 1000, 12, 'Deposito', 1),
(146231, 1000, 12, 'Deposito', 1),
(146232, 1000, 12, 'Deposito', 1),
(146233, 1000, 12, 'Deposito', 1),
(146234, 1000, 12, 'Deposito', 1),
(146235, 100, 13, 'Deposito', 1),
(146236, 100, 13, 'Deposito', 1),
(146237, 100, 13, 'Deposito', 1),
(146238, 100, 13, 'Deposito', 1),
(146239, 100, 13, 'Deposito', 1),
(146240, 100, 13, 'Deposito', 1),
(146241, 100, 13, 'Deposito', 1),
(146242, 100, 13, 'Deposito', 1),
(146243, 100, 13, 'Deposito', 1),
(146244, 100, 13, 'Deposito', 1),
(146245, 800, 14, 'Deposito', 1),
(146246, 800, 14, 'Deposito', 1),
(146247, 800, 14, 'Deposito', 1),
(146248, 800, 14, 'Deposito', 1),
(146249, 800, 14, 'Deposito', 1),
(146250, 800, 14, 'Deposito', 1),
(146251, 800, 14, 'Deposito', 1),
(146252, 800, 14, 'Deposito', 1),
(146253, 800, 14, 'Deposito', 1),
(146254, 800, 14, 'Deposito', 1),
(146255, 800, 14, 'Deposito', 1),
(146256, 800, 14, 'Deposito', 1),
(146257, 800, 14, 'Deposito', 1),
(146258, 800, 14, 'Deposito', 1),
(146259, 800, 14, 'Deposito', 1),
(146260, 800, 14, 'Deposito', 1),
(146261, 800, 14, 'Deposito', 1),
(146262, 800, 14, 'Deposito', 1),
(146263, 800, 14, 'Deposito', 1),
(146264, 800, 14, 'Deposito', 1),
(146265, 800, 14, 'Deposito', 1),
(146266, 800, 14, 'Deposito', 1),
(146267, 800, 14, 'Deposito', 1),
(146268, 800, 14, 'Deposito', 1),
(146269, 800, 14, 'Deposito', 1),
(146270, 800, 14, 'Deposito', 1),
(146271, 800, 14, 'Deposito', 1),
(146272, 800, 14, 'Deposito', 1),
(146273, 800, 14, 'Deposito', 1),
(146274, 800, 14, 'Deposito', 1),
(146275, 800, 14, 'Deposito', 1),
(146276, 800, 14, 'Deposito', 1),
(146277, 800, 14, 'Deposito', 1),
(146278, 800, 14, 'Deposito', 1),
(146279, 800, 14, 'Deposito', 1),
(146280, 800, 14, 'Deposito', 1),
(146281, 800, 14, 'Deposito', 1),
(146282, 800, 14, 'Deposito', 1),
(146283, 800, 14, 'Deposito', 1),
(146284, 800, 14, 'Deposito', 1),
(146285, 800, 14, 'Deposito', 1),
(146286, 800, 14, 'Deposito', 1),
(146287, 800, 14, 'Deposito', 1),
(146288, 800, 14, 'Deposito', 1),
(146289, 800, 14, 'Deposito', 1),
(146290, 800, 14, 'Deposito', 1),
(146291, 800, 14, 'Deposito', 1),
(146292, 800, 14, 'Deposito', 1),
(146293, 800, 14, 'Deposito', 1),
(146294, 800, 14, 'Deposito', 1),
(146295, 1000, 15, 'Deposito', 1),
(146296, 1000, 15, 'Deposito', 1),
(146297, 1000, 15, 'Deposito', 1),
(146298, 1000, 15, 'Deposito', 1),
(146299, 1000, 15, 'Deposito', 1),
(146300, 1000, 15, 'Deposito', 1),
(146301, 1000, 15, 'Deposito', 1),
(146302, 1000, 15, 'Deposito', 1),
(146303, 1000, 15, 'Deposito', 1),
(146304, 1000, 15, 'Deposito', 1),
(146305, 1000, 16, 'Deposito', 1),
(146306, 1000, 16, 'Deposito', 1),
(146307, 1000, 16, 'Deposito', 1),
(146308, 1000, 16, 'Deposito', 1),
(146309, 1000, 16, 'Deposito', 1),
(146310, 1000, 16, 'Deposito', 1),
(146311, 1000, 16, 'Deposito', 1),
(146312, 1000, 16, 'Deposito', 1),
(146313, 1000, 16, 'Deposito', 1),
(146314, 1000, 16, 'Deposito', 1),
(146315, 1000, 17, 'Producción', 1),
(146316, 1000, 17, 'Producción', 1),
(146317, 1000, 17, 'Producción', 1),
(146318, 1000, 17, 'Producción', 1),
(146319, 1000, 19, 'Deposito', 1),
(146320, 1000, 19, 'Deposito', 1),
(146321, 1000, 19, 'Deposito', 1),
(146322, 1000, 19, 'Deposito', 1),
(146323, 1000, 19, 'Deposito', 1),
(146324, 1000, 19, 'Deposito', 1),
(146325, 1000, 19, 'Deposito', 1),
(146326, 1000, 19, 'Deposito', 1),
(146327, 1000, 19, 'Deposito', 1),
(146328, 1000, 19, 'Deposito', 1),
(146329, 1000, 20, 'Deposito', 1),
(146330, 1000, 20, 'Deposito', 1),
(146331, 1000, 20, 'Deposito', 1),
(146332, 1000, 21, 'Deposito', 1),
(146333, 1000, 21, 'Deposito', 1),
(146334, 1000, 21, 'Deposito', 1),
(146335, 1000, 22, 'Deposito', 1),
(146336, 1000, 22, 'Deposito', 1),
(146337, 1000, 22, 'Deposito', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lotes`
--

CREATE TABLE `lotes` (
  `lote_id` int(10) NOT NULL,
  `cantidad_bolsones` int(3) NOT NULL,
  `cod_sap` int(5) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `soft_delate` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lotes`
--

INSERT INTO `lotes` (`lote_id`, `cantidad_bolsones`, `cod_sap`, `fecha`, `soft_delate`) VALUES
(3, 10, 10715, '2022-09-15', 1),
(5, 10, 3820, '2022-09-15', 1),
(6, 10, 3820, '2022-09-15', 1),
(8, 10, 4064, '2022-09-16', 1),
(9, 10, 3820, '2022-09-16', 1),
(10, 10, 3820, '2022-09-16', 1),
(11, 10, 3820, '2022-09-16', 1),
(12, 10, 3820, '2022-09-16', 1),
(13, 10, 3820, '2022-09-16', 1),
(14, 50, 3820, '2022-09-16', 1),
(15, 10, 3820, '2022-09-19', 1),
(16, 10, 3820, '2022-09-19', 1),
(17, 4, 3820, '2022-09-26', 1),
(19, 10, 3820, '2022-10-03', 1),
(20, 3, 3885, '2022-10-31', 1),
(21, 3, 3885, '2022-10-31', 1),
(22, 3, 10661, '2022-10-31', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `codigo_sap` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `soft_delate` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`codigo_sap`, `nombre`, `soft_delate`) VALUES
(3820, 'Fibra de Polipropileno 1/8', 1),
(3885, 'Ligante ALPHABOND 300', 1),
(4064, 'Microsilice HQ-U', 1),
(10147, 'Sinter M30B', 1),
(10471, 'Fibra de Acero 0,75', 1),
(10661, 'Alquitrán en polvo', 1),
(10715, 'Grafito SV94', 1),
(27058, 'Magnesia ELEC 98 5-3mm', 1),
(27059, 'Magnesia ELEC 98 3-1mm', 1),
(27060, 'Magnesia ELEC 98 <1mm', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bolsas`
--
ALTER TABLE `bolsas`
  ADD PRIMARY KEY (`bolsa_id`),
  ADD KEY `fk_lote` (`lote_id`);

--
-- Indices de la tabla `lotes`
--
ALTER TABLE `lotes`
  ADD PRIMARY KEY (`lote_id`),
  ADD KEY `fk_materiales` (`cod_sap`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`codigo_sap`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bolsas`
--
ALTER TABLE `bolsas`
  MODIFY `bolsa_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146338;

--
-- AUTO_INCREMENT de la tabla `lotes`
--
ALTER TABLE `lotes`
  MODIFY `lote_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bolsas`
--
ALTER TABLE `bolsas`
  ADD CONSTRAINT `fk_lote` FOREIGN KEY (`lote_id`) REFERENCES `lotes` (`lote_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `lotes`
--
ALTER TABLE `lotes`
  ADD CONSTRAINT `fk_materiales` FOREIGN KEY (`cod_sap`) REFERENCES `materiales` (`codigo_sap`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
