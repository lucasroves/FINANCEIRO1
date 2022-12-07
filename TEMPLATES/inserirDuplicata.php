<?php include_once("header.php") ?>
<div class="containerInsercao">
<h1 id="main-title">Inserir Vendas</h1>
    <form id="create-form" action="<?= $BASE_URL ?>/../config/processamentoVenda.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="tipoVenda">Tipo de Venda:</label>
            <input type="text" class="form-control" id="tipoVenda" name="tipoVenda" placeholder="Informe o tipo de venda" required>
        
        </div>
        <div class="form-group">
            <label for="cliente">Cliente:</label>
            <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Informe o Cliente" required>
        </div>
        <div class="form-group">
            <label for="dataVenda">Data da Venda:</label>
            <input type="date" class="form-control" id="date" name="dataVenda" placeholder="Informe a data da venda" required>
        </div>
        <div class="form-group">
            <label for="valorVenda">Valor:</label>
            <input type="number" step=0.01 class="form-control" id="valorVenda" name="valorVenda" placeholder="informe o valor do boleto" required></input>
        </div>
        <div class="form-group">
            <label for="observacao">Obs:</label>
            <input type="text"  class="form-control" id="observacao" name="observacao" placeholder="Digite aqui uma obs" required></input>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Inserir</button>
    </form>
</div>