<div class="container">
    
    <CENTER><h2>OCORRÊNCIAS</h2></CENTER>

    <?php
        $acao;
        if(isset($protocolo)){
            //acao deve ser de atualizacao
            $acao = "crudOcorrencia.php?acao=atualizar&id=".$protocolo['id'];
        }else{
            $acao = "crudOcorrencia.php?acao=cadastrar";
        }
    ?>


    <form name="cadastroProtocolo" action="<?php echo $acao; ?>"
          method="POST">
        <div class="form-group">
            <label>Numero</label>
            <input type="number" name="numero" 
                   class="form-control"  required
                   placeholder="Informe o número do Protocolo"
                   value="<?php if(isset($protocolo)) echo $protocolo['numero']; ?>">
        </div>
        
    <div>
         <div class="form-group">
            <label>Ocorrências</label>

            <select name="idstatus" class="form-control" required>
                <option value="">Selecione</option>
                <?php foreach($listaStatus as $m){ ?>
                <option value="<?= $m['id'];?>"
                        <?php if(isset($protocolo) && $protocolo['idstatus']==$m['id'])
                                echo "selected"; ?> >
                    <?= $m['descricao'];?>
                </option>
                <?php } ?>
            </select>
        </div>

    
          <div class="form-group">
            <label>Observações</label>
            <input type="text" name="obs" 
                   class="form-control" 
                   placeholder="Digite uma informação relevante"
                   value="<?php if(isset($protocolo)) echo $protocolo['obs']; ?>">
            </div>
        
     
        <div>
         
            <button class="btn btn-info">Enviar</button>                       
        </div>
        
          <ul class="nav navbar-nav navbar-right">
           <li class="active"><a href="index.php">Voltar</a></li>
          </ul>
        
        
    </form>
</div>