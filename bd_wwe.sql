-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 03:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_wwe`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pedidos`
--

CREATE TABLE `tbl_pedidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `total` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pedidos`
--

INSERT INTO `tbl_pedidos` (`id`, `fecha`, `total`) VALUES
(6, '2023-11-22 08:36:17', 150.00),
(7, '2023-11-23 02:43:20', 273.00),
(8, '2023-11-23 03:09:03', 0.00),
(9, '2023-11-23 03:10:42', 492.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` int(10) NOT NULL,
  `cantidadstock` varchar(100) NOT NULL,
  `tamano` varchar(255) NOT NULL,
  `peso` varchar(100) NOT NULL,
  `fechalanzamiento` varchar(255) NOT NULL,
  `precioVenta` decimal(5,2) NOT NULL,
  `precioCompra` decimal(5,2) NOT NULL,
  `existencia` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_productos`
--

INSERT INTO `tbl_productos` (`id`, `codigo`, `nombre`, `descripcion`, `precio`, `cantidadstock`, `tamano`, `peso`, `fechalanzamiento`, `precioVenta`, `precioCompra`, `existencia`) VALUES
(6, '6', 'Check', 'Check', 12, '3', '4', '1234', '1232', 123.00, 123.00, 1.00),
(7, '7', 'cc', 'ccc', 12, '43', '24', 'c4', 'cc4', 4.00, 13.00, 13.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productosvendidos`
--

CREATE TABLE `tbl_productosvendidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` bigint(20) UNSIGNED NOT NULL,
  `id_venta` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_productosvendidos`
--

INSERT INTO `tbl_productosvendidos` (`id`, `id_producto`, `cantidad`, `id_venta`) VALUES
(1, 2, 1, 1),
(2, 1, 1, 1),
(3, 4, 1, 2),
(4, 4, 1, 3),
(5, 4, 4, 4),
(6, 5, 1, 5),
(7, 4, 1, 5),
(8, 5, 1, 6),
(9, 6, 1, 7),
(10, 5, 1, 7),
(11, 6, 4, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_productosvendidos`
--
ALTER TABLE `tbl_productosvendidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_venta` (`id_venta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pedidos`
--
ALTER TABLE `tbl_pedidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_productosvendidos`
--
ALTER TABLE `tbl_productosvendidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
