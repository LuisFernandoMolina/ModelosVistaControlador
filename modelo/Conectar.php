<?php

class Conectar {

public static function conexion(){
//"localhost:8889","calif","web2","calificaciones"
  if(!$conexion= new mysqli("localhost", "root", "", "constitucion")){
  	echo "Error: No se pudo conectar a MySQL." . PHP_EOL."<br>";
  	} else{
  	$conexion->query("SET NAMES 'utf8'");
  	return $conexion;

  	echo "si me conecté";
  	};

  if (!$conexion) {
      echo "Error: No se pudo conectar a MySQL." . PHP_EOL."<br>";
      echo "errno de depuración:  " . mysqli_connect_errno() . PHP_EOL."<br>";
      echo "error de depuración: " . mysqli_connect_error() . PHP_EOL."<br>";
      exit;
    };
 }



}
?>
