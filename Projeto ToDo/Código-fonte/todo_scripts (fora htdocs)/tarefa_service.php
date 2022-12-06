<?php

    //CRUD PARA TAREFA
    //CRUD = CREATE, READ, UPDATE, DELETE

    class TarefaService {
        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexao, Tarefa $tarefa) {
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
        }

        public function listarTarefasPendentes() {
            $query = '
                SELECT t.id, t.tarefa, t.data_cadastro, s.status
                    FROM tb_tarefas as t
                    LEFT JOIN tb_status as s on (t.id_status = s.id)
                WHERE t.id_status = :id_status
                ORDER BY t.data_cadastro';
            
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function inserirTarefa() {
            $query = 'INSERT INTO tb_tarefas(tarefa) VALUE(:tarefa)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->execute();
        }

        public function listarTodasTarefas() {
            $query = '
                SELECT t.id, t.tarefa, t.data_cadastro, s.status
                    FROM tb_tarefas as t
                    LEFT JOIN tb_status as s on (t.id_status = s.id)
                ORDER BY s.id, t.data_cadastro';
            
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function concluirTarefa() {
            $query = 'UPDATE tb_tarefas SET id_status = ? WHERE id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('id_status'));
            $stmt->bindValue(2, $this->tarefa->__get('id'));
            $stmt->execute();
        }

        public function excluirTarefa() {
            $query = 'DELETE FROM tb_tarefas WHERE id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('id'));
            $stmt->execute();
        }

        public function atualizaTarefa() {
            $query = 'UPDATE tb_tarefas SET tarefa = ? WHERE id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('tarefa'));
            $stmt->bindValue(2, $this->tarefa->__get('id'));
            $stmt->execute();
        }
    }
