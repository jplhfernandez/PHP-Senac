<?php

class Comentario {
    public $id;
    public $tarefaId;
    public $usuarioId;
    public $texto;
    public $data;

    public function __construct($tarefaId, $usuarioId, $texto) {
        $this->id = uniqid();
        $this->tarefaId = $tarefaId;
        $this->usuarioId = $usuarioId;
        $this->texto = $texto;
        $this->data = date('Y-m-d H:i:s');
    }

    public function adicionar() {
        if (!isset($_SESSION['comentarios'])) {
            $_SESSION['comentarios'] = [];
        }
        $_SESSION['comentarios'][] = [
            'id' => $this->id,
            'tarefaId' => $this->tarefaId,
            'usuarioId' => $this->usuarioId,
            'texto' => $this->texto,
            'data' => $this->data
        ];
    }

    public static function listarPorTarefa($tarefaId) {
        if (!isset($_SESSION['comentarios'])) return [];
        
        return array_filter($_SESSION['comentarios'], function($comentario) use ($tarefaId) {
            return $comentario['tarefaId'] === $tarefaId;
        });
    }
}
