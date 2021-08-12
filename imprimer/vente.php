<style>

#tt{
	width:500px;
	text-align:center;
	border:1px  solid #000;
	
	
}




</style>
<?php $id=$_GET['id']; 

echo "<h4>Vente N°  ".$id."</h4>";
  

    include('../Model/vente.class.php');
	
		foreach(Vente::GetByClt($id) as $data){?>
        <table>
		<tr>
		<td>Client:</td>
        <td> <?php echo $data->Nom; ?></td>
       </tr>
        <tr>
        <td>Date Vente :</td>
        <td><?php echo $data->date_v; ?></td>
        </tr>
		</table>
	<?php } ?>
	
    
    
    <br /><br />

     	<table width="884" class="table table-striped"  id="ta">
        
        <tr id="tt">
       
          <th>Designation</th>
          <th></th>
          <th>Quantité</th>
          <th></th>
         
          <th>Prix Vente</th>
         
        </tr>
        <tr>
        <td></td>
        </tr>
        <?php 
		include('../Model/d_vente.class.php');
		
		   $nb = count(D_Vente::GetAllD($id));
		if($nb>0){
			
			foreach(D_Vente::GetAllD($id) as $data){
				@$rs+=$data->prix_v;
				
			 ?>
        <tr>
        
        <td><?php echo $data->desg; ?></td>
        <td></td>
        <td><?php echo $data->qte_v; ?></td>
        <td></td>
        <td><?php echo $data->prix_v; ?></td>
        
        
       
      
        
       </tr>   
      
       <?php } ?>
        <tr>
       
       <td>Prix total :
       <?php echo number_format($rs,2,","," ").' DH';?>  </td>
       </tr> <?php   }?>
       </table>
     