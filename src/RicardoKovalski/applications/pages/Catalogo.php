<?php

use \RicardoKovalski\classes\databases\Conexao as Conexao;
use \RicardoKovalski\classes\databases\Crud as Crud;
use \RicardoKovalski\classes\cliente\types\Cliente as Cliente;

$dados = new Crud(Conexao::getDatabase());

$clientesBanco = $dados->read();

$clientes = array();

foreach($clientesBanco as $cliente){

	$clienteVO = new Cliente($cliente['nome'], $cliente['email'], $cliente['endereco'], $cliente['cep'], $cliente['cidade'], $cliente['estado'], $cliente['tipo'], $cliente['estrela']);

    $clienteVO->setIdentidade($cliente['cpf_cnpj'])
            ->setCobrTelefone($cliente['telefone'])
            ->setCobrEndereco($cliente['cobrEndereco'])
            ->setCobrCep($cliente['cobrCep'])
            ->setCobrCidade($cliente['cobrCidade'])
            ->setCobrUf($cliente['cobrUf']);

    $clientes[] = $clienteVO;
}
