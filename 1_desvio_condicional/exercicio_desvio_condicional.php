<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>

<body>
    <?php
    /*
        O execício funciona assim...
        se o usuário não tem cartão fidelidade, então 
        deve-se pagar o frete completo, ou seja, 
        o valor total = valor da compra + frete
        Se o usuário tem cartão fidelidade, ele pode ter
        um desconto no frete, com as seguintes regras:
        - Compra acima de 500 reais, frete 0
        - Compra acima de 200 reais, frete 10
        - Compra acima de 100 reais, frete 15
        
        Se não possui o cartão fidelidade, o frete custa 20

        utilize variáveis com valores fixos aqui

    */
        $cartao_fidelidade = true;
        $valor_compra = 250.69;
        $valor_frete = 20;

        if($cartao_fidelidade && $valor_compra >= 500) {
            $valor_frete = 0;
        } else if($cartao_fidelidade && $valor_compra >= 200) {
            $valor_frete = 10;
        } else if($cartao_fidelidade && $valor_compra >= 100) {
            $valor_frete = 15;
        }
    ?>

    <h2>Resumo do pedido:</h2>
    <!-- o ternário funciona assim: -->
    <!-- <condição> ? <valor se verdadeiro> : <valor se falso> -->
    <p><b>Possui cartão fidelidade?</b> <?= $cartao_fidelidade ? 'Sim' : 'Não' ?></p>
    <p><b>Valor dos produtos: </b> R$ <?= $valor_compra ?></p>
    <p><b>Valor do frete: </b> R$ <?= $valor_frete ?></p>
    <p><b>Valor total: </b>R$ <?= $valor_compra + $valor_frete ?></p>
</body>

</html>