-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Dez-2023 às 02:02
-- Versão do servidor: 8.0.35
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `piscina`
--

DROP TABLE IF EXISTS `piscina`;
CREATE TABLE IF NOT EXISTS `piscina` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `aluguel` double NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `Hfuncionamento` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `piscina`
--

INSERT INTO `piscina` (`id`, `nome`, `endereco`, `aluguel`, `descricao`, `Hfuncionamento`) VALUES
(1, 'JS Piscina', 'R. Prof. Heloisa Bernadete Virgulino, 105 - Jardim Boa Vista, Caruaru - PE, 55038-420', 200, 'tem 4 mesas, 16 cadeiras, 2 banheiros e wifi', 'terça a domingo, das 08:00 a 18:00'),
(2, 'RS Piscina e Lazer', 'R. José Cassimiro da Silva, 30 - Kennedy, Caruaru - PE, 55014-715', 300, 'Piscina pra adulto e criança apartai dos 7 anos,\r\n2 banheiros e churrasqueira ', 'terça a domingo, das 08:00 a 18:00'),
(3, 'Espaço D\'Lazer', 'R. Safira - Kennedy, Caruaru - PE, 55036-532', 150, 'tem banheiro e wifi', 'funciona de quarta a domingo das 08:00 a 18:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservar`
--

DROP TABLE IF EXISTS `reservar`;
CREATE TABLE IF NOT EXISTS `reservar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_Usuario` int NOT NULL,
  `id_Piscina` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(75) NOT NULL,
  `senha` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`) VALUES
(1, 'joao.silva@email.com', 'senha123'),
(2, 'maria.souza@email.com', 'senha456'),
(3, 'carlos.pereira@email.com', 'senha789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
