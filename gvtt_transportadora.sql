-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24-Out-2022 às 04:40
-- Versão do servidor: 5.6.51
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gvtt_transportadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caminhao`
--

CREATE TABLE `caminhao` (
  `idCaminhao` int(50) NOT NULL,
  `codCaminhao` bigint(20) NOT NULL,
  `modeloCaminhao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(5) NOT NULL,
  `nomCliente` varchar(50) NOT NULL,
  `senhaCliente` varchar(50) NOT NULL,
  `permCliente` int(2) NOT NULL,
  `emailCliente` varchar(60) NOT NULL,
  `userCliente` varchar(50) NOT NULL,
  `nascCliente` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nomCliente`, `senhaCliente`, `permCliente`, `emailCliente`, `userCliente`, `nascCliente`) VALUES
(1, 'Vinicius Gomes Caetano', 'Vinicius', 1, '', '', '0000-00-00'),
(2, 'opa', 'fogooo', 1, '', '', '0000-00-00'),
(3, 'teste', 'teste', 1, '', '', '0000-00-00'),
(4, 'fsdfsd', 'fsdfs', 1, '', '', '0000-00-00'),
(5, 'eeeeita', 'md5(OPA)', 1, '', '', '0000-00-00'),
(6, 'eeeeita', '53620449d9b8a0e938d33da95315950b', 1, '', '', '0000-00-00'),
(7, 'hoje', 'da53ac20be94e898ce818cde81ded127', 1, '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rotas`
--

CREATE TABLE `rotas` (
  `idRota` int(50) NOT NULL,
  `destinoRota` varchar(50) NOT NULL,
  `saidaRota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `viagens`
--

CREATE TABLE `viagens` (
  `idViagem` int(20) NOT NULL,
  `horaInicioViagem` time NOT NULL,
  `horaFimViagem` time NOT NULL,
  `idCaminhao` int(50) NOT NULL,
  `idRota` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `caminhao`
--
ALTER TABLE `caminhao`
  ADD PRIMARY KEY (`idCaminhao`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `rotas`
--
ALTER TABLE `rotas`
  ADD PRIMARY KEY (`idRota`);

--
-- Índices para tabela `viagens`
--
ALTER TABLE `viagens`
  ADD PRIMARY KEY (`idViagem`),
  ADD KEY `idRota` (`idRota`),
  ADD KEY `idCaminhao` (`idCaminhao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `caminhao`
--
ALTER TABLE `caminhao`
  MODIFY `idCaminhao` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `rotas`
--
ALTER TABLE `rotas`
  MODIFY `idRota` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `viagens`
--
ALTER TABLE `viagens`
  MODIFY `idViagem` int(20) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `viagens`
--
ALTER TABLE `viagens`
  ADD CONSTRAINT `viagens_ibfk_2` FOREIGN KEY (`idRota`) REFERENCES `rotas` (`idRota`),
  ADD CONSTRAINT `viagens_ibfk_3` FOREIGN KEY (`idCaminhao`) REFERENCES `caminhao` (`idCaminhao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
