-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 09:20 PM
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
-- Database: `atacamawotlk`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuentas`
--

CREATE TABLE `cuentas` (
  `Usuario` varchar(200) NOT NULL,
  `Contrasena` varchar(200) NOT NULL,
  `Confirmacion_contra` varchar(200) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Apellido` varchar(200) NOT NULL,
  `Fecha_nac` varchar(200) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Terminos` varchar(200) NOT NULL,
  `Actualizaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuentas`
--

INSERT INTO `cuentas` (`Usuario`, `Contrasena`, `Confirmacion_contra`, `Nombre`, `Apellido`, `Fecha_nac`, `Correo`, `Terminos`, `Actualizaciones`) VALUES
('Monki', '123', '123', 'Mike', 'Trujillo', '08-09-1000', 'fernando@fernando', 'Si', 'Si'),
('Primate', '123', '123', 'asd', 'asd', '02-02-2005', 'fernando.arriagada.22@alumnos.uda.cl', 'Si', 'Si'),
('Sagato', '123', '123', 'Fernando', 'Arriagada', '09-05-2005', 'fernando.arriagada.22@alumnos.uda.cl', 'Si', 'No'),
('Sheshou', '123', '123', 'Fernando', 'Arriagada', '02-06-2004', 'fernando.arriagada.22@alumnos.uda.cl', 'Si', 'Si'),
('Simio', '123', '123', 'Fernando', 'Arriagada', '09-02-2004', 'fernando.arriagada.22@alumnos.uda.cl', 'Si', 'Si');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`Usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
