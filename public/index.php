<?php

require_once __DIR__ . '/bootstrap.php';

require_once __DIR__ . '/../src/RicardoKovalski/applications/pages/header.php';

$route = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = $route['path'];
$path = explode('/', $path);
$pagina = $path[0];

if($pagina == 'dados'){
	require_once __DIR__ . '/../src/RicardoKovalski/applications/pages/dados.php';
}else{
    require_once __DIR__ . '/../src/RicardoKovalski/applications/pages/clientes.php';
}

require_once __DIR__ . '/../src/RicardoKovalski/applications/pages/footer.php';