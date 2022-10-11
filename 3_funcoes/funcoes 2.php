<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções em PHP</title>
</head>
<body>
    <?php

        //é um função simples, ou seja, que apenas executa uma tarefa
        function darBoasVindas() {
            echo "Olá, seja muito bem-vinde!<br>";
        }

        function darBoasVindas2($nome) {
            return "<br>Olá " . $nome . ", seja bem-vinde!<br>";
        }

        function calculaAreaTriangulo($base, $altura) {
            $area = ($base * $altura) / 2;
            return $area;
        }

        echo darBoasVindas();
        echo darBoasVindas();

        $areaTriangulo = calculaAreaTriangulo(4, 8);
        echo "A área do triângulo é " . $areaTriangulo;

        echo darBoasVindas2("Mia");
    ?>
</body>
</html>