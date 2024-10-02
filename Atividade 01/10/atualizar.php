<?php
    include("conexao.php");
    $gemail = $_GET["email"];

    if (!empty($_GET['email'])) 
    {
        $query = 'SELECT * FROM usuario WHERE email= '."'$gemail'";
        $retorno = $conexao -> query($query);
        $dados = $retorno -> fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($dados as $dado) 
        {
            $nome = $dado['nome'];
            $email = $dado['email'];
            $senha = $dado['senha'];
        }
    }
    else 
    {
        $nome = "";
        $email = "";
        $senha = "";
        $emailantigo = "";
    }
?>

<html>
<body>
    <form action = "update.php" method="post">
        Nome: <input type= 'text' name='nome' value="<?php echo $nome;?>"><br>
        E-mail: <input type= "text" name="email" value="<?php echo $email;?>"><br>
        Senha: <input type= "text" name="senha" value="<?php echo $senha;?>"><br>
        <input type="hidden" name="emailantigo" value="<?php echo $email;?>">
        <input type="submit" value="Inserir">
    </form>
</body>
</html>