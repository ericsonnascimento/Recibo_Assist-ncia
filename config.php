<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'bd_recibo');

    $conn = new mysqli(HOST, USER, PASS, BASE);

    /* Conectando ao banco de dados, criamos variáveis com o DEFINE
    e logo depois criamos a variável de conexão $conn, onde são passados
    os parâmetros para "mysqli" seguindo esta ordem */
