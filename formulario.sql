-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: mysql21-farm1.kinghost.net
-- Tempo de geração: 23/03/2021 às 15:32
-- Versão do servidor: 5.5.62-log
-- Versão do PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `jackbravo2112`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `data_cadastro` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `funcionario`
--

INSERT INTO `funcionario` (`idFuncionario`, `nome`, `email`, `senha`, `data_cadastro`) VALUES
(1, 'teste1', 'teste1@teste1.com.br', '17f9b61099ac5e158010e6eb47c30f6b6c64e6fb', '2020-06-06 21:29:35');

-- --------------------------------------------------------

--
-- Estrutura para tabela `portal`
--

CREATE TABLE IF NOT EXISTS `portal` (
  `idportal` int(255) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data` varchar(50) NOT NULL,
  `dataedicao` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `portal`
--

INSERT INTO `portal` (`idportal`, `nome`, `email`, `senha`, `data`, `dataedicao`) VALUES
(1, 'teste1', 'teste1@teste1.com.br', '17f9b61099ac5e158010e6eb47c30f6b6c64e6fb', '23/03/2021 as 15:27', 'Nunca'),
(2, 'teste2', 'teste2@teste2.com.br', 'de126b73206b6a8a8473efdb5ae1653663752f48', '23/03/2021 as 15:28', '23/03/2021 as 15:32'),
(3, 'teste3', 'teste3@teste3.com.br', '5458cb00631fc6748f9d3a52cf6c22ae9b232e91', '23/03/2021 as 15:28', 'Nunca'),
(4, 'teste4', 'teste4@teste4.com.br', '901d6751c6d43adfdc8fdd7f0a51d3fd34c7ae2e', '23/03/2021 as 15:28', 'Nunca'),
(5, 'teste5', 'teste5@teste5.com.br', '5dd8f4d5905fc6e848653e4acb58cb13c41c24de', '23/03/2021 as 15:29', 'Nunca'),
(6, 'teste6', 'teste6@teste6.com.br', 'd5ff767fd1e57c389f2efdd2f06bd73bf8992f6d', '23/03/2021 as 15:29', 'Nunca'),
(7, 'teste7', 'teste7@teste7.com.br', 'e62ea55449bb5aac94dc6677e730cfd033e059f8', '23/03/2021 as 15:30', 'Nunca'),
(8, 'teste8', 'teste8@teste8.com.br', 'ae3a0bd2b02b5b517a108dbc0e05937b9797febc', '23/03/2021 as 15:30', '23/03/2021 as 15:31'),
(9, 'teste9', 'teste9@teste9.com.br', '436dee658355d586fc3b08f5acb9b58bc90d1afd', '23/03/2021 as 15:31', 'Nunca'),
(10, 'teste10', 'teste10@teste10.com.br', 'a3ab720edc9e5adde6de63ffd6d77a094297c6e2', '23/03/2021 as 15:32', 'Nunca');

-- --------------------------------------------------------

--
-- Estrutura para tabela `teste`
--

CREATE TABLE IF NOT EXISTS `teste` (
  `id` int(255) NOT NULL,
  `usuario` varchar(35) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `datacadastro` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `teste`
--

INSERT INTO `teste` (`id`, `usuario`, `senha`, `datacadastro`) VALUES
(1, 'teste1', '17f9b61099ac5e158010e6eb47c30f6b6c64e6fb', 'teste1'),
(2, 'teste2', '96a62ca98bdec7f55343f8cfa594379bdba76cc9', '03/06/2020 Ã s 23:02'),
(1, 'teste3', '5458cb00631fc6748f9d3a52cf6c22ae9b232e91', '03/06/2020 as 23:04'),
(4, 'teste4', '901d6751c6d43adfdc8fdd7f0a51d3fd34c7ae2e', '03/06/2020 as 23:05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(255) NOT NULL,
  `usuario` varchar(35) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `datacadastro` varchar(30) NOT NULL,
  `sunivel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- Índices de tabela `portal`
--
ALTER TABLE `portal`
  ADD PRIMARY KEY (`idportal`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `portal`
--
ALTER TABLE `portal`
  MODIFY `idportal` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
