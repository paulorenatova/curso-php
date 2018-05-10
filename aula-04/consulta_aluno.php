<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
<div class="container">
<?php

require "database.php";

$sql = "select * from aluno order by nome";

$sth = $pdo->prepare($sql);
$sth->execute();

$result = $sth->fetchAll(PDO::FETCH_OBJ);
//echo "<pre>";
//var_dump($result);
//echo "</pre>";

foreach ($result as $item){
    ?>
    <div class="row">
        <div class="col-sm-1 col-12">ID: <?php echo $item->id ?> <a href="cadastro.php?id=<?php echo $item->id ?>">Editar</a> </div>
        <div class="col-sm-5 col-12">NOME: <?php echo $item->nome ?> </div>
        <div class="col-sm-3 col-12">CPF: <?php echo $item->cpf ?> </div>
        <div class="col-sm-3 col-12">profissao: <?php echo $item->profissao ?> </div>
    </div>
    <?php
}
?>
</div>

<a href="cadastro.php">Incluir</a>