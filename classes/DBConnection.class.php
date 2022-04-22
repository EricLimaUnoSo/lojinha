<?php 

class DBConnection {
    
    private $host='';
    private $nome='';
    private $user='';
    private $password='';
    private $con='';
    
    
    function __construct() {
        
        $this->setHost('localhost');
        $this->setNome('lojinha');
        $this->setUser('developer');
        $this->setPassword($password);
        $this->setCon(mysqli_connect($this->getHost(), $this->getNome(), $this->getUser(), $this->getPassword()));
     
        if (!$this->getCon()) {
            echo 'ta errado'. mysqli_connect_errno();
            exit();
        }
    }

    public function getHost(){
        return $this->host;
    }

    public function setHost($host){
        $this->host = $host;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getUser(){
        return $this->user;
    }

    public function setUser($user){
        $this->user = $user;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getCon(){
        return $this->con;
    }

    public function setCon($con){
        $this->con = $con;
    }

}

?>