<?php

include('conexao.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$comando = "CREATE TABLE IF NOT EXISTS usuario(
    nome varchar(50), 
    email varchar(100), 
    senha varchar(20)
);

INSERT INTO usuario(nome, email, senha)
VALUES('$nome', '$email', '$senha')";

$retorno = $conexao -> exec($comando);

header("location: exibir.php");