CREATE DATABASE livraria DEFAULT CHARACTER SET utf8;
USE livraria;

CREATE TABLE livros (
    nome VARCHAR(255) NOT NULL,
    autor VARCHAR(255),
    quantidade INT NOT NULL,
    preco VARCHAR(255) NOT NULL,
    flag TINYINT(1) NULL DEFAULT 0,
    data          DATE NOT NULL,
PRIMARY KEY (nome));

insert into livros() values("O poder do hábito","Charles Duhigg",408,54.6,1,"2024-10-03");
insert into livros() values("Pai Rico, pai Pobre","Robert T. Kiyosaki",336,46.67,1,"2023-09-28");