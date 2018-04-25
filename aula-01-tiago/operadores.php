<?php

// String
$texto = "meu texto";
$textoCompleto = "Esse é o ".$texto;
echo $textoCompleto;

// Inteiros
$idade=36;
$daquiA10anos = $idade+10;
$foi10anosAtras = $idade-10;

var_dump($daquiA10anos);
var_dump($foi10anosAtras);

// Booleno
$casado = true;
var_dump($casado);
$casado = !!$casado;
var_dump($casado);

if ($casado){
    echo "Está casado";
} else {
    echo "Não casado";
}

// Booleano com inteiro
var_dump($idade>50);
var_dump($idade<50);
var_dump($idade!=36);
var_dump($idade==50);
var_dump($casado==1);

if (true)
    echo "É verdade";

$a = 1;
$b = (int)"1";
$c = $a + $b;
$d = "j";
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($a==$b);
var_dump($a+1==$b+1);
var_dump($a===$b); // idêntico
var_dump($a!=$b);
var_dump($a!==$b);
var_dump($b<2);
var_dump($d<2);
var_dump($d==1);