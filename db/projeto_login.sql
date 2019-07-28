-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jul-2019 às 01:21
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario` text,
  `dia` date DEFAULT NULL,
  `horario` varchar(5) DEFAULT NULL,
  `fk_id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `dia`, `horario`, `fk_id_usuario`) VALUES
(6, 'Cara ficou bacana esse site. De verdade!', '2019-07-22', '07:25', 3),
(7, 'Interessante o que você fez, gostaria de entrar em contato com você para saber mais sobre seu potencial.', '2019-07-24', '12:13', 3),
(8, 'Sequinte, você so sabe fazer CRUD? poxa tem que aprender muita coisa ainda, sabe de praticamente nada!!', '2019-07-26', '16:25', 1),
(9, 'Tu é muito ruin mano, mds!! sabe nem fazer um sistema!! LIXO', '2019-07-27', '16:27', 2),
(10, 'Seu site tanto quanto o sistema ficaram uma porcaria.', '2019-07-27', '16:27', 2),
(11, 'Ei Ei...', '2019-07-28', '17:19', 1),
(12, 'ComentÃ¡rio do Admin!', '2019-07-28', '17:27', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `nivel` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel`) VALUES
(1, 'Admin', 'teste@outlook.com', '698dc19d489c4e4db73e28a713eab07b', 1),
(2, 'Victor', 'allkes@outlook.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL),
(3, 'Allan', 'email@outlook.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_usuario` (`fk_id_usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
