<?php
include("conexao.php");
// Consulta para selecionar os filmes
$sql = "SELECT * FROM produtos";
$dados = $conn->query($sql);

// Verificar se houve erro na consulta
if (!$dados) {
    die("Erro na consulta: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Filmes</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <h1 class="navbar-brand">Locação</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="inserir.php">Inserir</a>
      </div>
    </div>
  </div>
</nav>

<div class="lista">
    <h1>Lista de Filmes</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Filme</th>
                <th>Gênero</th>
                <th>Indicação</th>
                <th>Lançamento</th>
                <th>Duração</th>
                <th>Diretor</th>
                <th>Produtora</th>
                <th>Valor</th>
                <th>Ações</th> 
            </tr>
        </thead>
        <tbody>
            <?php
            if ($dados->num_rows > 0) {
                while ($filme = $dados->fetch_assoc()) {
                    echo "<tr>
                            <td>{$filme['id']}</td>
                            <td>{$filme['filme']}</td>
                            <td>{$filme['genero']}</td>
                            <td>{$filme['indicacao']}</td>
                            <td>{$filme['lancamento']}</td>
                            <td>{$filme['duracao']}</td>
                            <td>{$filme['diretor']}</td>
                            <td>{$filme['produtora']}</td>
                            <td>R$ {$filme['valor']}</td>
                            <td>
                                <div class='d-flex'>
                                    <form method='POST' action='atualizar.php' class='me-2'>
                                        <input type='hidden' name='id' value='{$filme['id']}'> 
                                        <input type='hidden' name='filme' value='{$filme['filme']}'> 
                                        <input type='hidden' name='genero' value='{$filme['genero']}'> 
                                        <input type='hidden' name='indicacao' value='{$filme['indicacao']}'> 
                                        <input type='hidden' name='lancamento' value='{$filme['lancamento']}'> 
                                        <input type='hidden' name='duracao' value='{$filme['duracao']}'> 
                                        <input type='hidden' name='diretor' value='{$filme['diretor']}'> 
                                        <input type='hidden' name='produtora' value='{$filme['produtora']}'> 
                                        <input type='hidden' name='valor' value='{$filme['valor']}'> 
                                        <input type='submit' name='atualizarfilme' value='Atualizar' class='btn btn-warning'>
                                    </form>
                                    <form method='POST' action='deletar.php'>
                                        <input type='hidden' name='id' value='{$filme['id']}'> 
                                        <input type='submit' name='deletarcliente' value='Deletar' class='btn btn-danger'>
                                    </form>
                                </div>
                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td>Nenhum filme encontrado.</td></tr>"; 
            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
