<?php
class Pais extends ClaseBase 
{
	public $idUsuario;
	public $idPartido;
	public $gol_visitante;
	public $gol_local;

	
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
        $usuarios=array();
        $stmt = $this->getDB()->prepare( 
            "SELECT * FROM prediccion 
            WHERE id_usuario like ? " );
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
	
	public function getPrediccion(){
        
		$NewID_u=$this->getidUsuario();
		$NewID_p=$this->getidPartido();
		$New_visitante=$this->getVisitante();
		$New_local=$this->getLocal();

        $stmt = $this->getDB()->prepare( 
            "INSERT INTO prediccion 
        (id_usuario,id_partido,gol_visitante,gol_local) 
           VALUES (?,?,?,?)" );
        $stmt->bind_param("ssisss",$NewID_u,
            $NewID_p,$New_visitante,$New_local);
        return $stmt->execute();
		
	}
}
?>
