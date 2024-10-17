<?php 
include 'acesso_com.php';
include '../conn/connect.php';

$id = $_GET['id'];
$excluirUser = "DELETE FROM tipos WHERE id=$id";
$resultado = $conn->query($excluirUser);
header ("location: usuario_lista.php");
?>
