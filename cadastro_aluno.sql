-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 186.202.152.55
-- Generation Time: 11-Jun-2019 às 14:35
-- Versão do servidor: 5.6.40-84.0-log
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro_aluno`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ALUNOS`
--

CREATE TABLE `ALUNOS` (
  `ID_ALUNO` int(11) NOT NULL,
  `NOME` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `TELEFONE` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `DDD` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `CIDADE` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `UF` varchar(2) COLLATE latin1_general_ci DEFAULT NULL,
  `EMAIL` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `MENSAGEM` longtext COLLATE latin1_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `ALUNOS`
--

INSERT INTO `ALUNOS` (`ID_ALUNO`, `NOME`, `TELEFONE`, `DDD`, `CIDADE`, `UF`, `EMAIL`, `MENSAGEM`) VALUES
(1, NULL, '98657-8303', '21', 'Rio de Janeiro', NULL, 'carlosmuniz@globo.com', NULL),
(2, 'Carlos Muniz', '98657-8303', '21', 'Rio de Janeiro', 'RJ', 'carlosmuniz@globo.com', 'ewqrewrew'),
(3, 'Adrianos Figueiredo', '99609-5199', '21', 'Mesquita', 'RJ', 'adriano342@gmail.com', ''),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Francisco Denes Rodrigues ', '11 9664498', '', 'SÃ£o Paulo ', 'SP', 'denisuniverso@hotmail.com', 'Me interesso por lÃ³gica de programaÃ§Ã£o '),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'PLANSCOR CORRETORA', '613205-027', 'PL', 'PLANSCOR CORRETORA', 'SP', 'bsbcentraldevendas@gmail.com', 'PRECISA DE UM PLANO DE SAÃšDE PARA VOCÃŠ, SUA FAMÃLIA OU EMPRESA?\r\nFaÃ§a sua cotaÃ§Ã£o com a melhor equipe, proporcionamos o melhor acompanhamento. Planscor Planos de SaÃºde Todas as operadoras de saÃºde estÃ£o aqui.\r\n\r\nligue: (61) 3562-9000\r\n\r\n\r\nViste nosso site: https://planossaudeembrasilianodf.com.br/'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `USUARIOS`
--

CREATE TABLE `USUARIOS` (
  `ID_USUARIO` int(11) NOT NULL,
  `USUARIO` varchar(40) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `SENHA` varchar(30) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ALUNOS`
--
ALTER TABLE `ALUNOS`
  ADD UNIQUE KEY `ID_ALUNO` (`ID_ALUNO`);

--
-- Indexes for table `USUARIOS`
--
ALTER TABLE `USUARIOS`
  ADD PRIMARY KEY (`USUARIO`),
  ADD UNIQUE KEY `ID_USUARIO` (`ID_USUARIO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ALUNOS`
--
ALTER TABLE `ALUNOS`
  MODIFY `ID_ALUNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `USUARIOS`
--
ALTER TABLE `USUARIOS`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
