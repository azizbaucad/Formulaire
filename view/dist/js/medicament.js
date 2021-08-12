$(document).ready(function() {
		var pages = "";
		$(".moeeedal").hide();
		$("#dialog").show().animate({top:"-800px",opacity:1.0},1000);
		$('#save').click(function(){
			
				ajout();
				
				return false;
				
			});
			$("input[name='recherch']").keyup(function(){
		
				affichage();
				
				
				});
			
			$("#medicament").click(function(){
	
				afficher(pages);
				return false;
			});
			$(".close").click(function(){
	
			$("#dialog").show().animate({top:"-800px",opacity:1.0},1000);
			$(".moeeedal").hide();
	
			});
			$("#fermm").click(function(){
	
			$("#dialog").show().animate({top:"-800px",opacity:1.0},1000);
			$(".moeeedal").hide();
	
			});
			$("#savee").click(function(){
				exemodi();
			   
			});
			
			
			afficher();
			setInterval("afficher()", 1000);
			
	});
	
	
	
function afficher(){
	var recherch  = $("input[name='recherch']").val();
	
	$.post('ajax/medicament/medicament.php',{recherch:recherch},function(data){
	
	 $("#result").html(data);
	
	});
		
    
	
	
	}
function ajout(){
	
	
		var designation = $('#designation').val();
		var form = $('#form').val();
		var famille = $('#famille').val();
		var prix_uni = $('#prix_uni').val();
			
			$.ajax({
					url: "ajax/medicament/medicament.php",
					type:"POST",
					data:{designation:designation,form:form,famille:famille,prix_uni:prix_uni}
					}).done(function(data) {
						$("#info").html(data);
						$("#info").fadeOut(2000);
						//$(".container").reset();
					});
				
				$("#info").fadeIn(200);
				
	
	
	
	
	}
	
	
	
	
	
	
function supp(_id){
	
		var id = _id;
		
		
		
			$.ajax({
					url: "ajax/medicament/medicament.php",
					type:"POST",
					data:{id:id}
					}).done(function(data) {
						
						$("#ligne").fadeOut(100);
						
					});
				
				return true;
				
				
	}
	
	
function modi(_id){
	
		var id = _id;
		
		$(".moeeedal").show();
		$("#dialog").show().animate({top:"0px",opacity:1.0},1000);
		$.post('ajax/medicament/medicament.php',{id_medicament:id},function(data){
						$("#infooo").html(data);
						
	
		});
						
					
		return false;		
				
	}
function exemodi(){


				var id_Md = $("input#id_medicament").val();
				var des = $("input#des").val();
				var formm = $("input#for").val();
				var famill = $("input#famill").val();
				var prix_un = $("input#prix_un").val();
				
				$.post('ajax/medicament/medicament.php',{id_Md:id_Md,des:des,formm:formm,famill:famill,prix_un:prix_un},function(data){
						$("#infoo").html(data);
						$("#infoo").fadeOut(2000);
				});
			   
			$("#infoo").fadeIn(200);
			return true;

}

function pagination(page){
	
	var recherch  = $("input[name='recherch']").val();
	var pages = page;
	
	$.post("ajax/medicament/medicament.php",{pages:pages,recherch:recherch},function(donnee){
	
		$("#result").html(donnee);
		
	
	});
	
}