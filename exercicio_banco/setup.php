<?php

require_once "_class/BancoDeDados.php";
require_once "_class/ContaBanco.php";

    $db = new BancoDeDados();
    $db->setHost("localhost");
    $db->setDbname("banco");
    $db->setUser("root");
    $db->setPass("");

    print_r($db);
    echo "<pre>";
    var_dump($db);
    echo "</pre>";