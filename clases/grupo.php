<?php
require "clases/pais.php";
class Grupo extends ClaseBase
{
	private $Paises = [];
	private $Partidos = [];
	private $Nombre_grupo;

	/*public function __construct($Paises_,$Partidos_){
		$this->Paises=$Paises_;
		$this->Partidos=$Partidos_;
	}*/

	public function __construct($obj = NULL)
	{
		//$this->db=DB::conexion();
		if (isset($obj)) {
			foreach ($obj as $key => $value) {
				$this->$key = $value;
			}
		}
		$tabla = "grupo";
		parent::__construct($tabla);
	}

	//Getters
	public function getPaises()
	{
		return $this->Paises;
	}
	public function getNombre_grupo()
	{
		return $this->Nombre_grupo;
	}
	public function getPartidos()
	{
		return $this->Partidos;
	}
	//Setters
	public function setPaises($Paises_)
	{
		$this->Paises = $Paises_;
	}
	public function setPartidos($Partidos_)
	{
		$this->Partidos = $Partidos_;
	}


	public function getGrupos()
	{
		$grupos = array();
		$stmt = $this->getDB()->prepare(
			"SELECT * FROM grupo"
		);
		// Le agrego % para busque los que empiezan con la letra o terminan
		$stmt->execute();
		$resultado = $stmt->get_result();
		while ($fila = $resultado->fetch_object()) {
			$grupo = new Grupo($fila);
			$grupos[] = $grupo;
			$stmt2 = $this->getDB()->prepare(
				"SELECT * FROM paises WHERE id_pais=? OR id_pais=? OR id_pais=? OR id_pais=?"
			);
			$stmt2->bind_param("iiii", $fila->id_pais1, $fila->id_pais2, $fila->id_pais3, $fila->id_pais4);
			$stmt2->execute();
			$paisesGrupo = $stmt2->get_result();
			$paises = [];
			while ($fila2 = $paisesGrupo->fetch_object()) {
				$pais = new Pais($fila2);
				$paises[] = $pais;
			}
			$grupo->setPaises($paises);
		}

		return $grupos;
	}
}