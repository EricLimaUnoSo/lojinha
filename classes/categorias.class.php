<?php 
include_once '../classes/DBConnection.class.php';

class Categorias {
    
    private $descricao = '';
    
    function __construct($descricao) {
        
        $this->setDescricao($descricao);
    }

    public function save(){ echo 'asdw';
        $dbConnection = new DBConnection();
        $dbConnection->getCon()->query("INSERT INTO categorias (descricao)
            VALUES ('".$this->getDescricao()."')");
    }
    
    
	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

}

?>