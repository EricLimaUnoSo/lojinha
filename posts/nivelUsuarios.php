<?php
include_once '../classes/nivelUsuarios.class.php';

    $nivel = $_POST['nivel'];
    
    $nivelUsuario = new NivelUsuario(
        $nivel
        );
    $nivelUsuario->save();
?>