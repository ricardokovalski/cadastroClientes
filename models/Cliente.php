<?php

class Cliente{

	public $nome;
	public $email;
	public $dt_nascimento;
	public $telefone;
	public $estado;

	public function __construct($nome, $email, $dt_nascimento, $telefone, $estado){

		$this->nome = $nome;
		$this->email = $email;
		$this->dt_nascimento = $dt_nascimento;
		$this->telefone = $telefone;
		$this->estado = $estado;
	}


	public function getNome(){
		return $this->nome;
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

	public function getEstado(){
		return $this->estado;
	}

}