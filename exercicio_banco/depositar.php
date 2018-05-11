<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Depósito</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <?php
    require "menu.php"
    ?>
</head>
<body>
<h4>Fazer Depósito</h4>
<hr>
<form>
    <table>
        <tr>
            <td>
                <label for id="cNumConta">Número da Conta: </label>
            </td>
            <td>
                <input type="text" name="tNumConta" id="cNumConta">
            </td>
        </tr>
        <tr>
            <td>
                <label for id="cValorDepositado">Valor do depósito: </label>
            </td>
            <td>
                <input type="text" name="tValorDepositado" id="cValorDepositado">
            </td>
        </tr>
    </table>
    <input type="submit">
</form>
<hr>
</body>
</html>
