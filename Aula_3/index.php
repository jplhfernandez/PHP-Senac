<html>
<body>    
    <?php
        include("conexao.php");
        if(!empty($_POST['id']))
        {
            $sql = "DELETE FROM contas WHERE id = ".$_POST['id'];
            $conn -> query($sql);
        }

        if(!empty($_POST['id']))
        {
            $sql = "UPDATE FROM contas WHERE id = ".$_POST['id'];
            $conn -> query($sql);
        }
    
        if (!empty($_POST['nome']))
        {
            $nome = $_POST["nome"];
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
            $saldo = $_POST["saldo"];
    
            $sql = "INSERT INTO contas (nome, usuario, senha, saldo)
                VALUE ('$nome', '$usuario', '$senha', '$saldo')";
            $conn -> query($sql);
        }
    
        $sql = "SELECT id, nome, usuario, saldo FROM contas";
        $dados = $conn ->query($sql);    
    
        echo "<table> <tr> <th> ID </th> <th> Nome </th> <th> Usuario </th> <th> saldo </th> </tr>";
        while ($row = $dados->fetch_assoc()) 
        {
            echo"<tr> <td>".$row["id"]."</td> <td>".$row["nome"]."</td> <td>".$row["usuario"].
            "</td> <td>".$row["saldo"]."</td> <td>
            <form action = 'index.php' method = 'POST' >
                <input type = 'hidden' name = 'id' value = ' ".$row["id"]."' >
                <input type = 'submit' value = 'Deletar' >
            </form>
            </tr>";
        }
    ?>
 
<form action="index.php" method="POST">
    Nome: <input type="text" name="nome"><br>
    Usuario: <input type="text" name="usuario"><br>
    Senha: <input type="text" name="senha"><br>
    Saldo: <input type="text" name="saldo"><br>
    <input type="submit" value="Inserir">
</form>
 
</body>
</html>
 