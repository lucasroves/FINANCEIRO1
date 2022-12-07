<?php include_once("header.php") ?>
<div class="containerBoleto">
    <h1 id="main-title">Meus Boletos</h1>
    <div class="botao"><a href="inserirBoleto.php">Inserir</a></div>
    <form action=""></form>
    <div class="container">

        <?php if (count($Allmovimentacao) > 0): ?>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Número do Doc</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Data de Vencimento</th>
                    <th escope="col">Valor</th>
                    <th escope="col">Obs</th>
                    <th escope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Allmovimentacao as $movimentacao): ?>
                <tr>
                    <td scope="row">
                        <?= $movimentacao["id"] ?>
                    </td>
                    <td scope="row">
                        <?= $movimentacao["nDocumento"] ?>
                    </td>
                    <td scope="row">
                        <?= $movimentacao["fornecedor"] ?>
                    </td>
                    <td scope="row">
                        <?= $movimentacao["vencimento"] ?>
                    </td>
                    <td scope="row">
                        R$<?= number_format($movimentacao["valorBoleto"], 2,",",".") ?>
                    </td>
                    <td scope="row">
                        <?= $movimentacao["observacao"] ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
        <p id="empty-list-text"> Não há boletos registrados
        </p>
        <?php endif; ?>
    </div>
</div>
<?php
include_once("footer.php");
?>