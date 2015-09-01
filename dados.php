<?php 
require_once('models/Catalogo.php');
?>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Clientes</title>
    <link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />    
</head>

<body>

<!-- Wrap all page content here -->
<div id="wrap">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Clientes</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="page-header">
            <?php
            $catalogo = new Catalogo();

            if(isset($_GET)) {
                
                $clientes = $catalogo->getClientes();

                $codigo = array_keys($_GET);

                foreach ($codigo as $key => $valor) {
            ?>
                <br/>
                <h1>Dados do Cliente</h1>
                <div class="jumbotron">

                    <h4>Tipo: <strong><?php echo $clientes[$valor-1]->retornaDescricaoTipoCliente($clientes[$valor-1]->getTipo()); ?></strong></h4>
                    <h4>Importância: <strong><?php echo $clientes[$valor-1]->getImportancia(); ?></strong></h4>
                    
                    <?php
                    if($clientes[$valor-1]->getTipo() == 'F'){
                    ?>
                        <h4>Nome: <strong><?php echo $clientes[$valor-1]->getNome(); ?></strong></h4>
                        <h4>Sobrenome: <strong><?php echo $clientes[$valor-1]->getSobrenome(); ?></strong></h4>
                        <h4>CPF: <strong><?php echo $clientes[$valor-1]->getCpf(); ?></strong></h4>
                        <h4>E-mail: <strong><?php echo $clientes[$valor-1]->getEmail(); ?></strong></h4>
                        <h4>Nasciemnto: <strong><?php echo $clientes[$valor-1]->getDtNascimento(); ?></strong></h4>
                        <h4>Telefone: <strong><?php echo $clientes[$valor-1]->getTelefone(); ?></strong></h4>
                    <?php 
                    } else if($clientes[$valor-1]->getTipo() == 'J'){
                    ?>
                        <h4>Empresa: <strong><?php echo $clientes[$valor-1]->getNome(); ?></strong></h4>
                        <h4>CNPJ: <strong><?php echo $clientes[$valor-1]->getCnpj(); ?></strong></h4>
                        <h4>Site: <strong><?php echo $clientes[$valor-1]->getEmail(); ?></strong></h4>
                        <h4>Fax: <strong><?php echo $clientes[$valor-1]->getFax(); ?></strong></h4>
                    <?php
                    }
                    ?>                    
                </div>

                <h1>Endereço de cobrança</h1>
                <div class="jumbotron">
                    <h4>Cep: <strong><?php echo $clientes[$valor-1]->getCep(); ?></strong></h4>
                    <h4>Endereço: <strong><?php echo $clientes[$valor-1]->getEndereco(); ?></strong></h4>
                    <h4>Cidade: <strong><?php echo $clientes[$valor-1]->getCidade(); ?></strong></h4>
                    <h4>UF: <strong><?php echo $clientes[$valor-1]->getUf(); ?></strong></h4>
                    <a href="index.php"><button class="btn btn-info">Voltar</button></a>
                </div>
            <?php   
                }                
            }
            ?>
        </div>
    </div>

    <div id="footer">
        <div class="container">
            <p class="text-muted credit">Direiros Reservados</p>
        </div>
    </div>
</div>

</body>
</html>