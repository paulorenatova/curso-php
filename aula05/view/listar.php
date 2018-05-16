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
                <?=$item->dono?>
            </td>
            <td>
                <?=$item->tipo?>
            </td>
            <td>
                <?=$item->ativa?>
            </td>
            <td>
                <?=$item->saldo?>
            </td>
        </tr>
        <?php
    }
        ?>
</table>

</body>
</html>