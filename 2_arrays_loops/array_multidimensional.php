<?php
    $lista_coisas = array();

    $lista_coisas["frutas"] = array("Banana", "Maçã", "Melancia");
    $lista_coisas["laticinios"] = array("Leite", "Requeijão", "Manteiga");
    $lista_coisas["guloseimas"] = array("Oreo", "Passatempo", "Fini");
    $lista_coisas["bebidas"] = array("Suco de Laranja", "Corote", "Amstel");
    $lista_coisas["massas"] = ["Cabelinho de anjo", "Spagethi"];
    $lista_coisas["massas"]["rapidas"] = array("Miojo", "KupNoodles");
    
    echo "<pre>";
    var_dump($lista_coisas);
    echo "</pre>";
    
    echo "<hr>";

    echo "<pre>";
    var_dump($lista_coisas["frutas"][0]);
    echo "</pre>";
?>