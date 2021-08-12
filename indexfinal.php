<?php 
    session_start();
    if (!isset($_SESSION['password'])) {
    	header('location:indexdag.php');
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DGID</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   
                
              
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="height: auto;">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="img/photo.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p id="nomPre"><?php echo $_SESSION['nom_u'].' '.$_SESSION['prenom_u']; ?></p>
              <li class="dropdown user user-menu">
                <a href="indexview.php?deco" class="fa fa-power-off" id="deco">
                    Déconnexion
                </a> 
              </li>

              
            </div>
          </div>

		   <div id="di">

		  </div>
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
	
	
 $nb=count(Compte::detail($_POST['log'],$_POST['pass']));
 
 if($nb>0){
 foreach(Compte::detail($_POST['log'],$_POST['pass']) as $data){
 
 
          $_SESSION['login']=$data->login;
					$_SESSION['password']=$data->password;
					$_SESSION['nom_u']=$data->nom_u;
					$_SESSION['prenom_u']=$data->prenom_u;
					$_SESSION['image']=$data->image;
					
					//header("location:view/index.php");
					
				echo "<script>location.href='indexfinal.php';</script>";
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
								 <input class="form-control" placeholder="Nom" name="log" type="text" >
								
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Date" name="pass" type="password" >
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
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          
         </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height: 916px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
           
		
		
        </section>
		<section class="content">
	
       
        

        </section><!-- /.content -->

        <!-- Main content -->
        <!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2021 </strong> 
      </footer>
      
     
      
    </div>
   
	
   
   
    
    
    </body>
	 
    
</html>
