<script type="text/javascript">
jQuery(function(){
	
	
	var v =jQuery("#ff").validate({
		
		submitHandler:function(form){
			
			jQuery(form).ajaxSubmit({
				target:"#reponse"
				});
		}
		});


    
		
   
});


$(document).ready(function() {
	
	
	

			$('.form-control').keyup( function(){
				$("#al").hide(50);
				
				});
	
	
	
	
		
	
	
	
	
	
	
	
	
	

}); 
</script>

<?php 	include_once '../Model/fournisseur.class.php';
  $four=Fournisseur::getAllById($_POST['mod']);
  
  foreach($four as $data);

 ?>

<h3>Modification de Fournisseur</h3>

<form class="form-horizontal" id="ff" action="../controller/fournisseur.php" method="post">
<input type="hidden" class="form-control" name="idf" id="idf"  required="" placeholder="Nom" value="<?php echo $data->id_f; ?>">
<div id="reponse"></div>
  
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nom<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="nom" id="nom"  required="" placeholder="Nom" value="<?php echo $data->nom_f; ?>">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Tele<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="tele" id="tele"  required="" placeholder="Tele" value="<?php echo $data->tele_f; ?>">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Adresse</label>
    <div class="col-xs-4">
      <input type="text" class="form-control "  name="ad" id="ad" placeholder="Adresse" value="<?php echo $data->adresse_f; ?>">
    </div>
  </div>
  
  
   
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" id="ModFour" name="ModFour"  class="btn btn-success" value="Modifier"  />&ensp; <input type="reset"  class="btn btn-default" onClick="window.location.href='../view/index.php?page=fournisseur'" value="Annuler" />
    </div>
  </div>
</form>


  
   
  
  
  
  
  
  
  
  