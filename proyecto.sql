-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2019 a las 21:38:54
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
-- Estructura de tabla para la tabla `ropahombre`
--

CREATE TABLE `ropahombre` (
  `ID` int(8) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Foto` varchar(12) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `Talla` varchar(2) NOT NULL,
  `Precio` float NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Referencia` varchar(10) NOT NULL,
  `Rebaja` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ropahombre`
--

INSERT INTO `ropahombre` (`ID`, `Nombre`, `Foto`, `Color`, `Talla`, `Precio`, `Tipo`, `Referencia`, `Rebaja`) VALUES
(5251093, 'Botas de futbol Nike', '/J53RY2M6BQ/', 'Negro', '41', 85, 'Calzado', 'J53RY2M6BQ', 0),
(5448142, 'Deportiva de piel', '/75W7JTDWJG/', 'Negro', '41', 45.95, 'Calzado', '75W7JTDWJG', 0),
(11067722, 'Polo básico algodón', '/N4LH7SVBP9/', 'Blanco', 'M', 35, 'Polo', 'N4LH7SVBP9', 10),
(13311722, 'Zapatillas de tela', '/43M32PCJAB/', 'Blanco', '41', 45.25, 'Calzado', '43M32PCJAB', 30),
(14335328, 'Camiseta Marvel blanca', '/54SJL2YJSE/', 'Blanco', 'M', 20.55, 'Camiseta', '54SJL2YJSE', 20),
(16163476, 'Bermuda básica blanca', '/JQM4NZ7QZY/', 'Blanco', 'M', 28.35, 'Pantalon', 'JQM4NZ7QZY', 0),
(16239689, 'Camiseta gris jaspeada', '/73QFTXASSR/', 'Gris', 'M', 13.65, 'Camiseta', '73QFTXASSR', 0),
(22084660, 'Bermuda estructura', '/6C5RE5268Z/', 'Beige', 'M', 35, 'Pantalon', '6C5RE5268Z', 20),
(24132417, 'Deportiva serraje combinada', '/Y7LAALC39L/', 'Marrón', '40', 47, 'Calzado', 'Y7LAALC39L', 20),
(27119761, 'Deportiva alta de piel', '/8SYV8NY3QF/', 'Negro', '41', 65.95, 'Calzado', '8SYV8NY3QF', 0),
(27579446, 'Polo Lacoste algodón', '/RWBKDCA6AL/', 'Azul marino', 'M', 35.95, 'Polo', 'RWBKDCA6AL', 0),
(28172866, 'Cazadora denim básica', '/JHEJMY7TU5/', 'Azul marino', 'M', 29.95, 'Abrigo', 'JHEJMY7TU5', 0),
(29200000, 'Camiseta básica blanca', '/AXDZ2E5CX5/', 'Blanco', 'M', 12.25, 'Camiseta', 'AXDZ2E5CX5', 0),
(31339371, 'Camisa regular de topos', '/2KXK74SS85/', 'Azul marino', 'M', 35, 'Camisa', '2KXK74SS85', 30),
(31487604, 'Cazadora piel', '/MR8CG52RCW/', 'Negro', 'M', 149.99, 'Abrigo', 'MR8CG52RCW', 10),
(35852054, 'Polo algodón cuello mao', '/XWC9XQ6P6P/', 'Azul marino', 'M', 35, 'Polo', 'XWC9XQ6P6P', 30),
(39991039, 'Camiseta Levis blanca', '/EXSM2JUM6X/', 'Blanco', 'M', 25.15, 'Camiseta', 'EXSM2JUM6X', 20),
(42356430, 'Jeans slim fit negros', '/H9X3DPKCST/', 'Negro', 'M', 30, 'Pantalon', 'H9X3DPKCST', 30),
(43070498, 'Cazadora azul marino', '/SGH3TFFBYW/', 'Azul marino', 'M', 38.65, 'Abrigo', 'SGH3TFFBYW', 10),
(50597098, 'Polo algodón jaspeado', '/Y2A83HX3W4/', 'Verde', 'M', 25.95, 'Polo', 'Y2A83HX3W4', 0),
(51058224, 'Camisa estructura', '/QXRKGNHAM7/', 'Azul cielo', 'M', 30, 'Camisa', 'QXRKGNHAM7', 10),
(51792069, 'Polo punto algodón', '/LHU8PQ5MS4/', 'Azulón', 'M', 23.95, 'Polo', 'LHU8PQ5MS4', 0),
(52917809, 'Bomber beige', '/6PG44UBK6B/', 'Beige', 'M', 35.45, 'Abrigo', '6PG44UBK6B', 0),
(53445132, 'Jeans skinny rotos', '/F977E5VNWH/', 'Azul cielo', 'M', 29.95, 'Pantalon', 'F977E5VNWH', 0),
(55219687, 'Bermuda básica', '/WCHZLSFS58/', 'Azul cielo', 'M', 25, 'Pantalon', 'WCHZLSFS58', 20),
(56622135, 'Bomber azul marino', '/RA75784KJB/', 'Azul marino', 'M', 45.25, 'Abrigo', 'RA75784KJB', 0),
(59643937, 'Polo básico algodón', '/H88WMSA2YF/', 'Blanco', 'M', 30, 'Polo', 'H88WMSA2YF', 20),
(67781653, 'Camiseta negra jaspeada', '/R2EXK9E75G/', 'Negro', 'M', 15.25, 'Camiseta', 'R2EXK9E75G', 0),
(68905139, 'Camisa slim fit algodón topos', '/AXMM9XETM9/', 'Azul marino', 'M', 28.95, 'Camisa', 'AXMM9XETM9', 0),
(69684373, 'Jeans skinny básico', '/8XKHAAFQWL/', 'Azul', 'M', 35, 'Pantalon', '8XKHAAFQWL', 10),
(70812812, 'Camisa regular', '/MX8YH6UANC/', 'Azul', 'M', 24.95, 'Camisa', 'MX8YH6UANC', 0),
(71462842, 'Camisa regular fit Oxford algodón', '/24M8P6FUEP/', 'Gris', 'M', 38, 'Camisa', '24M8P6FUEP', 40),
(72043428, 'Camiseta algodón básica', '/LLPT4KYYPN/', 'Granate', 'M', 8.95, 'Camiseta', 'LLPT4KYYPN', 10),
(72102436, 'Pantalón jogger', '/G63VU835GH/', 'Verde', 'M', 32.45, 'Pantalon', 'G63VU835GH', 0),
(76407563, 'Deportiva retro piel', '/3F3L5UUQ8W/', 'Marrón', '41', 35, 'Calzado', '3F3L5UUQ8W', 20),
(77762972, 'Cazadora denim oversize', '/GAQ4VYU97P/', 'Azul', 'M', 29.99, 'Abrigo', 'GAQ4VYU97P', 30),
(81433949, '', '/8XKHAAFQWL', '', '', 0, '', '', 0),
(83794489, 'Camisa slim fit algodón cuadros', '/CPYVX8BLYR/', 'Verde', 'M', 32.95, 'Camisa', 'CPYVX8BLYR', 0),
(86419192, '', '', '', '', 0, '', '', 0),
(92253652, 'Bermuda básica gris', '/LJ59GRR7B6/', 'Gris', 'M', 25.68, 'Pantalon', 'LJ59GRR7B6', 0),
(92863272, 'Denim slim fit', '/ZXPXXZY6TU/', 'Azul', 'M', 27.95, 'Pantalon', 'ZXPXXZY6TU', 0),
(94897580, 'Bermuda básica', '/X7UBN83LKZ/', 'Azul', 'M', 30, 'Pantalon', 'X7UBN83LKZ', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ropamujer`
--

CREATE TABLE `ropamujer` (
  `ID` int(8) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Foto` varchar(12) NOT NULL,
  `Color` varchar(20) NOT NULL,
  `Talla` varchar(2) NOT NULL,
  `Precio` float NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Referencia` varchar(10) NOT NULL,
  `Rebaja` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ropamujer`
--

INSERT INTO `ropamujer` (`ID`, `Nombre`, `Foto`, `Color`, `Talla`, `Precio`, `Tipo`, `Referencia`, `Rebaja`) VALUES
(15121687, 'Pantalón de prueba', '/CS46KVVKE9/', 'Marrón', 'M', 29.99, 'Pantalon', 'CS46KVVKE9', 20),
(19888988, 'Pantalón de prueba 3', '/YYEDRQK9CK/', 'Marrón', 'M', 25, 'Pantalon', 'YYEDRQK9CK', 10),
(25155428, 'Vestido de prueba 5', '/7NCNUPWETC/', 'Blanco', 'M', 10.2, 'Vestido', '7NCNUPWETC', 0),
(36435268, 'Camiseta de prueba 3', '/JTUXKG53WQ/', 'Crudo', 'M', 15.25, 'Camiseta', 'JTUXKG53WQ', 20),
(39170207, 'Pantalón de prueba 2', '/HEADX5KHVM/', 'Azul', 'M', 20.99, 'Pantalon', 'HEADX5KHVM', 0),
(44146089, 'Vestido de prueba', '/MTT3Z7XHDD/', 'Rosa', 'M', 39.99, 'Vestido', 'MTT3Z7XHDD', 40),
(44543319, 'Vestido de prueba 2', '/GQBYQ979FR/', 'Rojo', 'M', 49.99, 'Vestido', 'GQBYQ979FR', 0),
(46807195, 'Camiseta de prueba 3', '/9U7J8M82JE/', 'Rayas', 'M', 30.5, 'Camiseta', '9U7J8M82JE', 30),
(49352133, 'Camiseta de prueba 2', '/S5LRYLLZPN/', 'Negro', 'M', 20.1, 'Camiseta', 'S5LRYLLZPN', 10),
(63000293, 'Vestido de prueba 3', '/E7D38AUSX8/', 'Beige', 'M', 59.99, 'Vestido', 'E7D38AUSX8', 40),
(68706327, 'Abrigo de prueba', '/EC5PYDFJVA/', 'Gris', 'M', 59.99, 'Abrigo', 'EC5PYDFJVA', 10),
(69877170, 'Pantalón de prueba 5', '/JSVUL8ZVTS/', 'Verde', 'M', 35.99, 'Pantalon', 'JSVUL8ZVTS', 0),
(80503057, 'Camiseta de prueba 4', '/M4WRBAA9LT/', 'Gris', 'M', 10.85, 'Camiseta', 'M4WRBAA9LT', 0),
(92995242, 'Camiseta de prueba ', '/RKY5WBTNYE/', 'Blanca', 'M', 10.35, 'Camiseta', 'RKY5WBTNYE', 0),
(94798370, 'Pantalón de prueba 4', '/C66CDSLHR7/', 'Azul', 'M', 19.99, 'Pantalon', 'C66CDSLHR7', 30),
(98703737, 'Vestido de prueba 4', '/3J5NC8YEYT/', 'Granate', 'M', 17.99, 'Vestido', '3J5NC8YEYT', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cp` int(50) DEFAULT NULL,
  `phone` int(50) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `firstname`, `lastname`, `email`, `password`, `cp`, `phone`, `date`) VALUES
(1, 'Carla', 'Cid', 'carlacid@mail.com', '1234', 36205, 610584745, '2019-06-24 11:10:12'),
(2, 'Maria', 'Alonso', 'mariaalonso@mail.com', '12345', 36206, 658784745, '2019-06-24 11:10:12'),
(3, 'carla', 'cid', 'carlacf98@gmail.com', '20', 36205, 658454745, '2019-06-25 16:44:58'),
(4, 'carla', 'cid', 'carlacf98@gmail.com', '20', 36205, 658454745, '2019-06-25 16:46:53'),
(5, 'carla', 'cid', 'carlacf98@gmail.com', '20', 36205, 658454745, '2019-06-25 16:47:26'),
(6, 'marta', 'paz', 'mp@mail.com', '20', 36254, 658474547, '2019-06-25 16:47:58'),
(7, 'marta', 'paz', 'mp@mail.com', '20', 36254, 658474547, '2019-06-25 17:02:17'),
(8, 'Prueba', 'uno', 'p1@mail.com', '123456', 36204, 658454745, '2019-06-25 17:03:07'),
(9, 'marta', 'estevez', 'me@mail.com', '12345', 30201, 625454745, '2019-06-25 19:33:59'),
(10, 'javi', 'cid', 'jc@mail.com', '1234', 36204, 658757875, '2019-06-27 11:19:24'),
(11, 'monica', 'freaza', 'mf@mail.com', '1234', 36204, 2147483647, '2019-06-27 21:55:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ropahombre`
--
ALTER TABLE `ropahombre`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `ropamujer`
--
ALTER TABLE `ropamujer`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
