<pre>

<?php
require "database.php";

$sql = "insert into aluno
    (nome, end_rua, end_numero, end_cep, end_bairro, end_cidade, end_estado, nascimento, cpf, profissao)
    values 
    (:nome, :end_rua, :end_numero, :end_cep, :end_bairro, :end_cidade, :end_estado, :nascimento, :cpf, :profissao)";

$sth = $pdo->prepare($sql);
$sth->bindParam(":nome",$_POST["nome"], PDO::PARAM_STR);
$sth->bindParam(":end_rua",$_POST["end_rua"], PDO::PARAM_STR);
$sth->bindParam(":end_numero",$_POST["end_numero"],PDO::PARAM_STR);
$sth->bindParam(":end_cep",$_POST["end_cep"], PDO::PARAM_STR);
$sth->bindParam(":end_bairro",$_POST["end_bairro"],PDO::PARAM_STR);
$sth->bindParam(":end_cidade",$_POST["end_cidade"],PDO::PARAM_STR);
$sth->bindParam(":end_estado",$_POST["end_estado"],PDO::PARAM_STR);
$sth->bindParam(":nascimento",$_POST["nascimento"],PDO::PARAM_STR);
$sth->bindParam(":cpf",$_POST["cpf"],PDO::PARAM_STR);
$sth->bindParam(":profissao",$_POST["profissao"],PDO::PARAM_STR);
$sth->execute();

echo "<pre>";
print_r($_POST);
echo "<pre>";

?>

    </pre>
