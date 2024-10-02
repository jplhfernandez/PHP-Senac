<?php

include('conexao.php');

$query = 'SELECT * FROM usuario';
$retorno = $conexao -> query($query);
$registros = $retorno -> fetchAll(PDO::FETCH_ASSOC);

foreach ($registros as $registro) 
{
    echo 'Nome: '.$registro['nome'];
    echo '<br>E-mail: '.$registro['email'];
    echo '<br>Senha: '.$registro['senha'];
    echo '<br><a href="atualizar.php?email='.$registro['email'];
    echo '"><img src="img/editar.png" width=2%></a>';
    echo '&nbsp&nbsp';
    //echo '<br><a href:"';
    echo '<img src = "img/deletar.png" width=2%></a>';
    echo '<hr width=30% align="left">';
}