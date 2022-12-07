<?php
include_once("conexao.php");
include_once("url.php");
$data = $_POST;
if (!empty($data)) {
    if ($data["type"] === "create") {
        try {
            echo "criar dado";
            $nDocumento = $data["nDocumento"];
            $fornecedor = $data["fornecedor"];
            $vencimento = $data["vencimento"];
            $valorBoleto = $data["valorBoleto"];
            $observacao = $data["observacao"];
            $query = "INSERT INTO movimentacao (nDocumento, fornecedor, vencimento, valorBoleto, observacao) VALUES (:nDocumento, :fornecedor,:vencimento, :valorBoleto, :observacao)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":nDocumento", $nDocumento);
            $stmt->bindParam(":fornecedor", $fornecedor);
            $stmt->bindParam(":vencimento", $vencimento);
            $stmt->bindParam(":valorBoleto", $valorBoleto);
            $stmt->bindParam(":observacao", $observacao);
            $stmt->execute();
        } catch (PDOException $e) {
            $erro = $e->getMessage();
            echo $erro;
        }
        header("Location:" . $BASE_URL . "/../templates/boleto.php");
    }
} 

//codigo do get 
else {
    $id;
    if (!empty($_GET)) {
        $id = $_GET["id"];
    }
    if (!empty($id)) {
        $query = "SELECT * FROM movimentacao WHERE id= :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $onlyContato = $stmt->fetch(); 
    } else {
        $query = "SELECT * FROM movimentacao";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $Allmovimentacao = [];
        $Allmovimentacao = $stmt->fetchAll(); 
    }
}
?>