<?php include_once("header.php") ?>

<div class="containerBoleto">
    <h1 id="main-title">Minhas Vendas</h1>
    <div class="botao"><a href="inserirVenda.php">Inserir</a></div>
    <form action=""></form>
    <div class="container">

        <?php if (count($Allvenda) > 0):?>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tipo de Venda</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Data da Venda</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Obs</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Allvenda as $venda): ?>
                <tr>
                    <td scope="row">
                        <?= $venda["id"] ?>
                    </td>
                    <td scope="row">
                        <?= $venda["tipoVenda"] ?>
                    </td>
                    <td scope="row">
                        <?= $venda["cliente"] ?>
                    </td>
                    <td scope="row">
                        <?=($dataVenda = $venda['dataVenda']);echo "<br>"; echo date('d/m/Y', strtotime($dataVenda));echo "<br>"; echo date('d/m/Y', strtotime($dataVenda)); ?>
                    </td>
                    <td scope="row"> 
                    R$<?= number_format($venda["valorVenda"], 2,",",".") ?>
                    </td>
                    <td scope="row">
                        <?= $venda["observacao"] ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p id="empty-list-text"> Não há vendas registrados
        </p>
        <?php endif; ?>
    </div>
</div>
<?php
include_once("footer.php");
?>