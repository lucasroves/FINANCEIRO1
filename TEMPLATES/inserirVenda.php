<?php include_once("header.php") ?>
<div class="containerInsercao">
<h1 id="main-title">Inserir Vendas</h1>
    <form id="create-form" action="<?= $BASE_URL ?>/../config/processamentoVenda.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="tipoVenda">Tipo de Venda:</label>
            <input type="list" list="pagamento" class="form-control" id="tipoVenda" name="tipoVenda" placeholder="Informe o tipo de venda" required>
            <datalist id="pagamento">
                <option>D1</option>
                <option>C1</option>
                <Option>C2</Option>
                <Option>C3</Option>
                <option>C4</option>
                <Option>C5</Option>
                <Option>C0</Option>
                <Option>CP1</Option>
                <Option>CP2</Option>
            </datalist>
        </div>
        <div class="form-group">
            <label for="cliente">Cliente:</label>
            <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Informe o Cliente" required>
        </div>
        <div class="form-group">
            <label for="dataVenda">Data da Venda:</label>
            <input type="date" class="form-control" id="date" name="data" placeholder="Informe a data da venda" required>
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