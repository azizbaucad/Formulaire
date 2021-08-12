$(document).ready(function() {
	
	
	$("#Re").keyup(function(){
		
		aff()
		})
    aff();
	
	affdM();
	AffMA();
	
	PosteAj();
	
	
	
	
	
});
$(function(){
	 
$('<div id="ppp"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
$('<div id="pa"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
	 
 $('<div id="add"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();

 $('<div id="dele"><img src="img/loading.gif" alt="loading.."/>Loading</div>').css({position:"absolute",top:"50%" ,left:"53%"}).appendTo("body").hide();
	 
	 
 });


function aff(){
	
	var rr = $("#Re").val();
	$("#ppp").show();
	
	$.post("../controller/g_vente.php",{rr:""+rr+""},function(data){
		
		$("#ppp").hide();
			
		$("#tbl").html(data);
		
		
		
		
		});
	
}
function affdM(){
	
	var g=$("#getid").val();
	var rr = 1;
	
	$.post("../controller/g_de_vente.php",{ent:""+rr+"",idd:""+g+""},function(data){
		
		
			
		$("#entet").html(data);
		
		
		
		
		});
}


function AffMA(){
	
	var g=$("#getid").val();
	var rr = 1;
	
	$.post("../controller/g_de_vente.php",{tbl:""+rr+"",id:""+g+""},function(data){
		
		
			
		$("#tbll").html(data);
		
		
		
		
		});
	
}


function deletA(rr){
	
	var ok =confirm("vous-Etes sûr de vouloir supprimer cette entrée?");
	
	if(ok){
	
	$.post("../controller/g_vente.php",{supp:""+rr+""},function(data){
		
		
			
		$("#tbl").html(data);
		
		
		
		
		});
	}
	
}










function delet(rr){
	
	var ok =confirm("vous-Etes sûr de vouloir supprimer cette entrée?");
	if(ok){
	
	var g=$("#getid").val();
	
	
	$.post("../controller/g_de_vente.php",{iddA:""+rr+"",idA:""+g+""},function(data){
		
		
			
		$("#tbll").html(data);
		
		
		
		
		});
	
	}
}


function PosteAj(){
	
	$("#dele").show();
	var rr=1;
	
	$.post("../controller/g_de_vente.php",{paj:""+rr+""},function(data){
		
		$("#dele").hide();
			
		$("#ajou").html(data);
		
		
		
		
		});
	
}

function AjouDetBL(){
	
	var g=$("#getid").val();
	var idd=$("#idm").val();
	var des=$("#des").val();
	var qte=$("#qte").val();
	var px=$("#px").val();
	var rest=$('#rest').val();
	var nb=parseInt(qte); 
	if(nb<=rest){
		
	
	$.post("../controller/g_de_vente.php",{gid:""+g+"",idm:""+idd+"",des:""+des+"",qte:""+qte+"",px:""+px+""},function(data){
		
		
			
		$("#tbll").html(data);
		
	
		
		
		});
		}else{
		
		alert("la quantite en stock "+rest);
		
		
	}
	
}

function affdiv(){
	
	
	var rr=1;
	
	$.post("../controller/g_vente.php",{di:""+rr+""},function(data){
		
		
			
		$("#ajj").html(data);
		
		
		
		
		});
	
}

function addA(){
	
	var forni= $("#for").val();
	var dt= $("#dt").val();
	
	
	$.post("../controller/g_vente.php",{fo:""+forni+"",dt:""+dt+""},function(data){
		
		
			
		$("#tbl").html(data);
		
		
		
		
		});
	
	
	
}
function lookup(val){
	
	
	if(val.length==0){
		
		$("#divAll").hide();
		
	}else{
		
		$.post("../controller/g_de_vente.php",{vl:val},function(data){
			
			
			$("#divAll").show();
		     $("#aff").html(data);
			
			
			});
		
		
	}
	
	
	
	
}

function fill(idd,cdb,des,fo,fa,px,rs){
	$("#idm").val(idd);
	$("#cb").val(cdb);
	$("#des").val(des);
	$("#fo").val(fo);
	$("#fam").val(fa);
	$("#pxu").val(px);
    $('#rest').val(rs);
	
		$("#divAll").hide();
	
	
}





function pagination(pages){
	
		
		var rr  = $("#Re").val();
	
		$("#pa").show();
	
	$.post('../controller/g_vente.php',{page:pages,rr:""+rr+""},function(data){
		
		$("#pa").hide();
	
	 $("#tbl").html(data);
	
	});
		
	}
	