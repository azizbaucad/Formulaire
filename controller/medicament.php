<?php 

	if(isset($_POST['recherch']))
		
       { 
	   
	   		include('../Model/medicament.class.php');	
	   
	  $list_class="pagination pagination-sm";
	  $limit=20;
	  $links=3;
	  if(@$_POST['page']==""){@$pages =1;}else{@$pages = $_POST['page'];}
	  
	  if($pages == 0 || $pages==1){$page=0;}else{$page= ($pages*$limit)-$limit;}
	  $result = Medicament::afficherPage($_POST['recherch'],$page,$limit);
	  $resultat =Medicament::afficherGlobal($_POST['recherch']);
	  $total=count($resultat);
	   	   
	   
	  ?>
	  <!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gestion Pharmacie</title>
   

    <!-- Bootstrap -->
    <link href="view/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon"  href="view/img/icon.png">

  <style>

.tableCommune {
	border-collapse:separate;
	border: 1px;
	
}
   
   .tableCommune  th {
	padding:4px;
	FONT-SIZE: 11px;
	padding-left:5px;
	padding-right:5px;
	BACKGROUND:#f4d4ad;
	border-collapse:separate;
	border: 4px;
	border-bottom: 2px solid green;
	

}

table  {
	color:#006573;
	border-bottom: 1px solid white;
	
}

.tableCommune tr:hover {
	BACKGROUND:#f4d4ad;
}

.tableCommune tr td {
	padding-top:4px;
	padding-bottom:4px;
	padding-left:10px;
	padding-right:10px;
	border-collapse:separate;
	
	
	
}
.tdd {
	BACKGROUND:red;
}

.table-wrapper { 
	position: relative;
	
}


  </style>
<!--CENTER>
	<br>
	<h1>Ajout d'une sortie</h1>
    </br>

	<form>

    <table class="tableCommune" border=1>
	<tr><th align="left">Nom&nbsp;&nbsp;&nbsp;</th><td><input autofocus size="35" type="text" value="" name="txtNomSortie"></td></tr>
<tr><th align="left">Date (jj/mm/aaaa)&nbsp;&nbsp;&nbsp;</th><td><input size="11" maxlength="10" type="text" value="" name="txtDate"></td></tr>
<tr><th align="left">Prénom&nbsp;&nbsp;&nbsp;</th><td><textarea id="idCommentaire" rows="2" cols="35" name="txtCommentaire"></textarea><br></td></tr>
<tr><th align="left">Login&nbsp;&nbsp;&nbsp;</th><td><textarea id="idRessources" rows="2" cols="35" name="txtRessources"></textarea><br></td></tr>	
	</table>

	</form>
</CENTER-->







   <div class="table-wrapper">
   <table border=1 align="center"  class="tableCommune">
        
        <tr id="tt">
         <th>Intitule Marché</th>
          <th>Date approbation</th>
          <th>Date enregistrement</th>
           <th>Maitre ouvrage</th>
          <th>Montant Marché HT</th>
          <th>Montant Marché TTC</th>
		  <th>NINEA</th>
		  <th>Désignation attributaire</th>
		  <th>Adresse</th>
		  <th>CNI</th>
		  <th>Date délivrance CNI</th>
		  <th>Passeport</th>
          <th>Date délivrance passeport</th>
		  <th>Téléphone 1</th>
		  <th>Téléphone 2</th>
		  <th>RIB 1</th>
		  <th>RIB 2</th>
		  <th>Commentaires</th>
          <th>Action</th>
        </tr>
        <?php 
		
	
		$nb =count($result);
		if($nb>0){
			
			foreach($result as $data){
			
		
		 ?>
        <tr>
        <td><?php echo $data->code_barre; ?></td>
        <td><?php echo $data->desg; ?></td>
        <td><?php echo $data->form; ?></td>
         <td><?php echo $data->famille; ?></td>
        <td><?php echo $data->Prix_u; ?></td>
        <td><?php echo $data->mmttc; ?></td>
		<td><?php echo $data->nin; ?></td>
		<td><?php echo $data->dat; ?></td>
		<td><?php echo $data->adr; ?></td>
		<td><?php echo $data->cni; ?></td>
		<td><?php echo $data->ddcni; ?></td>
		<td><?php echo $data->ppo; ?></td>
        <td><?php echo $data->ddppo; ?></td>
		<td><?php echo $data->tel1; ?></td>
		<td><?php echo $data->tel2; ?></td>
		<td><?php echo $data->rib1; ?></td>
		<td><?php echo $data->rib2; ?></td>
		<td><?php echo $data->cmt; ?></td>
        <td>
        <ul class="list-inline">
        <li><a href="javascript:edit(<?php  echo $data->id_m; ?>)" class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modifier" ></a></li>
        <li><a href="javascript:delet(<?php  echo $data->id_m; ?>)" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Supprimer" ></a></li>
        </ul>
        </td>
        
       </tr> 
         
       <?php }  }else{  ?>
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
		
        $class  = ( $pages == $i ) ? "active success" : "";
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
		
	<!--***********************************Supp**********************************************-->			
		
		
		
		<?php
	
        if(isset($_POST['supp'])){
			
			
			include('../Model/medicament.class.php');
			
			Medicament::delet($_POST['supp']);
			
			echo "<script>location.href='../view/index.php?page=medicament';</script>";
		
		}
		
		
		
//******************************Affiche la formulaire qui include*************************-->	
		
		
		
		
		  if(isset($_POST['ff'])){
			
			
	
	 include('../include/formMed.php');

	}
	
		
   //******************************L ajout de Medicament*************************-->	


	 if(isset($_POST['AjMed'])){
	
	include_once '../Model/medicament.class.php';
	
	$mdt = new Medicament(
		                 0,
	                     $_POST['cdb'],
						 $_POST['des'],
						 $_POST['form'],
						 $_POST['fam'],
						 $_POST['px'],
						 $_POST['mmt'],
						 $_POST['ni'],
						 $_POST['da'],
						 $_POST['ad'],
						 $_POST['cn'],
						 $_POST['ddcn'],

						 $_POST['pp'],
						 $_POST['ddpp'],
						 $_POST['tep1'],
						 $_POST['tep2'],
						 $_POST['ri1'],
						 $_POST['ri2'],
						 $_POST['cm']
						
						);
	
	@$ok=$mdt->Add();
	
     echo '<div id="al">Bien Ajouter</div>';
	
	}
	



            //******************************Poste*************************-->	



  if(isset($_POST['aff'])){
	
	 include('../include/ModiMed.php');

	}
	


//*****************************************Modification *********************************************


 if(isset($_POST['ModMed'])){
	
	include_once '../Model/medicament.class.php';
	
	$mod = new Medicament($_POST['id_m'],$_POST['cdb'],$_POST['des'],$_POST['form'],$_POST['fam'],$_POST['px'],$_POST['mmt']);
	
	@$ok=$mod->Edit();
	
     echo '<div id="al">Bien Modifier</div>';
		echo "<script>location.href='../view/index.php?page=medicament';</script>";

	}


	 ?>

