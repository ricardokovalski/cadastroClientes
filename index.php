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
            $clientes = $catalogo->getClientes();
            
            if(isset($_POST['ascendente'])){
                ksort($clientes);
            }else if(isset($_POST['descendente'])){
                krsort($clientes);
            }
            ?>
            <br/>
            <table class="table">
                <thead>
                    <th>Indice</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Tipo de cliente</th>
                    <th>Importância</th>
                    <th>Visualizar</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($clientes as $key => $cliente) {
                    ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $cliente->getNome(); ?></td>
                            <td><?php echo $cliente->getEmail(); ?></td>
                            
                            <td><?php echo $cliente->retornaDescricaoTipoCliente($cliente->getTipo()); ?></td>
                            <td><?php echo $cliente->getImportancia(); ?></td>
                            <td><a href="dados.php?<?php echo $key+1; ?>"><button class="btn btn-info " type="submit" name="visualizar" >Visualizar</button></a></td>
                        </tr>
                    <?php
                    }
                    ?>                    
                </tbody>
            </table>

            <div> 
                <form method="post">
                    <button class="btn btn-info " type="submit" name="ascendente" >Ordem Ascendente</button>
                    <button class="btn btn-info " type="submit" name="descendente" >Ordem Descendente</button>
                    <button class="btn btn-info " type="submit" name="alfabetica" >Ordem Alfabética Nome</button>
                </form>                               
            </div>
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
