<?php
		session_start();
		if(!isset($_SESSION['password'])){
			header('location:../index.php');
			
		}
?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DGID</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">    
   <link rel="shortcut icon"  href="img/view/logodgid.jpg">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="dist/css/ionicons.min.css" rel="stylesheet" type="text/css">    
    
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css">
   
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css">
   
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css">
    
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css">
   
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css">
    
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">
    
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css">
	
	 <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="dist/css/style.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  <!--<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>-->

		
		 
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
     <!--script type="text/javascript" src="dist/js/calendar.js"></script-->	
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="dist/js/app.min.js" type="text/javascript"></script>
    <script src="dist/js/traitement.js" type="text/javascript"></script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
    <script src="js/jquery.form.js" type="text/javascript"></script>
	 <script src="dist/js/jquery.index.js" type="text/javascript"></script>
      <script src="dist/js/jquery.jclock-2.4.1.js" type="text/javascript"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body class="sidebar-mini skin-green-light wysihtml5-supported" onload="viewdata()" >
    <div class="wrapper">
      
      <header class="main-header" style="height: auto; background-color:#DEB887;">
        <!-- Logo -->
        <a href="index.php" class="logo" style="height: auto; background-color:#DEB887;">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>DGID</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">DGID formulaires</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation" style="height: auto; background-color:#DEB887;">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
              
              <li class="dropdown user user-menu jclock">
                
              </li>
                 
              <li class="dropdown user user-menu">
                <a href="../index.php?deco" class="fa fa-power-off" id="deco">
                    Déconnexion
                </a> 
              </li>
              
           
              <!-- Control Sidebar Toggle Button -->
              <li>
                
              </li>
            </ul>
          </div>
        </nav>
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

              
            </div>
          </div>
		   <div id="di">
		  </div>
          <!-- search form -->
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu" id="menu">
          <ul class="sidebar-menu" id="menu">
            
			
			<li class="<?php if($_GET['page']=="achat" ||$_GET['page']=="d_achat"  ){ echo 'active';} ?>"><a href="?page=achat"><i class="glyphicon glyphicon-list-alt"></i> <span><strong>BR</strong></span></a></li>
			
			<?php if($_SESSION['login'] == "Admin"){ ?>
			
			<li class="<?php if($_GET['page']=="compte"){ echo 'active';} ?>"><a href="?page=compte"><i class="fa fa-users"></i> <span><strong>Compte</strong></span></a></li>
			<?php
			} ?>

<style>
  .sidebar{
    background-color:white;
  }
  .main-sidebar{
    background-color:white;
  }
  .navbar , section , header , aside{
    background-color:white;
  }
  body{
	  background-image:url('view/img/dgid.png');
    background-color:white;
	  
	  background-repeat:no-repeat;
	  
	  background-attachment: fixed;
	  height:80%;
  }
   #cont{
    margin-top:150px;
    
}
  </style>
           
          </ul>
         </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height: 916px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
           
		
		
        </section>
		<section class="content">
	
       <?php
	   
	   @$page = $_GET['page'];
	   switch($page){
		   
		   case 'tbord':include('tbrd.php'); echo "<script src='js/tbord.js'></script>"; 
		   break;
		    case 'medicament':include('medicament.php'); echo "<script src='js/medicament.js'></script>"; 
		   break;
		   case 'vente':include('vente.php'); echo "<script src='js/vente.js'></script>"; 
		   break;
		    case 'd_vente':include('d_vente.php'); echo "<script src='js/vente.js'></script>"; 
		   break;
		   case 'achat':include('achat.php'); echo "<script src='js/achat.js'></script>"; 
		   break;
		   case 'd_achat':include('d_achat.php'); echo "<script src='js/achat.js'></script>"; 
		   break;
		   case 'client':include('client.php'); echo "<script src='js/client.js'></script>"; 
		   break;
		     case 'fournisseur':include('fournisseur.php');echo "<script src='js/fourniiseur.js'></script>"; 
		   break;
		     case 'compte':include('compte.php');echo "<script src='js/compte.js'></script>";
		   break;
		    default :include('tbrd.php');echo "<script src='js/tbord.js'></script>"; 
	   }
	   
	   
	   
	   
	   ?>
        

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