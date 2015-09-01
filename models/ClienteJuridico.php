<?php
require_once('Cliente.php');
require_once('./interfaces/EndCobrancaInterface.php');

Class ClienteJuridico extends Cliente implements EndCobrancaInterface{

	
	protected $cep;
	protected $endereco;
	protected $cidade;
	protected $uf;

	public function getCep(){
		return $this->cep;
	}

    public function getEndereco(){
    	return $this->endereco;
    }

	public function getCidade(){
		return $this->cidade;
	}

    public function getUf(){
    	return $this->uf;
    }

    public function setCep($valor){
    	$this->cep = $valor;
    	return $this;
    }

    public function setEndereco($valor){
    	$this->endereco = $valor;
    	return $this;
    }

    public function setCidade($valor){
    	$this->cidade = $valor;
    	return $this;
    }

    public function setUf($valor){
    	$this->uf = $valor;
    	return $this;
    }

}