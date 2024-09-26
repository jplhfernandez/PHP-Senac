<?php
    $servername = "localhost"; //Nome do Servidor.
    $username = "root"; //Nome do Usuário.
    $password = ""; //Senha do Usuário.
    $dbname = "banco"; //Nome do Banco de Dados.

    //Criar Conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
        // $conn é um objeto de conexão.

    //Checar Conexão
    if ($conn->connect_error)
    {
        die("Connection failed: ".$conn -> connect_error);
    }
    echo "Conectado com Sucesso.";
        //As mensagens não são necessárias para o usuário final. Neste caso, elas estão sendo usuadas para facilitar no processo de programação.
    echo "<br>";
    ?>