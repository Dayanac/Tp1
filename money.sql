-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Mar-2016 às 23:07
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `money`
--
CREATE DATABASE IF NOT EXISTS `money` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `money`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

CREATE TABLE IF NOT EXISTS `contas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `financia_id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `vencimento` date NOT NULL,
  PRIMARY KEY (`id`,`financia_id`),
  KEY `financia` (`financia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `contas`
--

INSERT INTO `contas` (`id`, `financia_id`, `nome`, `valor`, `vencimento`) VALUES
(2, 2, 'Luz', '25.90', '2016-03-16'),
(3, 3, 'Luz', '25.90', '2016-03-24'),
(4, 3, 'Agua', '18.00', '2016-03-13'),
(5, 3, 'Aluguel ', '245.00', '2016-03-20'),
(6, 2, 'Aluguel ', '245.00', '2016-03-06'),
(9, 2, 'Agua', '15.00', '2016-03-15'),
(10, 5, 'Alguel', '245.00', '2016-03-15'),
(11, 5, 'Agua', '16.90', '2016-03-15'),
(12, 5, 'Cabelereiro', '20.00', '2016-03-19'),
(13, 3, 'SalÃ£o', '12.00', '2016-03-20'),
(14, 6, 'Aluguel ', '245.00', '2016-05-10'),
(15, 6, 'Luz', '23.80', '2016-05-15'),
(16, 6, 'Internet', '23.00', '2016-05-15'),
(17, 7, 'Aluguel', '245.00', '2016-06-10'),
(18, 7, 'Agua', '25.90', '2016-06-16'),
(19, 8, 'Aluguel', '245.00', '2016-03-16'),
(20, 8, 'Agua', '25.90', '2016-03-16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `financias`
--

CREATE TABLE IF NOT EXISTS `financias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `gastos` float DEFAULT '0',
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `financias`
--

INSERT INTO `financias` (`id`, `nome`, `gastos`, `usuario_id`) VALUES
(2, 'Abril', 285.9, 1),
(3, 'Janeiro', 288.9, 1),
(5, 'MarÃ§o', 281.9, 1),
(6, 'Maio', 291.8, 1),
(7, 'Junho', 270.9, 1),
(8, 'Janeiro', 0, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  `login` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `senha` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(45) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`, `email`) VALUES
(1, 'Dayana C. Oliveira', 'dayana', '123456', 'dayanacolivera@hotmail.com'),
(3, 'Fernando ', 'fernando', '123456', 'fernando@gmail.com'),
(4, 'Marli A. dos Reis ', 'marli', '123456', 'marli@hotmail.com');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `contas`
--
ALTER TABLE `contas`
  ADD CONSTRAINT `financia_chave` FOREIGN KEY (`financia_id`) REFERENCES `financias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `financias`
--
ALTER TABLE `financias`
  ADD CONSTRAINT `usuario_chave` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
