-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2016 at 10:01 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enquetes`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquete`
--

CREATE TABLE `enquete` (
  `enquete_id` int(100) NOT NULL,
  `nome_enquete` varchar(50) NOT NULL,
  `data_termino` date NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquete`
--

INSERT INTO `enquete` (`enquete_id`, `nome_enquete`, `data_termino`, `descricao`) VALUES
(1, 'qual a sua atriz porno favorita?', '2016-11-25', 'muitos jovens sao bastante apegados a suas \'artistas\' pornograficas!'),
(2, 'qual o seu time?', '2016-11-30', '...seu time, obviamente...'),
(3, 'qual o deus mitologico mais forte?', '2016-11-24', 'qual desses deuses e o mais sinistro??\r\n'),
(4, 'voce votaria em jair bolsonaro para presidente?', '2016-11-02', 'pesquisa eleitoral totalmente imparcial.'),
(5, 'dia ou noite?', '2016-11-18', 'pesquisa de opiniao'),
(6, 'que tipo de pessoa voce se considera?', '2016-11-19', 'pesquisa de opiniao'),
(8, 'parte do corpo que excita mais:', '2016-11-19', 'saber a tara dos homens...');

-- --------------------------------------------------------

--
-- Table structure for table `opcao`
--

CREATE TABLE `opcao` (
  `opcao_id` int(100) NOT NULL,
  `enquete_id` int(100) NOT NULL,
  `valor_opcao` varchar(50) NOT NULL,
  `numero_votos` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opcao`
--

INSERT INTO `opcao` (`opcao_id`, `enquete_id`, `valor_opcao`, `numero_votos`) VALUES
(1, 1, 'morgan lee', 34),
(2, 1, 'katja kassin', 121),
(3, 2, 'flamengo', 6),
(4, 2, 'botafogo', 8),
(5, 3, 'odjn', 77),
(6, 4, 'sim', 10),
(7, 4, 'com certeza', 19),
(8, 4, 'absolutamente', 42),
(9, 1, 'Amy anderssem', 33),
(10, 1, 'sasha grey', 68),
(11, 3, 'Tor', 12),
(12, 3, 'loki', 71),
(13, 3, 'heimdall', 58),
(14, 3, 'tyr', 8),
(15, 5, 'dia', 1),
(16, 5, 'noite', 2),
(17, 6, 'bom', 1),
(18, 6, 'neutro', 0),
(19, 6, 'mau', 1),
(22, 8, 'peito', 0),
(23, 8, 'bunda', 0),
(24, 8, 'buceta', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquete`
--
ALTER TABLE `enquete`
  ADD PRIMARY KEY (`enquete_id`),
  ADD UNIQUE KEY `unique_index` (`enquete_id`),
  ADD UNIQUE KEY `id_enquete_2` (`enquete_id`,`nome_enquete`),
  ADD UNIQUE KEY `nome_enquete` (`nome_enquete`);

--
-- Indexes for table `opcao`
--
ALTER TABLE `opcao`
  ADD PRIMARY KEY (`opcao_id`),
  ADD KEY `enquete_id_fk` (`enquete_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquete`
--
ALTER TABLE `enquete`
  MODIFY `enquete_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `opcao`
--
ALTER TABLE `opcao`
  MODIFY `opcao_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `opcao`
--
ALTER TABLE `opcao`
  ADD CONSTRAINT `enquete_id_fk` FOREIGN KEY (`enquete_id`) REFERENCES `enquete` (`enquete_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
