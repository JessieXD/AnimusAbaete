-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 13/08/2018 às 13:40
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `AA`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `cod_especialidade` smallint(6) DEFAULT NULL,
  `cod_user` smallint(6) DEFAULT NULL,
  `cnpj` int(11) DEFAULT NULL,
  `user` varchar(10) DEFAULT NULL,
  `ESPECIALIDADE_cod_especialidade` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `atividades`
--

CREATE TABLE `atividades` (
  `descricao` varchar(600) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `nro_vagas` int(11) DEFAULT NULL,
  `cod_atividade` smallint(6) NOT NULL,
  `ong_idong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `atividades`
--

INSERT INTO `atividades` (`descricao`, `titulo`, `data`, `hora`, `nro_vagas`, `cod_atividade`, `ong_idong`) VALUES
('Vamos fazer um faxinão no ZOO.', '+ verde - lixo ', '2018-09-20', '15:30:00', 5, 1, 0),
('Vamos juntos resgatar a história operária da cidade. ', 'Redescobrindo a História', '2018-06-14', '16:00:00', 15, 2, 0),
('Multirão de exames preventivo (testes de glicemia)', 'Diabetes, tenho ou não?', '2018-04-30', '09:00:00', 20, 3, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `descricao` varchar(600) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `cod_categoria` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `nome` varchar(60) DEFAULT NULL,
  `cod_especialidade` smallint(6) NOT NULL,
  `descricao` varchar(600) DEFAULT NULL,
  `cod_categoria` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `local`
--

CREATE TABLE `local` (
  `cod_local` smallint(6) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `local`
--

INSERT INTO `local` (`cod_local`, `nome`, `endereco`) VALUES
(1, 'Zoobotânico de Joinville', 'R. Pastor Guilherme Ráu, 462 - Saguaçu, Joinville'),
(2, 'Arquivo Histórico de Joinville', 'Av. Hermann August Lepper, 650 - Saguaçu, Joinville'),
(3, 'ICED', 'Rua Alexandre Doehler, 129 - sala 1005 - Centro, Joinville ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `local_atividade`
--

CREATE TABLE `local_atividade` (
  `cod_local` smallint(6) NOT NULL,
  `cod_atividade` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `local_atividade`
--

INSERT INTO `local_atividade` (`cod_local`, `cod_atividade`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ong`
--

CREATE TABLE `ong` (
  `idong` int(11) NOT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `nome_responsavel` varchar(45) DEFAULT NULL,
  `local_cod_local` smallint(6) NOT NULL,
  `causas_ong` varchar(300) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `participacao`
--

CREATE TABLE `participacao` (
  `cod_user` smallint(6) DEFAULT NULL,
  `ATIVIDADES_cod_atividade` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `idtipo_usuario` int(11) NOT NULL,
  `desc_tip_user` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_user` smallint(6) NOT NULL,
  `senha` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `user` varchar(10) DEFAULT NULL,
  `idade` date DEFAULT NULL,
  `sexo` varchar(3) DEFAULT NULL,
  `bio` varchar(600) DEFAULT NULL,
  `img` varchar(100) DEFAULT 'logo.jpg',
  `site` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`cod_user`, `senha`, `email`, `nome`, `user`, `idade`, `sexo`, `bio`, `img`, `site`) VALUES
(2, 25, 'annalisa.wyatt@massa.com', 'Annalisa Wyatt', 'Anna', '1962-06-29', 'fem', 'Amo o verde', 'logo.jpg', NULL),
(4, 25, 'veronika_houghton@magna.com', 'Veronika Houghton', 'Vee', '1976-12-14', 'fem', 'sindicalista', 'logo.jpg', NULL),
(8, 25, 'gwen.nichols@nam.com', 'Gwen Nichols', 'GG', '1986-10-18', 'mas', 'profissional da saúde', 'logo.jpg', NULL),
(10, 26, 'fzc@nibh.com', 'Fundação ZOO Catarinense', '', NULL, NULL, NULL, 'logo.jpg', NULL),
(12, 26, 'ihcs@massa.com', 'IHCS', NULL, NULL, NULL, NULL, 'logo.jpg', NULL),
(14, 26, 'saude_mulher@odio.com', 'Mulheres pela Saúde', NULL, NULL, NULL, NULL, 'logo.jpg', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD KEY `cod_user` (`cod_user`),
  ADD KEY `fk_ATENDIMENTO_ESPECIALIDADE1_idx` (`ESPECIALIDADE_cod_especialidade`);

--
-- Índices de tabela `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`cod_atividade`),
  ADD KEY `fk_atividades_ong1_idx` (`ong_idong`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Índices de tabela `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`cod_especialidade`),
  ADD KEY `especialidade_ibfk_2_idx` (`cod_categoria`);

--
-- Índices de tabela `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`cod_local`);

--
-- Índices de tabela `local_atividade`
--
ALTER TABLE `local_atividade`
  ADD KEY `fk_LOCAL_ATIVIDADE_ATIVIDADES1_idx` (`cod_atividade`),
  ADD KEY `fk_LOCAL_ATIVIDADE_LOCAL1_idx` (`cod_local`);

--
-- Índices de tabela `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`idong`),
  ADD KEY `fk_ong_local1_idx` (`local_cod_local`);

--
-- Índices de tabela `participacao`
--
ALTER TABLE `participacao`
  ADD KEY `cod_user` (`cod_user`),
  ADD KEY `fk_participacao_ATIVIDADES1_idx` (`ATIVIDADES_cod_atividade`);

--
-- Índices de tabela `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`idtipo_usuario`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_user`);

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `atendimento`
--
ALTER TABLE `atendimento`
  ADD CONSTRAINT `atendimento_ibfk_1` FOREIGN KEY (`cod_user`) REFERENCES `usuario` (`cod_user`),
  ADD CONSTRAINT `fk_ATENDIMENTO_ESPECIALIDADE1` FOREIGN KEY (`ESPECIALIDADE_cod_especialidade`) REFERENCES `especialidade` (`cod_especialidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `atividades`
--
ALTER TABLE `atividades`
  ADD CONSTRAINT `fk_atividades_ong1` FOREIGN KEY (`ong_idong`) REFERENCES `ong` (`idong`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `especialidade`
--
ALTER TABLE `especialidade`
  ADD CONSTRAINT `especialidade_ibfk_2` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria` (`cod_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `local_atividade`
--
ALTER TABLE `local_atividade`
  ADD CONSTRAINT `fk_LOCAL_ATIVIDADE_ATIVIDADES1` FOREIGN KEY (`cod_atividade`) REFERENCES `atividades` (`cod_atividade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LOCAL_ATIVIDADE_LOCAL1` FOREIGN KEY (`cod_local`) REFERENCES `local` (`cod_local`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `ong`
--
ALTER TABLE `ong`
  ADD CONSTRAINT `fk_ong_local1` FOREIGN KEY (`local_cod_local`) REFERENCES `local` (`cod_local`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `participacao`
--
ALTER TABLE `participacao`
  ADD CONSTRAINT `fk_participacao_ATIVIDADES1` FOREIGN KEY (`ATIVIDADES_cod_atividade`) REFERENCES `atividades` (`cod_atividade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `participacao_ibfk_1` FOREIGN KEY (`cod_user`) REFERENCES `usuario` (`cod_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
