<?php
/* @var $clientes Cliente[] */
?>
<h2>Lista de Clientes</h2>
<table class="table">
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
            Saldo CC
        </td>
        <td>
            Saldo CP
        </td>
        <td>
            Endereço
        </td>
        <td>
            Ações
        </td>
    </tr>
    <?php
    foreach ($clientes as $cliente){

        $podeExcluir = $cliente->getSaldoCc()== 0 && $cliente->getSaldoCp() == 0;




        ?>
        <tr>
            <td>
                <?=$cliente->getId()?>
            </td>
            <td>
                <?=$cliente->getNome()?>
            </td>
            <td>
                <?=$cliente->getCpf()?>
            </td>
            <td>
                <?=$cliente->getSaldoCc()?>
            </td>
            <td>
                <?=$cliente->getSaldoCp()?>
            </td>
            <td>
                <?=$cliente->getEndereco()?>
            </td>
            <td>

                <a href="editarcliente/<?=$cliente->getId()?>" class="btn btn-primary btn-sm"

                >Editar</a>

                <a href="excluircliente/<?=$cliente->getId()?>" class="btn btn-primary btn-sm"

                    <?php
                    if (!$podeExcluir ){
                        ?>
                        onClick="(function(e) {
                            e.preventDefault();
                            alert('Esse cliente não pode ser excluído pois não tem saldo R$0,00');
                        })(event)"
                        <?php
                    }
                    ?>
                >Excluir</a>
            </td>
        </tr>
        <?php
    }
        ?>
</table>