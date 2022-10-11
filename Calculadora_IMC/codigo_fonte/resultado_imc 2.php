<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    //obtenção dos dados para o cálculo
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    //calculo do IMC através de uma função
    $imc = calculaIMC($peso, $altura);

    //função que realiza o calculo do IMC
    //precisa de dois valores de entrada: peso e altura
    //ela retorna o imc já calculado
    function calculaIMC($peso, $altura)
    {
        $imc = $peso / ($altura * $altura);
        return $imc;
    }

    function classificaIMC($imc)
    {
        $classificacao = "";

        if ($imc < 16) {
            $classificacao = "Magreza grau III";
        } elseif ($imc >= 16 && $imc <= 16.9) {
            $classificacao = "Magreza grau II";
        } elseif ($imc > 16.9 && $imc <= 18.4) {
            $classificacao = "Magreza grau I";
        } elseif ($imc > 18.4 && $imc <= 24.9) {
            $classificacao = "Adequado";
        } elseif ($imc > 24.9 && $imc <= 29.9) {
            $classificacao = "Pré-obeso";
        } elseif ($imc > 29.9 && $imc <= 34.9) {
            $classificacao = "Obesidade grau I";
        } elseif ($imc > 34.9 && $imc <= 39.9) {
            $classificacao = "Obesidade grau II";
        } else {
            $classificacao = "Obesidade grau III";
        }

        return $classificacao;
    }

    //alternativa
    function classificaIMC2($imc)
    {
        $classificacao = "";

        if ($imc >= 40) {
            $classificacao = "Obesidade grau III";
        } elseif ($imc >= 35.5) {
            $classificacao = "Obesiade grau II";
        } elseif ($imc >= 30) {
            $classificacao = "Obesiade grau I";
        } //... (falta continuar)
    }

    //alternativa proposta pelo Alexandre:
    function classificacaoIMC_Alexandre($imc)
    {
        $classificacao = "";
        if ($imc < 16) {
            $classificacao = "Magreza grau III";
        } elseif ($imc <= 16.9) {
            $classificacao = "Magraza grau II";
        } elseif ($imc <= 18.4) {
            $classificacao = "Magraza grau I";
        } elseif ($imc <= 24.9) {
            $classificacao = "Adequado";
        } elseif ($imc <= 29.9) {
            $classificacao = "Pré-obeso";
        } elseif ($imc <= 34.9) {
            $classificacao = "Obesidade grau I";
        } elseif ($imc <= 39.9) {
            $classificacao = "Obesidade grau II";
        } else {
            $classificacao = "Obesidade grau III";
        }

        return $classificacao;
    }
    ?>
    <div class="cabecalho">
        <p>Calculadora IMC</p>
        <hr>
    </div>

    <div class="resultados">
        <p><b>Peso informado: </b><?= $peso ?>Kg</p>
        <p><b>Altura informada: </b><?= number_format($altura, 2, ",") ?>m</p>
        <hr>
        <p><b>IMC:</b> <?= number_format($imc, 2, ",") ?></p>
        <p><b>Classificação: </b><?= classificaIMC($imc) ?></p>
        <a href="./">Calcular novamente</a>
    </div>

</body>

</html>