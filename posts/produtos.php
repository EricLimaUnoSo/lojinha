<?php
include_once '../classes/produtos.class.php';

    $fabricante = $_POST['fabricante'];
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $idCategoria = $_POST['idCategoria'];
    $descricao = $_POST['descricao'];
    $unidadeMedida = $_POST['unidadeMedida'];
    $largura = $_POST['largura'];
    $altura = $_POST['altura'];
    $profundidade = $_POST['profundidade'];
    $peso = $_POST['peso'];
    $cor = $_POST['cor'];
    
    $produtos = new Produtos(
        $fabricante, $nome, $marca, $modelo, $idCategoria, $descricao, $unidadeMedida, $largura, $altura, $profundidade, $peso, $cor
        );
    $produtos->save();
?>