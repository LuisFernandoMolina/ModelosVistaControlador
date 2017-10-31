<?php
    require_once("../modelo/materias_modelo.php");
    $materias= new materias_modelo();
    $datos= $materias->get_materias();
    require_once("../vista/materias_vista.php");
?>
