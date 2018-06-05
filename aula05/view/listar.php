<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listar contas</title>
</head>
<body>

<table border="1">
    <tr>
        <td>
           ID
        </td>
        <td>
            Nome do dono
        </td>
        <td>
            Tipo de conta
        </td>
        <td>
            Status da conta
        </td>
        <td>
           Saldo
        </td>
    </tr>
    <?php
    foreach ($contas as $item){
        ?>
        <tr>
            <td>
                <?=$item->id?>
            </td>
            <td>
                <?=$item->getCliente()->nome?> - <?=$item->getCliente()->cpf?>
            </td>
            <td>
                <?=$item->getTipo()?>
            </td>
            <td>
                <?=$item->isAtiva()?>
            </td>
            <td>
                <?=$item->getSaldo()?>
            </td>
        </tr>
        <?php
    }
        ?>
</table>

</body>
</html>