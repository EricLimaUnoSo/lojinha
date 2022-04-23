<?php
include_once '../classes/pedidos.class.php';

    $idPedido = $_POST['idPedido']; 
    $idUsuario = $_POST['idUsuario'];
    $dtPedido = $_POST['dtPedido'];
    $dtPagamento = $_POST['dtPagamento'];
    $dtNotaFiscal = $_POST['dtNotaFiscal'];
    $notaFiscal = $_POST['notaFiscal'];
    $dtEnvio = $_POST['dtEnvio'];
    $dtRecebimento = $_POST['dtRecebimento'];
    $tipoFrete = $_POST['tipoFrete'];
    $rastreioFrete = $_POST['rastreioFrete'];
    $entregaEndereco = $_POST['entregaEndereco'];
    $entregaNumero = $_POST['entregaNumero'];
    $entregaCompl = $_POST['entregaCompl'];
    $entregaBairro = $_POST['entregaBairro'];
    $entregaCidade = $_POST['entregaCidade'];
    $entregaUF = $_POST['entregaUF'];
    $entregaCEP = $_POST['entregaCEP'];
    $entregaTelefone = $_POST['entregaTelefone'];
    $entregaRefer = $_POST['entregaRefer'];
    $valorTotal = $_POST['valorTotal'];
    $qtdItems = $_POST['qtdItems'];
    $dtDevolucao = $_POST['dtDevolucao'];
    $motivoDevolucao = $_POST['motivoDevolucao'];
    
    $pedidos = new Pedidos(
        $idPedido, $idUsuario, $dtPedido, $dtPagamento, $dtNotaFiscal, $notaFiscal, $dtEnvio, $dtRecebimento, $tipoFrete, $rastreioFrete, $entregaEndereco, $entregaNumero, $entregaCompl, $entregaBairro, $entregaCidade, $entregaUF, $entregaCEP, $entregaTelefone, $entregaRefer, $valorTotal, $qtdItems, $dtDevolucao, $motivoDevolucao
        );
    $pedidos->save();
?>