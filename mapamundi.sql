-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/10/2025 às 20:05
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
-- Banco de dados: `mapamundi`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadcli`
--

CREATE TABLE `cadcli` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadcli`
--

INSERT INTO `cadcli` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Luis', 'luisgustsvo5@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(2, 'Luis', 'luisgustsvo5@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadpais`
--

CREATE TABLE `cadpais` (
  `id` int(11) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `continente` varchar(100) NOT NULL,
  `regiao_continente` varchar(100) NOT NULL,
  `evento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadpais`
--

INSERT INTO `cadpais` (`id`, `pais`, `continente`, `regiao_continente`, `evento`) VALUES
(3, 'AF', 'América', 'América Central', 'AA'),
(4, 'DZ', 'América', 'Europa Ocidental', 'macacos'),
(5, 'DZ', 'América', 'Europa Ocidental', 'macacos');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadcli`
--
ALTER TABLE `cadcli`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadpais`
--
ALTER TABLE `cadpais`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadcli`
--
ALTER TABLE `cadcli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cadpais`
--
ALTER TABLE `cadpais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
