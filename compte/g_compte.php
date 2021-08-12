<?php
session_start() ;
if(isset($_POST['recherch'])){ 

include('../Model/compte.class.php');

 $list_class="pagination pagination-sm";
	  $limit=5;
	  $links=3;
	  if(@$_POST['page']==""){@$pages =1;}else{@$pages = $_POST['page'];}
	  
	  if($pages == 0 || $pages==1){$page=0;}else{$page= ($pages*$limit)-$limit;}
	  $result =Compte::getAllByPage($_POST['recherch'],$page,$limit);
	  $resultat =Compte::afficherGlobal($_POST['recherch']);
	  $total=count($resultat);







?>
		<div class="table-responsive">
		<table class="table table-striped">
        
        <tr id="tt">
          <th>login</th>
          <th>Nom</th>
          <th>Prenom</th>
            <th>Password</th>
              
          <th colspan="2">Action</th>
        </tr>
        <?php 
		
		  	$nb =count($result);
		if($nb>0){
			
			foreach($result as $data){
			
			 ?>
        <tr>
        <td><?php echo $data->login; ?></td>
        <td><?php echo $data->nom_u; ?></td>
        <td><?php echo $data->prenom_u; ?></td>
        <td><?php echo $data->password; ?></td>
        
        <td>
        <ul  class="list-inline">
        <li><a href="javascript:edit(<?php  echo $data->id_cpt; ?>)" class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modifier" ></a></li>
      <li> <a href="javascript:delet(<?php  echo $data->id_cpt; ?>)" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Supprimer" ></a></li>
       </ul>
       </td>
        
       </tr>   
       <?php } ?> <?php  }else{  ?>
			<tr>
 <td colspan="5"><center><?php echo "Aucun Donnée"; ?></center></td>
</tr>
			<?php } ?>
       </table>
     <?php 
	 
	 
	  $last       = ceil( $total / $limit );
	$start      = ( ( $pages - $links ) > 0 ) ? $pages - $links : 1;
    $end        = ( ( $pages + $links ) < $last ) ? $pages + $links : $last;
	$html       = '<ul class="' . $list_class . '">';
	
	if($pages <= 1  ){
	$clas      = ( $pages == 1 ) ? "disabled" : "";
	
	
	$html       .= '<li  class="' . @$clas . '"><a onclick="return false;" href="">&laquo;</a></li>';
	
	}else{
	
    $html       .= '<li><a href="javascript:pagination(' . ( $pages - 1 ). ');">&laquo;</a></li>';
	}
    if ( $start > 1 ) {
        $html   .= '<li><a  onclick="pagination(' . 1 . ');return false;" href="">1</a></li>';
        $html   .= '<li class="'.@$clas.'"><span>...</span></li>';
    }
	
	
    for ( $i = $start ; $i <= $end; $i++ ) {
		
        $class  = ( $pages == $i ) ? "active" : "";
        $html   .= '<li class="' . $class . '"><a href="javascript:pagination(' . $i . ');">' . $i . '</a></li>';
    }
 
    if ( $end < $last ) {
        $html   .= '<li class="'.@$clas.'"><span>...</span></li>';
        $html   .= '<li><a onclick="pagination(' . $last . ');return false;"  href="">' . $last . '</a></li>';
    }
	if($pages >= ceil( $total / $limit )){
	$clas      = ( $pages == $last ) ? "disabled" : "";
	$html       .= '<li class="' . @$clas . '"><a onclick="return false;"  href="">&raquo;</a></li>';
	}else{
	$html       .= '<li><a  href="javascript:pagination(' . ( $pages + 1 ). ');">&raquo;</a></li>';
	}
    $html       .= '</ul>';
	echo $html;
	   
	   
	   
	   
	   
	    }
	   
	   ?>
	   
	   </div>
	   <?php
	  
	  //*******************************************Affiche form d'Ajout*************************************  
	 
	  
		  if(isset($_POST['cpt'])){
			  
		
 include('../compte.php');

	}
	
	  
	  
	  //*******************************************L'insertion de compte*************************************   
	 
	 
	 
	 if(isset($_POST['AjCpt'])){
	
include('../Model/compte.class.php');
	
	$cpt = new Compte(0,$_POST['lg'],$_POST['nom'],$_POST['pre'],$_POST['pass']);
	
	$ok=$cpt->Add();
	
     echo '<div id="al">Bien Ajouter</div>';
	

	}
	 
	 
	  
	  
	  
	   //********************************Affiche Form Modification de compte************************************* 
     
	 
	 
	  if(isset($_POST['modi'])){
			  
		
 include('../include/ModCpt.php');

	}
	
	 
	  
	  
	 //*******************************************Modification de compte************************************* 
	 
	 if(isset($_POST['ModCpt'])){
	
	include_once '../Model/compte.class.php';
	
	$cpt = new compte($_POST['idd'],$_POST['lg'],$_POST['nom'],$_POST['pre'],$_POST['pass']);
	
	$ok=$cpt->Edit();

     echo '<div id="al">Bien Modifier</div>';
	 
	echo "<script>location.href='../view/index.php?page=compte';</script>";
	
	 } 
	  
	  	 //*******************************************La suppression de Compte*************************************  

	  
	 if(isset($_POST['delet'])){
	
	include_once '../Model/compte.class.php';
	
	 
	 Compte::delet($_POST['delet']);
	  
	   echo "<script>location.href='../view/index.php?page=compte';</script>";
	 
	 
	 }
	   
	  
	  
	


/*if(isset($_POST['sub'])){
@session_start();	 

	
	require_once "../Model/compte.class.php";  
	
	
 $nb=Compte::login($_POST['log'],$_POST['pass']);
 
 if($nb>1){
 foreach(Compte::login($_POST['log'],$_POST['pass']) as $data);
 
 
                    @$_SESSION['login']=$data->login;
					@$_SESSION['password']=$data->password;
					@$_SESSION['nom_u']=$data->nom_u;
					@$_SESSION['prenom_u']=$data->prenom_u;
					
					//header("location:../view/index.php");
				echo "<script>location.href='../view/index.php';</script>";
 
 
  }
else{
	
	echo "<script>location.href='index.php';</script>";
	
	}

}*/

	  
	  
	  
	  
	  
	  
	  
	  
	   ?>
   
