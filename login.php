<?php
    session_start();
    
    if(isset($_GET['acao']) && $_GET['acao']=='sair'){
        unset($_SESSION['autenticado']);
    }
    
    
    if(isset($_POST)){
        require_once './Dao.php';
        $bd = new Dao();
        
        $sql  = "SELECT id, email FROM usuario "
                . " WHERE email= :email AND senha = :senha";
        $query = $bd->getCon()->prepare($sql);
        if(isset($_POST['email']) && isset($_POST['senha'])){
            $usuario = array('email'=>$_POST['email'],
                             'senha'=>md5($_POST['senha']));
        
            $query->execute($usuario);
            if($query->rowCount()==1){
                $_SESSION['autenticado'] = $usuario['email'];
                header('Location: index.php');
            }else{
                $validacao = false;
            }
        }
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

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap-dist/css/bootstrap.min.css" rel="stylesheet">

   

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

   
  </head>

  <body>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
    <div class="container">
        <form class="form-signin" action="login.php" method="POST">
            <center><h2 class="form-signin-heading">Login</h2></center>
        <?php if(isset($validacao) && $validacao==false){
                echo "<div class='label-danger'> 
                        Usuário ou senha incorretos, tente novamente
                      </div>";
              } ?>
        <label for="inputEmail" class="sr-only">Email </label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
                  
            
          <label>
           <input type="checkbox" value="remember-me"> Esqueci minha senha
          </label>
            
            
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">ENTRAR</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>
