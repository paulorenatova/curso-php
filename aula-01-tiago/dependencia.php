<?php

$teste = "teste";

function saudarPessoa($nome, $idade, $peso)
{
    global $continente;

    echo "Olá " . $nome . "!";
    if ($idade > 18) {
        echo "Você é maior de idade, você tem " . $idade . " anos!";
    }

    if ($peso > 100) {
        echo "Você está gordo!";
    } else {
        echo "Você está em forma!";
    }

    echo "Você mora no planeta " . planeta . ", no continente $continente";

    echo "<br><br>";
}
