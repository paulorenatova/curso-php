<h4>Cadastro de Nova Conta</h4>
<hr>
<form method="post">
    <table>
        <tr>
            <td>
                <label for id="cCliente">Cliente: </label>
            </td>
            <td>
                <select name="tCliente">
                    <?php foreach ($clientes as $cliente): ?>
                        <option value="<?=$cliente->getId()?>"><?=$cliente->getNome()?></option>
                    <?php endforeach; ?>
                </select>
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