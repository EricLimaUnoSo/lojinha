<?php
include_once '../classes/institucional.class.php';

    $nome = $_POST['nome'];
    $cpf_cnpj = $_POST['cpf_cnpj'];
    $tipoPessoa = $_POST['tipoPessoa'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $logo = $_POST['logo'];
    
    $institucional = new Institucional(
        $nome, $cpf_cnpj, $tipoPessoa, $endereco, $bairro, $cidade, $uf, $cep, $telefone, $email, $logo
        );
    $institucional->save();
?>