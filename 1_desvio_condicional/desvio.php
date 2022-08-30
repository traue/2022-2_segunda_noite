<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desvio Condicional 1</title>
</head>

<body>
    <?php
    /*
      * O desvio condicional nada mais é do que a
      * alteração em runtime (em tempo de execução)
      * do fluxo normal de execução de nosso código, 
      * baseado em uma condição "booleana" (verdadeira ou 
      * falsa)
      * .... OU SEJA....
      *   SE (<CONDIÇÃO BOOLEANA>) {
      *      se der verdadeiro, este bloco será
      *      executado
      *  } SENÃO {
      *      se der falso, este bloco será executado
      *  }
      * 
      *  No PHP, fica assim: 
      *  if(<condição>) {
      *   //true 
      *  } else {
      *   //false
      *  }
      */

    /**
     * 
     *  Dentro da condição booleana, o PHP suporta
     * operações lógicas... as principais são:
     *     ==   -> Comparação entre valores. Ex: 2 == 2 -> Verdadeiro
     *     !=   -> Diferente. Ex: 2 != 5 -> Verdadeiro
     *     < ou >   -> menor ou maior. Ex: 2 > 5  -> Falso
     *     <= ou >=   => menor ou igual OU maior ou igual
     *     ===     -> Verifica se são iguais E do mesmo TIPO. Ex: "2" === 2  -> Falso
     *     !==     -> Verifica se são difernetes e de TIPOS diferentes
     *     ... vamos praticar...  
     */

    $x = 35; //x é uma variável do tipo "inteira"
    $y = "35"; //y é uma variável do tipo "textual"
    $z = 35;
    $fumante = false;

    //var_dump($fumante);

    if ($fumante) {
        echo 'É fumamte...!';
    } else {
        echo 'Não é fumante!';
    }

    echo '<br>';

    if ($x == $z) {
        echo 'Ah! X é igual a Z!<br>';
    } else {
        echo 'Puxa, X é diferente de Z!<br>';
    }

    if ($x != $z) {
        echo 'É.. são diferentes mesmo...!<br>';
    } else {
        echo 'Realmente são igais!<br>';
    }

    if ($x <= $z) {
        echo 'X é menor ou igual a Z!<br>';
    } else {
        echo 'X é maior do que Z!<br>';
    }

    //apesar de serem de tipos diferentes, o PHP no "==" compara apenas valores
    if ($x == $y) { 
        echo 'X é igual a Y!<br>';
    } else {
        echo 'X é diferente de Y!<br>';
    }

    //lembre-se que o "===" serve para comparar o valor E o tipo
    if ($x === $y) { 
        echo 'X é igual e do mesmo tipo que Y!<br>';
    } else {
        echo 'X é diferente de Y!<br>';
    }

    ?>
</body>

</html>