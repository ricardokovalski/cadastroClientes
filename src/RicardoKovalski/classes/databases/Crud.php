<?php

namespace RicardoKovalski\classes\databases;
use \RicardoKovalski\classes\databases\Conexao as Conexao;
use \RicardoKovalski\classes\cliente\types\Cliente as Cliente;

class Crud{

	private $conexao;

    public function __construct(\PDO $conexao) {

        $conexao instanceof \PDO;
        $this->conexao = $conexao;
    }

    public function persistencia(Cliente $clientes){

    	try{
			$this->conexao->beginTransaction();
			$query = "INSERT INTO clientes(
					nome, email, endereco, cep, cidade, estado, tipo, estrela, 
					cpf_cnpj, telefone, cobrEndereco, cobrCep, cobrCidade, cobrUf
				)VALUES(:nome, :email, :endereco, :cep, :cidade, :estado, :tipo, :estrela,
					:cpf_cnpj, :telefone, :cobrEndereco, :cobrCep, :cobrCidade, :cobrUf)";

			$dados = $this->conexao->prepare($query);
			$dados->execute(
				array(
					"nome" => $clientes->getNome(),
					"email" => $clientes->getEmail(),
					"endereco" => $clientes->getEndereco(),
					"cep" => $clientes->getCep(),
					"cidade" => $clientes->getCidade(),
					"estado" => $clientes->getUf(),
					"tipo" => $clientes->getTipo(),
					"estrela" => $clientes->getImportancia(),
					"cpf_cnpj" => $clientes->getIdentidade(),
					"telefone" => $clientes->getCobrTelefone(),
					"cobrEndereco" => $clientes->getCobrEndereco(),
					"cobrCep" => $clientes->getCobrCep(),
					"cobrCidade" => $clientes->getCobrCidade(),
					"cobrUf" => $clientes->getCobrUf()
				)
			);
			$this->conexao->lastInsertId();
		}catch(PDOException $e){
			echo "ERROR: Não foi possível cadastrar dados no banco!";
            die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
		}
    }

    public function flush(){

        try{

            $this->conexao->commit();

        }catch(PDOException $e){

            echo "ERROR: Não foi possível cadastrar dados no banco!";
            die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
        }
        return true;
    }
    
    public function read(){

        try{

    		$query = "SELECT * FROM  clientes";
            $listar = $this->conexao->prepare($query);
            $listar->execute();
            $dados = $listar->fetchAll(\PDO::FETCH_ASSOC);

		}catch(PDOException $e){        

            echo "ERROR: Não foi possível listar dados do banco!";
            die("Código: {$e->getCode()} <br> Mensagem: {$e->getMessage()} <br>  Arquivo: {$e->getFile()} <br> linha: {$e->getLine()}");
        }
        return $dados;
    }

}