<?php
class Pais
{
	private $Mundiales;
	private $Cant_victorias;
	private $Cant_empates;
	private $Cant_derrotas;
	private $Nom_bandera;
	
	public function __construct($Mundiales_,$Cant_victorias_,$Cant_empates_,$Cant_derrotas_,$Nombre_bandera_){
		$this->Mundiales=$Mundiales_;
		$this->Cant_victorias=$Cant_victorias_;
		$this->Cant_empates=$Cant_empates_;
		$this->Cant_derrotas=$Cant_derrotas_;
		$this->Nom_bandera=$Nombre_bandera_;
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
}
?>
