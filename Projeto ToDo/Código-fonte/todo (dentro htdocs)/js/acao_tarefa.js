function concluirTarefa(id, pagina) {
    uri = 'index.php?acao=concluirTarefa&id=' + id;
    if (pagina == 'index')
        uri += '&pg=index';
    location.href = uri;
}

function excluirTarefa(id, pagina) {
    uri = 'index.php?acao=excluirTarefa&id=' + id;
    if (pagina == 'index')
        uri += '&pg=index';
    location.href = uri;
}

function atualizarTarefa(id, tarefa, pagina) {
    uri = 'index.php?acao=atualizarTarefa';
    if (pagina == 'index')
        uri += '&pg=index';

    //criação do formulário de edição
    let form = document.createElement('form');
    form.action = uri;
    form.method = 'post';
    form.className = 'row'

    //criação do campo de digitação da tarefa
    let inputTarefa = document.createElement('input');
    inputTarefa.name = 'tarefa';
    inputTarefa.type = 'text';
    inputTarefa.value = tarefa;
    inputTarefa.className = 'form-control col-sm-6';
    inputTarefa.required = true;

    let inputId = document.createElement('input');
    inputId.type = 'hidden';
    inputId.name = 'id';
    inputId.value = id;

    //crição do botão de submissão do formulário
    let btAtualizar = document.createElement('button');
    btAtualizar.type = 'submit';
    btAtualizar.innerHTML = 'Atualizar';
    btAtualizar.className = 'btn btn-info col-sm-2';

    form.appendChild(inputTarefa);
    form.appendChild(inputId);
    form.appendChild(btAtualizar);

    let tarefaDiv = document.getElementById('tarefa_' + id);
    tarefaDiv.innerHTML = '';
    tarefaDiv.insertBefore(form, tarefaDiv[0]);
}