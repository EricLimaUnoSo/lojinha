<?php
include_once '../classes/usuarios.class.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $idNivelUsuario = $_POST['idNivelUsuario'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $foto = $_POST['foto'];
    $ativo = $_POST['ativo'];
    
    $usuarios = new Usuarios(
        $email, $senha, $idNivelUsuario, $nome, $cpf, $endereco, $bairro, $cidade, $uf, $cep, $telefone, $foto, $ativo
        );
    $usuarios->save();
?>