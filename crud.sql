-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/02/2024 às 18:58
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
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `sobrenome`, `email`) VALUES
(10, 'Riquelme', 'Fernandes', 'teste@email'),
(11, 'Paulo', 'Ricardo', 'teste@email'),
(12, 'Samuel', 'Lima', 'teste@email'),
(13, 'Samuel', 'Lima', 'teste@email'),
(14, 'Samuel', 'Lima', 'teste@email'),
(16, 'Lorena', 'Peres', 'loryperes@gmail.com'),
(17, 'Lorena', 'Peres', 'loryperes@gmail.com'),
(18, 'Lorena', 'Peres', 'loryperes@gmail.com'),
(19, 'Lorena', 'Peres', 'loryperes@gmail.com'),
(20, 'Lorena', 'Peres', 'loryperes@gmail.com'),
(21, 'Poliana', 'Cid', 'viada@gmail.com'),
(23, 'Samuel', 'Lima', 'sla@gmail.com'),
(24, 'Ana', 'Luiza', 'analuiza@email'),
(25, 'Bernardo', 'Nunes', 'isla@gmail.com'),
(26, 'Bernardo', 'Nunes', 'isla@gmail.com'),
(30, 'Poliana', 'Cid', 'pollycid@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
