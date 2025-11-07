-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 07/11/2025 às 12:12
-- Versão do servidor: 8.0.40
-- Versão do PHP: 8.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pokemon`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `tipo` enum('Normal','Fogo','Água','Grama','Voador','Lutador','Veneno','Elétrico','Terra','Pedra','Psíquico','Gelo','Inseto','Fantasma','Ferro','Dragão','Sombrio','Fada') DEFAULT NULL,
  `cor` varchar(25) DEFAULT NULL,
  `estagio_ev` enum('1','2','3') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `pokemon`
--

INSERT INTO `pokemon` (`id`, `nome`, `tipo`, `cor`, `estagio_ev`) VALUES
(1, 'Bulbassauro', 'Grama', 'Verde', '1'),
(2, 'Ivyssauro', 'Grama', 'Verde', '2'),
(3, 'Venossauro', 'Grama', 'Verde', '3'),
(4, 'Charmander', 'Fogo', 'Laranja', '1'),
(5, 'Charmeleon', 'Fogo', 'Vermelho', '2'),
(6, 'Charizard', 'Fogo', 'Laranja', '1'),
(7, 'Squirtle', 'Água', 'Azul', '1'),
(8, 'Squirtle', 'Água', 'Azul', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
