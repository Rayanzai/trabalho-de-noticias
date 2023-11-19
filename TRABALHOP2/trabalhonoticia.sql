-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Nov-2023 às 22:52
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trabalhonoticia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `idcomentario` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `FK_cpf_editor` varchar(14) NOT NULL,
  `FK_idnoticia_noticia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `editor`
--

CREATE TABLE `editor` (
  `PK_cpf` varchar(14) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `editor_da_noticia`
--

CREATE TABLE `editor_da_noticia` (
  `FK_cpf_editor` varchar(14) NOT NULL,
  `FK_idnoticia_noticia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `idnoticia` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `data_publicacao` date NOT NULL,
  `imagem_noticia` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalhe_conosco`
--

CREATE TABLE `trabalhe_conosco` (
  `cpf_trabalho` varchar(14) NOT NULL,
  `nome_trabalho` varchar(45) NOT NULL,
  `sobrenome_trabalho` varchar(45) NOT NULL,
  `email_trabalho` varchar(45) NOT NULL,
  `breve_curriculo` longtext NOT NULL,
  `idtrabalhe_conosco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idcomentario`),
  ADD KEY `FK_cpf_editor` (`FK_cpf_editor`),
  ADD KEY `FK_idnoticia_noticia` (`FK_idnoticia_noticia`);

--
-- Índices para tabela `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`PK_cpf`);

--
-- Índices para tabela `editor_da_noticia`
--
ALTER TABLE `editor_da_noticia`
  ADD KEY `FK_cpf_editor` (`FK_cpf_editor`),
  ADD KEY `FK_idnoticia_noticia` (`FK_idnoticia_noticia`);

--
-- Índices para tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idnoticia`);

--
-- Índices para tabela `trabalhe_conosco`
--
ALTER TABLE `trabalhe_conosco`
  ADD PRIMARY KEY (`idtrabalhe_conosco`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idcomentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idnoticia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `trabalhe_conosco`
--
ALTER TABLE `trabalhe_conosco`
  MODIFY `idtrabalhe_conosco` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`FK_cpf_editor`) REFERENCES `editor` (`PK_cpf`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`FK_idnoticia_noticia`) REFERENCES `noticia` (`idnoticia`);

--
-- Limitadores para a tabela `editor_da_noticia`
--
ALTER TABLE `editor_da_noticia`
  ADD CONSTRAINT `editor_da_noticia_ibfk_1` FOREIGN KEY (`FK_cpf_editor`) REFERENCES `editor` (`PK_cpf`),
  ADD CONSTRAINT `editor_da_noticia_ibfk_2` FOREIGN KEY (`FK_idnoticia_noticia`) REFERENCES `noticia` (`idnoticia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
