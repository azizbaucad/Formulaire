<?php if(isset($_POST['recherch'])){ 

include('../Model/client.class.php');

 $list_class="pagination pagination-sm";
	  $limit=5;
	  $links=3;
	  if(@$_POST['page']==""){@$pages =1;}else{@$pages = $_POST['page'];}
	  
	  if($pages == 0 || $pages==1){$page=0;}else{$page= ($pages*$limit)-$limit;}
	  $result =Client::getAllByPage($_POST['recherch'],$page,$limit);
	  $resultat =Client::afficherGlobal($_POST['recherch']);
	  $total=count($resultat);







?>
		<div class="table-responsive">
		<table class="table table-striped">
        
        <tr id="tt">
          <th>CIN</th>
          <th>Nom</th>
          <th>Prenom</th>
            
            <th>Tele</th>
            <th>Adresse</th>
              
          <th colspan="2">Action</th>
        </tr>
        <?php 
		
		  	$nb =count($result);
		if($nb>0){
			
			foreach($result as $data){
			
			 ?>
        <tr>
        <td><?php echo $data->CIN; ?></td>
        <td><?php echo $data->Nom; ?></td>
        <td><?php echo $data->Prenom; ?></td>
        <td><?php echo $data->tele; ?></td>
        <td><?php echo $data->Adresse; ?></td>
        
        <td>
        <ul class="list-inline">
        <li><a href="javascript:edit(<?php  echo $data->id_clt; ?>)" class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modifier" ></a></li>
       <li><a href="javascript:delet(<?php  echo $data->id_clt; ?>)" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Supprimer" ></a></li>
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
	   
	   
	   
	   
	   
	    }?>
	   
	   
	   
	   </div>
	  
	 <!--*******************************************Affiche form d'Ajout*************************************-->  
	 
	  
	<?php	  if(isset($_POST['cpt'])){
			  
		
 include('../include/formClt.php');

	}
	
	  
	  
	  //*******************************************L'insertion de compte*************************************   
	 
	 
	 
	 if(isset($_POST['AjClt'])){
	
include('../Model/client.class.php');
	
	$cpt = new Client(0,$_POST['cin'],$_POST['nom'],$_POST['pre'],$_POST['tele'],$_POST['ad']);
	
	$ok=$cpt->Add();
	
     echo '<div id="al">Bien Ajouter</div>';
	

	}
	 
	 
	  
	  
	  
	   //********************************Affiche Form Modification de compte************************************* 
     
	 
	 
	  if(isset($_POST['modi'])){
			  
		
 include('../include/ModClt.php');

	}
	
	 
	  
	  
	 //*******************************************Modification de compte************************************* 
	 
	 if(isset($_POST['ModClt'])){
	
	include_once '../Model/client.class.php';
	
	$clt = new Client($_POST['idd'],$_POST['cin'],$_POST['nom'],$_POST['pre'],$_POST['tele'],$_POST['ad']);
	
	$ok=$clt->Edit();

     echo '<div id="al">Bien Modifier</div>';
	 
	echo "<script>location.href='../view/index.php?page=client';</script>";
	
	 } 
	  
	  	 //*******************************************La suppression de Compte*************************************  

	  
	 if(isset($_POST['delet'])){
	
	include_once '../Model/client.class.php';
	
	 
	 Client::delet($_POST['delet']);
	  
	   echo "<script>location.href='../view/index.php?page=client';</script>";
	 
	 
	 }
	   
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	   ?>
   
