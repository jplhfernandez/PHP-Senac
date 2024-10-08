<?php
require_once("../model/banco.php");
 
class listarController
{
    private $lista;
 
    public function __construct()
    {
        $this->lista = new Banco();
        $this->criarTabela();
    }
 
    private function criarTabela()
    {
        $dados = $this->lista -> getLivro();
        foreach ($dados as $dado)
        {
            echo "<tr>";
            echo "<th>".$dado['nome']."</th>";
            echo "<td>".$dado['autor']."</td>";
            echo "<td>".$dado['quantidade']."</td>";
            echo "<td> R$ ".number_format($dado['preco'],2,",",".")."</td>";
            echo "<td>".$dado['data']."</td>";
            echo "<td>".$dado['flag'] = ($dado['flag'] == "0")? "Desativado":"Atividade" ."</td>";
            echo "<td>
                <a class='btn btn-warning' href='editar.php?id=".$dado['nome']."'>
                    Editar
                </a>
                &nbsp&nbsp
                <a class='btn btn-danger' href='../controller/controllerDeletar.php?'id=".$dado['nome']."'>
                    Excluir
                </a></td>";            
            echo"</tr>";
        }
    }
}
 
?>