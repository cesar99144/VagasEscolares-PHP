-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 20-Mar-2021 às 23:55
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `educacionalvagas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `cpf` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dataNascimento` varchar(100) DEFAULT NULL,
  `serieEscolar` varchar(100) DEFAULT NULL,
  `nivelEscolar` varchar(120) DEFAULT NULL,
  `escolaInteresse` int DEFAULT NULL,
  `status` varchar(90) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `cpf`, `dataNascimento`, `serieEscolar`, `nivelEscolar`, `escolaInteresse`, `status`) VALUES
(1, 'CESAR', '9999999999999', '27/10/1999', '27/10/1999', 'Ensino fundamental', 10, 'Espera'),
(3, 'LETICIA', '44444444444444', '20/05/2000', '20/05/2000', 'Ensino médio', 10, 'Espera'),
(4, 'Joao', '22222222222', '25/10/1995', '25/10/1995', 'Ensino fundamental', 10, 'Espera');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escolas`
--

CREATE TABLE `escolas` (
  `id` int NOT NULL,
  `razaoSocial` varchar(150) DEFAULT NULL,
  `cnpj` varchar(35) DEFAULT NULL,
  `cidade` varchar(90) DEFAULT NULL,
  `estado` varchar(70) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `escolas`
--

INSERT INTO `escolas` (`id`, `razaoSocial`, `cnpj`, `cidade`, `estado`) VALUES
(12, 'CONSELHO ESCOLAR PROFESSOR JOSE BIONE DE ARAUJO', '03.201.301/0001-71', 'CARUARU', 'PE'),
(11, 'COLEGIO DIOCESANO DE CARUARU', '09.996.901/0001-50', 'CARUARU', 'PE'),
(10, 'EXATO PRIME COLEGIO LTDA', '20.815.459/0001-50', 'CARUARU', 'PE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matriculas`
--

CREATE TABLE `matriculas` (
  `id` int NOT NULL,
  `idAluno` int DEFAULT NULL,
  `idVaga` int DEFAULT NULL,
  `status` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariosadmescola`
--

CREATE TABLE `usuariosadmescola` (
  `id` int NOT NULL,
  `nome` varchar(120) DEFAULT NULL,
  `sobrenome` varchar(120) DEFAULT NULL,
  `cnpjEscola` varchar(70) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `senha` varchar(90) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuariosadmescola`
--

INSERT INTO `usuariosadmescola` (`id`, `nome`, `sobrenome`, `cnpjEscola`, `email`, `senha`) VALUES
(5, 'juliana', 'souza', '09.996.901/0001-50', 'juliana@gmail.com', '$2y$10$Lg/aThmwUDh3XuiJyQ6s4uccdfjTLAxEuGrVOnWDuJSaSi5Jab.A.'),
(4, 'cesar', 'ferreira', '20.815.459/0001-50', 'cesar@gmail.com', '$2y$10$dK.RrbmmuEa.cNGcLt4HMep.GO2bqffVpNHqfle5epTpQ6VyvSBMK'),
(6, 'Bruna', 'silva', '03.201.301/0001-71', 'bruna@gmail.com', '$2y$10$5RvixmXd9LJeVlCr94LhG.bxz0XnN9Z4.r9eqPkNoLFhNlL4luSo2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `id` int NOT NULL,
  `idEscola` int DEFAULT NULL,
  `quantidade` int DEFAULT NULL,
  `modalidade` varchar(120) DEFAULT NULL,
  `serie` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`id`, `idEscola`, `quantidade`, `modalidade`, `serie`) VALUES
(1, 10, 15, 'Ensino fundamental', 4),
(2, 10, 220, 'Ensino médio', 3),
(3, 11, 40, 'Ensino fundamental', 7);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `escolaInteresse` (`escolaInteresse`);

--
-- Índices para tabela `escolas`
--
ALTER TABLE `escolas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAluno` (`idAluno`),
  ADD KEY `idVaga` (`idVaga`);

--
-- Índices para tabela `usuariosadmescola`
--
ALTER TABLE `usuariosadmescola`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEscola` (`cnpjEscola`);

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEscola` (`idEscola`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `escolas`
--
ALTER TABLE `escolas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `matriculas`
--
ALTER TABLE `matriculas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuariosadmescola`
--
ALTER TABLE `usuariosadmescola`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
