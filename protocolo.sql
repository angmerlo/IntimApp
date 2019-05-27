CREATE DATABASE rotina

CREATE TABLE `intimador` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `funcao` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `modo` (
  `id` int(11) NOT NULL,
  `descricao` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `descricao` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `protocolo` (
  `id` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `idintimador` int(11) NOT NULL,
  `idmodo` int(11) NOT NULL,
  `idstatus` int(11),
  `data_visita` date NOT NULL,
  `obs` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci null
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `usuario` (`id`, `email`, `senha`) VALUES
(1, 'teste@teste.com.br',md5('123456'));
insert into `usuario` values 
(2, 'angmerlo@yahoo.com.br', md5('123456'));


ALTER TABLE `protocolo`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `intimador`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `modo`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);



ALTER TABLE `protocolo`
  ADD CONSTRAINT `int_protocolo_fk` FOREIGN KEY (`idintimador`) REFERENCES `intimador` (`id`);

ALTER TABLE `protocolo`
  ADD CONSTRAINT `mod_protocolo_fk` FOREIGN KEY (`idmodo`) REFERENCES `modo` (`id`);

ALTER TABLE `protocolo`
  ADD CONSTRAINT `sta_protocolo_fk` FOREIGN KEY (`idstatus`) REFERENCES `status` (`id`);


ALTER TABLE `protocolo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--INSERÇÕES TABELA INTIMADOR
INSERT INTO `intimador` (`id`, `nome`, `funcao`) VALUES (1, 'Funcionario 1', 'Serviços Gerais');
INSERT INTO `intimador` (`id`, `nome`, `funcao`) VALUES (2, 'Funcionario 2', 'Atendente');
INSERT INTO `intimador` (`id`, `nome`, `funcao`) VALUES (3, 'Funcionario 3', 'Escrevente');
INSERT INTO `intimador` (`id`, `nome`, `funcao`) VALUES (4, 'Funcionario 4', 'Escrevente Autorizado');
INSERT INTO `intimador` (`id`, `nome`, `funcao`) VALUES (5, 'Funcionario 5', 'Substituto');
INSERT INTO `intimador` (`id`, `nome`, `funcao`) VALUES (6, 'Funcionario 6', 'Tabelião');
INSERT INTO `intimador` (`id`, `nome`, `funcao`) VALUES (7, 'Funcionario 7', 'Intimador');
INSERT INTO `intimador` (`id`, `nome`, `funcao`) VALUES (8, 'Funcionario 8', 'Atendente');
INSERT INTO `intimador` (`id`, `nome`, `funcao`) VALUES (9, 'Funcionario 9', 'Serviços Gerais');
INSERT INTO `intimador` (`id`, `nome`, `funcao`) VALUES (10, 'Funcionario 10', 'Intimador');

--INSERÇÕES TABELA MODO

INSERT INTO `modo` (`id`, `descricao`) VALUES  (1, 'No endereço');
INSERT INTO `modo` (`id`, `descricao`) VALUES  (2, 'No Tabelionato');
INSERT INTO `modo` (`id`, `descricao`) VALUES  (3, 'Pessoalmente');
INSERT INTO `modo` (`id`, `descricao`) VALUES  (4, 'Por Procuração');
INSERT INTO `modo` (`id`, `descricao`) VALUES  (5, 'Carta Registrada AR');




INSERT INTO `status` (`id`, `descricao`) VALUES (1, 'Intimado');
INSERT INTO `status` (`id`, `descricao`) VALUES (2, '1 Visita');
INSERT INTO `status` (`id`, `descricao`) VALUES (3, '2 Visita');
INSERT INTO `status` (`id`, `descricao`) VALUES (4, 'Recusado');
INSERT INTO `status` (`id`, `descricao`) VALUES (5, 'Mudou-se');
INSERT INTO `status` (`id`, `descricao`) VALUES (6, 'Desconhecido');
INSERT INTO `status` (`id`, `descricao`) VALUES (7, 'Intimado por Edital por Ninguém se dispôs');
INSERT INTO `status` (`id`, `descricao`) VALUES (8, 'Intimado por Edital por lugar incerto ou ignorado');
INSERT INTO `status` (`id`, `descricao`) VALUES (9, 'Intimado por Edital por Recusado');
INSERT INTO `status` (`id`, `descricao`) VALUES (10, 'Devolvido por insucifiencia de dados no título');


