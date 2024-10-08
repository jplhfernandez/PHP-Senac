<?php 
include("conexao.php");

// Para depuração, exibe todos os erros
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $filme = $_POST['filme'];
    $genero = $_POST['genero'];
    $indicacao = $_POST['indicacao'];
    $lancamento = $_POST['lancamento'];
    $duracao = $_POST['duracao'];
    $diretor = $_POST['diretor'];
    $produtora = $_POST['produtora'];
    $valor = $_POST['valor'];

    // Atualizar o filme no banco de dados
    $sql = "UPDATE produtos SET filme = ?, genero = ?, indicacao = ?, lancamento = ?, duracao = ?, diretor = ?, produtora = ?, valor = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    // Liga os parâmetros ao SQL
    $stmt->bind_param('ssssssssi', $filme, $genero, $indicacao, $lancamento, $duracao, $diretor, $produtora, $valor, $id);

    // Executa a atualização
    if ($stmt->execute()) {
        // Redireciona para a página index.php
        header("Location: index.php");
        exit(); // Adiciona exit() após o header para garantir que o script seja interrompido
    } else {
        // Exibe erro na execução do statement
        echo "Erro ao atualizar o filme: " . $stmt->error;
    }

    // Fecha a consulta e a conexão
    $stmt->close();
    $conn->close();
} else {
    echo "Método de requisição inválido.";
}
?>

?>
