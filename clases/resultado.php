<?php
class Resultado extends ClaseBase {
	public $date;
    public $home_team;
    public $away_team;
    public $home_score;
    public $away_score;
    public $tournament;
    public $city;
    public $country;
    public $neutral;

     //Contructor que recibe un array
	public function __construct($obj=NULL) {
        //$this->db=DB::conexion();
        if(isset($obj)){
            foreach ($obj as $key => $value) {
                $this->$key=$value;
            }    
        }
        $tabla="resultados";
        parent::__construct($tabla);

    }

	public function getDate()
	{
		return $this->date;
	}

	public function setDate($date)
	{
		$this->date = $date;

		return $this;
	}

    public function getHome_team()
    {
        return $this->home_team;
    }

    public function setHome_team($home_team)
    {
        $this->home_team = $home_team;

        return $this;
    }

    public function getAway_team()
    {
        return $this->away_team;
    }
 
    public function setAway_team($away_team)
    {
        $this->away_team = $away_team;

        return $this;
    }
 
    public function getHome_score()
    {
        return $this->home_score;
    }

    public function setHome_score($home_score)
    {
        $this->home_score = $home_score;

        return $this;
    }
 
    public function getAway_score()
    {
        return $this->away_score;
    }

    public function setAway_score($away_score)
    {
        $this->away_score = $away_score;

        return $this;
    }

    public function getTournament()
    {
        return $this->tournament;
    }
 
    public function setTournament($tournament)
    {
        $this->tournament = $tournament;

        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    public function getNeutral()
    {
        return $this->neutral;
    }

    public function setNeutral($neutral)
    {
        $this->neutral = $neutral;

        return $this;
    }


    public function getUltimoResultado($local, $visitante){

        //Mostrar último resultado de cada partido
        //SELECT MAX(date) date,home_team,home_score,away_team,away_score FROM resultado WHERE home_team="Senegal" AND away_team="Egypt"

        $resultados=array();
        $stmt = $this->getDB()->prepare( "SELECT MAX(date) date, home_team, home_score, away_team, away_score FROM resultado WHERE home_team = ? AND away_team = ?" );
        // Le agrego % para busque los que empiezan con la letra o terminan
        
        $stmt->bind_param( "ss",$local, $visitante);
        $stmt->execute();
        $entidad = $stmt->get_result();
        while ($fila=$entidad->fetch_object()) {
            //$fila["nombre"] fetch_array
            //$fila->nombre fetch_object
            $resultado= new Resultado($fila);
                $resultados[]=$resultado;
        }
        return $resultados;
    }




}
?>