<?php

require_once("../init.php"); // Importa o arquivo init.php, que provavelmente contém configurações iniciais e constantes, como BD_SERVIDOR, BD_USUARIO, etc.

class Banco // Define a classe Banco, que encapsula a lógica de interação com o banco de dados.
{
    protected $mysqli; // Declara uma propriedade protegida $mysqli, que armazenará a conexão com o banco de dados.

    public function __construct(){ // Construtor da classe Banco, chamado ao instanciar um objeto da classe.
        $this -> conexao(); // Chama o método de conexão para estabelecer a conexão com o banco de dados.
    }

    private function conexao(){ // Método privado que cria a conexão com o banco de dados.
        $this -> mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO); // Inicializa a conexão usando as constantes definidas em init.php.
    }

    public function setLivro($nome, $autor, $quantidade, $preco, $data){ // Método público para inserir um novo livro no banco de dados.
        // Prepara uma instrução SQL para inserir os dados do livro na tabela "livros".
        $stmt = $this -> mysqli -> prepare("INSERT INTO livros (`nome`, `autor`, `quantidade`, `preco`, `data`) VALUES (?,?,?,?,?)");
        // Vincula os parâmetros à instrução SQL.
        $stmt -> bind_param("sssss",$nome,$autor,$quantidade,$preco,$data);
        // Executa a instrução SQL e retorna true se a execução for bem-sucedida, caso contrário, retorna false.
        if ($stmt->execute()==TRUE) {
            return true;
        }
        else {
            return false;
        }
    }

    public function getLivro(){ // Método público para recuperar todos os livros do banco de dados.
        $result = $this -> mysqli -> query("SELECT * FROM livros"); // Executa uma consulta SQL para selecionar todos os registros da tabela "livros".
        while ($row = $result -> fetch_array(MYSQLI_ASSOC)) { // Itera sobre os resultados da consulta.
            $array[] = $row; // Armazena cada linha em um array.
        }
        return $array; // Retorna o array contendo todos os livros.
    }

    public function pesquisaLivro($id){ // Método público para buscar um livro pelo nome.
        $result = $this -> mysqli -> query("SELECT * FROM livros WHERE nome = '$id'"); // Executa uma consulta SQL para selecionar o livro com o nome correspondente.
        return $result -> fetch_array(MYSQLI_ASSOC); // Retorna a primeira linha do resultado como um array associativo.
    }

    public function deleteLivro($id){ // Método público para deletar um livro pelo nome.
        // Executa uma consulta SQL para deletar o livro com o nome correspondente e retorna true se a execução for bem-sucedida, caso contrário, retorna false.
        if ($this -> mysqli -> query("DELETE FROM `livros` WHERE `nome` = '".$id."';")== TRUE) {
            return true;
        }
        else {
            return false;
        }
    }

    public function updateLivro($nome, $autor, $quantidade, $preco, $flag, $data, $id){ // Método público para atualizar os dados de um livro.
        // Prepara uma instrução SQL para atualizar os dados do livro.
        $stmt = $this->mysqli->prepare("UPDATE `livros` SET `nome` = ?, `autor` = ?, `quantidade`=?, `preco`=?, `flag`=?, `data`=? WHERE `nome` =?");
        // Vincula os parâmetros à instrução SQL.
        $stmt -> bind_param("sssssss" ,$nome, $autor, $quantidade, $preco, $flag, $data, $id);
        // Executa a instrução SQL e retorna true se a execução for bem-sucedida, caso contrário, retorna false.
        if ($stmt->execute()==TRUE) {
            return true;
        }
        else{
            return false;
        }
    }
}
?>