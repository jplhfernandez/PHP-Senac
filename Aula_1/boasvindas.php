<?php
    echo "######## \n BEM VINDO \n ########"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>                     
<body>
    <form action = "produto.php" method="POST">
        Produto: <input type= "text" name="produto"><br>
        Valor: <input type= "text" name="valor"><br>
        <input type="submit" value="Calcular">
    </form>
    <pre>
    <?php
        session_start();
        if (isset($_SESSION['produtos'])){
            echo $_SESSION['produtos'];
        }
        echo "<br>";
        if (isset($_SESSION['produtos'])){
            echo $_SESSION['total'];
        }
    ?>
</body>
</html>
