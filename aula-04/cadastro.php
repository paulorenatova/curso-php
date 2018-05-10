<?php
require "database.php";

if (isset ($_GET["id"])){
    $sql = "select * from aluno where id=".$_GET["id"];

    $sth = $pdo->prepare($sql);
    $sth->execute();

    $result = $sth->fetchAll(PDO::FETCH_OBJ);
    $result = $result[0];
//    var_dump($result);
}else{
    $result = new stdClass();
    $result->nome = "";
}
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<div class="container">
    <form method="post" action="cadastro_aluno.php">
        <div class="row">
            <div class="col-sm">
                <label for="nome">Nome Completo:</label>
            </div>
            <div class="col-sm">
                <input type="text" name="nome" id="nome" value="<?=$result->nome?>"><br>
            </div>
        </div>
        <label for="end_rua">Logradouro:</label> <input type="text" name="end_rua" id="end_rua"><br>
        <label for="end_numero">Número:</label> <input type="text" name="end_numero" id="end_numero"><br>
        <label for="end_cep">CEP:</label> <input type="text" name="end_cep" id="end_cep" maxlength="9"><br>
        <label for="end_bairro">Bairro:</label> <input type="text" name="end_bairro" id="end_bairro"><br>
        <label for="end_cidade">Cidade:</label> <input type="text" name="end_cidade" id="end_cidade"><br>
        <label for="end_estado">Estado:</label>
        <select name="end_estado">
            <option value="MG">Minas Gerais</option>
            <option value="RJ">Rio de Janeiro</option>
        </select><br>
        <label for="nascimento">Data de nascimento:</label> <input type="date" name="nascimento" id="nascimento"><br>
        <label for="cpf">CPF:</label> <input type="text" name="cpf" id="cpf" maxlength="14"><br>
        <label for="profissao">Profissão:</label> <input type="text" name="profissao" id="profissao"><br>
        <input type="submit">
    </form>
</div>

<div class="row">
    <div class="col-sm">
        One of three columns
    </div>
    <div class="col-sm">
        One of three columns
    </div>
    <div class="col-sm">
        One of three columns
    </div>
</div>

