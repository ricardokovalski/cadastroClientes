<?php

use \RicardoKovalski\classes\cliente\types\ClienteJuridico;
use \RicardoKovalski\classes\cliente\types\ClienteFisico;

$clientes = new ArrayObject();

$clientes->append(new ClienteJuridico('Solutions CSS Diego','67.025.128/0001-80','diego.css@gmail.com','(12) 1111-2222'));
$clientes[0]->setCep('11.111-111')
			->setEndereco('Rua CSS, 111')
			->setCidade('São Paulo')
			->setUf('SP')
			->setTipo('J')
			->setImportancia('5 estrelas');


$clientes->append(new ClienteFisico('Larissa','Del Castro','786.323.852-83','larissa.zend@gmail.com','19/05/1966','(23) 2222-3333'));
$clientes[1]->setCep('22.222-222')
			->setEndereco('Condomínio ZEND, 222')
			->setCidade('Porto Alegre')
			->setUf('RS')
			->setTipo('F')
			->setImportancia('4 estrelas');

$clientes->append(new ClienteFisico('Alisson','Kroft','673.214.554-16','alisson.linux@gmail.com','01/07/1955','(34) 3333-4444'));
$clientes[2]->setCep('33.333-333')
			->setEndereco('Av. do Linux, 333')
			->setCidade('Belo Horizonte')
			->setUf('MG')
			->setTipo('F')
			->setImportancia('2 estrelas');

$clientes->append(new ClienteJuridico('Sites da Carla','81.833.543/0001-91','carla.html@gmail.com','(54) 5555-4444'));
$clientes[3]->setCep('44.444-444')
			->setEndereco('Estrada do HTML, 444')
			->setCidade('Coritiba')
			->setUf('PR')
			->setTipo('J')
			->setImportancia('1 estrela');

$clientes->append(new ClienteJuridico('The Laravel Man','61.488.762/0001-73','douglas.laravel@gmail.com','(56) 6666-5555'));
$clientes[4]->setCep('55.555-555')
			->setEndereco('Rua Laravel, 555')
			->setCidade('Esteio')
			->setUf('RS')
			->setTipo('J')
			->setImportancia('5 estrelas');

$clientes->append(new ClienteFisico('João','Dos Santos','232.194.276-26','joao.git@gmail.com','07/10/1979','(77) 7788-9900'));
$clientes[5]->setCep('66.666-666')
			->setEndereco('Rua dos gits, 666')
			->setCidade('Floripa')
			->setUf('SC')
			->setTipo('F')
			->setImportancia('3 estrelas');

$clientes->append(new ClienteJuridico('Bob Construct','03.425.435/0001-76','bob.js@gmail.com','(98) 9898-0000'));
$clientes[6]->setCep('77.777-777')
			->setEndereco('Av. JS , 777')
			->setCidade('Blumenau')
			->setUf('SC')
			->setTipo('J')
			->setImportancia('4 estrelas');

$clientes->append(new ClienteFisico('Fabiana','Miller','566.235.106-64','fafiana.mysql@gmail.com','15/09/1978','(12) 7788-9955'));
$clientes[7]->setCep('88.888-888')
			->setEndereco('Condominio do Mysql, 888')
			->setCidade('São Paulo')
			->setUf('SP')
			->setTipo('F')
			->setImportancia('2 estrelas');

$clientes->append(new ClienteJuridico('Oracle Girl','22.158.498/0001-58','melanny.oracle@gmail.com','(88) 4455-7738'));
$clientes[8]->setCep('99.999-999')
			->setEndereco('Condomínio do oracle, 999')
			->setCidade('Rio de Janeiro')
			->setUf('RJ')
			->setTipo('J')
			->setImportancia('3 estrelas');

$clientes->append(new ClienteFisico('Karen','Julio Pierre','810.612.133-07','karen.java@gmail.com','24/01/1987','(44) 8909-7764'));
$clientes[9]->setCep('12.345-678')
		    ->setEndereco('Rua Java, 678')
		    ->setCidade('Porto alegre')
		    ->setUf('RS')
		    ->setTipo('F')
		    ->setImportancia('1 estrela');

$clientes->asort();

$clientes = (array)$clientes;