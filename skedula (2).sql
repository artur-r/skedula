-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/07/2024 às 02:43
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `skedula`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agenda`
--

CREATE TABLE `agenda` (
  `id` int(255) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `servico` varchar(25) NOT NULL,
  `horario` int(15) NOT NULL,
  `dia_semana` varchar(35) NOT NULL,
  `dia_mes` int(10) NOT NULL,
  `mes` varchar(15) NOT NULL,
  `ano` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agenda`
--

INSERT INTO `agenda` (`id`, `cliente`, `email`, `servico`, `horario`, `dia_semana`, `dia_mes`, `mes`, `ano`) VALUES
(1, 'Artur', '', 'corte', 9, '3', 15, '5', 2024),
(2, 'Artur Martins', '', 'corte', 8, '4', 16, '5', 2024),
(3, 'Artur Martins', '', 'corte', 8, '1', 31, '6', 2024),
(5, 'Artur Martins', '', 'corte', 9, '1', 31, '6', 2024),
(6, 'Artur Martins', '', 'corte', 9, '1', 31, '6', 2024),
(7, 'Artur Martins', '', 'corte', 9, '1', 31, '6', 2024),
(8, 'Artur Martins', '', 'corte', 9, '1', 31, '6', 2024),
(9, 'Artur Martins', '', 'corte', 9, '1', 31, '6', 2024),
(10, 'Artur Martins', '', 'corte', 9, '1', 31, '6', 2024),
(11, 'Artur Martins', '', 'corte', 9, '1', 31, '6', 2024),
(12, 'Artur Martins', '', 'corte', 9, '1', 31, '6', 2024),
(13, 'Artur Martins', '', 'corte', 9, '1', 31, '6', 2024),
(14, 'Artur Martins', '', 'corte', 9, '1', 31, '6', 2024),
(15, 'Artur Martins', '', 'corte', 9, '1', 31, '6', 2024),
(16, 'Artur Martins', '', 'corte', 9, '1', 31, '6', 2024),
(17, 'Artur Martins', '', 'corte', 9, '1', 31, '6', 2024),
(18, 'Artur Avila', '', 'corte', 9, '4', 18, '7', 2024),
(19, 'Artur Avila', '', 'corte', 8, '4', 18, '7', 2024),
(20, 'Artur', '', 'corte', 11, '4', 18, '7', 2024),
(21, 'Artur', '', 'corte', 12, '4', 18, '7', 2024),
(22, 'Artur', '', 'corte', 12, '4', 18, '7', 2024),
(23, 'Artur', '', 'corte', 12, '4', 18, '7', 2024),
(25, 'Artur', '', 'corte', 16, '5', 19, '7', 2024),
(26, 'Artur Martins', '', 'corte', 12, '4', 18, '7', 2024),
(28, 'artur', '', 'corte', 13, '4', 18, '7', 2024),
(29, 'artur', '', 'corte', 14, '4', 18, '7', 2024),
(30, 'artur', '', 'corte', 9, '4', 18, '7', 2024),
(31, 'artur', '', 'corte', 16, '4', 18, '7', 2024),
(32, 'artur', '', 'corte', 15, '4', 18, '7', 2024),
(33, 'artur', '', 'corte', 17, '4', 18, '7', 2024),
(34, 'artur', '', 'corte', 15, '3', 10, '7', 2024),
(35, 'artur', '', 'corte', 13, '1', 15, '7', 2024),
(36, 'artur', '', 'corte', 16, '3', 10, '7', 2024),
(37, 'artur', '', 'corte', 17, '3', 10, '7', 2024),
(38, 'artur', '', 'corte', 15, '3', 10, '7', 2024),
(39, 'artur', '', 'corte', 17, '6', 6, '7', 2024),
(40, 'artur', '', 'corte', 8, '6', 6, '7', 2024),
(41, 'artur', '', 'corte', 9, '2', 9, '7', 2024),
(42, 'artur', '', 'corte', 9, '2', 9, '7', 2024),
(43, 'artur', '', 'corte', 9, '2', 9, '7', 2024),
(44, 'artur', '', 'corte', 11, '4', 11, '7', 2024),
(45, 'artur', '', 'corte', 8, '3', 17, '7', 2024),
(46, 'Artur Martins', '', 'corte', 17, '3', 17, '7', 2024),
(47, 'Artur Martins', '', 'corte', 17, '3', 17, '7', 2024),
(48, 'Artur Martins', '', 'corte', 17, '2', 23, '7', 2024),
(49, 'Artur Martins', '', 'corte', 17, '2', 23, '7', 2024),
(50, 'Artur Martins', '', 'corte', 17, '1', 22, '7', 2024),
(51, 'Artur Martins', '', 'corte', 8, '2', 23, '7', 2024),
(52, 'Artur Martins', '', 'corte', 9, '2', 23, '7', 2024),
(53, 'Artur Martins', '', 'corte', 10, '2', 23, '7', 2024),
(54, 'Artur Martins', '', 'corte', 11, '2', 23, '7', 2024),
(55, 'Artur Martins', '', 'corte', 12, '2', 23, '7', 2024),
(56, 'Artur Martins', '', 'corte', 13, '2', 23, '7', 2024),
(57, 'Artur Martins', '', 'corte', 14, '2', 23, '7', 2024),
(58, 'Artur Martins', '', 'corte', 15, '2', 23, '7', 2024),
(59, 'Artur Martins', '', 'corte', 16, '2', 23, '7', 2024);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `email`) VALUES
(1, 'artur', 'artur@gmail.com'),
(4, 'Tuzin', 'art@gmail'),
(5, '', ''),
(6, 'Artur Martins', 'arturmbh@gmail.com'),
(7, 'Artur Martins', 'arturmbh@gmailo'),
(8, 'Artur 2', 'a2@gmail.com'),
(9, 'Artur', 'arturm@gmail.com'),
(10, 'as', 'a@gmail.com'),
(11, 'Artur Avila', 'artur@a.com'),
(12, 'Artur', 'aa@gmail.com'),
(13, 'Artur teste cancelamento', 'cancelamento@gmail.com.br'),
(14, 'Artur teste cancelamento', 'cancelamento@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
