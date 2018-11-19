-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Nov-2018 às 16:39
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
-- Estrutura da tabela `atividades`
--

CREATE TABLE `atividades` (
  `descricao` varchar(600) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `nro_vagas` int(11) DEFAULT NULL,
  `cod_atividade` int(6) NOT NULL,
  `ong_idong` int(11) NOT NULL,
  `categoria_cod_categoria` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`descricao`, `titulo`, `data`, `hora`, `nro_vagas`, `cod_atividade`, `ong_idong`, `categoria_cod_categoria`) VALUES
('Vamos fazer um faxinão no ZOO.', '+ verde - lixo ', '2018-09-20', '15:30:00', 5, 1, 0, 0),
('Vamos juntos resgatar a história operária da cidade. ', 'Redescobrindo a História', '2018-06-14', '16:00:00', 15, 2, 0, 0),
('Multirão de exames preventivo (testes de glicemia)', 'Diabetes, tenho ou não?', '2018-04-30', '09:00:00', 20, 3, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `descricao` varchar(600) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `cod_categoria` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`descricao`, `nome`, `cod_categoria`) VALUES
(NULL, 'Ambiental', 1),
(NULL, 'Animal', 2),
(NULL, 'Educação', 3),
(NULL, 'Esporte', 4),
(NULL, 'Cultural', 5),
(NULL, 'Saúde', 6),
(NULL, 'Assistência Social', 7),
(NULL, 'Crianças e Adolescentes', 8),
(NULL, 'Atendimento á mulher', 9),
(NULL, 'Comunidade LGBT', 10);

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
-- Estrutura da tabela `ong`
--

CREATE TABLE `ong` (
  `idong` int(11) NOT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `nome_ong` varchar(50) DEFAULT NULL,
  `nome_responsavel` varchar(45) DEFAULT NULL,
  `local_cod_local` int(6) DEFAULT NULL,
  `causas_ong` varchar(300) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT 'ong.png',
  `telefone` varchar(45) DEFAULT NULL,
  `local_cod_local1` int(6) NOT NULL,
  `usuario_cod_user` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ong`
--

INSERT INTO `ong` (`idong`, `cnpj`, `nome_ong`, `nome_responsavel`, `local_cod_local`, `causas_ong`, `email`, `imagem`, `telefone`, `local_cod_local1`, `usuario_cod_user`) VALUES
(1, '218263676.01', 'ONG DO BALACOBACO', 'JUNINHO', 0, 'A GENTE AJUDA UMA GALERA AÍ', 'annalisa.wyatt@massa.com', 'ong.png', '', 0, 33),
(2, '12341234', 'planta', 'juty', NULL, '', 'plantar@floreces.com', 'ong.png', NULL, 0, 2),
(3, '12341234', 'planta', 'juty', NULL, 'plantinhas', 'plantar@floreces.com', 'ong.png', NULL, 0, 2),
(4, '12341242', 'Do Vini', 'Vini', NULL, 'Esportes', '', 'ong.png', NULL, 0, 33),
(8, '12356521125', 'Plantenhas', 'Anna', NULL, 'plantas', 'plantenhas@hotmail.com', 'ong.png', NULL, 0, 33);

-- --------------------------------------------------------

--
-- Estrutura da tabela `participacao`
--

CREATE TABLE `participacao` (
  `cod_user` int(6) NOT NULL,
  `ativ_cod_atividades` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `idtipo_usuario` int(11) NOT NULL,
  `desc_tip_user` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`idtipo_usuario`, `desc_tip_user`) VALUES
(1, 'Voluntário 1'),
(2, 'Voluntário 2'),
(3, 'Administrador');

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
  `site` varchar(45) DEFAULT NULL,
  `tipo_usuario_idtipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_user`, `senha`, `email`, `nome`, `user`, `idade`, `sexo`, `bio`, `imagem`, `site`, `tipo_usuario_idtipo_usuario`) VALUES
(2, '25', 'annalisa.wyatt@massa.com', 'Annalisa Whyatt', 'Anna', '1962-06-29', 'fem', '', 'icon.png', 'https://www.buzzfeed.com/', 1),
(8, '25', 'gwen.nichols@nam.com', 'Gwen Nichols', 'GG', '1986-10-18', 'mas', 'profissional da saúde', 'icon.png', NULL, 3),
(16, '123', 'lucas@gmail.com', 'Lucas', 'lusca', '1999-11-10', 'mas', 'Lalalala', 'icon.png', 'www.google.com', 3),
(18, '123', 'souomandela@gmail.com', 'Nelson Mandela', 'mandelinha', '2018-12-18', 'masculino', 'Fui Partiu, aonde?  Ã‰ o Mandela', 'mandela.jpg', 'https://pt.wikipedia.org/wiki/Nelson_Mandela', 3),
(30, 'qrovazar', 'Crizu@live.com', 'Eduardo Maia', 'Crizu', '2001-07-22', 'masculino', 'Gosto de ir embora do if, geralmente 2:30, grato', '16.jpg', '', 3),
(33, '1234', 'vinibobao@hotmail.com', 'Vinicius Peres', 'vinibobao', '2001-10-24', 'masculino', 'Vinicius Bobao', 'sem_foto.png', '', 1),
(34, '123', 'pc@gmail.com', 'PC', 'pcanimus', '1960-02-14', 'masculino', '', '', '', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`cod_atividade`),
  ADD KEY `fk_atividades_ong1_idx` (`ong_idong`),
  ADD KEY `fk_atividades_categoria1_idx` (`categoria_cod_categoria`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_categoria`);

--
-- Indexes for table `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`cod_local`);

--
-- Indexes for table `ong`
--
ALTER TABLE `ong`
  ADD PRIMARY KEY (`idong`),
  ADD KEY `fk_ong_local1_idx` (`local_cod_local`),
  ADD KEY `fk_ong_local1_idx1` (`local_cod_local1`),
  ADD KEY `fk_ong_usuario1_idx` (`usuario_cod_user`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`idtipo_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_user`),
  ADD KEY `fk_usuario_tipo_usuario1_idx` (`tipo_usuario_idtipo_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cod_categoria` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ong`
--
ALTER TABLE `ong`
  MODIFY `idong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
