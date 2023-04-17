-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 18/04/2023 às 00:46
-- Versão do servidor: 10.4.24-MariaDB
-- Versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `usuario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `data_nasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `email`, `senha`, `data_nasc`) VALUES
(2, 'Anette', 'acorns0@booking.com', '4t9sngUe', '1997-07-31'),
(3, 'Maria Alice', 'marialice@gmail.com', '123456789', '2005-11-01'),
(4, 'Enzo Valentino', 'enzovalentino@gmail.com', '1234567', '2008-09-16'),
(6, 'Anette', 'acorns0@booking.com', '4t9sngUe', '1997-07-31'),
(7, 'Roxane', 'rtomson1@fda.gov', 'gVBgxUX0LjEj', '1993-01-19'),
(8, 'Miranda', 'mterrell2@delicious.com', 'wnlswd', '1987-10-27'),
(9, 'Delmor', 'dreinert3@diigo.com', 'TiOhtDv', '2016-09-05'),
(10, 'Huntington', 'hdrury4@arstechnica.com', 'j4yIAPA6q', '1996-04-07'),
(11, 'Tonye', 'tpech5@home.pl', 'J9iqV4u', '1988-03-09'),
(12, 'Pearla', 'pdrewery6@devhub.com', 'CRA5HLW44T', '2009-07-14'),
(13, 'Maria Fernandes', 'maria@gmail.com', '123456789', '2006-11-09');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;