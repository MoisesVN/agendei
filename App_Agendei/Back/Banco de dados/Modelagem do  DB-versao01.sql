CREATE TABLE `Pessoa` (
	`id_Pessoa` INT NOT NULL AUTO_INCREMENT,
	`CPF` varchar(11) NOT NULL UNIQUE,
	`Nome` varchar(50) NOT NULL,
	`Data_Nasc` DATE NOT NULL,
	`Telefone` varchar(12) NOT NULL,
	`Email` varchar(64) NOT NULL,
	PRIMARY KEY (`id_Pessoa`)
);

CREATE TABLE `Piscina` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`Nome` varchar(50) NOT NULL,
	`Localizacao` varchar(150) NOT NULL,
	`Capacidade` INT NOT NULL,
	`Regras` varchar(1000) NOT NULL,
	`Valor_Diaria` double NOT NULL,
	`Fotos_Local` blob NOT NULL,
	`id-Prestador` INT NOT NULL,
	`id_Horario` INT NOT NULL,
	`id_Descricao` INT NOT NULL,
	`id_FPagamento` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Horario_Funcionamento` (
	`id_Horario` INT NOT NULL AUTO_INCREMENT,
	`Hora_Entrada` TIME NOT NULL,
	`Hora_Saida` TIME NOT NULL,
	`Segunda` BOOLEAN NOT NULL DEFAULT false,
	`Terca` BOOLEAN NOT NULL DEFAULT false,
	`Quarta` BOOLEAN NOT NULL DEFAULT false,
	`Quinta` BOOLEAN NOT NULL DEFAULT false,
	`Sexta` BOOLEAN NOT NULL DEFAULT false,
	`Sabado` BOOLEAN NOT NULL DEFAULT false,
	`Domingo` BOOLEAN NOT NULL DEFAULT false,
	`Feriado` BOOLEAN NOT NULL DEFAULT false,
	PRIMARY KEY (`id_Horario`)
);

CREATE TABLE `DescricaoLocal` (
	`id_Descricao` INT NOT NULL AUTO_INCREMENT UNIQUE,
	`cadeira` INT NOT NULL,
	`mesas` INT NOT NULL,
	`churrasqueira` INT NOT NULL,
	`Fogao` INT NOT NULL,
	`banheiro` INT NOT NULL,
	`wifi` BOOLEAN NOT NULL DEFAULT false,
	PRIMARY KEY (`id_Descricao`)
);

CREATE TABLE `UsuarioTomador` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`login` varchar(25) NOT NULL,
	`senha` varchar(20) NOT NULL,
	`id_Pessoa` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `UsuarioPrestador` (
	`id_Prestador` INT NOT NULL AUTO_INCREMENT,
	`login` varchar(25) NOT NULL,
	`senha` varchar(20) NOT NULL,
	`id_Pessoa` INT NOT NULL,
	`id_Piscina` INT NOT NULL,
	PRIMARY KEY (`id_Prestador`)
);

CREATE TABLE `FormasPagamento` (
	`id_FPagamento` INT NOT NULL AUTO_INCREMENT,
	`Especie` double NOT NULL,
	`PIX` double NOT NULL,
	`Cartao` double NOT NULL,
	PRIMARY KEY (`id_FPagamento`,`Especie`,`PIX`,`Cartao`)
);

CREATE TABLE `Avaliacao` (
	`id_Avaliacao` INT NOT NULL AUTO_INCREMENT,
	`id_Piscina` INT NOT NULL,
	`id_Tomador` INT NOT NULL,
	`nota` double(5.0) NOT NULL,
	`comentario` varchar(255) NOT NULL,
	PRIMARY KEY (`id_Avaliacao`)
);

CREATE TABLE `ResevarPiscina` (
	`id_Resevar` INT NOT NULL AUTO_INCREMENT,
	`id_Piscina` INT NOT NULL,
	`id_Tomador` INT NOT NULL,
	PRIMARY KEY (`id_Resevar`)
);

ALTER TABLE `Piscina` ADD CONSTRAINT `Piscina_fk0` FOREIGN KEY (`id-Prestador`) REFERENCES `UsuarioPrestador`(`id_Prestador`);

ALTER TABLE `Piscina` ADD CONSTRAINT `Piscina_fk1` FOREIGN KEY (`id_Horario`) REFERENCES `Horario_Funcionamento`(`id_Horario`);

ALTER TABLE `Piscina` ADD CONSTRAINT `Piscina_fk2` FOREIGN KEY (`id_Descricao`) REFERENCES `DescricaoLocal`(`id_Descricao`);

ALTER TABLE `Piscina` ADD CONSTRAINT `Piscina_fk3` FOREIGN KEY (`id_FPagamento`) REFERENCES `FormasPagamento`(`id_FPagamento`);

ALTER TABLE `UsuarioTomador` ADD CONSTRAINT `UsuarioTomador_fk0` FOREIGN KEY (`id_Pessoa`) REFERENCES `Pessoa`(`id_Pessoa`);

ALTER TABLE `UsuarioPrestador` ADD CONSTRAINT `UsuarioPrestador_fk0` FOREIGN KEY (`id_Pessoa`) REFERENCES `Pessoa`(`id_Pessoa`);

ALTER TABLE `UsuarioPrestador` ADD CONSTRAINT `UsuarioPrestador_fk1` FOREIGN KEY (`id_Piscina`) REFERENCES `Piscina`(`id`);

ALTER TABLE `Avaliacao` ADD CONSTRAINT `Avaliacao_fk0` FOREIGN KEY (`id_Piscina`) REFERENCES `Piscina`(`id`);

ALTER TABLE `Avaliacao` ADD CONSTRAINT `Avaliacao_fk1` FOREIGN KEY (`id_Tomador`) REFERENCES `UsuarioTomador`(`id`);

ALTER TABLE `ResevarPiscina` ADD CONSTRAINT `ResevarPiscina_fk0` FOREIGN KEY (`id_Piscina`) REFERENCES `Piscina`(`id`);

ALTER TABLE `ResevarPiscina` ADD CONSTRAINT `ResevarPiscina_fk1` FOREIGN KEY (`id_Tomador`) REFERENCES `UsuarioTomador`(`id`);










