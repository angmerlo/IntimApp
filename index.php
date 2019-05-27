<?php
    session_start();
    if(!isset($_SESSION['autenticado'])){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

      <title>IntimaApp</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables-->
    <link href="plugins/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <!--<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">-->
    <!--<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            
            <a class="navbar-brand" href="#">ADS - 2019</a>                  <a class="navbar-brand" href="#">IntimaApp</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            
           
            
            <img  width="250" height="50" src='arquivos/cartorio.jpg' ALIGN="right"/>
         
                        <ul class="nav navbar-nav navbar-right">            
                        <li><a href="#"><?php echo $_SESSION['autenticado']; ?></a></li>
                        <li class="active"><a href="./login.php?acao=sair">Sair <span class="sr-only">(current)</span></a></li>
          </ul>
                 </tr>
                 
 
                </table>
              
              
        </div>    
         </nav>
        
                        
  </head>
<div class="container">
<BODY BGCOLOR="FFFFFF">
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<BR>
<Center> <a href="crudIntima.php?acao=novo" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Intima Protocolo</a> <a href="crudOcorrencia.php?acao=novo" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Registra Ocorrência</a> <a href="crudPendencia.php?acao=novo" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Devolver Protocolo</a> </center>
<BR>
<BR>
<BR>
<BR>




</BODY> 
</div>
   
    </div> <!-- /container -->

   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-dist//js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>