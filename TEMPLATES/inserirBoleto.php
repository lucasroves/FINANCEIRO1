<?php include_once("header.php") ?>
<div class="containerInsercao">
<h1 id="main-title">Inserir Boletos</h1>
    <form id="create-form" action="<?= $BASE_URL ?>/../config/processamentoBoleto.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="nDocumento">Número do Documento:</label>
            <input type="text" class="form-control" id="nDocumento" name="nDocumento" placeholder="Digite o número do documento" required>
        </div>
        <div class="form-group">
            <label for="fornecedor">Fornecedor:</label>
            <input type="text" class="form-control" id="fornecedor" name="fornecedor" placeholder="Informe o Fornecedor" required>
        </div>
        <div class="form-group">
            <label for="vencimento">Data de Vencimento:</label>
            <input type="date" class="form-control" id="date" name="vencimento" placeholder="Informe a data do Vencimento" required>
        </div>
        <div class="form-group">
            <label for="valorBoleto">Valor:</label>
            <input type="number" step=0.01 class="form-control" id="valorBoleto" name="valorBoleto" placeholder="informe o valor do boleto" required></input>
        </div>
        <div class="form-group">
            <label for="observacao">Obs:</label>
            <input type="text"  class="form-control" id="observacao" name="observacao" placeholder="Digite aqui uma obs" required></input>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Inserir</button>
    </form>
</div>