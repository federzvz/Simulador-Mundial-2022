<?php
class Grupo extends ClaseBase {
	private $Paises=[];
	private $Partidos=[];
	
	/*public function __construct($Paises_,$Partidos_){
		$this->Paises=$Paises_;
		$this->Partidos=$Partidos_;
	}*/

	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="paises";
        parent::__construct($tabla);

    }

	//Getters
	public function getPaises(){
		return $this->Paises;
	}
	public function getPartidos(){
		return $this->Partidos;
	}
	//Setters
	public function setPaises($Paises_){
		$this->Paises=$Paises_;
	}
	public function setPartidos($Partidos_){
		$this->Partidos=$Partidos_;
	}

	public function getGrupos(){
        $grupos=array();
        $stmt = $this->getDB()->prepare( 
            "SELECT * FROM grupos " );
        // Le agrego % para busque los que empiezan con la letra o terminan
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($fila=$resultado->fetch_object()) {
            $grupo= new Grupo ($fila);
                $grupos[]=$grupo;
        }
        return $grupos;
    }
}