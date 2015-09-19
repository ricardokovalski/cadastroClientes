<?php

namespace RicardoKovalski\classes\cliente\types;
use \RicardoKovalski\classes\cliente\interfaces\ClienteInterface;
use \RicardoKovalski\classes\cliente\abstracts\EndCobrancaClienteAbstract;

class Cliente extends EndCobrancaClienteAbstract implements ClienteInterface{

    protected $nome;
    protected $email;
    protected $endereco;
	protected $cep;	
	protected $cidade;
	protected $uf;
	protected $tipo;
	protected $importancia;

    public function __construct($nome, $email, $endereco, $cep, $cidade, $uf, $tipo, $importancia){
        $this->nome = $nome;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->cep = $cep;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->tipo = $tipo;
        $this->importancia = $importancia;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function getCep(){
        return $this->cep;
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

    public function retornaDescricaoTipoCliente($valor){
        if($valor == 'F') return utf8_encode('Pessoa física');
        else return utf8_encode('Pessoa jurídica');
    }

}