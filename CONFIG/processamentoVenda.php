<?php
include_once("conexao.php");
include_once("url.php");
$data = $_POST;
if (!empty($data)) {
    if ($data["type"] === "create") {
        try { //Lancamento de Venda e receitas
            echo "criar dado";
            $tipoVenda = $data["tipoVenda"];
            $cliente = $data["cliente"];
            $dataVenda = $data["dataVenda"];
            $valorVenda = $data["valorVenda"];
            $observacao = $data["observacao"];
            $query = "INSERT INTO venda (tipoVenda, cliente, dataVenda, valorVenda, observacao) VALUES (:tipoVenda, :cliente,:dataVenda, :valorVenda, :observacao)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":tipoVenda", $tipoVenda);
            $stmt->bindParam(":cliente", $cliente);
            $stmt->bindParam(":dataVenda", $dataVenda);
            $stmt->bindParam(":valorVenda", $valorVenda);
            $stmt->bindParam(":observacao", $observacao);
            $stmt->execute();
        } catch (PDOException $e) {
            $erro = $e->getMessage();
            echo $erro;
        }
        header("Location:" . $BASE_URL . "/../templates/venda.php");
    }
}

//codigo do get 
else {
    $id;
    if (!empty($_GET)) {
        $id = $_GET["id"];
    }
    if (!empty($id)) {
        $query = "SELECT * FROM venda WHERE id= :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $onlyContato = $stmt->fetch();
    } else {
        $query = "SELECT * FROM venda";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $Allvenda = [];
        $Allvenda = $stmt->fetchAll();
    }
}
?>
