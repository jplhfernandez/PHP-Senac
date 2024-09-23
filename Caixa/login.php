<?php
    $email = "joao";
    $senha = "123";
    $saldo = 21312;
    $cont = 0;

    while ($cont < 3) {
    if ($_POST ["email"] == $email and $_POST["senha"] == $senha)
    {
        header("location: boasvindas.php");
    }
    else
    {   
        echo "<script>alert('ERRADO');</script>"; 
        header("location: index.php");
    }
    $cont++;  
    }
?>