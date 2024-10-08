<?php
include("conexao.php");

// Verifica se o formulário foi inserido
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $filme = $_POST['filme'];
    $genero = $_POST['genero'];
    $indicacao = $_POST['indicacao'];
    $lancamento = $_POST['lancamento'];
    $duracao = $_POST['duracao'];
    $diretor = $_POST['diretor'];
    $produtora = $_POST['produtora'];
    $valor = $_POST['valor'];

    // inserir um novo produto na tabela 'produtos'
    $comando = "INSERT INTO produtos(filme, genero, indicacao, lancamento, duracao, diretor, produtora, valor)
                VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($comando);

    if ($stmt) {
        $stmt->bind_param("ssssssss", $filme, $genero, $indicacao, $lancamento, $duracao, $diretor, $produtora, $valor);

        // Executa a consulta
        $stmt->execute();

        // Redireciona para index.php depois de ter inserido
        header("Location: index.php");
        exit;
    } else {    
        die("Erro ao tentar inserir: " . $conn->error);
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Filme</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <!--formulario de cadastro-->
    <div class="inserir">
        <h1>Cadastro de Filme</h1>
      
        <form action="inserir.php" method="post"> 
            <label for="filme">Filme:</label>
            <input type="text" id='filme' name='filme' required>

            <label for="genero">Gênero:</label>
            <input type="text" id='genero' name='genero' required>

            <label for="indicacao">Indicação:</label>
            <input type="text" id='indicacao' name='indicacao' required>

            <label for="lancamento">Lançamento:</label>
            <input type="date" id='lancamento' name='lancamento' required>

            <label for="duracao">Duração:</label>
            <input type="time" id='duracao' name='duracao' required>

            <label for="diretor">Diretor:</label>
            <input type="text" id='diretor' name='diretor' required>

            <label for="produtora">Produtora:</label>
            <input type="text" id='produtora' name='produtora' required>

            <label for="valor">Valor:</label>
            <input type="text" id='valor' name='valor' required>

            
            <button type="submit">Cadastrar Filme</button>
        </form>
    </div>
</body>
</html>

