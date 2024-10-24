<?php
    class Destaque{
        private $conexao;
        private $resultado;
        
        public function __construct(){
            $this -> conexao = new mysqli('localhost', 'root', '', 'tincphpdb01');
            if ($this -> conexao -> connect_error) {
                die("Erro de conexão: ". $this -> conexao -> connect_error);
            }
        } 
    }

    
?>