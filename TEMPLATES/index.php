<?php include_once("header.php") ?>
<div class="container">
    <div class="entrada">
        <h1>VENDAS</h1>
        <div class="valor">

        </div>
    </div>
    <div class="saidas">
        <h1>DESPESAS</h1>
        <div class="valor">
            <?php
            $query_valor = "SELECT SUM(valorBoleto) AS totalDespesas FROM movimentacao";
            $result_valor = $conn->prepare($query_valor);
            $result_valor->execute();

            $row_valor = $result_valor->fetch(PDO::FETCH_ASSOC);
            echo " R$" . $row_valor['totalDespesas'];
            ?>
        </div>
    </div>
    <div class="prazo">
        <h1>VENDAS A RECEBER</h1>
        <div class="valor">
        </div>
    </div>
</div>
<div></div>
<div class="botao"><a href="inserirVenda.php">Inserir Vendas</a></div>
</div>
<div class="botao"><a href="inserirBoleto.php">Inserir Boletos</a></div>
</div>