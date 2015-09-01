<?php
require_once('Cliente.php');
require_once('./interfaces/ClienteJuridicoInterface.php');

Class ClienteJuridico extends Cliente implements ClienteJuridicoInterface{

	protected $nome;
    protected $cnpj;
    protected $email;
    protected $fax;
    

    public function __construct($nome, $cnpj, $email, $fax){

        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->email = $email;
        $this->fax = $fax;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCnpj(){
        return $this->cnpj;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getFax(){
        return $this->fax;
    }

}