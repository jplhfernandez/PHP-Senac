<?php

include('conexao.php');

$query = 'SELECT * FROM usuario';
$retorno = $conexao -> query($query);
$registros = $retorno -> fetchAll(PDO::FETCH_ASSOC);

foreach ($registros as $registro) {
    echo 'Nome: '.$registro['nome'];
    echo '<br>E-mail: '.$registro['email'];
    echo '<br>Senha: '.$registro['senha'];
    echo '<br><input type="image" href:"atualizar.php" "value="update" src="img/editar.png" width=2% >';
    echo '&nbsp&nbsp';
    echo '<img src = "img/deletar.png" width=2%>';
    echo '<hr width=30% align="left">';
}