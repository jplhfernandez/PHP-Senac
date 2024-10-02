<?php
    include('conexao.php');

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $emailantigo = $_POST["emailantigo"];

    $update = "UPDATE usuario set
        nome = '$nome',
        email = '$email',
        senha = '$senha'
        WHERE email = '$emailantigo'";
        
    $retorno = $conexao -> exec($update);
    
    header("location: exibir.php");
?>