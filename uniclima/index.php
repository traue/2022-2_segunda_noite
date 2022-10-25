<?php
    require '../../uniclima_scripts/weather_api.php';
    // echo '<pre>';
    // var_dump($clima);
    // echo '</pre>';
    // echo '<br>';
    //echo $clima->__get("temp");

    //todo
    //- corrigir o if els da var $clima
    //- explciar corretamente como este projeto está funcionando
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>UniClima</title>

    <style>
        .clima-card {
            padding: 40px 0 0 0;
            width: 400px;
            margin: 0 auto;
        }
    </style>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">UniClima</a>
            <form class="d-flex" method="post">
                <input type="search" class="form-control me-2" name="cidade" value="<?=$cidade?>" placeholder="Digite a cidade">
                <button class="btn btn-outline-info" type="submit">Buscar</button>
            </form>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="clima-card">
                <div class="card">
                    <div class="card-body">
                        <? if($clima != null) { ?>
                            <div class="text-center">
                                <img src="http://openweathermap.org/img/wn/<?=$clima->__get("icon")?>@2x.png">
                                <h4>Cidade: <?= ucwords($cidade) ?></h4>
                                <hr>
                                <div class="mt-4">
                                    <p><b>Agora: </b> <?= ucwords($clima->__get('description')) ?></p>
                                    <p><b>Temperatura: </b> <?= $clima->__get('temp') ?> ºC</p>
                                    <p><b>Mínima do momento: </b> <?= $clima->__get('temp_min') ?>ºC</p>
                                    <p><b>Máxima do momento: </b> <?= $clima->__get('temp_max') ?>ºC</p>
                                    <p><b>Sensação térmica: </b> <?= $clima->__get('feels_like') ?>ºC</p>
                                    <p><b>Umidade relativa do ar: </b> <?= $clima->__get('humidity') ?>%</p>
                                    <p><b>Pressão atmosférica: </b> <?= $clima->__get('pressure') ?>hPa</p>
                                    <p><b>Velocidade do vento: </b> <?= $clima->__get('wind_speed') ?>m/s</p>
                                    <p><b>Direção do vento: </b> <?= $clima->__get('wind_deg') ?>º</p>
                                </div>
                            </div>
                        <? } else { ?>
                            <div class="text-center">
                                <h4><?= $cidade == "" ? "Digite uma cidade" : "Cidade não encontrada"?></h4>
                            </div>
                        <? } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>