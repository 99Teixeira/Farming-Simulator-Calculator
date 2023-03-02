-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Mar-2023 às 21:33
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_calculadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `culturas`
--

CREATE TABLE `culturas` (
  `id` int(11) NOT NULL,
  `cultura` varchar(40) DEFAULT NULL,
  `valor_venda` decimal(10,3) DEFAULT NULL,
  `mes_venda` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `culturas`
--

INSERT INTO `culturas` (`id`, `cultura`, `valor_venda`, `mes_venda`) VALUES
(1, 'trigo', '0.407', 'janeiro e fevereiro'),
(2, 'cevada', '0.378', 'janeiro e fevereiro');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `culturas`
--
ALTER TABLE `culturas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `culturas`
--
ALTER TABLE `culturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
