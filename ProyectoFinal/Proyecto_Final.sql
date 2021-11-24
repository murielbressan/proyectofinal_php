-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2021 at 07:05 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Proyecto_Final`
--

-- --------------------------------------------------------

--
-- Table structure for table `carritos`
--

CREATE TABLE `carritos` (
  `id_carrito` int NOT NULL,
  `id_producto` int NOT NULL,
  `id_usuario` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` int NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int NOT NULL,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `precio` double NOT NULL,
  `stock` int NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `stock`, `img`) VALUES
(1, 'Brownie', 350, 10, 'https://i.ibb.co/BrQfg81/sweet-brownie-dessert-isolated-icon-vector-illustration-design.jpg'),
(2, 'Galletas con chips', 30, 16, 'https://i.ibb.co/tpCvJv6/sweet-cookies-pastry-product-delicious.jpg'),
(3, 'Cheesecake', 450, 60, 'https://i.ibb.co/61XvxLf/vecteezy-cheesecake-with-strawberry-jelly-and-chocolate.jpg'),
(4, 'Cupcake', 150, 12, 'https://i.ibb.co/4VMW3Qj/Cupcake-design-Muffin-dessert-sweet-and-food-theme-Vector-illustration.jpg'),
(5, 'Macarons', 60, 100, 'https://i.ibb.co/y6St1y4/sweet-macaroons-pastry-bakery-icon.jpg'),
(6, 'Cheesecake arándanos', 450, 12, 'https://i.ibb.co/Tr8c532/cheesecake-arandanos.jpg\r\n'),
(7, 'Waffle', 350, 20, 'https://i.ibb.co/vPcS20g/waffle.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `dni` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellido`, `dni`, `email`, `password`) VALUES
('Tommy', 'Bressan', 0, 'tommy@hola.com', '$2y$10$9RkVMV014Z4LRFTIWNBzQuim/sRzT2tYIieoSo7eeQh01Yq67J1GC'),
('Prueba', 'Pru', 444555, 'murielbressan@hotmail.com', '$2y$10$czTq98GHsyRCImpGQHMv6O7bq6uJKvRUwI6nULLzn6TrfFoTzbchu'),
('Muriel', 'Bressan', 41991641, 'murielvbressan@gmail.com', '$2y$10$7rTVAdbVtdW6Z8s7Qbk8LOObm7TQQYyHMo62bWcFOhA7FCDcORXnC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`id_carrito`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`dni`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carritos`
--
ALTER TABLE `carritos`
  MODIFY `id_carrito` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
