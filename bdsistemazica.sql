-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Fev-2019 às 01:01
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdsistemazica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `Cod_aluno` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `DN` date NOT NULL,
  `Telefone` varchar(15) NOT NULL,
  `Data_cadastro` datetime NOT NULL,
  `Cod_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`Cod_aluno`, `Nome`, `DN`, `Telefone`, `Data_cadastro`, `Cod_curso`) VALUES
(10, 'Gustavo', '1997-06-12', '(18) 99681-0412', '2019-02-22 13:21:00', 1),
(12, 'Mateus', '1997-06-12', '(18) 99681-0412', '2019-02-22 10:29:00', 3),
(13, 'Tormes', '1997-06-12', '(18) 99681-0412', '2019-02-22 10:29:00', 2),
(14, 'teste', '1997-05-05', '11121', '2019-02-25 14:38:00', 1),
(15, 'sandra', '2019-02-14', '1234', '2019-02-25 20:44:00', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `Cod_curso` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`Cod_curso`, `Nome`) VALUES
(1, 'ads'),
(2, 'bcc'),
(3, 'bcc'),
(5, 'oio'),
(6, 'teste'),
(7, 'Computacao'),
(8, 'Publicidade'),
(9, 'Sistema'),
(10, 'Desenvolvimento'),
(11, 'Analise'),
(12, 'Quimica'),
(13, 'qwerty'),
(14, 'oioioi'),
(15, 'erty'),
(16, '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`Cod_aluno`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`Cod_curso`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `Cod_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `Cod_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
