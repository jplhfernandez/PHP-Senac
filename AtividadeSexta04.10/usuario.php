<?php
session_start();

class Usuario {
    public $id;
    public $nome;
    public $email;
    private $senha;

    public function __construct($nome, $email, $senha) {
        $this->id = uniqid();
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function registrar() {
        if (!isset($_SESSION['usuarios'])) {
            $_SESSION['usuarios'] = [];
        }
        $_SESSION['usuarios'][] = [
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'senha' => $this->senha
        ];
        return true;
    }

    public static function login($email, $senha) {
        if (!isset($_SESSION['usuarios'])) return false;
        
        foreach ($_SESSION['usuarios'] as $usuario) {
            if ($usuario['email'] === $email && password_verify($senha, $usuario['senha'])) {
                $_SESSION['usuario_logado'] = $usuario;
                return true;
            }
        }
        return false;
    }

    public static function logout() {
        unset($_SESSION['usuario_logado']);
    }

    public static function usuarioLogado() {
        return $_SESSION['usuario_logado'] ?? null;
    }
}
