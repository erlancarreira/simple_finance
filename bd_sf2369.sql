-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Set-2018 às 03:53
-- Versão do servidor: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_er`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `balance`
--

DROP TABLE IF EXISTS `balance`;
CREATE TABLE IF NOT EXISTS `balance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `debit_id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `debit_id` (`debit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`id`, `name`, `email`) VALUES
(53, 'fulano de souza da silva', 'fulano@hotmail.com'),
(54, 'glairton de souza almeida', 'gsouza@hotmail.com'),
(62, 'fulano da bessa', 'fulanob@hotmail.com'),
(63, 'ciclano da silva ', 'ciclano@hotmail.com'),
(72, 'bilarde de souza', 'bilarde@hotmail.com'),
(76, 'cicrano da silva vivo', 'cicrano@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `debit`
--

DROP TABLE IF EXISTS `debit`;
CREATE TABLE IF NOT EXISTS `debit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '2',
  `value` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `debit`
--

INSERT INTO `debit` (`id`, `client_id`, `name`, `payment_method`, `date`, `status`, `value`) VALUES
(17, 53, 'Creme de pentear ', '1', '2018-09-06', 1, '23.00'),
(18, 53, 'Creme de pentear ', '1', '2018-09-06', 1, '23.00'),
(19, 53, 'Creme de pentear ', '1', '2018-09-06', 1, '23.00'),
(20, 53, 'Creme de pentear ', '1', '2018-09-06', 1, '23.00'),
(21, 53, 'Creme de pentear ', '1', '2018-09-06', 1, '23.00'),
(22, 53, 'Creme de pentear ', '1', '2018-09-06', 1, '23.00'),
(23, 53, 'Creme de pentear ', '1', '2018-09-06', 1, '23.00'),
(24, 53, 'Creme de pentear ', '1', '2018-09-06', 1, '23.00'),
(25, 53, 'Creme de pentear ', '1', '2018-09-06', 1, '23.00'),
(26, 53, 'Creme de pentear ', '1', '2018-09-06', 1, '23.00'),
(27, 53, 'Venda de um produto', '1', '2018-09-06', 1, '12.00'),
(28, 53, 'Venda de um produto', '1', '2018-09-06', 1, '12.00'),
(29, 53, 'Venda de um produto', '1', '2018-09-06', 1, '12.00'),
(30, 53, 'Meu produto', '1', '2018-09-06', 0, '56.00'),
(31, 53, 'Meu produto', '1', '2018-09-06', 0, '56.00'),
(32, 53, 'Meu produto', '1', '2018-09-06', 0, '56.00'),
(33, 53, 'Meu produto', '1', '2018-09-06', 0, '56.00'),
(34, 53, 'Meu produto', '1', '2018-09-06', 0, '56.00'),
(35, 53, 'Meu produto', '1', '2018-09-06', 0, '56.00'),
(36, 62, 'Meu produto', '1', '2018-09-06', 0, '12.00'),
(37, 62, 'Meu produto', '1', '2018-09-06', 0, '12.00'),
(38, 62, 'Produto 2', '1', '2018-09-06', 2, '23.00'),
(39, 62, 'Produto 2', '1', '2018-09-06', 2, '23.00'),
(40, 54, 'Meu debito aqui!', '2', '2018-09-06', 0, '63.00'),
(41, 62, 'Meu debito aqui!', '1', '2018-09-07', 0, '23.00'),
(42, 53, 'Meu valor de debito', '1', '2018-09-07', 0, '34.00'),
(43, 53, 'Meu debito cadastrado aqui', '2', '2018-09-07', 0, '35.00'),
(44, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(45, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(46, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(47, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(48, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(49, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(50, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(51, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(52, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(53, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(54, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(55, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(56, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(57, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(58, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(59, 53, 'Meu debito novamente aqui', '1', '2018-09-08', 0, '234.00'),
(60, 54, 'Meu debito personalizado', '2', '2018-09-27', 0, '34.00'),
(61, 62, 'Produto Eudora Shampo Capilar', '3', '2018-09-08', 2, '45.00'),
(62, 62, 'Sabonete Eudora', '3', '2018-09-08', 3, '36.00'),
(63, 62, 'Sabonete Eudora', '3', '2018-09-08', 3, '36.00'),
(64, 53, 'Sabonete Eudora', '3', '2018-09-08', 3, '36.00'),
(65, 53, 'sabonete azul ', '3', '2018-09-11', 3, '63.00'),
(66, 53, 'sabonete azul ', '3', '2018-09-11', 3, '63.00'),
(67, 53, 'sabonete azul ', '3', '2018-09-11', 3, '63.00'),
(68, 72, 'desodorante eudora', '3', '2018-09-12', 3, '23.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hashlogin` varchar(32) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `hashlogin`, `created_at`) VALUES
(7, 'admin', 'admin@hotmail.com', '$2y$10$zHvrjGUm5RYF5SwhOsusne4f/FyEEaHad1pU/VZ1VwMRN.TeW.oJm', 'e90e8dcdb46c9098eb4bed68f4c5db48', '2018-06-08 17:48:41'),
(8, 'erlancarreira', 'erlancarreira@hotmail.com', '$2y$10$.Igk5ZWIarN3p9I1UspB/um5DmV2GgLHXqqXSz48nGwyoqJUWboLC', '1661eb088dd62e96e07693bc49125dc5', '2018-06-09 18:06:42'),
(9, 'fulano', 'fulano@hotmail.com', '$2y$10$J5NwuWU65RCercYQfvST1uz4SArPaZhtqnaVI1treHQl7xPySJuuW', 'c7518e98b5cacf38142f6a20777eb248', '2018-06-09 18:07:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `balance`
--
ALTER TABLE `balance`
  ADD CONSTRAINT `balance_ibfk_1` FOREIGN KEY (`debit_id`) REFERENCES `debit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `debit`
--
ALTER TABLE `debit`
  ADD CONSTRAINT `debit_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
