<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <?php
    require "menu.php"
    ?>

</head>
<body>
<h4>Cadastro de Nova Conta</h4>
<hr>
<form method="post">
    <table>
        <tr>
            <td>
                <label for id="cname">Nome: </label>
            </td>
            <td>
                <input type="text" name="tDono" id="cDono">
            </td>
        </tr>
        <tr>
            <td>
                <label for id="ctipo">Tipo: </label>
            </td>
            <td>
                <input type="radio" name="tTipo" id="cTipoCC" value="CC">Conta Corrente<br>
                <input type="radio" name="tTipo" id="cTipoCP" value="CP">Conta Poupança<br>
            </td>
        </tr>
    </table>
    <input type="submit">
</form>
<hr>

</body>
</html>
