<?php
include_once './classes/categorias.class.php';

    $descricao = $_POST['descricao'];

    
    $Categorias = new Categorias(
        $descricao
        );

?>