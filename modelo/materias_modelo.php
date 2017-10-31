<?php
    class materias_modelo {

    private $db;
    private $materias;

    public function __construct(){
        require_once("Conectar.php");
        $this->db=Conectar::conexion();
        $this->materias=array();
    }
    public function get_materias(){
        if($consulta=$this->db->query("Select * from materias where Grupos_idGrupos=1")){
           //echo "datos cargados"; //sólo se usa para comprobar que si se cargaron los datos
        };
        while($filas=$consulta->fetch_assoc()){
           $this->materias[]=$filas;
        }
        return $this->materias;
    }
}

?>
