<?php

require 'setup.php';
require 'menu.php';

// Obter cursos
$cursos = Curso::obterTodos($db);
echo "<h1>Cursos</h1>";
echo "Temos " . count($cursos) . " cursos!<br>";
?>
    <table border="1" cellspacing="0" cellpadding="5" width="100%">
        <tr>
            <td>Curso</td>
            <td>Ementa</td>
        </tr>
        <?php
        foreach ($cursos as $curso) {
            echo "<tr>
                    <td>$curso[titulo]</td>
                    <td>$curso[ementa]</td>
                </tr>";
        }
        ?>
    </table>
<?php


//var_dump($cursos);

// Criar curso fake
//$curso = new Curso();
//$curso->titulo = join(" ",$faker->words(6));
//$curso->ementa = join(" ",$faker->words(25));
//$curso->save($db);

