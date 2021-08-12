$( document ).ready(function() {
		var page = "medicament";
		trait(page);
	$("#tbord").click(function(){
	 var page = "tbord";
		trait(page);
		
		return false;
	});
	$("#medicament").click(function(){
	 var page = "medicament";
		trait(page);
		
		return false;
	});
	$("#vente").click(function(){
	 var page = "vente";
		trait(page);
		
		return false;
	});
	$("#achat").click(function(){
	 var page = "achat";
		trait(page);
		
		return false;
	});
	$("#client").click(function(){
	 var page = "client";
		trait(page);
		
		return false;
	});
	$("#fournisseur").click(function(){
	 var page = "fournisseur";
		trait(page);
		
		return false;
	});
	$("#compte").click(function(){
	 var page = "compte";
		trait(page);
		
		return false;
	});
});
function trait(page){
	
	$.ajax({
       url : 'pages/'+page+'/index.php', // La ressource ciblée
      
	   success : function(data){ // code_html contient le HTML renvoyé
           $(".content").html(data);
		  
		   $(".content:reset");
       }
    });
				



}
