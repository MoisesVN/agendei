CREATE TABLE `Usuario` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`email` varchar NOT NULL,
	`senha` varchar NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Piscina` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`nome` varchar NOT NULL,
	`endereco` varchar NOT NULL,
	`aluguel` FLOAT NOT NULL,
	`descricao` varchar NOT NULL,
	`Hfuncionamento` varchar NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `Reservar` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`id_piscina` INT NOT NULL,
	`id_pessoa` INT NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `Reservar` ADD CONSTRAINT `Reservar_fk0` FOREIGN KEY (`id_piscina`) REFERENCES `Piscina`(`id`);

ALTER TABLE `Reservar` ADD CONSTRAINT `Reservar_fk1` FOREIGN KEY (`id_pessoa`) REFERENCES `Usuario`(`id`);




