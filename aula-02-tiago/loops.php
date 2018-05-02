<?php

echo "<h1>Simples</h1>";

// Array simples
$lista = ["banana", "maça", "cebola"];
var_dump($lista);

for ($i = 0; $i < count($lista); $i++) {
    echo "Comprar " . $lista[$i] . "<Br>";
}

echo "<hr>";

// Array chave forçada
$lista2 = ["fruta1" => "banana", "fruta2" => "maça"];
var_dump($lista2);

for ($i = 0; $i < count($lista2); $i++) {
    echo "Item " . ($i + 1) . " - Comprar " . $lista2["fruta" . ($i + 1)] . "<Br>";
}

foreach ($lista2 as $chave => $fruta) {
    echo "Comprar " . $fruta . " ($chave)<Br>";
}

echo "<hr>";
// Array chave forçada
$lista3 = ["fruta" => "banana", "legume" => "cenoura", "verdura" => "couve"];
var_dump($lista3);

foreach ($lista3 as $tipo => $alimento) {
    echo "Comprar $tipo: $alimento<Br>";
}

echo "<hr>";
// Array multidimensional
$lista4 = [
    "frutas" => array("banana", "maça"),
    "legume" => "cenoura",
    "verdura" => "couve"
];
var_dump($lista4);

foreach ($lista4 as $tipo => $items) {
    $comprar = "Comprar $tipo: ";
    if (is_array($items)) {
        foreach ($items as $item){
            $comprar.=$item.",";
        }
        //$comprar.= join(", ",$items);
    } else {
        $comprar .= $items;
    }
//    var_dump($tipo);
//    var_dump($items);
    echo "$comprar<Br>";
}

echo "<hr>";