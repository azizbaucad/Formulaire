<?php if(isset($_POST['recherch'])){ 

include('../Model/fournisseur.class.php');

 $list_class="pagination pagination-sm";
	  $limit=5;
	  $links=3;
	  if(@$_POST['page']==""){@$pages =1;}else{@$pages = $_POST['page'];}
	  if($pages == 0 || $pages==1){$page=0;}else{$page= ($pages*$limit)-$limit;}
	  $result =Fournisseur::getAllByPage($_POST['recherch'],$page,$limit);
	  $resultat =Fournisseur::afficherGlobal($_POST['recherch']);
	  $total=count($resultat);







?>
		<div class="table-responsive">
		<table class="table table-striped">
        
        <tr id="tt">
          <th>Nom</th>
          <th>Tel</th>
          <th>Adresse</th>
          <th colspan="2">Action</th>
        </tr>
        <?php 
		
		  	$nb =count($result);
		if($nb>0){
			
			foreach($result as $data){
			
			 ?>
        <tr>
        <td><?php echo $data->nom_f; ?></td>
        <td><?php echo $data->tele_f; ?></td>
        <td><?php echo $data->adresse_f; ?></td>
        
        
        <td>
        <ul  class="list-inline">
        <li><a href="javascript:edit(<?php  echo $data->id_f; ?>)" class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modifier" ></a></li>
      <li> <a href="javascript:delet(<?php  echo $data->id_f; ?>)" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Supprimer" ></a></li>
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
	<!--*******************************************Affiche form d'Ajout************************************* --> 
	 
	<?php  
		  if(isset($_POST['fourni'])){
			  
		
 include('../include/formFour.php');

	}
	
	 
	//*******************************************L'insertion de Fournisseur*************************************   
	 
	 
	 
	 if(isset($_POST['AjFour'])){
	
	include_once '../Model/fournisseur.class.php';
	
	$fo = new Fournisseur(0,$_POST['nom'],$_POST['tele'],$_POST['ad']);
	
	@$ok=$fo->Add();
	if($ok){
     echo '<div id="al">Bien Ajouter</div>';
	}else{
		
		  echo '<div class="alert alert-danger" role="alert" id="al">Non Ajouter</div>';
	}

	}
	 
	 
	 //********************************Affiche Form Modification de Fournisseur************************************* 
     
	 
	 
	  if(isset($_POST['mod'])){
			  
		
 include('../include/ModFour.php');

	}
	
	 
	 //*******************************************Modification de Fournisseur************************************* 
	 
	 if(isset($_POST['ModFour'])){
	
	include_once '../Model/fournisseur.class.php';
	
	$ff = new Fournisseur($_POST['idf'],$_POST['nom'],$_POST['tele'],$_POST['ad']);
	
	$ok=$ff->Edit();

     echo '<div id="al">Bien Modifier</div>';
	 
	echo "<script>location.href='../view/index.php?page=fournisseur';</script>";
	
	 }
	 //*******************************************La suppression de Fournisseur*************************************  
	 
	 if(isset($_POST['delet'])){
	
	include_once '../Model/fournisseur.class.php';
	
	 
	  Fournisseur::delet($_POST['delet']);
	  
	   echo "<script>location.href='../view/index.php?page=fournisseur';</script>";
	 
	 
	 }
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	  ?>
   
    