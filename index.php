<?php
    require_once 'modelo/modelo.php';
    $modelo = new modelo();

    $datos = $modelo->traer();

    print_r($datos);

?>