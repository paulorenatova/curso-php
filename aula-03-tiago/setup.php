<?php

// Carregar classes
require './classes.php';

// Conectar no banco
require './database.php';
$config = [
    "host" => "localhost",
    "dbname" => "pessoas",
    "user" => "root",
    "pass" => "rut"
];
$db = new Database($config);