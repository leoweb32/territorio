-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Mar-2023 às 17:39
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `territorio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `casas`
--

CREATE TABLE `casas` (
  `casa` int(10) NOT NULL,
  `Tipo` varchar(10) NOT NULL,
  `id_rua` int(10) NOT NULL,
  `id_territorio` int(10) NOT NULL,
  `status_casa` int(1) NOT NULL,
  `feito` varchar(5) NOT NULL,
  `data` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `casas`
--

INSERT INTO `casas` (`casa`, `Tipo`, `id_rua`, `id_territorio`, `status_casa`, `feito`, `data`) VALUES
(195, '', 1, 1, 0, '0', ''),
(201, '', 1, 1, 0, '201', ''),
(211, '', 1, 1, 0, '211', ''),
(1218, '', 2, 1, 0, '0', ''),
(1226, '', 2, 1, 0, '0', ''),
(1324, '', 2, 1, 0, '0', ''),
(201, '', 3, 1, 0, '201', ''),
(219, '', 1, 1, 0, '0', ''),
(221, 'F', 1, 1, 0, '0', ''),
(223, '', 1, 1, 0, '0', ''),
(229, '', 1, 1, 0, '0', ''),
(231, '', 1, 1, 0, '0', ''),
(249, '', 1, 1, 0, '0', ''),
(263, '', 1, 1, 0, '0', ''),
(279, '', 1, 1, 0, '0', ''),
(285, '', 1, 1, 0, '0', ''),
(285, 'A', 1, 1, 0, '0', ''),
(285, 'B', 1, 1, 0, '0', ''),
(289, '', 1, 1, 0, '0', ''),
(42, '', 4, 2, 0, '0', ''),
(270, '', 4, 2, 0, '0', ''),
(284, '', 4, 2, 0, '0', ''),
(294, '', 4, 2, 0, '0', ''),
(298, '', 4, 2, 0, '0', ''),
(304, '', 4, 2, 0, '0', ''),
(308, '', 4, 2, 0, '0', ''),
(316, '', 4, 2, 0, '0', ''),
(318, '', 4, 2, 0, '0', ''),
(326, '', 0, 0, 0, '0', ''),
(340, '', 4, 2, 0, '0', ''),
(326, '', 4, 2, 0, '0', ''),
(350, '', 4, 2, 0, '0', ''),
(358, '', 4, 2, 0, '0', ''),
(364, '', 4, 2, 0, '0', ''),
(370, '', 4, 2, 0, '0', ''),
(374, '', 4, 2, 0, '0', ''),
(378, '', 4, 2, 0, '0', ''),
(386, '', 4, 2, 0, '0', ''),
(390, '', 4, 2, 0, '0', ''),
(402, '', 4, 2, 0, '0', ''),
(416, '', 4, 2, 0, '0', ''),
(137, '', 5, 2, 0, '0', ''),
(143, '', 5, 2, 0, '0', ''),
(151, '', 5, 2, 0, '0', ''),
(159, '', 5, 2, 0, '0', ''),
(165, '', 5, 2, 0, '0', ''),
(187, '', 5, 2, 0, '0', ''),
(201, '', 5, 2, 0, '201', ''),
(211, '', 5, 2, 0, '211', ''),
(216, '', 5, 2, 0, '0', ''),
(221, '', 5, 2, 0, '0', ''),
(227, '', 5, 2, 0, '0', ''),
(233, '', 5, 2, 0, '0', ''),
(243, '', 5, 2, 0, '0', ''),
(247, '', 5, 2, 0, '0', ''),
(255, '', 5, 2, 0, '0', ''),
(263, '', 5, 2, 0, '0', ''),
(279, '', 5, 2, 0, '0', ''),
(291, '', 5, 2, 0, '0', ''),
(311, '', 5, 2, 0, '0', ''),
(311, '', 5, 2, 0, '0', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorio`
--

CREATE TABLE `relatorio` (
  `id_territorio` int(10) NOT NULL,
  `data_ter` varchar(10) NOT NULL,
  `nome_publicador` varchar(255) NOT NULL,
  `obs` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `relatorio`
--

INSERT INTO `relatorio` (`id_territorio`, `data_ter`, `nome_publicador`, `obs`) VALUES
(0, '21/02/2023', 'Leonardo', 'Esse é apenas um teste'),
(1, '541', 'teste', 'teste'),
(1, '2023-02-22', 'teste', 'teste'),
(1, '2023-02-15', 'Leonardo Andrade', ''),
(1, '', 'loiho', 'kijpoipo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rua`
--

CREATE TABLE `rua` (
  `id_rua` int(10) NOT NULL,
  `nome_rua` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `rua`
--

INSERT INTO `rua` (`id_rua`, `nome_rua`) VALUES
(1, 'Rua Sarumá'),
(2, 'Rua das Heras'),
(3, 'Av. José da Nóbrega Botelho'),
(4, 'Rua Joaquim Norberto de Brito'),
(5, 'Rua Esmeralda Mendes Policene');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `id_status` int(10) NOT NULL,
  `statusCasa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `territorio`
--

CREATE TABLE `territorio` (
  `id_territorio` int(10) NOT NULL,
  `Publicador` varchar(255) NOT NULL,
  `Feito` varchar(255) NOT NULL,
  `data` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `territorio`
--

INSERT INTO `territorio` (`id_territorio`, `Publicador`, `Feito`, `data`) VALUES
(1, 'Leonardo Andrade', '', '2023-02-17'),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, '', '', ''),
(21, '', '', ''),
(22, '', '', ''),
(23, '', '', ''),
(24, '', '', ''),
(25, '', '', ''),
(26, '', '', ''),
(27, '', '', ''),
(28, '', '', ''),
(29, '', '', ''),
(30, '', '', ''),
(31, '', '', ''),
(32, '', '', ''),
(33, '', '', ''),
(34, '', '', ''),
(35, '', '', ''),
(36, '', '', ''),
(37, '', '', ''),
(38, '', '', ''),
(39, '', '', ''),
(40, '', '', ''),
(41, '', '', ''),
(42, '', '', ''),
(43, '', '', ''),
(44, '', '', ''),
(45, '', '', ''),
(46, '', '', ''),
(47, '', '', ''),
(48, '', '', ''),
(49, '', '', ''),
(50, '', '', ''),
(51, '', '', ''),
(52, '', '', ''),
(53, '', '', ''),
(54, '', '', ''),
(55, '', '', ''),
(56, '', '', ''),
(57, '', '', ''),
(58, '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `rua`
--
ALTER TABLE `rua`
  ADD PRIMARY KEY (`id_rua`);

--
-- Índices para tabela `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Índices para tabela `territorio`
--
ALTER TABLE `territorio`
  ADD PRIMARY KEY (`id_territorio`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `rua`
--
ALTER TABLE `rua`
  MODIFY `id_rua` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
