-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/01/2024 às 04:01
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `investimentos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `calculadora_investimentos`
--

CREATE TABLE `calculadora_investimentos` (
  `id` int(11) NOT NULL,
  `proprietario` varchar(255) NOT NULL,
  `valor` int(11) NOT NULL,
  `data_inicial` date NOT NULL,
  `data_final` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `calculadora_investimentos`
--

INSERT INTO `calculadora_investimentos` (`id`, `proprietario`, `valor`, `data_inicial`, `data_final`) VALUES
(1, 'andre', 1000, '2024-01-03', '2024-01-19'),
(2, '', 0, '0000-00-00', '0000-00-00'),
(3, 'andre', 1000, '2024-01-03', '2024-01-19'),
(4, 'andre', 1000, '2024-01-03', '2024-01-19'),
(5, 'andre', 1000, '2024-01-03', '2024-01-19'),
(6, 'andre', 1000, '2024-01-03', '2024-01-19'),
(7, 'andre', 1000, '2024-01-03', '2024-01-19'),
(8, 'andre', 1000, '2024-01-03', '2026-01-19'),
(9, 'andre', 1000, '2024-01-03', '2025-01-03'),
(10, 'andre', 1000, '2024-01-03', '2025-01-03'),
(11, 'andre', 1000, '2024-01-03', '2025-01-03'),
(12, 'andre', 1000, '2000-01-01', '2001-01-01'),
(13, 'andre', 1000, '2000-01-01', '2001-01-01'),
(14, 'andre', 1000, '2000-01-01', '2001-01-01'),
(15, 'andre', 1000, '2000-01-01', '2001-01-01'),
(16, 'andre', 1000, '2000-01-01', '2001-01-01'),
(17, 'andre', 1000, '2000-01-01', '2001-01-01'),
(18, 'andre', 1000, '2000-01-01', '2001-01-01'),
(19, 'andre', 1000, '2000-01-01', '2001-01-01'),
(20, 'andre', 1200, '2000-01-01', '2001-01-01'),
(21, 'andre', 1200, '2000-01-01', '2001-01-01'),
(22, 'andre', 1200, '2000-01-01', '2001-01-01'),
(23, 'andre', 1200, '2000-01-01', '2001-01-01'),
(24, 'andre', 1200, '2000-01-01', '2001-01-01'),
(25, 'andre', 1200, '2000-01-01', '2001-01-01'),
(26, 'andre', 1200, '2000-01-01', '2001-01-01'),
(27, 'andre', 1200, '2000-01-01', '2001-01-01'),
(28, 'andre', 1200, '2000-01-01', '2001-01-01'),
(29, 'andre', 1200, '2000-01-01', '2001-01-01'),
(30, 'andre', 1200, '2000-01-01', '2001-01-01'),
(31, 'andre', 1200, '2000-01-01', '2001-01-01'),
(32, 'andre', 1200, '2000-01-01', '2001-01-01'),
(33, 'andre', 1200, '2000-01-01', '2001-01-01'),
(34, 'andre', 1200, '2000-01-01', '2001-01-01'),
(35, 'andre', 1200, '2000-01-01', '2001-01-01'),
(36, 'andre', 1200, '2000-01-01', '2001-01-01'),
(37, 'andre', 1200, '2000-01-01', '2001-01-01'),
(38, 'andre', 1200, '2000-01-01', '2001-01-01'),
(39, 'andre', 1200, '2000-01-01', '2001-01-01'),
(40, 'andre', 1200, '2000-01-01', '2001-01-01'),
(41, 'andre', 1200, '2000-01-01', '2001-01-01'),
(42, 'andre', 1200, '2000-01-01', '2001-01-01'),
(43, 'andre', 1200, '2000-01-01', '2001-01-01'),
(44, 'andre', 1200, '2000-01-01', '2001-01-01'),
(45, 'andre', 1200, '2000-01-01', '2001-01-01'),
(46, 'andre', 1200, '2000-01-01', '2001-01-01'),
(47, '', 0, '0000-00-00', '0000-00-00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `calculadora_investimentos`
--
ALTER TABLE `calculadora_investimentos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `calculadora_investimentos`
--
ALTER TABLE `calculadora_investimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
