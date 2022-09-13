<?php

    $lista_compras = ["Banana", "Pepino", "Melões", "Leite", "Beringela", "Carne", "Banana"];

    echo "<pre>";
    var_dump($lista_compras);
    echo "</pre>";

    //uma forma de buscar em arrays:
    $encontrou = in_array("Banana", $lista_compras); //Cuidado! A busca é "Case sensitive!"
    //retornará true se encontrar ou false se não encontrar

    var_dump($encontrou);

    echo "<hr>";

    $encontrou = array_search("Banana", $lista_compras);
    //neste caso, retorna o índice onde encontrou o valor ou false se não encontrar
    var_dump($encontrou);

    echo "<hr>";

    $lista = [
        "pessoas" => ["Thiago", "Thalsson", "Lucas", "Edson", "Gabriel", "Victoria"],
        "compras" => $lista_compras
    ];

    echo "<pre>";
    var_dump($lista);
    echo "</pre>";


    $encontrou = array_search("Leite", $lista["compras"]);
    echo $encontrou;
?>