<?php
/* @var $cliente Cliente */
?>
<h4>Editar cliente</h4>
<hr>
<form method="post">
    <table>
        <tr>
            <td>
                <label for id="cNome">Nome: </label>
            </td>
            <td>
                <input type="text" name="tNome" id="cNome" value="<?=$cliente->getNome()?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for id="cCpf">CPF: </label>
            </td>
            <td>
                <input type="text" name="tCpf" id="cCpf" value="<?=$cliente->getCpf()?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for id="cEndereco">Endereço: </label>
            </td>
            <td>
                <input type="text" name="tEndereco" id="cEndereco" value="<?=$cliente->getEndereco()?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for id="cSenha">Senha: </label>
            </td>
            <td>
                <input type="text" name="tSenha" id="cSenha" value="<?=$cliente->getSenha()?>">
            </td>
        </tr>

    </table>
    <input type="submit">
</form>
