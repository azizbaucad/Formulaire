<?php 

if(isset($_POST['rr'])){
	
	include('../Model/vente.class.php');
	   $list_class="pagination pagination-sm";
	  $limit=5;
	  $links=3;
	  if(@$_POST['page']==""){@$pages =1;}else{@$pages = $_POST['page'];}
	 if($pages == 0 || $pages==1){$page=0;}else{$page= ($pages*$limit)-$limit;}
	 $result =Vente::GetAllPag($_POST['rr'],$page,$limit);
	 $resultat =Vente::GetAll($_POST['rr']);
	  $total=count($resultat);
?>

 <div class="table-responsive">
		<table class="table table-striped">
        
        <tr id="tt">
          <th>N°Vente</th>
          <th>Nom Client</th>
          <th>Date Vente</th>
          <th colspan="2">Action</th>
        </tr>
        <?php 
		
		
		   $nb =count($result);
		if($nb>0){
			
			foreach($result as $data){
			 ?>
        <tr>
        <td><?php echo $data->id_v; ?></td>
        <td><?php echo $data->Nom; ?></td>
        <td><?php echo $data->date_v; ?></td>
        
        
        <td>
        <ul class="list-inline">
        <li><a href="index.php?page=d_vente&&id=<?php  echo $data->id_v; ?>" class="glyphicon glyphicon-folder-open " data-toggle="tooltip" data-placement="top" title="détail cette Achat" ></a></li>
        <li><a href="../imprimer/imprimer.php?doc=vente&&id=<?php  echo $data->id_v; ?>" class="fa fa-file-pdf-o fa-lg" data-toggle="tooltip" data-placement="top" title="PDF"  target="_blank"></a></li>
        <li><a href="javascript:deletA(<?php  echo $data->id_v; ?>)" class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Supprimer" ></a></li>
        </ul>
        </td>
        
       </tr>    <?php }  }else{  ?>
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
   
     
     <!-**************************************************La suppression Vente*************************************->
    
    
     <?php if(isset($_POST['supp'])){
     
     include('../Model/vente.class.php');
       
		 
		Vente::DeByIdV($_POST['supp']);
		 
			echo "<script>location.href='../view/index.php?page=vente';</script>";
    
 } ?>
    
     
     
     <!-**************************************************post form*************************************->
   
    
    <?php if(isset($_POST['di'])){ 
	
	include('../Model/client.class.php');
	  
	
	?>
    <div class="table-responsive">
     <table width="682">
     <tr>
  <td width="95" height="59"> Client :</td><td width="210"><select id="for" class="form-control">
 
  <?php   foreach(Client::GetAll() as $data){ ?>
  
  <option  value="<?php echo $data->id_clt; ?>"><?php echo $data->Nom; ?></option>
   
  <?php } ?>
</select></td>
<td width="9"> </td>
 <td width="100"> Date Vente :</td><td width="147"><input type="text" id="dt" class="form-control" value="<?php echo date('Y-m-d'); ?>"></td><td width="9"></td>
<td width="80"> <button  class="btn btn-success" onclick="addA();">Valider</button></td>

</tr>
   </table>
   </div>
   <br />
   <hr />
 <?php } ?>
 <!-**************************************************Ajou Vente*************************************->
 
    
    
      <?php if(isset($_POST['fo'])){ 
	  include('../Model/vente.class.php');
	  
	
	  $pp=Vente::ADDVente($_POST['fo'],$_POST['dt']);
	  
	echo '<script>location.href="../view/index.php?page=d_vente&&id='.$pp.'";</script>';
	
	  }?>
    