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



