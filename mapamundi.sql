-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/10/2025 às 15:47
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
(6, 'Brasil', 'América do Sul', 'América Latina', 'O Brasil é o único país da América do Sul que fala português.'),
(7, 'Canadá', 'América do Norte', 'América Anglo-Saxônica', 'O Canadá tem mais lagos do que todos os outros países juntos.'),
(8, 'Egito', 'África', 'Norte da África', 'O Egito abriga a mais antiga das Sete Maravilhas do Mundo Antigo — as Pirâmides de Gizé.'),
(9, 'Japão', 'Ásia', 'Extremo Oriente', 'No Japão, existem máquinas de venda automática para praticamente tudo.'),
(10, 'Austrália', 'Oceania', 'Australásia', 'A Austrália tem mais cangurus do que habitantes.'),
(11, 'Alemanha', 'Europa', 'Europa Ocidental', 'A Alemanha é conhecida por ter mais de 1.500 tipos diferentes de salsichas.'),
(12, 'Índia', 'Ásia', 'Sul da Ásia', 'A Índia é o maior produtor de filmes do mundo, conhecida por Bollywood.'),
(13, 'Rússia', 'Europa/Ásia', 'Europa Oriental e Norte da Ásia', 'A Rússia é o maior país do mundo em extensão territorial.'),
(14, 'Argentina', 'América do Sul', 'Cone Sul', 'A Argentina é o país de origem do tango.'),
(15, 'Itália', 'Europa', 'Europa Meridional', 'A Itália é o berço do Império Romano e da culinária como pizza e massas.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
