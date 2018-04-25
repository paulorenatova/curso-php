<?php
/*
 * Comentário de várias linhas
 */

require "dependencia.php";

echo "Esse é um ".$teste." para validar o escopo entre arquivos.<Br><br>";

echo "Hello World";

// Definição de Tiago
$nome = "Tiago"; // meu nome

$idade = 36;
$peso = 83.5;
$vivo = true;

const planeta = "terra";

global $continente;
$continente = "america";

const pi = 3.14;

echo $nome. " ".pi."<br><br>";

saudarPessoa($nome,$idade, $peso);


