function supp(_id){
	
		var id = _id;
		
		alert(id);
		
			$.ajax({
					url: "class/supp_medicament.class.php",
					type:"POST",
					data:{id:id}
					}).done(function(data) {
						
						$("#ligne").fadeOut(2000);
						$("#rest").reset();
					});
				
				return true;
				
				
	}
	