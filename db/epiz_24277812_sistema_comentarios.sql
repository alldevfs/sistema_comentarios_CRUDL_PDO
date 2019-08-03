
CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario` text DEFAULT NULL,
  `dia` date DEFAULT NULL,
  `horario` varchar(5) DEFAULT NULL,
  `fk_id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- INSERT INTO `comentarios` (`id`, `comentario`, `dia`, `horario`, `fk_id_usuario`) VALUES
-- (1, 'Cara ficou bacana esse site. De verdade!', '2019-07-22', '07:25', 3),
-- (2, 'Interessante o que você fez, gostaria de entrar em contato com você para saber mais sobre seu potencial.', '2019-07-24', '12:13', 3),
-- (3, 'Sequinte, você so sabe fazer CRUD? poxa tem que aprender muita coisa ainda, sabe de praticamente nada!!', '2019-07-26', '16:25', 1),
-- (5, 'Seu site tanto quanto o sistema ficaram uma porcaria.', '2019-07-27', '16:27', 2),
-- (6, 'OlÃ¡! Eu sou o novo administrador.', '2019-08-02', '20:54', 1);

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `nivel` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel`) VALUES
-- (1, 'Admin', 'teste@outlook.com', '698dc19d489c4e4db73e28a713eab07b', 1),
-- (2, 'Victor', 'allkes@outlook.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL),
-- (3, 'Allan', 'email@outlook.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL);

ALTER TABLE `comentarios`
ADD PRIMARY KEY (`id`),
ADD KEY `fk_id_usuario` (`fk_id_usuario`);

ALTER TABLE `usuarios`
ADD PRIMARY KEY (`id`);

ALTER TABLE `comentarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `usuarios`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `comentarios`
ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuarios` (`id`);
