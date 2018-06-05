<table border="1">
    <tr>
        <td>
           ID
        </td>
        <td>
            Nome do cliente
        </td>
        <td>
            CPF
        </td>
        <td>
            Endereço
        </td>
    </tr>
    <?php
    foreach ($cliente as $item){
        ?>
        <tr>
            <td>
                <?=$item->id?>
            </td>
            <td>
                <?=$item->nome?>
            </td>
            <td>
                <?=$item->cpf?>
            </td>
            <td>
                <?=$item->endereco?>
            </td>
        </tr>
        <?php
    }
        ?>
</table>