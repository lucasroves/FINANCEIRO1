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
                    <th scope="col">Valor</th>
                    <th scope="col">Observação</th>
                    <th scope="col">...</th>
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
                        <?=($dataVenda=$venda['dataVenda']);
                echo "<br>";
                echo date('d/m/Y', strtotime($dataVenda));
                echo
                            "<br>";
                echo date('d/m/Y', strtotime($dataVenda)); ?>
                    </td>
                    <td scope="row">
                        R$<?= number_format($venda["valorVenda"], 2, ",", ".") ?>
                    </td>
                    <td scope="row">
                        <?= $venda["observacao"] ?>
                    </td>
                    <td>
                    <a href='delete.php'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='btn btn-sm btn-danger' viewBox='0 0 16 16'>
                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                        </svg>
                    </a>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </a>   
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