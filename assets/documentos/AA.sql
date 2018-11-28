-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2018 às 13:20
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
  `categoria_cod_categoria` int(6) DEFAULT NULL,
  `imagem` varchar(50) NOT NULL DEFAULT 'logo_preta.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`descricao`, `titulo`, `data`, `hora`, `nro_vagas`, `cod_atividade`, `ong_idong`, `categoria_cod_categoria`, `imagem`) VALUES
('Vamos juntos resgatar a histÃ³ria operÃ¡ria da cidade. ', 'Redescobrindo a HistÃ³ria', '2018-06-14', '16:00:00', 12, 2, 3, 0, 'logo_preta.png'),
('jantar beneficente em prol dos gatinhos', 'Natal com os felinos', '2018-11-30', '20:30:00', 70, 3, 4, NULL, 'natal.png'),
('MultirÃ£o para fazer a reforma do gatil Bom Companheiro', 'Ajudar a reformar o gatil Bom Companheiro', '2019-01-10', '13:00:00', 50, 4, 4, NULL, 'gatinhos2.png');

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
  `causas_ong` varchar(300) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `imagem` varchar(100) DEFAULT 'ong.png',
  `telefone` varchar(45) DEFAULT NULL,
  `usuario_cod_user` int(6) NOT NULL,
  `bio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ong`
--

INSERT INTO `ong` (`idong`, `cnpj`, `nome_ong`, `nome_responsavel`, `causas_ong`, `email`, `imagem`, `telefone`, `usuario_cod_user`, `bio`) VALUES
(1, '218263676.01', 'Ong do Balacobaco', 'Juninho', 'Social', 'annalisa.wyatt@issae.com', '15.png', '1231-1313', 33, 'A gente ajuda uma galera ai'),
(4, '1123123', 'Pelo de gato', 'Ana Bela', 'Animais', 'pelodegato@gmail.com', 'logo_gatinho.png', '34356809', 2, 'OlÃ¡ visitante, somos uma ONG que atua desde de 2010 em prol dos nossos felinos domÃ©sticos. Nossa missÃ£o Ã© proporcionar uma vida saudÃ¡vel para os gatos que sÃ£o abandonados nos gatils da cidade. Junta-se a nÃ³s! #Gatinhos'),
(5, '12312313', 'Pelo de gato', 'OlÃ¡ visitante, somos uma ONG que atua desde ', 'Animais', 'pelodegato@gmail.com', 'logo_gatinho.png', '34356809', 40, 'OlÃ¡ visitante, somos uma ONG que atua desde de 2010 em prol dos nossos felinos domÃ©sticos. Nossa missÃ£o Ã© proporcionar uma vida saudÃ¡vel para os gatos que sÃ£o abandonados nos gatils da cidade. Junta-se a nÃ³s! #Gatinhos');

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
(2, 'Voluntário 2');

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
  `site` varchar(100) DEFAULT NULL,
  `tipo_usuario_idtipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_user`, `senha`, `email`, `nome`, `user`, `idade`, `sexo`, `bio`, `imagem`, `site`, `tipo_usuario_idtipo_usuario`) VALUES
(2, '25', 'annalisa.wyatt@massa.com', 'Annalisa Whyatt', 'Anna', '1962-06-29', 'fem', 'eu sou a Anna', 'icon.png', 'https://www.buzzfeed.com/', 1),
(8, '25', 'gwen.nichols@nam.com', 'Gwen Nichols', 'GG', '1986-10-18', 'mas', 'profissional da saúde', 'icon.png', NULL, 2),
(16, '123', 'lucas@gmail.com', 'Lucas', 'lusca', '1999-11-10', 'mas', 'Lalalala', 'icon.png', 'www.google.com', 2),
(18, '123', 'souomandela@gmail.com', 'Nelson Mandela', 'mandelinha', '2018-12-18', 'masculino', 'Fui Partiu, aonde?  Ã‰ o Mandela!', 'mandela.jpg', 'https://pt.wikipedia.org/wiki/Nelson_Mandela', 2),
(30, '30', 'Crizu@live.com', 'Eduardo Maia', 'Crizu', '2001-07-22', 'masculino', 'Gosto de ir embora do if, geralmente 2:30, grato', 'icon.png', '', 2),
(33, '1234', 'vinibobao@hotmail.com', 'Vinicius Peres', 'vinibobao', '2001-10-24', 'masculino', 'Vinicius Bobao', 'icon.png', '', 1),
(36, '1234', 'lucas@hotmail.com', 'Lucas', 'lusca', '2017-06-04', 'outro', 'olá, sou estudante e estou disposto a doar meu tempo livre para artividades socialista', 'henrique.png', 'https://music.youtube.com', 1),
(40, '1234', 'anabela22@gmail.com', 'Ana Bela', 'Aninha', '2000-12-15', 'feminino', '\"Empodere uma mulher.\"', 'cad_usuario2.jpeg', 'www.facebook.com/anabela', 1);

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
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
  MODIFY `cod_atividade` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cod_categoria` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ong`
--
ALTER TABLE `ong`
  MODIFY `idong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
