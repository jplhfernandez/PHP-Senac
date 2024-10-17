<?php 
include 'acesso_com.php';
include '../conn/connect.php';

$id = $_GET['id'];
$excluirProduto = "DELETE FROM produtos WHERE id=$id";
$resultado = $conn->query($excluirProduto);
header ("location: produtos_lista.php");
?>
