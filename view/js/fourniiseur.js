$(document).ready(function() {
	
	$("#Re").keyup(function(){
		
		afficher()
		})
     afficher()
});		
	
	$(function(){
	 
$('<div id="ppp"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
$('<div id="pa"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
	 
 $('<div id="add"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();

 $('<div id="dele"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
	 
	 
 });	
	
	
function afficher(){
	
	var re  = $("#Re").val();
	$("#ppp").show();
	
	
	$.post('../controller/fournisseur.php',{recherch:re},function(data){
		$("#ppp").hide();
	 $("#tbl").html(data);
	
	});
		
}


function pagination(pages){
		$("#pa").show();
		var re  = $("#Re").val();
	  
		
	
	$.post('../controller/fournisseur.php',{page:pages,recherch:re},function(data){
		$("#pa").hide();
	 $("#tbl").html(data);
	
	});
		
	}
	
	function affForm(){
		
		$("#add").show();
		 var ff =1;
		 
		$.post('../controller/fournisseur.php',{fourni:""+ff+""},function(data){
	$("#add").hide();
	 $("#tbl").html(data);
	
	});
		
		
		
		
	}
	

function cacher(){
		
		
			 $('#ctr').hide();
		
	}
	
function edit(mod){
	$("#dele").show();
	    $('#ctr').hide();
	
		$.post('../controller/fournisseur.php',{mod:""+mod+""},function(data){
			 
	$("#dele").hide();
	 $("#tbl").html(data);
	
	});
		
		
	
	
	
}




function delet(param){
	
		var ok=confirm('vous-Etes sûr de vouloir supprimer cette entrée?');
if(ok){
	    
	
		$.post('../controller/fournisseur.php',{delet:""+param+""},function(data){
			 
	
	 $("#tbl").html(data);
	
	});
		
}
	
	
	
}
