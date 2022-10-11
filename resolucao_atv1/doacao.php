<?php
    $peso = $_POST["peso"];
    $idade = $_POST["idade"];
    $apto = true;
    
    if ($idade < 18 || $idade > 69) {
        echo '<br>Inapto por conta da idade!';
        $apto = false;
    }

    
    if ($peso <= 50) {
        echo '<br>Inapto por conta do peso!';
        $apto = false;
    }

    if ($apto) {
        echo '<br>Pode doar';
    }
?>