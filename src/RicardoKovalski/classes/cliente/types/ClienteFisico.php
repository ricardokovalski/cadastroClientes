<?php

namespace RicardoKovalski\classes\cliente\types;

use \RicardoKovalski\classes\cliente\interfaces\ClienteFisicoInterface;

Class ClienteFisico extends Cliente implements ClienteFisicoInterface{

	protected $nome;
    protected $sobrenome;
    protected $cpf;
    protected $email;
    protected $dt_nascimento;
    protected $telefone;
    

    function __construct($nome, $sobrenome, $cpf, $email, $dt_nascimento, $telefone){

        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->dt_nascimento = $dt_nascimento;
        $this->telefone = $telefone;
    }


    public function getNome(){
        return $this->nome;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getDtNascimento(){
        return $this->dt_nascimento;
    }

    public function getTelefone(){
        return $this->telefone;
    }

	
}