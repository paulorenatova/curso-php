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

// Constante
const planeta = "terra";

// Global
global $continente;
$continente = "america";
const pi = 3.14;
echo $nome. " ".pi."<br><br>";

// Array
//$irmaos = ["Daniel","Simone"];
//var_dump($irmaos);
//echo "Seu primeiro irmão é ".$irmaos[0]."<br><br>";
//
//$irmaos[]="José";
//var_dump($irmaos);

$irmaos = ["mais velho"=>"Daniel","do meio"=>"Simone"];
//var_dump($irmaos);

$estados = ["MG"=>"Minas Gerais","SP"=>"São Paulo"];
//var_dump($estados);

saudarPessoa($nome,$idade, $peso);


require "get.php";

