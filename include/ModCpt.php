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




<h3>Modification de Compte</h3>
<?php include('../Model/compte.class.php');

 foreach(Compte::getAllById($_POST['modi']) as $data);


?>



<form class="form-horizontal" id="ff" action="../controller/g_compte.php" method="post" >
<div id="reponse"></div>
  
   <input type="hidden"  name="idd" id="idd"  value="<?php echo $data->id_cpt; ?>" />
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Login<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="lg" id="lg"  required="" placeholder="Login" value="<?php echo $data->login; ?>">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nom<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="nom" id="nom"  required="" placeholder="Nom" value="<?php echo $data->nom_u; ?>">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Prenom</label>
    <div class="col-xs-4">
      <input type="text" class="form-control "  name="pre" id="pre" placeholder="Prenom" value="<?php echo $data->prenom_u ?>">
    </div>
  </div>
  
  
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control "  name="pass" id="pass" required="" placeholder="Password" value="<?php echo $data->password; ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Centre<em>*</em></label>
    <div class="col-xs-4">
    
      <select name="ctre" id="ctre">
        <option value="PA">PA</option>
        <option value="GW">GW</option>
        <option value="DK">DK</option>
      </select>


    </div>
  </div>
  
  
   
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" id="ModCpt" name="ModCpt"  class="btn btn-success" value="Modifier"  />&ensp; <input type="reset"  class="btn btn-default" onClick="window.location.href='../view/index.php?page=compte'" value="Annuler" />
    </div>
  </div>
</form>


  
   
  
  
  
  
  
  
  
  