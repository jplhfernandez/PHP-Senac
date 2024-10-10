<?php
    session_name('chulettaaa');
    if (!isset($_SESSION)) {
        session_start();
    }
    //segurança digital

    //verificação do usuario se ele esta logado na sessao
    if (!isset($_SESSION['login_usuario'])) {
        // se não existir, redirecionaremos a sessão por segurança
        header('location: login.php'); // redirecionamento
        exit;
    }

    $nome_da_sessao = session_name();
    if (!isset($_SESSION['nome_da_sessao']) or ($_SESSION['nome_da_sessao']!=$nome_da_sessao))
    {
        session_destroy();
        header('location: login.php');
    }
?>