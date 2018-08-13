-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Ago-2018 às 19:28
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `cod_especialidade` int(6) DEFAULT NULL,
  `cod_user` int(6) DEFAULT NULL,
  `cnpj` int(11) DEFAULT NULL,
  `user` varchar(10) DEFAULT NULL,
  `ESPECIALIDADE_cod_especialidade` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE `atividades` (
  `descricao` varchar(600) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `nro_vagas` int(11) DEFAULT NULL,
  `cod_atividade` int(6) NOT NULL,
  `ong_idong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`descricao`, `titulo`, `data`, `hora`, `nro_vagas`, `cod_atividade`, `ong_idong`) VALUES
('Vamos fazer um faxinão no ZOO.', '+ verde - lixo ', '2018-09-20', '15:30:00', 5, 1, 0),
('Vamos juntos resgatar a história operária da cidade. ', 'Redescobrindo a História', '2018-06-14', '16:00:00', 15, 2, 0),
('Multirão de exames preventivo (testes de glicemia)', 'Diabetes, tenho ou não?', '2018-04-30', '09:00:00', 20, 3, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `descricao` varchar(600) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `cod_categoria` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `nome` varchar(60) DEFAULT NULL,
  `cod_especialidade` int(6) NOT NULL,
  `descricao` varchar(600) DEFAULT NULL,
  `cod_categoria` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE `local` (
  `cod_local` int(6) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `local`
--

INSERT INTO `local` (`cod_local`, `nome`, `endereco`) VALUES
(1, 'Zoobotânico de Joinville', 'R. Pastor Guilherme Ráu, 462 - Saguaçu, Joinville'),
(2, 'Arquivo Histórico de Joinville', 'Av. Hermann August Lepper, 650 - Saguaçu, Joinville'),
(3, 'ICED', 'Rua Alexandre Doehler, 129 - sala 1005 - Centro, Joinville ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `local_atividade`
--

CREATE TABLE `local_atividade` (
  `cod_local` int(6) NOT NULL,
  `cod_atividade` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `local_atividade`
--

INSERT INTO `local_atividade` (`cod_local`, `cod_atividade`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ong`
--

CREATE TABLE `ong` (
  `idong` int(11) NOT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `nome_responsavel` varchar(45) DEFAULT NULL,
  `local_cod_local` int(6) NOT NULL,
  `causas_ong` varchar(300) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `participacao`
--

CREATE TABLE `participacao` (
  `cod_user` int(6) DEFAULT NULL,
  `ATIVIDADES_cod_atividade` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `idtipo_usuario` int(11) NOT NULL,
  `desc_tip_user` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_user` int(6) NOT NULL,
  `senha` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `user` varchar(10) DEFAULT NULL,
  `idade` date DEFAULT NULL,
  `sexo` varchar(3) DEFAULT NULL,
  `bio` varchar(600) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT 'logo.jpg',
  `site` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_user`, `senha`, `email`, `nome`, `user`, `idade`, `sexo`, `bio`, `imagem`, `site`) VALUES
(2, 25, 'annalisa.wyatt@massa.com', 'Annalisa Wyatt', 'Anna', '1962-06-29', 'fem', 'Amo o verde', 'logo.jpg', 'https://www.buzzfeed.com/'),
(4, 25, 'veronika_houghton@magna.com', 'Veronika Houghton', 'Vee', '1976-12-14', 'fem', 'sindicalista', 'logo.jpg', NULL),
(8, 25, 'gwen.nichols@nam.com', 'Gwen Nichols', 'GG', '1986-10-18', 'mas', 'profissional da saúde', 'logo.jpg', NULL),
(10, 26, 'fzc@nibh.com', 'Fundação ZOO Catarinense', '', NULL, NULL, NULL, 'logo.jpg', NULL),
(12, 26, 'ihcs@massa.com', 'IHCS', NULL, NULL, NULL, NULL, 'logo.jpg', NULL),
(14, 26, 'saude_mulher@odio.com', 'Mulheres pela Saúde', NULL, NULL, NULL, NULL, 'logo.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atendimento`
--
ALTER TABLE `atendimento`
  ADD KEY `cod_user` (`cod_user`),
  ADD KEY `fk_ATENDIMENTO_ESPECIALIDADE1_idx` (`ESPECIALIDADE_cod_especialidade`);

--
-- Indexes for table `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`cod_atividade`),
  ADD KEY `fk_atividades_ong1_idx` (`ong_idong`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indexes for table `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`cod_especialidade`),
  ADD KEY `especialidade_ibfk_2_idx` (`cod_categoria`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`cod_local`);

--
-- Indexes for table `local_atividade`
--
ALTER TABLE `local_atividade`
  ADD KEY `fk_LOCAL_ATIVIDADE_ATIVIDADES1_idx` (`cod_atividade`),
  ADD KEY `fk_LOCAL_ATIVIDADE_LOCAL1_idx` (`cod_local`);

--
-- Indexes for table `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`idong`),
  ADD KEY `fk_ong_local1_idx` (`local_cod_local`);

--
-- Indexes for table `participacao`
--
ALTER TABLE `participacao`
  ADD KEY `cod_user` (`cod_user`),
  ADD KEY `fk_participacao_ATIVIDADES1_idx` (`ATIVIDADES_cod_atividade`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`idtipo_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
