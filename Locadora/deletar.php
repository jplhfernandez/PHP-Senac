<?php
include('conexao.php');

// Verifica se o ID foi passado via POST
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Prepara a consulta para deletar o filme
    $delete = "DELETE FROM produtos WHERE id = ?";
    $stmt = $conn->prepare($delete);

    if ($stmt) {
        // Liga o parâmetro
        $stmt->bind_param("i", $id);

        // Executa a consulta
        $stmt->execute();

        // Redireciona de volta para index.php
        header("Location: index.php");
        exit; // Para garantir que o script pare aqui
    } else {
        die("Erro ao tentar deletar: " . $conn->error);
    }

    $stmt->close();
}

$conn->close();
?>
