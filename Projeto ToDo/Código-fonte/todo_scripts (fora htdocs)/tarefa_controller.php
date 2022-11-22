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
    } //paramos aqui
?>