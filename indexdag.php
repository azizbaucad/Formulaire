<?php


session_start();
if(isset($_GET['deco'])){
	session_destroy();
    header('location:indexdag.php');
}
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DGID</title>
   

    <!-- Bootstrap -->
    <link href="view/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon"  href="view/img/icondgid.png">

  <style>
  body{
	  background-image:url('view/img/dgid.png');
	  
	  background-repeat:no-repeat;
	  
	  background-attachment: fixed;
	  height:80%;
  }
   #cont{
    margin-top:150px;
    
}
  </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container" id="cont">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                      <center>  <h1 class="panel-title">Gestion des Formulaires </h1></center>
                    </div>
                    <div class="panel-body">
                           <?php
  if(isset($_POST['sub'])){
  
require("Model/connexion.php");
require_once "Model/compte.class.php";  
	
	
 $nb=count(Compte::login($_POST['log'],$_POST['pass']));
 
 if($nb>0){
 foreach(Compte::login($_POST['log'],$_POST['pass']) as $data){
 
 
          $_SESSION['login']=$data->login;
					$_SESSION['password']=$data->password;
					$_SESSION['nom_u']=$data->nom_u;
					$_SESSION['prenom_u']=$data->prenom_u;
					$_SESSION['image']=$data->image;
					
					//header("location:view/index.php");
					
				echo "<script>location.href='indexview.php';</script>";
 }
 
  }
else{
	
	
	echo "<div class='alert alert-danger' role='alert'>
	<span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span>
  <span class='sr-only'>Error:</span>login or password incorecte</div>";
	
	}
  }
  
  ?>
                        <form role="form"  method="post" action="" >
                            <fieldset>
						
                                <div class="form-group" name="login">
                                 <!--<input class="form-control" placeholder="login" name="login" type="text" value="">-->
								 <input class="form-control" placeholder="Login" name="log" type="text" >
								
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" >
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="sub" id="sub" value="Login"  class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>






