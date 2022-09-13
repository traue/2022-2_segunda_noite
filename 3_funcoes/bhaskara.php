<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhaskara</title>
</head>

<body>
    <?php

    //vamos reslver a equação: x2 - 3x - 54 = 0
    //lembrem-se que o formato da eq. quadrdrádica é ax2 + bx + c = 0
    $a = 1;
    $b = -3;
    $c = -54;


    function calculaDelta($a, $b, $c) {
        //delta = b2 - 4ac;
        $delta = ($b * $b) - 4 * $a * $c;
        return $delta;
    }
    
    function calculaX1($delta, $a, $b) {
        //x1 = [-b + RAIZ(delta)] / (2 * a)
        $x1 = ((-1 * $b) + sqrt($delta)) / (2 * $a);
        return $x1;
        //sqrt = square root = raiz quadrada
    }

    function calculaX2($delta, $a, $b) {
        //x2 = [-b - RAIZ(delta)] / (2 * a)
        $x2 = ((-1 * $b) - sqrt($delta)) / (2 * $a);
        return $x2;
    }

    ?>

    <h1>Calculadora de Bhaskara</h1>
    <hr>
    <h2>Equação: <?= "$a x² + $b x + $c = 0" ?></h2>
    <h3>Delta = <?= calculaDelta($a, $b, $c) ?></h3>
    <?php
        if (calculaDelta($a, $b, $c) < 0) {
            echo "<h3>Essa equação não possui raízes reais!</h3>";
        } else {
            echo "<h3>X1 = " . calculaX1(calculaDelta($a, $b, $c), $a, $b) . "</h3>";
            echo "<h3>X2 = " . calculaX2(calculaDelta($a, $b, $c), $a, $b) . "</h3>";
        }
    ?>
</body>

</html>