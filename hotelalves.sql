-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Tempo de geração: 13-Dez-2021 às 22:27
-- Versão do servidor: 10.6.5-MariaDB
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hotelalves`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cpf_cliente` varchar(45) NOT NULL,
  `nome_cliente` varchar(45) NOT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  PRIMARY KEY (`cpf_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estadia`
--

DROP TABLE IF EXISTS `estadia`;
CREATE TABLE IF NOT EXISTS `estadia` (
  `data_entrada` date NOT NULL,
  `data_saida` date NOT NULL,
  `cpf_cliente` varchar(45) NOT NULL,
  PRIMARY KEY (`data_entrada`),
  KEY `cpf_cliente` (`cpf_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estadia`
--

INSERT INTO `estadia` (`data_entrada`, `data_saida`, `cpf_cliente`) VALUES
('2010-11-21', '2012-11-21', '999999999-99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `cod_hotel` smallint(6) NOT NULL,
  `nome_hotel` varchar(45) DEFAULT 'HotelAlves',
  PRIMARY KEY (`cod_hotel`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `hotel`
--

INSERT INTO `hotel` (`cod_hotel`, `nome_hotel`) VALUES
(1, 'HotelAlves');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quarto`
--

DROP TABLE IF EXISTS `quarto`;
CREATE TABLE IF NOT EXISTS `quarto` (
  `cod_quarto` int(1) NOT NULL,
  `cod_hotel` int(1) NOT NULL,
  `descricao_quarto` varchar(240) NOT NULL,
  PRIMARY KEY (`cod_quarto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quarto`
--

INSERT INTO `quarto` (`cod_quarto`, `cod_hotel`, `descricao_quarto`) VALUES
(1, 1, 'Quarto simples com uma cama de casal telefone armário de porta dupla espaçoso mesa de centro com dois sofás');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

DROP TABLE IF EXISTS `servico`;
CREATE TABLE IF NOT EXISTS `servico` (
  `cod_servico` smallint(6) NOT NULL,
  `valor_servico` decimal(13,2) NOT NULL,
  `tipo_servico` varchar(45) NOT NULL,
  `cpf_cliente` varchar(45) NOT NULL,
  PRIMARY KEY (`cod_servico`),
  KEY `cpf_cliente` (`cpf_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`cod_servico`, `valor_servico`, `tipo_servico`, `cpf_cliente`) VALUES
(1, '200.00', 'Básico', '999999999-99');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
