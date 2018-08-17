-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 17-Ago-2018 às 14:08
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AA`
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
  `senha` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `user` varchar(10) DEFAULT NULL,
  `idade` date DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `bio` varchar(600) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT 'icon.png',
  `site` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_user`, `senha`, `email`, `nome`, `user`, `idade`, `sexo`, `bio`, `imagem`, `site`) VALUES
(2, '25', 'annalisa.wyatt@massa.com', 'Annalisa Whyatt', 'Anna', '1962-06-29', 'fem', 'Amo o verde', 'icon.png', 'https://www.buzzfeed.com/'),
(8, '25', 'gwen.nichols@nam.com', 'Gwen Nichols', 'GG', '1986-10-18', 'mas', 'profissional da saúde', 'icon.png', NULL),
(16, '123', 'lucas@gmail.com', 'Lucas', 'lusca', '1999-11-10', 'mas', 'Lalalala', 'icon.png', 'www.google.com'),
(18, '123', 'souomandela@gmail.com', 'Nelson Mandela', 'mandelinha', '2018-12-18', 'masculino', 'Fui Partiu, aonde?  Ã‰ o Mandela', 'mandela.jpg', 'https://pt.wikipedia.org/wiki/Nelson_Mandela'),
(30, 'qrovazar', 'Crizu@live.com', 'Eduardo Maia', 'Crizu', '2001-07-22', 'masculino', 'Gosto de ir embora do if, geralmente 2:30, grato', '16.jpg', '');

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
