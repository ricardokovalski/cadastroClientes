<?php

namespace RicardoKovalski\classes\cliente\types;

Class ClienteFisico extends Cliente{

	protected $cpf;
    protected $celular;

    public function setCpf($cpf){
        $this->cpf = $cpf;
        return $this;
    }

    public function setCelular($celular){
        $this->celular = $celular;
        return $this;
    }
    
    public function getCpf(){
        return $this->cpf;
    }

    public function getCelular(){
        return $this->celular;
    }
}