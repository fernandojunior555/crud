CREATE TABLE tarefa(
    codigo INT NOT NULL UNIQUE AUTO_INCREMENT,
    tarefa VARCHAR(100),
    data data,
    descricao varchar(150),
    PRIMARY KEY (codigo)
);

INSERT INTO tarefa (tarefa, data, descricao) VALUES 
('Matematica', '28-11-2022', 'pagina 205'),
('Portugues', '30-11-2022', 'pagina 98'),
('Quimica', '22-11-2022', 'pagina 45'),
('Geografia', '21-11-2022', 'pagina 76'),

  create table usuario(
  `codigo` INT NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(45) NULL,
	`user` VARCHAR(45) NULL,
	`pass` VARCHAR(45) NULL,
	`email` VARCHAR(45) NULL,
	`tipoUsuario_codigo` INT NOT NULL,
	PRIMARY KEY (`codigo`),
	INDEX `fk_usuario_tipoUsuario_idx` (`tipoUsuario_codigo` ASC),
	CONSTRAINT `fk_usuario_tipoUsuario`
	FOREIGN KEY (`tipoUsuario_codigo`)
	REFERENCES `tipoUsuario` (`codigo`)
	ON DELETE NO ACTION
	ON UPDATE NO ACTION)



CREATE TABLE tipousuario(
    codigo INT NOT NULL UNIQUE AUTO_INCREMENT,
	descricao VARCHAR(45) NOT NULL,
    PRIMARY KEY (codigo)
);



