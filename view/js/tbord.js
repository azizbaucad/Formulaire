$(document).ready(function() {
	affNbrClt();
	affNbrBl();
	 affNbrVente();
	affNbrMed();
     afficher();
	 
});		
	
	
	
function afficher(){
	
	var re  =1;
	
	$.post('../controller/g_tbord.php',{recherch:""+re+""},function(data){
	
	 $("#tbl").html(data);
	
	});
		
}

function affNbrMed(param){
	
	
	
	$.post('../controller/g_tbord.php',{nbr1:""+param+""},function(data){
	
	 $("#nbr1").html(data);
	
	});
		
}
function affNbrVente(param){
	
	
	
	$.post('../controller/g_tbord.php',{nbrr:""+param+""},function(data){
	
	 $("#nbr2").html(data);
	
	});
		
}

function affNbrBl(param){
	
	
	
	$.post('../controller/g_tbord.php',{nbr3:""+param+""},function(data){
	
	 $("#nbr3").html(data);
	
	});
		
}


function affNbrClt(param){
	
	
	
	$.post('../controller/g_tbord.php',{nbr4:""+param+""},function(data){
	
	 $("#nbr4").html(data);
	
	});
		
}


