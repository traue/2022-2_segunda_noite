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

    <?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) : ?>
        <div class="pt-2 d-flex justify-content-center confirmacao">
            <h5>Tarefa inserida com sucesso!</h5>
        </div>
    <?php endif; ?>

    <div class="container aplicacao">
        <div class="row">
            <div class="col-sm-3 menu">
                <ul>
                    <li class="list-group-item "><a href="./">Tarefas Pendentes</a></li>
                    <li class="list-group-item active"><a href="#">Nova Tarefa</a></li>
                    <li class="list-group-item"><a href="todas_tarefas.php">Todas Tarefas</a></li>
                </ul>
            </div>

            <div class="col-sm-9">
                <div class="container conteudo">
                    <div class="row">
                        <div class="col">
                            <h4>Nova Tarefa</h4>
                            <hr>
                            <form action="tarefa_controller.php?acao=inserirTarefa" method="post">
                                <div class="form-group">
                                    <label>Tarefa: </label>
                                    <input class="form-control" type="text" name="tarefa" placeholder="Exemplo: Comprar pepinos" required>
                                </div>
                                <button class="mt-3 btn btn-outline-success w-100">Adicionar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>