<?php

class Tarefa {
    public $id;
    public $titulo;
    public $descricao;
    public $dataVencimento;
    public $status;
    public $prioridade;
    public $usuarioId;

    public function __construct($titulo, $descricao, $dataVencimento, $status, $prioridade, $usuarioId) {
        $this->id = uniqid();
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->dataVencimento = $dataVencimento;
        $this->status = $status;
        $this->prioridade = $prioridade;
        $this->usuarioId = $usuarioId;
    }

    public function criar() {
        if (!isset($_SESSION['tarefas'])) {
            $_SESSION['tarefas'] = [];
        }
        $_SESSION['tarefas'][] = [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'descricao' => $this->descricao,
            'dataVencimento' => $this->dataVencimento,
            'status' => $this->status,
            'prioridade' => $this->prioridade,
            'usuarioId' => $this->usuarioId
        ];
    }

    public static function listar($usuarioId) {
        if (!isset($_SESSION['tarefas'])) return [];
        
        return array_filter($_SESSION['tarefas'], function($tarefa) use ($usuarioId) {
            return $tarefa['usuarioId'] === $usuarioId;
        });
    }

    public static function editar($tarefaId, $titulo, $descricao, $dataVencimento, $status, $prioridade) {
        foreach ($_SESSION['tarefas'] as &$tarefa) {
            if ($tarefa['id'] === $tarefaId) {
                $tarefa['titulo'] = $titulo;
                $tarefa['descricao'] = $descricao;
                $tarefa['dataVencimento'] = $dataVencimento;
                $tarefa['status'] = $status;
                $tarefa['prioridade'] = $prioridade;
                break;
            }
        }
    }

    public static function excluir($tarefaId) {
        $_SESSION['tarefas'] = array_filter($_SESSION['tarefas'], function($tarefa) use ($tarefaId) {
            return $tarefa['id'] !== $tarefaId;
        });
    }
}
