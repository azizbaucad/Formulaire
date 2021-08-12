            <!-- recupération de l'utilisateur logger-->
<?php
 session_start();
 if(!isset($_SESSION['password'])){
     header('location:../index.php');
 }
?>

<?php 

if(isset($_POST['rr'])){
	
	include('../Model/achat.class.php');
	 $list_class="pagination pagination-sm";
	  $limit=5;
	  $links=3;
	  if(@$_POST['page']==""){@$pages =1;}else{@$pages = $_POST['page'];}
	 if($pages == 0 || $pages==1){$page=0;}else{$page= ($pages*$limit)-$limit;}
	 $result =Achat::GetAllPag($_POST['rr'],$page,$limit);
	 $resultat =Achat::GetAll($_POST['rr']);
	 $total=count($resultat);
	
	
	
	
	
	?>
	<div class="table-responsive">
		<table class="table table-striped">
        
        <tr id="tt">
          <th>N°BR</th>
          <th>Nom Agent</th>
          <th>Date BR</th>
          <th>NAgent</th>
          <th>Centre</th>
          <th colspan="2">Action</th>
        </tr>
        <?php 
		
		
		   $nb =count($result);

		if($nb>0){
            
			
			foreach($result as $data){
			 ?>
        <tr>
        <td><?php echo $data->id_br; ?></td>
        <td><?php echo $data->prenom_u ; ?></td>
        <td><?php echo $data->date; ?></td>
        <td><?php echo $data->login; ?></td>
        <td><?php echo $data->centre; ?></td>
        
        
        <td>
        <ul class="list-inline">
        <li><a href="index.php?page=d_achat&&id=<?php  echo $data->id_br; ?>" class="glyphicon glyphicon-folder-open " data-toggle="tooltip" data-placement="top" title="détail ce BR" ></a></li>
        <li><a href="javascript:deletA(<?php  echo $data->id_br; ?>)" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Supprimer" ></a></li>
        
        </ul></td>
       </tr>    <?php }  }else{  ?>
			<tr>
 <td colspan="5"><center><?php echo "Aucune Donnée"; ?></center></td>
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
     
     <!-**************************************************La suppression  Achat*************************************->
    
    
     <?php if(isset($_POST['supp'])){
     
     include('../Model/achat.class.php');
       
		 
		 Achat::DeByIdA($_POST['supp']);
		 
			echo "<script>location.href='../view/index.php?page=achat';</script>";
    
 } ?>
    
     
     
     <!-**************************************************post form*************************************->
   
    
    <?php if(isset($_POST['di'])){ include('../Model/compte.class.php');
	  
	
	?>
    <div class="table-responsive">
     <table  width="682">
     <tr>
  <td width="95" height="59"> ID Agent :</td><td width="210"><select disabled="disabled" id="for" class="form-control">
 
  <?php   foreach(Compte::afficherAll() as $data){ ?>
  
  <option value="<?php echo $data->id_cpt; ?>"><?php echo $data->log; ?></option>
   
  <?php } ?>
</select></td>
<td width="9"> </td>
 <td width="100"> Date BR :</td><td width="147"><input type="text" id="dt" class="form-control" readonly value="<?php echo date('Y-m-d'); ?>"></td><td width="9"></td>
<td width="80"> <button  class="btn btn-success" onclick="addA();">Valider</button></td>

</tr>
   </table>
   </div>
   <br />
   <hr />
 <?php } ?>
 <!-**************************************************Ajou Achat*************************************->
 
    
    
      <?php if(isset($_POST['fo'])){ 
	  include('../Model/achat.class.php');
	  
	
	  $pp=Achat::ADDAchat($_POST['fo'],$_POST['dt']);
	  
	echo '<script>location.href="../view/index.php?page=d_achat&&id='.$pp.'";</script>';
	
	  }?>
    