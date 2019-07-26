
CREATE DATABASE projeto_login;

USE projeto_login;
-- --------------------------------------------------------


CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario` text DEFAULT NULL,
  `dia` date DEFAULT NULL,
  `horario` varchar(5) DEFAULT NULL,
  `fk_id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `nivel` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel`) VALUES
(1, 'Allan Victor', 'teste@outlook.com', '698dc19d489c4e4db73e28a713eab07b', 1),
(2, 'Allan', 'allkes@outlook.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL),
(3, 'Allan Victor', 'email@outlook.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL);


ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_usuario` (`fk_id_usuario`);


ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuarios` (`id`);
