-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/11/2020 às 23:40
-- Versão do servidor: 10.4.14-MariaDB
-- Versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fando_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabela_622440`
--

CREATE TABLE `tabela_622440` (
  `taskID` int(11) NOT NULL,
  `taskName` varchar(150) NOT NULL,
  `taskDesc` varchar(200) DEFAULT NULL,
  `taskCreateDate` datetime NOT NULL,
  `taskDate` datetime NOT NULL,
  `isImportant` tinyint(1) NOT NULL,
  `taskIcon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tabela_622440`
--

INSERT INTO `tabela_622440` (`taskID`, `taskName`, `taskDesc`, `taskCreateDate`, `taskDate`, `isImportant`, `taskIcon`) VALUES
(1, 'Isso é uma tarefa teste', 'Descrição da tarefa teste', '2019-07-09 01:42:00', '2019-05-19 12:32:21', 0, 'extra'),
(2, 'Isso é outra tarefa teste', 'Descrição da outra tarefa teste', '2019-05-19 12:32:21', '2019-05-19 12:32:21', 1, 'lel'),
(3, 'Mais uma tarefa teste', 'leeljooj', '2019-05-19 12:32:21', '2019-05-19 12:32:21', 1, 'lindo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabela_651741`
--

CREATE TABLE `tabela_651741` (
  `taskID` int(11) NOT NULL,
  `taskName` varchar(150) NOT NULL,
  `taskDesc` varchar(200) DEFAULT NULL,
  `taskCreateDate` datetime NOT NULL,
  `taskDate` datetime NOT NULL,
  `isImportant` tinyint(1) NOT NULL,
  `taskIcon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userLastname` varchar(100) NOT NULL,
  `userEmail` varchar(250) NOT NULL,
  `userPassword` varchar(150) NOT NULL,
  `userKey` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`userID`, `userName`, `userLastname`, `userEmail`, `userPassword`, `userKey`) VALUES
(7, 'Usuário', 'Teste', 'usuario@teste.com', 'testeteste', '622440'),
(8, 'Luiz', 'Kraisch', 'luizkraisch22@gmail.com', 'lerolero', '651741');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tabela_622440`
--
ALTER TABLE `tabela_622440`
  ADD PRIMARY KEY (`taskID`);

--
-- Índices de tabela `tabela_651741`
--
ALTER TABLE `tabela_651741`
  ADD PRIMARY KEY (`taskID`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userEmail` (`userEmail`),
  ADD UNIQUE KEY `userKey` (`userKey`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tabela_622440`
--
ALTER TABLE `tabela_622440`
  MODIFY `taskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tabela_651741`
--
ALTER TABLE `tabela_651741`
  MODIFY `taskID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
