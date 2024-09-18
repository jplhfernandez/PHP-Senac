<?php
    $email = "joao";
    $senha = "123";
    
    if ($_POST ["email"] == $email and $_POST["senha"] == $senha)
    {
        header("location: boasvindas.php");
    }
    else
    {
        echo "<script>alert('ERRADO');</script>";   
    }
?>