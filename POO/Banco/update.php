<?php

include('conexao.php');

$update = "UPDATE produtos set filme = 'A Volta Dos Que Não Foram: O Retorno' where id = 1";

$retorno = $conexao -> exec($update);
header("location: select.php");