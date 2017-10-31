<?php
    //Llamada al modelo
    require_once("../modelo/grupos_modelo.php");
    $grupos=new grupos_modelo();
    $datos=$grupos->get_grupos();

    //Llamada a la vista
    require_once("../vista/grupos_vista.php");
?>
