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




<h3>Modification du centre</h3>
<?php include('../Model/centre.class.php');

 foreach(Centre::getAllById($_POST['modi']) as $data);


?>



<form class="form-horizontal" id="ff" action="../controller/g_centre.php" method="post" >
<div id="reponse"></div>
  
   <input type="hidden"  name="idd" id="idd"  value="<?php echo $data->id_c; ?>" />
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nom<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="nom" id="nom"  required="" placeholder="Nom" value="<?php echo $data->nom_centre; ?>">
    </div>
  </div> 
  
  
  
  
  
  
   
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" id="ModCtr" name="ModCtr"  class="btn btn-success" value="Modifier"  />&ensp; <input type="reset"  class="btn btn-default" onClick="window.location.href='../view/index.php?page=centre'" value="Annuler" />
    </div>
  </div>
</form>


  
   
  
  
  
  
  
  
  
  