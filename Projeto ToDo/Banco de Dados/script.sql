-- TABELA STATUS
CREATE TABLE tb_status(
	id INT PRIMARY KEY AUTO_INCREMENT,
    status VARCHAR(10) NOT NULL
);


-- INSERÇÃO DOS DOIS STATUS QUE USAREMOS NO PROJETO
INSERT INTO tb_status(status) VALUES('pendente');
INSERT INTO tb_status(status) VALUES('realizado');

-- TABELA DE TAREFAS
CREATE TABLE tb_tarefas(
	id INT PRIMARY KEY AUTO_INCREMENT,
    tarefa TEXT NOT NULL,
    data_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    id_status INT NOT NULL DEFAULT 1,
    	FOREIGN KEY(id_status) REFERENCES tb_status(id)
);


-- APENAS ALGUMAS TAREFA PARA TESTES INICIAIS
INSERT INTO tb_tarefas(tarefa) VALUES('Lavar a louça');
INSERT INTO tb_tarefas(tarefa) VALUES('Lavar o tótó passear');
INSERT INTO tb_tarefas(tarefa) VALUES('Fazer um bolo');
INSERT INTO tb_tarefas(tarefa) VALUES('Tirar 10 na disciplina do Traue');