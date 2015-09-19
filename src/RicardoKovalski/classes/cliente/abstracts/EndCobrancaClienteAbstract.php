<?php

namespace RicardoKovalski\classes\cliente\abstracts;

abstract class EndCobrancaClienteAbstract{

    protected $identidade;
	protected $cobrTelefone;
    protected $cobrEndereco;
    protected $cobrCep;
    protected $cobrCidade;
    protected $cobrUf;

    public function setIdentidade($identidade){

        $this->identidade = $identidade;
        return $this;
    }

    public function setCobrTelefone($cobrTelefone){

        $this->cobrTelefone = $cobrTelefone;
    	return $this;
    }

    public function setCobrEndereco($cobrEndereco){
    	$this->cobrEndereco = $cobrEndereco;
    	return $this;
    }

    public function setCobrCep($cobrCep){
    	$this->cobrCep = $cobrCep;
    	return $this;
    }

    public function setCobrCidade($cobrCidade){
    	$this->cobrCidade = $cobrCidade;
    	return $this;
    }

    public function setCobrUf($cobrUf){
    	$this->cobrUf = $cobrUf;
    	return $this;
    }

    public function getIdentidade(){

        if($this->identidade == null && method_exists($this, 'getCpf')){
            return $this->getCpf();
        }else if($this->identidade == null && method_exists($this, 'getCnpj')){
            return $this->getCnpj();
        }else{
            return $this->identidade;
        }
    }

    public function getCobrTelefone(){
    	
        if($this->cobrTelefone == null && method_exists($this,'getCelular')){
            return $this->getCelular();
        }elseif($this->cobrTelefone == null && method_exists($this,'getFax')){
            return $this->getFax();
        }else{
            return $this->cobrTelefone;
        }
    }

    public function getCobrEndereco(){
    	return $this->cobrEndereco;
    }

    public function getCobrCep(){
    	return $this->cobrCep;
    }

    public function getCobrCidade(){
    	return $this->cobrCidade;
    }

    public function getCobrUf(){
    	return $this->cobrUf;
    }
}
