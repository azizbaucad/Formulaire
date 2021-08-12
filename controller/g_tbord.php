   <?php    	if(isset($_POST['recherch'])){ ?>
		<div class="table-responsive">
		<table class="table table-striped " background-color="White">
     
        <tr id="tt">
	      <th>intitule marché</th>
	      <th>Date d'approbation</th>
	      <th>Date d'enregistrement</th>
	        
	        <th>Maitre d'ouvrage</th>
	        <th>Montant marche HT</th>
	        <th>Montant marche TTC</th>

	        <th>NINEA</th>
	      <th>Designation attributaire</th>
	      <th>Adresse</th>
	        
	        <th>CNI</th>
	        <th>Date délivrance CNI</th>
	        <th>Telephone 1</th>

	        <th>Telephone 2</th>
	      <th>RIB 1</th>
	      <th>RIB 2</th>
	        
	        <th>Commentaires</th>
          
        </tr>
     
	
<?php 
	 include('../Model/medicament.class.php');
	 include('../Model/d_achat.class.php');
	 include('../Model/d_vente.class.php');

 
	  $resultat =Medicament::GetAl();
	  $total=count($resultat);
		  	
		if($total>0){
			
			foreach($resultat as $data){
				
				
			 $QteVente=D_Vente::getPrixVente($data->id_m);
				 $QteAchat=D_Vente::getPrixAchat($data->id_m);
				$rss=$QteAchat-$QteVente;	
				
				
				if($rss<=5){
			   
			 ?>
        <tr>
        <td><?php echo $data->code_barre; ?></td>
        <td><?php echo $data->desg; ?></td>
        <td><?php echo $data->form; ?></td>
        <td><?php echo $data->famille; ?></td>
        <td><?php echo $data->Prix_u; ?></td>
        <td><?php echo $rss ?></td>
        
      
       </tr>   
        <?php } }}else{  ?>
			<tr>
 <td colspan="5"><center><?php echo "Aucun Donnée"; ?></center></td>
</tr>
			<?php }
       }?>
	   
     </table>
     </div>  
       
     <?php 
		if(isset($_POST['nbr1'])){
			 include('../Model/medicament.class.php');
			 
	$nbr1=count(Medicament::NbrMed());
		
		echo $nbr1;}
		
				if(isset($_POST['nbrr'])){
			 include('../Model/vente.class.php');
			 
	$nbr2=count(Vente::NbrVent());
		
		echo $nbr2;}
		
		
		
			if(isset($_POST['nbr3'])){
			 include('../Model/achat.class.php');
			 
	$nbr3=count(Achat::NbrBl());
		
		echo $nbr3;}
		
		
		
		
		if(isset($_POST['nbr4'])){
			include('../Model/client.class.php');
			 
	$nbr4=count(Client::NbrClt());
		
		echo $nbr4;
		
		
		
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
			
			
			 ?>   
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       