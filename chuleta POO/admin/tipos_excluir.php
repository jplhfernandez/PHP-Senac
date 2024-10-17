<?php 
include 'acesso_com.php';
include '../conn/connect.php';

$id = $_GET['id'];
$excluirTipo = "DELETE FROM tipos WHERE id=$id";
$resultado = $conn->query($excluirTipo);
header ("location: tipos_lista.php");
?>
