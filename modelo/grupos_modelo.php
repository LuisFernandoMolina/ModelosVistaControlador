<?php
    class grupos_modelo {

    private $db;
    private $grupos;

    public function __construct(){
        require_once("../modelo/conectar.php");
        $this->db=Conectar::conexion();
        $this->grupos=array();
    }
    public function get_grupos(){
        if($consulta=$this->db->query("select * from grupos")){
        echo "se cargaron los datos";

        }else{
            echo "Error: " . PHP_EOL."<br>";

        };

        while($filas=$consulta->fetch_assoc()){
                   $this->grupos[]=$filas;
                }
                return $this->grupos;


    }
}

?>
