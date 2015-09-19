<?php

require_once './bootstrap.php';

use \RicardoKovalski\classes\databases\Conexao;
use \RicardoKovalski\classes\databases\Crud;
use \RicardoKovalski\classes\cliente\types\ClienteJuridico;
use \RicardoKovalski\classes\cliente\types\ClienteFisico;

$clientes = new ClienteJuridico('Solutions CSS Diego', 'diego.css@gmail.com', 'Rua CSS, 111', '11.111-111', 'São Paulo', 'SP', 'J', 5);
$clientes->setCnpj('67.025.128/0001-80')
		->setFax('(12) 1111-2222')
		->setCobrEndereco('Rua CSS, 111')
		->setCobrCep('Rua CSS, 111')
		->setCobrTelefone('(12) 1111-4321')
		->setCobrCidade('São Paulo')
		->setCobrUf('SP');

$insert = new Crud(Conexao::getDatabase());
$insert->persistencia($clientes);
$insert->flush();

$clientes = new ClienteFisico('Larissa', 'larissa.zend@gmail.com', 'Condomínio ZEND, 222', '22.222-222', 'Porto Alegre', 'RS', 'F', 4);
$clientes->setCpf('786.323.852-83')
		->setCelular('(23) 2222-3333')
		->setCobrEndereco('Condomínio ZEND, 222')
		->setCobrCep('22.222-222')
		->setCobrTelefone('(23) 2222-0123')
		->setCobrCidade('Porto Alegre')
		->setCobrUf('RS');

$insert = new Crud(Conexao::getDatabase());
$insert->persistencia($clientes);
$insert->flush();

$clientes = new ClienteFisico('Alisson', 'alisson.linux@gmail.com', 'Av. do Linux, 333', '33.333-333', 'Belo Horizonte', 'MG', 'F', 2);
$clientes->setCpf('673.214.554-16')
		->setCelular('(34) 3333-4444')
		->setCobrEndereco('Av. do Linux, 333')
		->setCobrCep('33.333-333')
		->setCobrTelefone('(34) 3333-4444')
		->setCobrCidade('Belo horizonte')
		->setCobrUf('MG');

$insert = new Crud(Conexao::getDatabase());
$insert->persistencia($clientes);
$insert->flush();

$clientes = new ClienteJuridico('Sites da Carla', 'carla.html@gmail.com', 'Estrada do HMTL, 444', '44.444-444', 'Curitiba', 'PR', 'J', 1);
$clientes->setCnpj('81.833.543/0001-91')
		->setFax('(54) 5555-4444')
		->setCobrEndereco('Estrada do HTML, 444')
		->setCobrCep('44.444-444')
		->setCobrTelefone('(54) 5555-4444')
		->setCobrCidade('Curitiba')
		->setCobrUf('PR');

$insert = new Crud(Conexao::getDatabase());
$insert->persistencia($clientes);
$insert->flush();

$clientes = new ClienteJuridico('The Laravel Man', 'douglas.laravel@gmail.com', 'Rua Laravel, 555', '55.555-555', 'Esteio', 'RS', 'J', 5);
$clientes->setCnpj('61.488.762/0001-73')
		->setFax('(56) 6666-5555')
		->setCobrEndereco('Rua Laravel, 555')
		->setCobrCep('55.555-555')
		->setCobrTelefone('(56) 6666-5678')
		->setCobrCidade('Porto Alegre')
		->setCobrUf('PR');

$insert = new Crud(Conexao::getDatabase());
$insert->persistencia($clientes);
$insert->flush();

$clientes = new ClienteFisico('João dos Santos', 'joao.git@gmail.com', 'Rua dos gits, 666', '66.666-666', 'Floripa', 'SC', 'F', 3);
$clientes->setCpf('232.194.276-26')
		->setCelular('(77) 7788-9900')
		->setCobrEndereco('Rua dos gits, 666')
		->setCobrCep('66.666-666')
		->setCobrTelefone('(77) 7788-9876')
		->setCobrCidade('Floripa')
		->setCobrUf('SC');

$insert = new Crud(Conexao::getDatabase());
$insert->persistencia($clientes);
$insert->flush();

$clientes = new ClienteJuridico('Bob Construct', 'bob.js@gmail.com', 'Av. JS , 777', '77.777-777', 'Blumenau', 'SC', 'J', 4);
$clientes->setCnpj('61.488.762/0001-73')
		->setFax('(98) 9898-0000')
		->setCobrEndereco('Av. JS , 777')
		->setCobrCep('77.777-777')
		->setCobrTelefone('(98) 9898-0000')
		->setCobrCidade('Blumenau')
		->setCobrUf('PR');

$insert = new Crud(Conexao::getDatabase());
$insert->persistencia($clientes);
$insert->flush();

$clientes = new ClienteFisico('Fabiana Muller', 'fabiana.mysql@gmail.com', 'Condomíno do Mysql, 888', '88.888-888', 'São Paulo', 'SP', 'F', 2);
$clientes->setCpf('566.235.106-64')
		->setCelular('(12) 7788-9955')
		->setCobrEndereco('Condominio do Mysql, 888')
		->setCobrCep('88.888-888')
		->setCobrTelefone('(12) 7788-9595')
		->setCobrCidade('São Paulo')
		->setCobrUf('SP');

$insert = new Crud(Conexao::getDatabase());
$insert->persistencia($clientes);
$insert->flush();

$clientes = new ClienteJuridico('Oracle Girl', 'melanny.oracle@gmail.com', 'Condomínio do oracle, 999', '99.999-999', 'Rio de Janeiro', 'RJ', 'J', 3);
$clientes->setCnpj('22.158.498/0001-58')
		->setFax('(88) 4455-7738')
		->setCobrEndereco('Condomínio do oracle, 999')
		->setCobrCep('99.999-999')
		->setCobrTelefone('(88) 4455-7654')
		->setCobrCidade('Rio de Janeiro')
		->setCobrUf('RJ');

$insert = new Crud(Conexao::getDatabase());
$insert->persistencia($clientes);
$insert->flush();

$clientes = new ClienteFisico('Karen Julio Pierre', 'karen.java@gmail.com', 'Rua Java, 678', '12.345-678', 'Porto Alegre', 'RS', 'F', 5);
$clientes->setCpf('810.612.133-07')
		->setCelular('(44) 8909-7764')
		->setCobrEndereco('Rua Java, 678')
		->setCobrCep('12.345-678')
		->setCobrTelefone('(44) 8909-7764')
		->setCobrCidade('Porto Alegre')
		->setCobrUf('RS');

$insert = new Crud(Conexao::getDatabase());
$insert->persistencia($clientes);
$insert->flush();
