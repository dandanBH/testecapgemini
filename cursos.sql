-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jan-2018 às 19:55
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cursos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `descricao` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `descricao`) VALUES
(1, 'Mercado e vendas'),
(2, 'Finanças');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultor`
--

CREATE TABLE `consultor` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `avatar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `consultor`
--

INSERT INTO `consultor` (`id`, `nome`, `avatar`) VALUES
(1, 'Milenna Alves Rodrigues', 'avatar'),
(2, 'Danilo de Souza Lima', 'avatar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `idconsultor` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `inicio` date NOT NULL,
  `fim` date DEFAULT NULL,
  `horainicial` time NOT NULL,
  `horafinal` time NOT NULL,
  `endereco` varchar(225) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `valor` double(10,2) NOT NULL,
  `descricao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `idconsultor`, `idcategoria`, `nome`, `inicio`, `fim`, `horainicial`, `horafinal`, `endereco`, `numero`, `bairro`, `cidade`, `valor`, `descricao`) VALUES
(1, 1, 1, 'Consultoria Presencial de Marketing', '2018-01-21', '2018-01-22', '10:00:00', '11:00:00', 'Avenida Barão Homem de Melo', 329, 'Nova Granada', 'Belo Horizonte', 150.00, 'A Consultoria é um serviço oferecido à você empresário. com o propósito de levantar as necessidades de sua empresa, identificar soluções e recomendar ações de melhoria através de uma ferramenta chamada diagnostico'),
(2, 1, 1, 'Oficina MEI - Aprenda a administrar seu negocio', '2018-01-21', '2018-01-21', '00:00:00', '00:00:00', 'Avenida Cristiano Machado', 3421, 'União', 'Belo Horizonte', 36.52, 'Curso de MEI'),
(3, 2, 2, 'Curso Empretec', '2018-01-21', NULL, '00:00:00', '00:00:00', 'Avenida Guarapari', 124, 'Santa Amelia', 'Belo Horizonte', 25.67, 'Curso Empretec'),
(4, 2, 2, 'PHP', '2018-01-21', '2018-01-21', '00:00:00', '00:00:00', 'Avenida Ministro Orozimbo Nonato', 124, 'Dona Clara', 'Belo Horizonte', 28.67, 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultor`
--
ALTER TABLE `consultor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `consultor`
--
ALTER TABLE `consultor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
