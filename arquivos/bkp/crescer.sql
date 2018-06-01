-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Jun-2018 às 04:21
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
-- Database: `crescer`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_servicos`
--

CREATE TABLE `t_servicos` (
  `ser_codigo` int(11) NOT NULL,
  `ser_descricao` varchar(100) NOT NULL,
  `ser_status` varchar(2) NOT NULL,
  `ser_datacadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ser_usuario` int(11) NOT NULL,
  `ser_ordem` int(11) NOT NULL,
  `ser_novo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `t_servicos`
--

INSERT INTO `t_servicos` (`ser_codigo`, `ser_descricao`, `ser_status`, `ser_datacadastro`, `ser_usuario`, `ser_ordem`, `ser_novo`) VALUES
(1, 'CONSULTORIA', 'A', '2018-06-01 01:52:09', 0, 1, '2018-05-02'),
(2, 'AUDITORIA', 'A', '2018-06-01 01:33:11', 0, 2, NULL),
(3, 'PERICIA JUDICIAL E EXTRAJUDICAL', 'A', '2018-06-01 01:52:05', 0, 3, NULL),
(4, 'FISCAL', 'A', '2018-06-01 01:34:00', 0, 4, NULL),
(5, 'SOCIETARIO', 'A', '2018-06-01 01:34:24', 0, 5, NULL),
(6, 'CONTABIL', 'A', '2018-06-01 01:35:05', 0, 6, NULL),
(7, 'RECURSOS HUMANOS', 'A', '2018-06-01 01:35:05', 0, 7, NULL),
(8, 'PRODUTOR RURAL e PESSOA FISICA ', 'A', '2018-06-01 01:35:32', 0, 8, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_usario`
--

CREATE TABLE `t_usario` (
  `USU_CODIGO` int(11) NOT NULL,
  `USU_USERNAME` varchar(50) NOT NULL,
  `USU_NOME` varchar(50) NOT NULL,
  `USU_SENHA` varchar(20) NOT NULL,
  `USU_STATUS` varchar(2) NOT NULL,
  `USU_TIPO` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_servicos`
--
ALTER TABLE `t_servicos`
  ADD PRIMARY KEY (`ser_codigo`);

--
-- Indexes for table `t_usario`
--
ALTER TABLE `t_usario`
  ADD PRIMARY KEY (`USU_CODIGO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_servicos`
--
ALTER TABLE `t_servicos`
  MODIFY `ser_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_usario`
--
ALTER TABLE `t_usario`
  MODIFY `USU_CODIGO` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
