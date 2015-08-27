<?php
require_once('Cliente.php');

class Catalogo extends Cliente{

	private $clientes;

	function __construct(){

		$this->clientes = new ArrayObject();

		$this->clientes->append(new Cliente('Diego','diego.css@gmail.com','12/08/1989','(12) 1111-2222','SP'));
		$this->clientes->append(new Cliente('Larissa','larissa.zend@gmail.com','19/05/1966','(23) 2222-3333','PR'));
		$this->clientes->append(new Cliente('Alisson','alisson.linux@gmail.com','01/07/1955','(34) 3333-4444','RS'));
		$this->clientes->append(new Cliente('Carla','carla.html@gmail.com','19/05/1990','(54) 5555-4444','SC'));
		$this->clientes->append(new Cliente('Douglas','douglas.laravel@gmail.com','28/04/1959','(56) 6666-5555','RS'));
		$this->clientes->append(new Cliente('João','joao.git@gmail.com','07/10/1979','(77) 7788-9900','SP'));
		$this->clientes->append(new Cliente('Bob','bob.js@gmail.com','22/12/1980','(98) 9898-0000','SP'));
		$this->clientes->append(new Cliente('Fabiana','fafiana.mysql@gmail.com','15/09/1978','(12) 7788-9955','PR'));
		$this->clientes->append(new Cliente('Melanny','melanny.oracle@gmail.com','01/03/1982','(88) 4455-7738','SC'));
		$this->clientes->append(new Cliente('Karen','karen.java@gmail.com','24/01/1987','(44) 8909-7764','SC'));

		$this->clientes->asort();
	}

	public function getClientes(){
		return (array)$this->clientes;
	}
	
}