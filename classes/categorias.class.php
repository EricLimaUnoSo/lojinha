<?php 

class Categorias {
    
    private $idCategoria = '';
    private $descricao = '';
    
    function __construct($idCategoria, $descricao) {
        
        $this->setIdCategoria($idCategoria);
        $this->setDescricao($descricao);
    }

	public function getIdCategoria(){
		return $this->idCategoria;
	}

	public function setIdCategoria($idCategoria){
		$this->idCategoria = $idCategoria;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

}

?>