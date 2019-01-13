-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Dez-2018 às 01:24
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
-- Estrutura da tabela `t_atividade`
--

CREATE TABLE `t_atividade` (
  `ati_codigo` int(11) NOT NULL,
  `ati_descricao` varchar(100) NOT NULL,
  `ser_codigo` int(11) NOT NULL,
  `ati_status` varchar(2) NOT NULL,
  `ati_usuario` int(11) NOT NULL,
  `ati_datacadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ati_novo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `t_atividade`
--

INSERT INTO `t_atividade` (`ati_codigo`, `ati_descricao`, `ser_codigo`, `ati_status`, `ati_usuario`, `ati_datacadastro`, `ati_novo`) VALUES
(112, 'Teste', 2, 'A', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'Item 1', 6, 'A', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Item 2', 6, 'A', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Item 3', 6, 'A', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Item 2', 8, 'A', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'Item 3', 8, 'A', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'Item 4', 8, 'A', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'TEste de  Data', 5, 'A', 0, '2018-07-21 23:57:19', '2018-07-21 23:57:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_clientes`
--

CREATE TABLE `t_clientes` (
  `cli_codigo` int(11) NOT NULL,
  `cli_descricao` varchar(100) NOT NULL,
  `cli_status` varchar(2) NOT NULL DEFAULT 'A',
  `cli_imagem` varchar(100) NOT NULL,
  `cli_site` varchar(100) DEFAULT NULL,
  `cli_cidade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `t_clientes`
--

INSERT INTO `t_clientes` (`cli_codigo`, `cli_descricao`, `cli_status`, `cli_imagem`, `cli_site`, `cli_cidade`) VALUES
(16, 'Teste', 'A', 'logo1.png', 'asdasd.com.br', 'Cunhatai'),
(17, 'Teste', 'A', 'logo2.png', 'adsdas', 'asda'),
(18, 'Cliente Dois ', 'A', 'logo1.png', NULL, 'Cunhatai'),
(19, 'Cliente Três', 'A', 'logo4.png', 'teste.com.br', 'CUNHATAIII'),
(20, 'Cliente Três', 'A', 'logo1.png', 'teste.com.br', 'Teste'),
(21, 'Frigorifo Schabarum', 'A', '', 'teste.com.br', 'Cunhatai'),
(22, 'Cliente Teste', 'A', '15338658445b6cef74b6291.jpg', 'asdasdasda.com.br', 'Cunhatai'),
(23, 'Teste DNS', 'A', '15387843945bb7fc8a3db45.png', 'chapeco.com.br', 'Chapecó'),
(24, 'sdasd', 'A', '15387844645bb7fcd048979.png', NULL, 'dasdas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_representantes`
--

CREATE TABLE `t_representantes` (
  `rep_codigo` int(11) NOT NULL,
  `rep_descricao` varchar(100) NOT NULL,
  `rep_logo` varchar(100) DEFAULT NULL,
  `rep_endereco` varchar(150) NOT NULL,
  `rep_cidade` varchar(100) NOT NULL,
  `rep_telefone` varchar(50) NOT NULL,
  `rep_email` varchar(100) NOT NULL,
  `rep_status` varchar(2) NOT NULL,
  `rep_datacadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `t_representantes`
--

INSERT INTO `t_representantes` (`rep_codigo`, `rep_descricao`, `rep_logo`, `rep_endereco`, `rep_cidade`, `rep_telefone`, `rep_email`, `rep_status`, `rep_datacadastro`) VALUES
(1, 'Diego Representações', 'logo.png', 'Linha São Roque, Interior', 'Cunhatai', '49-3325-3100', 'asdasd@asdasd.com.br', 'A', '2018-08-15 03:27:04'),
(2, 'Diego Representações', 'logo.png', 'Linha São Roque, Interior', 'Cunhatai', '49-3325-3100', 'asdasd@asdasd.com.br', 'A', '2018-08-15 03:27:11'),
(3, 'Diego Representações', 'logo.png', 'Linha São Roque, Interior', 'Cunhatai', '49-3325-3100', 'asdasd@asdasd.com.br', 'A', '2018-08-15 03:27:16'),
(4, 'Diego Representações', 'logo.png', 'Linha São Roque, Interior', 'Cunhatai', '49-3325-3100', 'asdasd@asdasd.com.br', 'A', '2018-08-15 03:27:19'),
(5, 'Diego Representações', 'logo.png', 'Linha São Roque, Interior', 'Cunhatai', '49-3325-3100', 'asdasd@asdasd.com.br', 'A', '2018-08-15 03:27:21'),
(6, 'Diego Representações', 'logo.png', 'Linha São Roque, Interior', 'Cunhatai', '49-3325-3100', 'asdasd@asdasd.com.br', 'A', '2018-08-15 03:27:24');

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
(2, 'AUDITORIA', 'A', '2018-10-06 00:03:09', 0, 2, NULL),
(5, 'SOCIETARIO', 'A', '2018-10-06 00:03:09', 0, 1, '2018-08-02'),
(6, 'CONTABIL', 'A', '2018-10-06 00:03:09', 0, 4, NULL),
(8, 'PRODUTOR RURAL e PESSOA FISICA ', 'A', '2018-10-06 00:03:09', 0, 3, NULL),
(14, 'FISCAL', 'A', '2018-10-06 00:03:09', 1, 6, '2018-10-01'),
(18, 'DIEGO_ORDEM02', 'A', '2018-10-06 00:03:09', 1, 5, '2018-06-07');

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
-- Indexes for table `t_atividade`
--
ALTER TABLE `t_atividade`
  ADD PRIMARY KEY (`ati_codigo`);

--
-- Indexes for table `t_clientes`
--
ALTER TABLE `t_clientes`
  ADD PRIMARY KEY (`cli_codigo`);

--
-- Indexes for table `t_representantes`
--
ALTER TABLE `t_representantes`
  ADD PRIMARY KEY (`rep_codigo`);

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
-- AUTO_INCREMENT for table `t_atividade`
--
ALTER TABLE `t_atividade`
  MODIFY `ati_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `t_clientes`
--
ALTER TABLE `t_clientes`
  MODIFY `cli_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `t_representantes`
--
ALTER TABLE `t_representantes`
  MODIFY `rep_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_servicos`
--
ALTER TABLE `t_servicos`
  MODIFY `ser_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `t_usario`
--
ALTER TABLE `t_usario`
  MODIFY `USU_CODIGO` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
