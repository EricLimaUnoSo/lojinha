<?php 

class Categorias {
    
    private $descricao = '';
    
    function __construct($descricao) {
        
        $this->setDescricao($descricao);
    }

    public function save(){
        $dbConnection = new DBConnection();
        $dbConnection->getConnection()->query("INSERT INTO usuario (descricao)
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