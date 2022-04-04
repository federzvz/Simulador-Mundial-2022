<?php
class Grupo
{
	private $Paises=[];
	private $Partidos=[];
	
	public function __construct($Paises_,$Partidos_){
		$this->Paises=$Paises_;
		$this->Partidos=$Partidos_;
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
}
?>
