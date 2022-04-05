<?php
class Pais extends ClaseBase {
	private $idPais;
	private $Mundiales;
	private $Cant_victorias;
	private $Cant_empates;
	private $Cant_derrotas;
	private $Nom_bandera;
	
	/*public function __construct($Mundiales_,$Cant_victorias_,$Cant_empates_,$Cant_derrotas_,$Nombre_bandera_){
		$this->Mundiales=$Mundiales_;
		$this->Cant_victorias=$Cant_victorias_;
		$this->Cant_empates=$Cant_empates_;
		$this->Cant_derrotas=$Cant_derrotas_;
		$this->Nom_bandera=$Nombre_bandera_;
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
	public function getMundiales(){
		return $this->Mundiales;
	}
	public function getVictorias(){
		return $this->Cant_victorias;
	}
	public function getEmpates(){
		return $this->Cant_empates;
	}
	public function getDerrotas(){
		return $this->Cant_derrotas;
	}
	public function getNom_bandera(){
		return $this->Nom_bandera;
	}
	//Setters
	public function setMundiales($Mundiales_){
		$this->Mundiales=$Mundiales_;
	}
	public function setVictorias($Cant_victorias_){
		$this->Cant_victorias=$Cant_victorias_;
	}
	public function setEmpates($Cant_empates_){
		$this->Cant_victorias=$Cant_empates_;
	}
	public function setDerrotas($Cant_derrotas_){
		$this->Cant_derrotas=$Cant_derrotas_;
	}
	public function setNom_bandera($Nom_bandera_){
		$this->Nom_bandera=$Nom_bandera_;
	}

	public function getPaises($buscar){
        $usuarios=array();
        $stmt = $this->getDB()->prepare( 
            "SELECT * FROM paises 
            WHERE nombre like ? " );
        // Le agrego % para busque los que empiezan con la letra o terminan
        $buscar= '%'.$buscar.'%';
        $stmt->bind_param( "s",$buscar);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($fila=$resultado->fetch_object()) {
            $persona= new Pais ($fila);
                $usuarios[]=$persona;
        }
        return $usuarios;
    }
}
?>
