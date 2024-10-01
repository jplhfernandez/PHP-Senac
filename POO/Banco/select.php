<?php

$dsn = 'mysql:host=localhost;dbname=locadora';
$user = 'root';
$pass = '';

$conexao = new PDO($dsn, $user, $pass);

$conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);