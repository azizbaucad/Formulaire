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
		
		
		document.getElementById('AjClt').disabled=false;});
		
		
		
		
		
		$('.form-control').change( function(){
		
		
		document.getElementById('AjClt').disabled=false;});
		
		
		
		
		
	
    $('form').submit(function(){
		
		 $(':submit',this).attr('disabled','disabled');
		  $("#cin").val('');
		  $("#nom").val('');
		   $("#pre").val('');
		 $("#tele").val('');
				$("#ad").val('');
					
		 
		 });
		 

			$('.form-control').keyup( function(){
				$("#al").hide(50);
				
				});
	
	
	
	
	
	
	
	
	
	
	
	

}); 
</script>




<h3>L'Ajout de Client</h3>

<form class="form-horizontal" id="ff" action="../controller/g_client.php" method="post">
<div id="reponse"></div>
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">CIN<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="cin" id="cin"  required="" placeholder="CIN">
    </div>
  </div> 
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nom<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="nom" id="nom"  required="" placeholder="Nom">
    </div>
  </div> 
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Prenom<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="pre" id="pre"  required="" placeholder="Prenom">
    </div>
  </div> 
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Tele<em>*</em></label>
    <div class="col-xs-4">
      <input type="text" class="form-control" name="tele" id="tele"  required="" placeholder="Tele">
    </div>
  </div>
  
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Adresse</label>
    <div class="col-xs-4">
      <input type="text" class="form-control "  name="ad" id="ad" placeholder="Adresse">
    </div>
  </div>
  
  
   
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" id="AjClt" name="AjClt"  class="btn btn-success" value="Ajouter"  />&ensp; <input type="reset"  class="btn btn-default" onClick="window.location.href='../view/index.php?page=client'" value="Annuler" />
    </div>
  </div>
</form>


  
   
  
  
  
  
  
  
  
  