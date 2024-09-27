<html>
<body>    
    <?php
        include("conexao.php");
        
        $cnome = "";
        $cusuario  = "";
        $csaldo = "";
        $csenha = "";
        
        if(!empty($_POST['selecionarcliente'])=="Atualizar")
        {
            $sql = "SELECT * FROM contas WHERE id=".$_POST['id'];
            $dado = $conn -> query($sql);
            if (!empty($dado)) 
            {
                while ($cliente = $dado -> fetch_assoc()) 
                {
                    $cnome = $cliente["nome"];
                    $cusuario  = $cliente["usuario"];
                    $csaldo = $cliente["saldo"];
                    $csenha = $cliente["senha"];
                }
            }
        }
        
        if(!empty($_POST['id']))
        {
            $sql = "DELETE FROM contas WHERE id = ".$_POST['id'];
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
                <input type = 'submit' name= 'selecionarcliente' value = 'Atualizar' >
                <input type = 'submit' name= 'deletarcliente' value = 'Deletar' >
            </form>
            </tr>";
        }
    ?>
 
<form action="index.php" method="POST">
    Nome: <input type="text" name="nome" value ="<?php echo $cnome;?>"><br>
    Usuario: <input type="text" name="usuario" value ="<?php echo $cusuario;?>"><br>
    Senha: <input type="text" name="senha" value ="<?php echo $csenha;?>"><br>
    Saldo: <input type="text" name="saldo" value ="<?php echo $csaldo;?>"><br>
    <input type = 'hidden' name = 'id' value = '".$id."' >
    <input type="submit" value="Inserir">
    <input type ="submit" value = 'Atualizar' >
</form>

</body>
</html>
 