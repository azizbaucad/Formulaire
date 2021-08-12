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
	
	var re  =$("#Re").val();
	$("#ppp").show();
	$.post('../controller/g_client.php',{recherch:""+re+""},function(data){
	$("#ppp").hide();
	 $("#tbl").html(data);
	
	});
		
}





function pagination(pages){
		
		var re  = $("#Re").val();
	  $("#pa").show();
		
	
	$.post('../controller/g_client.php',{page:pages,recherch:re},function(data){
	$("#pa").hide();
	 $("#tbl").html(data);
	
	});
		
	}
function cacher(){
		
		
			 $('#ctr').hide();
		
	}
	
	
	
	
	function affForm(){
		
	 $("#add").show();
		 var ff =1;
		 
		$.post('../controller/g_client.php',{cpt:""+ff+""},function(data){
	$("#add").hide();
	 $("#tbl").html(data);
	
	});
		
		
		
		
	}
	
	
	
	function edit(mod){
	
	    $('#ctr').hide();
	$("#dele").show();
		$.post('../controller/g_client.php',{modi:""+mod+""},function(data){
		$("#dele").hide();	 
	
	 $("#tbl").html(data);
	
	});
		
		
	
	
	
}
	
	
	
	
	function delet(param){
	
		var ok=confirm('vous-Etes sûr de vouloir supprimer cette entrée?');
if(ok){
	    
	
		$.post('../controller/g_client.php',{delet:""+param+""},function(data){
			 
	
	 $("#tbl").html(data);
	
	});
		
}
	
	

	
	}
	
	
	
	
	
	
	
	
	
	
	