<?php
class Prediccion extends ClaseBase {
	private $idUsuario;
	private $idPartido;
	private $gol_visitante;
	private $gol_local;

	
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="prediccion";
        parent::__construct($tabla);

    }

	//Getters
	public function getidUsuario(){
		return $this->idUsuario;
	}
	public function getidPartido(){
		return $this->idPartido;
	}
	public function getVisitante(){
		return $this->gol_visitante;
	}
	public function getLocal(){
		return $this->gol_local;
	}

	//Setters
	public function setIDusuario($idUsuario_){
		$this->idUsuario=$idUsuario_;
	}
	public function setidPartido($idPartido_){
		$this->idPartido=$idPartido_;
	}
	public function setVisitante($gol_visitante_){
		$this->gol_visitante=$gol_visitante_;
	}
	public function setLocal($gol_local_){
		$this->gol_local=$gol_local_;
	}


	public function getBusqueda($buscar){
        $predicciones=array();
        $stmt = $this->getDB()->prepare( 
            "SELECT * FROM prediccion 
            WHERE id_usuario like ? " );
        // Le agrego % para busque los que empiezan con la letra o terminan
        $buscar= '%'.$buscar.'%';
        $stmt->bind_param( "s",$buscar);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($fila=$resultado->fetch_object()) {
            $prediccion= new Prediccion ($fila);
                $predicciones[]=$prediccion;
        }
        return $predicciones;
    }

	public function getPorcentaje($buscar){
		
	}

}
?>
