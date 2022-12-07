<?php

if (!empty($_GET['id']));
{
    include_once('header.php');
    include_once('../CONFIG/processamentoVenda.php');

    $id = $_GET['id'];

    $querySelect = " SELECT * FROM venda WHERE id=$id";
    $result = $conn -> query($querySelect);
    if($result->$onlyContato > 0){
        $queryDelete = "DELETE FROM venda WHERE id=$id";
        $resultDelete = $conn->query($queryDelete);
    }    
}
    header('Location: venda.php')
?>