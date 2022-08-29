<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brincando com variáveis em PHP</title>
</head>
<body>
    <h1>Brincando com variáveis em PHP</h1>
    <?php
        //declaração de variáveis em PHP
        //Primeiro ponto: PHP é fracamente tipado

        $nome = "Thiago G. Traue"; //é uma variável do tipo "String"
        $idade = 35; //variável do tipo "inteira"
        $altura = 1.83; //variável do tipo "real"
        $time = "Bragantino"; //"String"
        $fumante = false; //variável booleana (V/F) = True / False
    ?>
    <h1>Dados informados:</h1>
    <br>
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?></p>
    <p>Time que torce: <?= $time ?></p>
    <p>Altura: <?= $altura ?></p>
    
</body>
</html>