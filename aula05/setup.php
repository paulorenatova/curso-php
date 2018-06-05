<?php
require "_class/Banco.php";
require_once "_class/ContaBanco.php";
require "_class/Cliente.php";

// Conectar no banco de dados
try {
    $db = new PDO(
        'mysql:dbname=banco;host=167.99.233.184',
        'paulo2',
        'paulo2'
    );

    global $db;

} catch (Exception $e) {
    var_dump($e);
    die("Erro de conexão com o servidor!");
}