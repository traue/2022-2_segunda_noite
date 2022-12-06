<?php
    require "../../todo_scripts/tarefa_model.php";
    require "../../todo_scripts/tarefa_service.php";
    require "../../todo_scripts/conexao.php";

    
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    $conn = new Conexao();
    $tarefa = new Tarefa();
    $tarefaService = new TarefaService($conn, $tarefa);

    if ($acao == 'recuperarTarefasPendentes') {
        $tarefa->__set('id_status', 1);
        $tarefas = $tarefaService->listarTarefasPendentes();
    }

    if ($acao == 'inserirTarefa') {
        $tarefa->__set('tarefa', $_POST['tarefa']);
        $tarefaService->inserirTarefa();
        header('Location: nova_tarefa.php?inclusao=1');
    }

    if ($acao == 'recuperarTodasTarefas') {
        $tarefas = $tarefaService->listarTodasTarefas();
    }

    if ($acao == 'concluirTarefa') {
        $tarefa->__set('id', $_GET['id']);
        $tarefa->__set('id_status', 2);
        $tarefaService->concluirTarefa();

        if (isset($_GET['pg']) && $_GET['pg'] == 'index') {
            header('Location: index.php');
        } else {
            header('Location: todas_tarefas.php');
        }
    }

    if ($acao == 'excluirTarefa') {
        $tarefa->__set('id', $_GET['id']);
        $tarefaService->excluirTarefa();
        
        if (isset($_GET['pg']) && $_GET['pg'] == 'index') {
            header('Location: index.php');
        } else {
            header('Location: todas_tarefas.php');
        }
    }

    if ($acao == 'atualizarTarefa') {
        $tarefa->__set('id', $_POST['id']);
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $tarefaService->atualizaTarefa();

        if (isset($_GET['pg']) && $_GET['pg'] == 'index') {
            header('Location: index.php');
        } else {
            header('Location: todas_tarefas.php');
        }
    }
