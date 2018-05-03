<?php


echo "<hr>";


function diasParaFimDoProjeto($proj, $apenasAtrasados)
{
//    var_dump($proj);
    $tempoParaTerminar = strtotime($proj['dataFinal']) - time();
    $tempoParaTerminar = floor($tempoParaTerminar / 86400);
    $atrasado = $tempoParaTerminar < 0;

    if ($apenasAtrasados && $atrasado) {
        return "O projeto " . $proj['titulo'] . " deveria ter terminado em $proj[dataFinal]!<br>";
    } else if (!$atrasado > 0 && !$apenasAtrasados) {
        return "O projeto " . $proj['titulo'] . " termina em $tempoParaTerminar dias...<br>";
    }
}

function listaProjetos($projetos, $tituloGrupo, $apenasAtrasados)
{
//    echo  "Existem ".count($projetos)." projetos: <br><br>";
    echo "<h2>$tituloGrupo</h2>";
    foreach ($projetos as $projeto) {
        echo diasParaFimDoProjeto($projeto, $apenasAtrasados);
    }
}

$projetos = [
    ["titulo" => "Ponte no paraibuna", "dataFinal" => "2018-05-13"],
    ["titulo" => "Casa no Bom Pastor", "dataFinal" => "2018-03-14"],
    ["titulo" => "Prédio na Itamar Franco", "dataFinal" => "2018-06-14"],
    ["titulo" => "Casa na Itamar Franco", "dataFinal" => "2017-04-14"],
    ["titulo" => "Prédio no Centro", "dataFinal" => "2018-02-02"]
];

listaProjetos($projetos, "Projetos atrasados", true);
listaProjetos($projetos, "Projetos à finalizar", false);


echo "<hr>";

//echo diasParaFimDoProjeto($projeto1);
//echo diasParaFimDoProjeto($projeto2);
//echo diasParaFimDoProjeto($projeto3);


// Metodo
function multiplicar($valor1, $valor2)
{
    echo $valor1 * $valor2;
}

multiplicar(10, 3);

// Função
function acharResto($valor1, $valor2)
{
    return $valor1 % $valor2;
}

for ($i = 1; $i < 100; $i++) {
    $resto = acharResto(100, $i);
    if ($resto == 0)
        echo "O resto de 100 divido por $i é: $resto<br>";
}

function acertarNome($nome)
{
    $nome = strtolower($nome);
    $nome = ucwords($nome);
    $nome = str_replace("  ", " ", $nome);
    $nome = trim($nome);
    return "José<br>";
}

//

echo acertarNome(" tiago  GOuVEa");
echo acertarNome(" pAulO  rEnaTo");

//echo "Last monday foi em ".date('d/m \d\e Y',strtotime("last Monday"));
//var_dump(strtotime("+1 day"));
//var_dump(strtotime("2018-05-13"));
