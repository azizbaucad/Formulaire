$(document).ready(function() {
	
	
	 
	$("#Re").keyup(function(){
		
		
		afficher();
		})
 
	 
	
	 
	     afficher();
		 
		 
		 
		
	 
	 
});		
$(function(){
	 
$('<div id="ppp"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
$('<div id="pa"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
	 
 $('<div id="add"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();

 $('<div id="dele"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
	 
	 
 });
	
	
	
function afficher(){
	
	$("#ppp").show();
	var re  = $("#Re").val();

	
	$.post('../controller/medicament.php',{recherch:re},function(data){
	$("#ppp").hide();
	 $("#tbl").html(data);
	
	});
		
		
}

	
	function delet(rr){
		var ok=confirm('vous-Etes sûr de vouloir supprimer cette entrée?');
if(ok){
	
     $.post('../controller/medicament.php',{supp:rr},function(data){
	 
	 
	 $("#tbl").html(data);
	
	});

}



	}
	
	
	
	function pagination(pages){
		
		var re  = $("#Re").val();
	    var ree = $("#Recher").val();
		$("#pa").show();
	
	$.post('../controller/medicament.php',{page:pages,recherch:re},function(data){
	$("#pa").hide();
	 $("#tbl").html(data);
	
	});
		
	}
	
	
	
	function afficherForm(){
		$("#add").show();
		
		 var ff =1;
		$.post('../controller/medicament.php',{ff:ff},function(data){
	$("#add").hide();
	 $("#tbl").html(data);
	
	});
		
		
		
		
	}
	
	
	
	function cacher(){
		
		
			 $('#ctr').hide();
		
	}
	
	
	function edit(param){
		 $('#ctr').hide();
		 $("#dele").show();
		
		$.post('../controller/medicament.php',{aff:param},function(data){
	 $("#dele").hide();
	 $("#tbl").html(data);
	
	});
		
		
		
		
		
		
		
	}
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	