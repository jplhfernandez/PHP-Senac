
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Atualizar as informações do Filme</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php
    // Verificar se os dados foram enviados via POST
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $filme = $_POST['filme'];
        $genero = $_POST['genero'];
        $indicacao = $_POST['indicacao'];
        $lancamento = $_POST['lancamento'];
        $duracao = $_POST['duracao'];
        $diretor = $_POST['diretor'];
        $produtora = $_POST['produtora'];
        $valor = $_POST['valor'];
    } else {
        echo "Nenhum filme selecionado.";
        exit;
    }
    ?>

    <!-- Formulário de atualização -->
    <div class="Atualizar">
        <h1>Atualizar as informações do Filme</h1>
      
        <form action="processar_atualizacao.php" method="post"> 
            <!-- Campo oculto para enviar o ID do filme -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="filme">Filme:</label>
            <input type="text" id='filme' name='filme' value="<?php echo $filme; ?>" required>

            <label for="genero">Gênero:</label>
            <input type="text" id='genero' name='genero' value="<?php echo $genero; ?>" required>

            <label for="indicacao">Indicação:</label>
            <input type="text" id='indicacao' name='indicacao' value="<?php echo $indicacao; ?>" required>

            <label for="lancamento">Lançamento:</label>
            <input type="date" id='lancamento' name='lancamento' value="<?php echo $lancamento; ?>" required>

            <label for="duracao">Duração:</label>
            <input type="time" id='duracao' name='duracao' value="<?php echo $duracao; ?>" required>

            <label for="diretor">Diretor:</label>
            <input type="text" id='diretor' name='diretor' value="<?php echo $diretor; ?>" required>

            <label for="produtora">Produtora:</label>
            <input type="text" id='produtora' name='produtora' value="<?php echo $produtora; ?>" required>

            <label for="valor">Valor:</label>
            <input type="text" id='valor' name='valor' value="<?php echo $valor; ?>" required>

            <button type="submit">Atualizar Filme</button>
        </form>
    </div>
</body>
</html>
