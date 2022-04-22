<?php
include_once './classes/itemsPedido.class.php';

    $ordem = $_POST['ordem'];
    $idPedido = $_POST['idPedido'];
    $idEstoque = $_POST['idEstoque'];
    $qtdItem = $_POST['qtdItem'];
    $dtDevolucao = $_POST['dtDevolucao'];
    $motivoDevolucao = $_POST['motivoDevolucao'];
    
    $itemsPedido = new ItemsPedido(
        $ordem, $idPedido, $idEstoque, $qtdItem, $dtDevolucao, $motivoDevolucao
        );
    
?>