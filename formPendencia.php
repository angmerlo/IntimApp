<div class="container">
    
    <CENTER><h2>LANÇAR PENDENTES</h2></CENTER>

    <?php
        $acao;
        if(isset($protocolo)){
            //acao deve ser de atualizacao
            $acao = "crudPendencia.php?acao=atualizar&id=".$protocolo['id'];
        }else{
            $acao = "crudPendencia.php?acao=cadastrar";
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
         
           
    
        <div>
         
            <button class="btn btn-info">Enviar</button>                       
        </div>
        
          <ul class="nav navbar-nav navbar-right">
           <li class="active"><a href="index.php">Voltar</a></li>
          </ul>
        
        
    </form>
</div>

