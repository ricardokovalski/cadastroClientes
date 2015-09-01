<?php

require_once('./interfaces/ClienteInterface.php');

class Cliente implements ClienteInterface{

	protected $nome;
	protected $sobrenome;
	protected $email;
	protected $dt_nascimento;
	protected $telefone;
	protected $tipo;
	protected $importancia;
	

	public function __construct($nome, $sobrenome, $email, $dt_nascimento, $telefone, $tipo, $importancia){

		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->email = $email;
		$this->dt_nascimento = $dt_nascimento;
		$this->telefone = $telefone;
		$this->tipo = $tipo;
		$this->importancia = $importancia;
	}


	public function getNome(){
		return $this->nome;
	}

	public function getSobrenome(){
		return $this->sobrenome;
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

	public function getTipo(){
		return $this->tipo;
	}

	public function getImportancia(){
		return $this->importancia;
	}

	public function retornaDescricaoTipoCliente($valor){
		if($valor == 'J') return 'Pessoa Jurídica';
		else return 'Pessoa Física';
	}

	public function verificaSobrenome($valor){
		if(is_null($valor)) return false;
		return true;
	}
}