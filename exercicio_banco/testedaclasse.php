<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>TESTANTO CONTA</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <?php
        require_once "setup.php";
        ?>
    </head>
        <body><pre><br>

            <?php
                //Nova Conta
                $p1 = new ContaBanco("0001");
                $p2 = new ContaBanco("0002");

                //Abrindo Conta
                $p1->abrirConta("CC");
                $p1->setDono("Jubileu");
                $p2->abrirConta("CP");
                $p2->setDono("Creuza");

                echo "<hr>";

                // Depositando
                $p1->depositar(2000);
                $p2->depositar(500);

                echo "<hr>";

                //Sacando
                $p1->sacar(1000);
                $p2->sacar(10000);

                echo "<hr>";

                //Consulta saldo
                echo $p1->getSaldo();
                echo $p2->getSaldo();

                echo "<hr>";

                //Status
                print_r($p1);
                print_r($p2);
            ?>

        </pre>
        </body>
</html>
