
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
	
	$.post("../controller/g_achat.php",{rr:""+rr+""},function(data){
		
		$("#ppp").hide();
			
		$("#tbl").html(data);
		
		
		
		
		});
	
}
function affdM(){
	
	var g=$("#getid").val();
	var rr = 1;
	
	$.post("../controller/g_de_achat.php",{ent:""+rr+"",idd:""+g+""},function(data){
		
		
			
		$("#entet").html(data);
		
		
		
		
		});
}


function AffMA(){
	
	var g=$("#getid").val();
	var rr = 1;
	
	$.post("../controller/g_de_achat.php",{tbl:""+rr+"",id:""+g+""},function(data){
		
		
			
		$("#tbll").html(data);
		
		
		
		
		});
	
}


function deletA(rr){
	
	var ok =confirm("vous-Etes sûr de vouloir supprimer cette entrée?");
	
	if(ok){
	
	$.post("../controller/g_achat.php",{supp:""+rr+""},function(data){
		
		
			
		$("#tbl").html(data);
		
		
		
		
		});
	}
	
}










function delet(rr){
	
	var ok =confirm("vous-Etes sûr de vouloir supprimer cette entrée?");
	if(ok){
	
	var g=$("#getid").val();
	
	
	$.post("../controller/g_de_achat.php",{iddA:""+rr+"",idA:""+g+""},function(data){
		
		
			
		$("#tbll").html(data);
		
		
		
		
		});
	
	}
}


function PosteAj(){
	
	
	var rr=1;
	
	$.post("../controller/g_de_achat.php",{paj:""+rr+""},function(data){
		
		
			
		$("#ajou").html(data);
		
		
		
		
		});
	
}

function AjouDetBL(){
	
	var g=$("#getid").val();

	var ctri=$("#ctri").val();
	var agti=$("#agti").val();
	var idagti=$("#idagti").val();
	
	var imi=$("#imi").val();
	var dapi=$("#dapi").val();
	var deni=$("#deni").val();
	var moi=$("#moi").val();
	var mmhti=$("#mmhti").val();
	var mmttci=$("#mmttci").val();
	var nini=$("#nini").val();
	var dati=$("#dati").val();

	var adri=$("#adri").val();
	var cnii=$("#cnii").val();
	var cniei=$("#cniei").val();
	var ddcnii=$("#ddcnii").val();
	var ppoi=$("#ppoi").val();
	var ddppoi=$("#ddppoi").val();
	var tel1i=$("#tel1i").val();
	var tel2i=$("#tel2i").val();
	var rib1i=$("#rib1i").val();

	var rib2i=$("#rib2i").val();
	var cmti=$("#cmti").val();
	


	
	$.post("../controller/g_de_achat.php",{gid:""+g+"",
	
	ctri:""+ctri+"",
	agti:""+agti+"",
	idagti:""+idagti+"",
	imi:""+imi+"",
	dapi:""+dapi+"",
	deni:""+deni+"",
	moi:""+moi+"",
	mmhti:""+mmhti+"",
	mmttci:""+mmttci+"",
	nini:""+nini+"",
	dati:""+dati+"",
	adri:""+adri+"",
	cnii:""+cnii+"",
	cniei:""+cniei+"",
	ddcnii:""+ddcnii+"",
	ppoi:""+ppoi+"",
	ddppoi:""+ddppoi+"",
	tel1i:""+tel1i+"",
	tel2i:""+tel2i+"",
	rib1i:""+rib1i+"",
	rib2i:""+rib2i+"",
	cmti:""+cmti+""

},function(data){
		
		
			
		$("#tbll").html(data);
		
		
		
		
		});
	
}

function affdiv(){
	
	
	var rr=1;
	
	$.post("../controller/g_achat.php",{di:""+rr+""},function(data){
		
		
			
		$("#ajj").html(data);
		
		
		
		
		});
	
}

function addA(){
	
	var forni= $("#for").val();
	var dt= $("#dt").val();
	
	
	$.post("../controller/g_achat.php",{fo:""+forni+"",dt:""+dt+""},function(data){
		
		
			
		$("#tbl").html(data);
		
		
		
		
		});
	
	
	
}
function lookup(val){
	
	
	if(val.length==0){
		
		$("#divAll").hide();
		
	}else{
		
		$.post("../controller/g_de_achat.php",{vl:val},function(data){
			
			
			$("#divAll").show();
		     $("#aff").html(data);
			
			
			});
		
		
	}
	
	
	
	
}

function fill(idd,cdb,des,fo,fa,px){
	$("#idm").val(idd);
	$("#cb").val(cdb);
	$("#des").val(des);
	$("#fo").val(fo);
	$("#fam").val(fa);
	$("#pxu").val(px);
	
		$("#divAll").hide();
	
	
}





function pagination(pages){
	$("#pa").show();
		
		var rr  = $("#Re").val();
	
		
	
	$.post('../controller/g_achat.php',{page:pages,rr:""+rr+""},function(data){
	
	$("#pa").hide();
	
	 $("#tbl").html(data);
	
	});
		
	}
	




















