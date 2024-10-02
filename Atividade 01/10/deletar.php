<?php
    include('conexao.php');
    
    $email = $_GET["email"];
    $delete = 
        "DELETE FROM usuario WHERE email = '$email'";   
    $retorno = $conexao -> exec($delete);
    
    header("location: exibir.php");
?>