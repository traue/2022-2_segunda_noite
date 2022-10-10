<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora da Viagem</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
        //obtenção dos dados do formulário
        $consumo = $_POST["consumo"];
        $distancia = $_POST["distancia"];
        $vCombustivel = $_POST["combustivel"];
        $vPedagio = $_POST["pedagio"];

        //cálculos necessários
        $qtdLitros = $distancia / $consumo;
        $totalCombultivel = $qtdLitros * $vCombustivel;
        $totalViagem = $totalCombultivel + $vPedagio;
    ?>
    <h1>Calculadora da Viagem</h1>
    <hr>
    <div class="boxprincipal">
        <h3>Resultados</h3>
        <h4>Dados informados</h4>
        <ul>
            <li>Consumo: <b><?= str_replace('.', ',', $consumo) ?> </b>Km/L</li>
            <li>Distância: <b><?= $distancia ?></b> Km</li>
            <li>Valor do combutível por litro:<b> R$ <?= str_replace('.', ',', $vCombustivel) ?></b></li>
            <li>Valor total gasto com pedágios: <b>R$ <?= str_replace('.', ',', $vPedagio) ?></b></li>
        </ul>
        <hr>
        <h4>Resultados</h4>
        <ul>
            <li>Qtd. de Litros usados: <b><?= str_replace('.', ',', round($qtdLitros, 2)) ?></b> L</li>
            <li>Total gasto com combustível: <b>R$ <?= str_replace('.', ',', round($totalCombultivel, 2)) ?> </b></li>
        </ul>
        <hr>
        <div>
            <h3>Total da viagem</h3>
            <h2>R$ <?= str_replace('.', ',', round($totalViagem, 2)) ?></h2>
        </div>
    </div>
    <div class="linkCalcularNovamente">
        <a href="./">Calcular novamente</a>
    </div>
</body>

</html>