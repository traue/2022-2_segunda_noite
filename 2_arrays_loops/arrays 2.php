<?php

    //array sequencial:
    $lista_compras = array("Ovos", "Bananas", "Chocolate", "Farinha");
    $lista = ["Frutas", 3, "Arroz", true, 2131231.123, 213];

    echo "<pre>";
    var_dump($lista_compras); //apenas para depuração
    echo "</pre>";

    echo "<hr>"; //linha horizontal

    echo "<pre>";
    var_dump($lista); 
    echo "</pre>";

    echo "<hr>";

    echo "<pre>";
    var_dump($lista_compras[2]);
    echo "</pre>";

    echo "<hr>";

    //arrays associativos
    $lista_mercado = [
        "Fruta" => "Manga",
        "PrecisaCigarro" => false,
        "MarcaLeite" => "Ninho",
        "QtdPaes" => 3
    ];

    echo "<pre>";
    var_dump($lista_mercado["MarcaLeite"]);
    echo "</pre>";

?>