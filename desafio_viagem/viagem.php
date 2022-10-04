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
        $consumo = $_POST["consumo"];
        $distancia = $_POST["distancia"];
        $vCombustivel = $_POST["combustivel"];
        $vPedagio = $_POST["pedagio"];

        $qtdLitros = $distancia / $consumo;
        $totalCombultivel = $qtdLitros * $vCombustivel;
        $totalViagem = $totalCombultivel + $vPedagio;

        //paramos aqui... fizemos a parte de baixo apenas para ver se o cálculo está ok
        echo "Consumo: " . $consumo . '<br>';
        echo "Distância: " . $distancia . '<br>';
        echo "Valor combustível: " . $vCombustivel . '<br>';
        echo "Valor do pedágio: " . $vPedagio . '<br>';

        echo "-----<br>";

        echo "Qtd. de Litros usados: " . $qtdLitros . '<br>';
        echo "Total gasto com combustível: " . $totalCombultivel . '<br>';
        echo "Total da viagem: " . $totalViagem;
    ?>    
</body>
</html>