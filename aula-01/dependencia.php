<?php

function saudarPessoa ($nome, $idade, $peso) {
    echo "Olá ".$nome."!";
    if ($idade>18){
        echo " Você é maior de idade e você tem ".$idade."anos!";
    }
    if ($peso>100){
        echo " Você está acima do peso!";
    }else {
        echo " Você está em forma!";
    }

    echo "<br><br>";
}