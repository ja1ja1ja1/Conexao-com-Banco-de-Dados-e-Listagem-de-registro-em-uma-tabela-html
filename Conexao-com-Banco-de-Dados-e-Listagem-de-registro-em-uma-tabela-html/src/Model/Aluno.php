<?php
namespace App\Model;
class Aluno{

    private $id;
    private $nome;

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($nomeX){
        $this->nome = $nomeX;
    }

    public function getNome(){
        return $this->nome;
    }
    public function __tostring(): String 
    {
        return $this->nome." tem Id ".$this->id;
    }

}