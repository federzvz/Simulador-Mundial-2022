<?php
require "clases/clase_base.php";
require "clases/ClaseGrupo.php";

class ControladorGrupo extends ControladorIndex {
	
	function getGrupos(){
        $grupo= new Grupo();
        $grupos= $grupo->getGrupos();
        
    }
	
}
?>