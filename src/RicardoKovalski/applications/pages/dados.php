<div class="container">
    <div class="page-header">
        <?php
        if(isset($_GET)) {
            
            $codigo = array_keys($_GET);
            
            foreach ($codigo as $key => $valor) {

                $valor -= 1;
        ?>
            <br/>
            <h1>Dados do Cliente</h1>
            <div class="jumbotron">
                <h4>Tipo: <strong><?php echo $clientes[$valor]->retornaDescricaoTipoCliente($clientes[$valor]->getTipo()); ?></strong></h4>
                <h4>Importância: <strong><?php echo $clientes[$valor]->getImportancia(); ?></strong></h4>
                
                <?php
                if($clientes[$valor]->getTipo() == 'F'){
                ?>
                    <h4>Nome: <strong><?php echo $clientes[$valor]->getNome(); ?></strong></h4>
                    <h4>Sobrenome: <strong><?php echo $clientes[$valor]->getSobrenome(); ?></strong></h4>
                    <h4>CPF: <strong><?php echo $clientes[$valor]->getCpf(); ?></strong></h4>
                    <h4>E-mail: <strong><?php echo $clientes[$valor]->getEmail(); ?></strong></h4>
                    <h4>Nasciemnto: <strong><?php echo $clientes[$valor]->getDtNascimento(); ?></strong></h4>
                    <h4>Telefone: <strong><?php echo $clientes[$valor]->getTelefone(); ?></strong></h4>
                <?php 
                } else if($clientes[$valor]->getTipo() == 'J'){
                ?>
                    <h4>Empresa: <strong><?php echo $clientes[$valor]->getNome(); ?></strong></h4>
                    <h4>CNPJ: <strong><?php echo $clientes[$valor]->getCnpj(); ?></strong></h4>
                    <h4>Site: <strong><?php echo $clientes[$valor]->getEmail(); ?></strong></h4>
                    <h4>Fax: <strong><?php echo $clientes[$valor]->getFax(); ?></strong></h4>
                <?php
                }
                ?>                    
            </div>

            <h1>Endereço de cobrança</h1>
            <div class="jumbotron">
                <h4>Cep: <strong><?php echo $clientes[$valor]->getCep(); ?></strong></h4>
                <h4>Endereço: <strong><?php echo $clientes[$valor]->getEndereco(); ?></strong></h4>
                <h4>Cidade: <strong><?php echo $clientes[$valor]->getCidade(); ?></strong></h4>
                <h4>UF: <strong><?php echo $clientes[$valor]->getUf(); ?></strong></h4>
                <!-- <a href="index.php"><button class="btn btn-info">Voltar</button></a>-->
            </div>
        <?php   
            }                
        }
        ?>
    </div>
</div>