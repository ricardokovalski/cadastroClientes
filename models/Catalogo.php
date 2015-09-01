<?php
require_once('ClienteFisico.php');
require_once('ClienteJuridico.php');

class Catalogo extends Cliente{

	private $clientes;

	function __construct(){

		$this->clientes = new ArrayObject();

		$this->clientes->append(new ClienteJuridico('Solutions CSS Diego',null,'diego.css@gmail.com','12/08/1989','(12) 1111-2222','J','5 estrelas'));
		$this->clientes->append(new ClienteFisico('Larissa','Del Castro','larissa.zend@gmail.com','19/05/1966','(23) 2222-3333','F','4 estrelas'));
		$this->clientes->append(new ClienteFisico('Alisson','Kroft','alisson.linux@gmail.com','01/07/1955','(34) 3333-4444','F','4 estrelas'));
		$this->clientes->append(new ClienteJuridico('Sites da Carla',null,'carla.html@gmail.com','19/05/1990','(54) 5555-4444','J','2 estrelas'));
		$this->clientes->append(new ClienteJuridico('The Laravel Man',null,'douglas.laravel@gmail.com','28/04/1959','(56) 6666-5555','J','5 estrelas'));
		$this->clientes->append(new ClienteFisico('João','Dos Santos','joao.git@gmail.com','07/10/1979','(77) 7788-9900','F','1 estrela'));
		$this->clientes->append(new ClienteJuridico('Bob Construct',null,'bob.js@gmail.com','22/12/1980','(98) 9898-0000','J','3 estrelas'));
		$this->clientes->append(new ClienteFisico('Fabiana','Miller','fafiana.mysql@gmail.com','15/09/1978','(12) 7788-9955','F','2 estrelas'));
		$this->clientes->append(new ClienteJuridico('Oracle Girl',null,'melanny.oracle@gmail.com','01/03/1982','(88) 4455-7738','J','5 estrelas'));
		$this->clientes->append(new ClienteFisico('Karen','Julio Pierre','karen.java@gmail.com','24/01/1987','(44) 8909-7764','F','4 estrelas'));

		$this->clientes->asort();

		$this->clientes[0]->setCep('11.111-111')->setEndereco('Rua CSS, 111')->setCidade('São Paulo')->setUf('SP');
		$this->clientes[1]->setCep('22.222-222')->setEndereco('Condomínio ZEND, 222')->setCidade('Porto Alegre')->setUf('RS');
		$this->clientes[2]->setCep('33.333-333')->setEndereco('Av. do Linux, 333')->setCidade('Belo Horizonte')->setUf('MG');
		$this->clientes[3]->setCep('44.444-444')->setEndereco('Estrada do HTML, 444')->setCidade('Coritiba')->setUf('PR');
		$this->clientes[4]->setCep('55.555-555')->setEndereco('Rua Laravel, 555')->setCidade('Esteio')->setUf('RS');
		$this->clientes[5]->setCep('66.666-666')->setEndereco('Rua dos gits, 666')->setCidade('Floripa')->setUf('SC');
		$this->clientes[6]->setCep('77.777-777')->setEndereco('Av. JS , 777')->setCidade('Blumenau')->setUf('SC');
		$this->clientes[7]->setCep('88.888-888')->setEndereco('Condominio do Mysql, 888')->setCidade('São Paulo')->setUf('SP');
		$this->clientes[8]->setCep('99.999-999')->setEndereco('Condomínio do oracle, 999')->setCidade('Rio de Janeiro')->setUf('RJ');
		$this->clientes[9]->setCep('12.345-678')->setEndereco('Rua Java, 678')->setCidade('Porto alegre')->setUf('RS');

	}

	public function getClientes(){
		return (array)$this->clientes;
	}
	
}