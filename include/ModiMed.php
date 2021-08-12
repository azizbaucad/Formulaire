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

<?php 

include_once '../Model/medicament.class.php';
foreach(Medicament::getAllById($_POST['aff']) as $data);
?>


<h3>Modification de Médicament</h3>

<form class="form-horizontal" id="ff" action="../controller/medicament.php" method="post">
<div id="reponse"></div>
  <input type="hidden" name="id_m" class="required" id="id_m" value="<?php echo $data->id_m; ?>"/>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Code Barre<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="cdb" id="cdb"  required="" placeholder="Code Barre" value="<?php echo $data->code_barre; ?>">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Designation<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="des" id="des"  required="" placeholder="Designation" value="<?php echo $data->desg; ?>">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Form<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control "required=""  name="form" id="form" placeholder="Form" value="<?php echo $data->form; ?>">
    </div>
  </div>
  
  
   <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Famille<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="fam" id="fam" required="" placeholder="Famille" value="<?php echo $data->famille; ?>">
      <div id="msg"></div>
    </div>
  </div>
  
  
   <div class="form-group">
    <label  for="inputEmail3" class="col-sm-2 control-label">Prix Unitaire<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class=" form-control" id="px" name="px" required="" placeholder="Prix Unitaire" value="<?php echo $data->Prix_u; ?>">
    </div>
  </div>
  
  
  
  
  
  
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" id="ModMed" name="ModMed" class="btn btn-success" value="Modifier" />&ensp; <input type="reset"  class="btn btn-default" onClick="window.location.href='../view/index.php?page=medicament'" value="Annuler" />
    </div>
  </div>
</form>

