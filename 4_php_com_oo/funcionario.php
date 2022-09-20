<?php

    //Nome da classe
    class Funcionario {

        //características -> Variáveis (ou campos, atributos ou propriedades)
        private $nome;
        private $idade;
        private $cargo;
        private $salario;
        private $numDependentes;
        private $email;
        //....

        //métodos modificadores de acesso
        //sets e gets (tó / medá)

        //function getNome() {
        //    return $this->nome;
        //}

        //function setNome($nome) {
        //    $this->nome = $nome;
        //}
                     
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }

        //comportamentos:
        function trabalhar() {
            echo "Estou trabalhando...<br>";
        }

        function demitir() {
            $this->__set("salario", 0);
            echo "<br>" . $this->__get("nome") . " foi desligado!";
        }
    }

    // leitura que fazemos disso é: "x" é instância de funcionário
    $x = new Funcionario();

    //alteração dos atributos através do "set"
    $x->__set("nome", "Thiago G. Traue");
    $x->__set("idade", 35);
    $x->__set("cargo", "Professor");
    $x->__set("salario", 1000);
    $x->__set("numDependentes", 90);
    $x->__set("email", "thiago.traue@uni9.pro.br");
    
    //exemplo, exibindo os dados através do "get":
    echo "O nome do funcinário é " . $x->__get("nome") . "<br>";
    echo "O funcinário possui " . $x->__get("idade") . " anos. <br>";
    echo "O funcionário ocupa o cargo de " . $x->__get("cargo") . "<br>";
    echo "O funcinário recebe um salário de R$" . $x->__get("salario") . "<br>";

    if($x->__get("numDependentes") == 0) {
        echo "O funcionário não possui dependentes! <br>";
    } else {
        echo "O funcionário possui " . $x->__get("numDependentes") . " filhos <br>";
    }

    echo "O e-mail do funcionário é " . $x->__get("email") . "<br>";

    echo $x->trabalhar();

    echo $x->demitir();

    echo "Agora o salário do funcionário está: R$ " . $x->__get("salario") . "<br>";

?>