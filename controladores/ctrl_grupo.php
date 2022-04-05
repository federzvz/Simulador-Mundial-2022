<?php
require "clases/clase_base.php";
require "clases/ClaseGrupo.php";

class ControladorGrupo extends ControladorIndex {
	
	function getGrupos(){
        $grupos=getGrupos();
    }
	
}
?>