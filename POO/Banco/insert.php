<?php

include('conexao.php');

$comando = "CREATE TABLE IF NOT EXISTS usuario(
    nome varchar(50), 
    email varchar(100), 
    senha varchar(20)
);

INSERT INTO usuario(nome, email, senha)
VALUES('Luciana Lima Souza', 'lu.souz@gmail.com', '123456')";

$retorno = $conexao -> exec($comando);