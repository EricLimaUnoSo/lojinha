<?php 
include_once '../classes/DBConnection.class.php';

class NivelUsuario {
    
    private $nivel = '';
    
    function __construct($nivel) {
        
        $this->setNivel($nivel);
    }

    public function save(){
        $dbConnection = new DBConnection();
        $dbConnection->getCon()->query("INSERT INTO nivelusuario (nivel)
            VALUES (".$this->getNivel().")");
    }
    
	public function getNivel(){
		return $this->nivel;
	}

	public function setNivel($nivel){
		$this->nivel = $nivel;
	}

}

?>