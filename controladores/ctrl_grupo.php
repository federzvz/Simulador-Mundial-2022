<?php
require "clases/clase_base.php";
require "clases/ClaseGrupo.php";

class ControladorGrupo extends ControladorIndex {
	
	function getGrupos(){
        $grupo= new Grupo();
        $grupos= $grupo->getGrupos();
        
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
?>