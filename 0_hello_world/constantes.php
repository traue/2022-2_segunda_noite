<?php
    //constantes são valoes que não podem ser alterados
    //usamos normalmente para endereços de servidores... senhas.. usuários etc.
    define('DB_URL', 'url_do_banco_de_dados');
    define('DB_USUARIO', 'root');
    define('DB_SENHA', 'Senha123');
    

    echo DB_URL . '<br>'; //concatenação de string em PHP é com "."
    echo DB_USUARIO . '<br>';
    echo DB_SENHA . '<br>';
?>