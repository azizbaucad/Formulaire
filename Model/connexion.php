<?php
 //require_once '../config.php';
  
  
        global $db;
       
		
     
       try{
	$db = new PDO ('mysql:host=localhost;dbname=pfe','root','');
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET CHARACTER SET utf8 ");
	
     }catch(PDOEXCEPTION  $c){
	
	 echo "Error ".$c->getMessage();
	 exit();
	 
	}

 
?>