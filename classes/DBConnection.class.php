<?php 

class DBConnection {
    
    private $host='';
    private $user='';
    private $password='';
    private $nome='';
    private $con='';
    
    
    function __construct() { echo 'qualquer coisa';
        
        $this->setHost('localhost');
        $this->setUser('root');
        $this->setPassword('123456');
        $this->setNome('lojinha');
        $this->setCon(mysqli_connect($this->getHost(), $this->getUser(),$this->getPassword(), $this->getNome()));
     
        if ($this->getCon()) {
            echo 'deu certo';
        } else {
            echo 'cagou';
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