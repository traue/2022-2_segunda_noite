<?php
    class Tarefa {
        private $id;
        private $tarefa;
        private $data_cadastro;
        private $id_status;

        //modificadores de acesso (encapsulamento de campos)
        public function __get($atributo) { //retornar o valor de algum atributo para quem chamar essa função
            return $this->$atributo;
        }

        public function __set($atributo, $valor) { //alterar o valor de um atributo para quem invocar essa função
            $this->$atributo = $valor;
        }
     }
?>