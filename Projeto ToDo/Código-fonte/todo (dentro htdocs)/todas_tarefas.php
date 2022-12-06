<?php
$acao = "recuperarTodasTarefas";
require "tarefa_controller.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo</title>
    <link href="css/estilo.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/69e5255fc0.js" crossorigin="anonymous"></script>
    <link href="img/logo.png" rel="icon" type="image/x-icon">
    <script src="js/acao_tarefa.js"></script>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand text-white" href="#">
                <img src="img/logo.png" width="30" height="30" alt="logo">
                SuperToDo
            </a>
        </div>
    </nav>

    <div class="container aplicacao">
        <div class="row">
            <div class="col-sm-3 menu">
                <ul>
                    <li class="list-group-item"><a href="./">Tarefas Pendentes</a></li>
                    <li class="list-group-item"><a href="nova_tarefa.php">Nova Tarefa</a></li>
                    <li class="list-group-item active"><a href="#">Todas Tarefas</a></li>
                </ul>
            </div>

            <div class="col-sm-9">
                <div class="container conteudo">
                    <div class="row">
                        <div class="col">
                            <h4>Todas as Tarefas</h4>
                            <hr>

                            <?php foreach ($tarefas as $indice => $tarefa) { ?>
                                <div class="row mb-3 d-flex align-items-center">

                                    <div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>">
                                        <?= $tarefa->tarefa ?>
                                    </div>

                                    <div class="col-sm-3 d-flex justify-content-between">
                                        <i class="fa-regular fa-trash-can fa-lg text-danger" onclick="excluirTarefa(<?= $tarefa->id ?>, null)"></i>
                                        <?php if ($tarefa->status == 'pendente') : ?>
                                            <i class="fa-regular fa-pen-to-square fa-lg text-info" onclick="atualizarTarefa(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>', null)"></i>
                                            <i class="fa-regular fa-circle-check fa-lg text-success" onclick="concluirTarefa(<?= $tarefa->id ?>, null)"></i>
                                        <?php endif ?>
                                    </div>

                                </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



</body>

</html>