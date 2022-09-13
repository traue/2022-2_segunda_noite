<?php
    $a = null; //é o mesmo que $a;
    $b = "";
    $c = false; //true = 1; false = vazio

    if(is_null($a)) {
        echo "Sim, a variável A é nula!";
    } else {
        echo "Não, a variável A não é nula!";
    }

    echo "<hr>";

    if(is_null($b)) {
        echo "Sim, a variável B é nula!";
    } else {
        echo "Não, a variável B não é nula!";
    }

    echo "<hr>";

    if(is_null($c)) {
        echo "Sim, a variável C é nula!";
    } else {
        echo "Não, a variável C não é nula!";
    }
    echo "<br>";
    
    echo "Valor do C: " . $c;

    echo "<hr>";

    if (empty($a)) {
        echo "A variável A é vazia!";
    } else {
        echo "A variável A não é vazia!";
    }

    echo "<hr>";

    if (empty($b)) {
        echo "A variável B é vazia!";
    } else {
        echo "A variável B não é vazia!";
    }

    echo "<hr>";

    if (empty($c)) {
        echo "A variável C é vazia!";
    } else {
        echo "A variável C não é vazia!";
    }
?>