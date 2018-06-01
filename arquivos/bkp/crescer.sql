-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Jun-2018 às 05:34
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
  `ati_datacadastro` date NOT NULL,
  `ati_novo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `t_atividade`
--

INSERT INTO `t_atividade` (`ati_codigo`, `ati_descricao`, `ser_codigo`, `ati_status`, `ati_usuario`, `ati_datacadastro`, `ati_novo`) VALUES
(1, 'Karen A. Juarez', 2, 'A', 0, '2017-08-13', '2018-02-26'),
(2, 'Honorato Y. Hamilton', 2, 'A', 0, '2017-08-14', '2018-08-21'),
(3, 'Louis H. Wright', 8, 'A', 0, '2018-09-01', '2019-03-19'),
(4, 'Noble B. Marshall', 5, 'A', 0, '2019-02-03', '2018-02-10'),
(5, 'Brandon Y. Holman', 2, 'A', 0, '2019-04-22', '2018-05-20'),
(6, 'Alvin D. Raymond', 5, 'A', 0, '2019-01-14', '2018-09-25'),
(7, 'Mufutau S. Carlson', 8, 'A', 0, '2017-10-07', '2018-01-09'),
(8, 'Implantação de Controles Financeiros', 1, 'A', 0, '2018-07-22', '2017-08-30'),
(9, 'Lilah W. Olson', 4, 'A', 0, '2018-09-25', '2018-11-01'),
(10, 'Marvin J. Stewart', 7, 'A', 0, '2019-02-17', '2019-02-05'),
(11, 'Xaviera T. Bowen', 7, 'A', 0, '2018-11-04', '2017-12-31'),
(12, 'Kirsten H. Johns', 2, 'A', 0, '2017-10-24', '2018-01-01'),
(13, 'Vivien I. Reid', 8, 'A', 0, '2017-11-10', '2018-07-13'),
(14, 'Jonah J. Berry', 5, 'A', 0, '2018-07-19', '2018-04-30'),
(15, 'Ashely H. Cummings', 2, 'A', 0, '2017-07-20', '2019-02-08'),
(16, 'Hedy P. Jones', 4, 'A', 0, '2017-09-22', '2017-07-27'),
(17, 'Gloria M. Terrell', 8, 'A', 0, '2018-02-26', '2019-04-26'),
(18, 'Jin F. Peters', 2, 'A', 0, '2019-03-05', '2019-04-12'),
(19, 'Galena G. Obrien', 5, 'A', 0, '2018-05-25', '2017-08-26'),
(20, 'Colette U. Vazquez', 5, 'A', 0, '2018-04-19', '2017-09-29'),
(21, 'Kylan V. Contreras', 3, 'A', 0, '2019-04-27', '2017-09-03'),
(22, 'Geraldine P. Montoya', 8, 'A', 0, '2018-07-11', '2019-01-14'),
(23, 'Xerxes D. Powers', 6, 'A', 0, '2019-01-25', '2018-05-11'),
(24, 'Haviva P. Dotson', 3, 'A', 0, '2018-01-25', '2017-11-14'),
(25, 'Riley P. Little', 4, 'A', 0, '2019-01-28', '2017-07-19'),
(26, 'Implantação de Gestão de Custos', 1, 'A', 0, '2017-09-26', '2018-11-29'),
(27, 'Cailin E. Riddle', 7, 'A', 0, '2017-11-26', '2019-01-27'),
(28, 'Nigel C. Scott', 7, 'A', 0, '2018-02-22', '2017-12-12'),
(29, 'Kaitlin J. Johns', 3, 'A', 0, '2017-07-14', '2018-11-09'),
(30, 'Oliver O. Brock', 3, 'A', 0, '2018-10-20', '2018-08-01'),
(31, 'Gil F. Hopkins', 3, 'A', 0, '2018-07-06', '2018-06-25'),
(32, 'Jin X. Zimmerman', 7, 'A', 0, '2019-02-07', '2017-09-11'),
(33, 'Yardley T. Maxwell', 8, 'A', 0, '2017-07-13', '2019-03-05'),
(34, 'Analise de Custo para Tomada de Decisão', 1, 'A', 0, '2018-01-30', '2019-03-25'),
(35, 'Aubrey P. Campbell', 4, 'A', 0, '2017-06-02', '2018-03-11'),
(36, 'Barclay T. Flowers', 3, 'A', 0, '2018-12-18', '2018-10-05'),
(37, 'Shelley F. Waters', 6, 'A', 0, '2017-12-19', '2017-06-27'),
(38, 'Aretha B. Guthrie', 7, 'A', 0, '2017-08-14', '2017-12-29'),
(39, 'Kirby R. Bryant', 3, 'A', 0, '2017-10-29', '2018-12-26'),
(40, 'Carla C. Walls', 6, 'A', 0, '2018-05-28', '2018-01-08'),
(41, 'Scott L. Garrison', 7, 'A', 0, '2018-06-10', '2018-06-26'),
(42, 'Baxter Y. Adams', 6, 'A', 0, '2018-09-07', '2018-09-23'),
(43, 'Harding O. Sullivan', 8, 'A', 0, '2018-08-08', '2018-04-19'),
(44, 'Hoyt O. Holder', 5, 'A', 0, '2018-09-17', '2018-08-04'),
(45, 'Analise de Ponto de Equilíbrio', 1, 'A', 0, '2018-10-17', '2018-01-16'),
(46, 'Duncan J. Boone', 3, 'A', 0, '2017-08-04', '2018-10-07'),
(47, 'Cassandra G. Guy', 4, 'A', 0, '2019-03-07', '2017-06-27'),
(48, 'Formação de Preço de Venda', 1, 'A', 0, '2017-08-07', '2019-04-02'),
(49, 'James S. Stephens', 7, 'A', 0, '2018-12-30', '2017-12-03'),
(50, 'Hamilton Y. Trujillo', 8, 'I', 0, '2017-07-29', '2018-05-01'),
(51, 'Maile P. Collins', 7, 'I', 0, '2019-05-15', '2018-05-12'),
(52, 'Neil V. Herman', 5, 'I', 0, '2019-03-20', '2018-05-31'),
(53, 'Walker U. Mueller', 6, 'I', 0, '2018-01-17', '2019-05-21'),
(54, 'Micah Q. Graham', 5, 'I', 0, '2018-11-08', '2019-03-02'),
(55, 'Sawyer H. Romero', 8, 'I', 0, '2018-07-18', '2018-12-16'),
(56, 'Kennan A. Carney', 3, 'I', 0, '2018-10-15', '2018-12-01'),
(57, 'Dorian J. Oneal', 3, 'I', 0, '2017-12-27', '2018-05-28'),
(58, 'Mara U. Brennan', 1, 'I', 0, '2018-07-11', '2018-09-21'),
(59, 'Lyle Y. Cardenas', 7, 'I', 0, '2017-08-07', '2017-10-20'),
(60, 'Elton S. Bailey', 5, 'I', 0, '2018-10-28', '2018-06-11'),
(61, 'Keefe F. Wade', 3, 'I', 0, '2018-10-17', '2019-02-25'),
(62, 'Delilah D. Waters', 8, 'I', 0, '2017-11-12', '2018-09-09'),
(63, 'Megan Z. Rutledge', 7, 'I', 0, '2018-10-30', '2018-09-22'),
(64, 'Warren X. Cantu', 1, 'I', 0, '2017-07-06', '2018-10-13'),
(65, 'Dalton B. Gould', 5, 'I', 0, '2019-03-06', '2017-11-07'),
(66, 'Hillary V. Oneill', 4, 'I', 0, '2018-08-05', '2017-08-04'),
(67, 'Ross X. Cobb', 5, 'I', 0, '2019-03-26', '2019-02-14'),
(68, 'Brennan R. Blackwell', 3, 'I', 0, '2017-10-29', '2018-03-01'),
(69, 'Charde B. Woodward', 3, 'I', 0, '2019-04-26', '2017-10-16'),
(70, 'Ivory L. Winters', 8, 'I', 0, '2018-01-29', '2017-05-31'),
(71, 'Sopoline B. Wong', 1, 'I', 0, '2017-07-05', '2018-07-14'),
(72, 'Shelly I. Battle', 1, 'I', 0, '2019-04-04', '2018-10-07'),
(73, 'Kasper L. Weaver', 3, 'I', 0, '2017-10-16', '2018-01-16'),
(74, 'Cheryl E. Page', 3, 'I', 0, '2017-09-16', '2017-07-13'),
(75, 'Beverly M. Blevins', 8, 'I', 0, '2018-07-14', '2019-01-09'),
(76, 'Adam K. Waters', 4, 'I', 0, '2018-06-28', '2018-02-17'),
(77, 'Brandon F. Mendez', 8, 'I', 0, '2018-06-03', '2018-03-19'),
(78, 'Brenna X. Hyde', 4, 'I', 0, '2019-02-18', '2017-11-13'),
(79, 'Josiah W. Gibbs', 6, 'I', 0, '2018-01-25', '2019-05-26'),
(80, 'Laurel S. Spence', 7, 'I', 0, '2018-01-12', '2019-05-03'),
(81, 'Xander V. Erickson', 1, 'I', 0, '2017-12-13', '2018-08-31'),
(82, 'Kennedy E. Chang', 4, 'I', 0, '2017-08-22', '2017-07-26'),
(83, 'Cooper U. Mason', 5, 'I', 0, '2019-05-09', '2018-10-02'),
(84, 'Penelope W. Bender', 7, 'I', 0, '2018-01-06', '2017-10-20'),
(85, 'Buffy C. Grimes', 6, 'I', 0, '2017-06-19', '2017-06-03'),
(86, 'Cody Q. Bernard', 6, 'I', 0, '2017-08-25', '2017-09-14'),
(87, 'Kendall F. Lindsey', 3, 'I', 0, '2018-10-31', '2018-05-24'),
(88, 'Nissim H. Yang', 3, 'I', 0, '2019-04-29', '2018-12-20'),
(89, 'Belle D. Little', 5, 'I', 0, '2019-05-29', '2018-04-29'),
(90, 'Quinlan S. Jacobson', 6, 'I', 0, '2018-02-07', '2018-11-13'),
(91, 'Holmes J. Stuart', 1, 'I', 0, '2018-10-08', '2019-05-22'),
(92, 'Freya E. Sims', 7, 'I', 0, '2018-08-24', '2018-06-04'),
(93, 'Xavier E. Frye', 4, 'I', 0, '2018-12-15', '2019-05-13'),
(94, 'Carl O. Webb', 6, 'I', 0, '2019-04-11', '2017-11-08'),
(95, 'Jack T. Hawkins', 5, 'I', 0, '2017-06-16', '2017-08-30'),
(96, 'Xenos O. Welch', 3, 'I', 0, '2017-12-11', '2018-03-13'),
(97, 'Phelan P. Fitzgerald', 4, 'I', 0, '2018-10-16', '2017-10-16'),
(98, 'Kadeem Z. Robinson', 6, 'I', 0, '2018-12-19', '2018-05-11'),
(99, 'Fatima X. Vance', 3, 'I', 0, '2018-08-05', '2018-11-28'),
(100, 'Fulton H. Parsons', 1, 'I', 0, '2017-08-12', '2017-10-06');

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
-- Indexes for table `t_atividade`
--
ALTER TABLE `t_atividade`
  ADD PRIMARY KEY (`ati_codigo`);

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
  MODIFY `ati_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

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
