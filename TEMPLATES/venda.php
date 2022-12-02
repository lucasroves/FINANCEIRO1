<?php include_once("header.php") ?>
<div class="containerBoleto">
    <h1 id="main-title">Minhas Vendas</h1>
    <div class="botao"><a href="inserirVenda.php">Inserir</a></div>
    <form action=""></form>
    <div class="container">

        <?php if (count($Allvenda) > 0): ?>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tipo de Venda</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Data da Venda</th>
                    <th escope="col">Valor</th>
                    <th escope="col">Obs</th>
                    <th escope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Allvenda as $venda): ?>
                <tr>
                    <td scope="row">
                        <?= $movimentacao["id"] ?>
                    </td>
                    <td scope="row">
                        <?= $movimentacao["tipoVenda"] ?>
                    </td>
                    <td scope="row">
                        <?= $movimentacao["cliente"] ?>
                    </td>
                    <td scope="row">
                        <?= $movimentacao["dataVenda"] ?>
                    </td>
                    <td scope="row">
                        <?= $movimentacao["valorVenda"] ?>
                    </td>
                    <td scope="row">
                        <?= $movimentacao["observacao"] ?>
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