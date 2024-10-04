<?php
session_start();
require 'Usuario.php';
require 'Tarefa.php';

if (!Usuario::usuarioLogado()) {
    header('Location: index.php');
    exit;
}

$usuario = Usuario::usuarioLogado();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['criar'])) {
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $dataVencimento = $_POST['dataVencimento'];
        $status = $_POST['status'];
        $prioridade = $_POST['prioridade'];
        
        $tarefa = new Tarefa($titulo, $descricao, $dataVencimento, $status, $prioridade, $usuario['id']);
        $tarefa->criar();
    }
}

$tarefas = Tarefa::listar($usuario['id']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Tarefas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Painel de Tarefas</h1>
    <h2>Bem-vindo, <?php echo $usuario['nome']; ?>!</h2>
    
    <form method="POST">
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" required></textarea>
        </div>
        <div class="form-group">
            <label for="dataVencimento">Data de Vencimento</label>
            <input type="date" class="form-control" id="dataVencimento" name="dataVencimento" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="pendente">Pendente</option>
                <option value="em_andamento">Em Andamento</option>
                <option value="concluida">Concluída</option>
            </select>
        </div>
        <div class="form-group">
            <label for="prioridade">Prioridade</label>
            <select class="form-control" id="prioridade" name="prioridade">
                <option value="baixa">Baixa</option>
                <option value="media">Média</option>
                <option value="alta">Alta</option>
            </select>
        </div>
        <button type="submit" name="criar" class="btn btn-primary">Criar Tarefa</button>
    </form>

    <h2>Suas Tarefas</h2>
    <ul>
        <?php foreach ($tarefas as $tarefa): ?>
            <li><?php echo $tarefa['titulo']; ?> - <?php echo $tarefa['status']; ?></li>
        <?php endforeach; ?>
    </ul>

    <a href="logout.php">Logout</a>
</div>
</body>
</html>
