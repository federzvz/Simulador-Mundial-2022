<?php

class Partido extends ClaseBase {
    private $pais1;
    private $pais2;
    private $idPartido;

    public function __construct($pais1, $pais2, $idPartido){
		$this->pais1=$pais1;
		$this->pais2=$pais2;
        $this->$idPartido;
	}	

    public function getPais1() {
        return $this->pais1;
    }

    public function setPais1($pais1){
        $this->email=$pais1;
    }

    public function getPais2() {
        return $this->pais2;
    }

    public function setPais2($pais2){
        $this->pais2=$pais2;
    }

    public function getIdPartido() {
        return $this->idPartido;
    }

    public function setIdPartido($idPartido){
        $this->idPartido=$idPartido;
    }

}

?>