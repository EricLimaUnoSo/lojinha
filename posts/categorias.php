<?php
include_once '../classes/categorias.class.php';

    $descricao = $_POST['descricao'];

    
    $categorias = new Categorias(
        $descricao
        );
    $categorias->save();

?>