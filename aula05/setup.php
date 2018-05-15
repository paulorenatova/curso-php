<?php
require "_class/Banco.php";
require_once "_class/ContaBanco.php";

// Conectar no banco de dados
try {
    $db = new PDO(
        'mysql:dbname=banco;host=167.99.233.184',
        'client',
        'TiagoGouvea'
    );

    global $db;

} catch (Exception $e) {
//    var_dump($e);
    die("Erro de conexão com o servidor!");
}