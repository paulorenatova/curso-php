<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>TESTANTO CONTA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <?php
    require_once "setup.php";
    ?>
</head>
<body><pre><br>

    <?php
    $sql = "insert into aluno
            (numConta, dono)
            values 
            (:numConta, :dono)";

    $sth = $pdo->prepare($sql);
    $sth->bindParam(":numConta",$_POST["numConta"], PDO::PARAM_STR);
    $sth->bindParam(":dono",$_POST["dono"], PDO::PARAM_STR);
    ?>

</pre>
</body>
</html>
