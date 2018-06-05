<?php

require_once "_class/Database.php";
require_once "_class/ContaBanco.php";

    $db = new Database();
    $db->setHost("localhost");
    $db->setDbname("banco");
    $db->setUser("root");
    $db->setPass("");

    echo "<pre>";
    var_dump($db);
    echo "</pre>";

    ?>
