    <div class="container">
        <div class="page-header">    
            <?php
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
                    <button class="btn btn-info" type="submit" name="ascendente" >Ordem Ascendente</button>
                    <button class="btn btn-info" type="submit" name="descendente" >Ordem Descendente</button>
                    <button class="btn btn-info" type="submit" name="alfabetica" >Ordem Alfabética Nome</button>
                </form>                               
            </div>
        </div>
    </div>