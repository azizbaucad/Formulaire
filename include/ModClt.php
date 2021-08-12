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
</script>




<h3>Modification de Client</h3>
<?php include('../Model/client.class.php');

 foreach(Client::getAllById($_POST['modi']) as $data);


?>


<form class="form-horizontal" id="ff" action="../controller/g_client.php" method="post" value="">
<div id="reponse"></div>
   <input type="hidden"  name="idd" id="idd"  value="<?php echo $data->id_clt; ?>" />
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">CIN<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="cin" id="cin"  required="" placeholder="CIN" value="<?php echo $data->CIN; ?>">
    </div>
  </div> 
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nom<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="nom" id="nom"  required="" placeholder="Nom" value="<?php echo $data->Nom; ?>">
    </div>
  </div> 
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Prenom<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="pre" id="pre"  required="" placeholder="Prenom" value="<?php echo $data->Prenom; ?>">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Tele<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="tele" id="tele"  required="" placeholder="Tele"  value="<?php echo $data->tele; ?>" >
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Adresse</label>
    <div class="col-xs-4">
      <input type="text" class="form-control "  name="ad" id="ad" placeholder="Adresse"  value="<?php echo $data->Adresse; ?>">
    </div>
  </div>
  
  
   
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" id="ModClt" name="ModClt"  class="btn btn-success" value="Modifier"  />&ensp; <input type="reset"  class="btn btn-default" onClick="window.location.href='../view/index.php?page=client'" value="Annuler" />
    </div>
  </div>
</form>


  
   
  
  
  
  
  
  
  
  