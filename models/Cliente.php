<?php

require_once('./interfaces/EndCobrancaInterface.php');

class Cliente implements EndCobrancaInterface{

	protected $cep;
	protected $endereco;
	protected $cidade;
	protected $uf;
	protected $tipo;
	protected $importancia;

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

    public function getTipo(){
        return $this->tipo;
    }

    public function getImportancia(){
        return $this->importancia;
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

    public function setTipo($valor){
    	$this->tipo = $valor;
    	return $this;
    }

    public function setImportancia($valor){
    	$this->importancia = $valor;
    	return $this;
    }

    public function retornaDescricaoTipoCliente($valor){
        if($valor == 'F') return 'Pessoa Física';
        return 'Pessoa Jurídica';
    }
}