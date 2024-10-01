<?php

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