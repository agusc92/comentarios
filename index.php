<?php
    require_once 'controlador.php';
    $controlador = new controlador();

    $controlador->estructuraSuperior();

    $controlador->listar();
    $controlador->mostrarFormulario();
    $controlador->estructuraInferior();
    

    


?>