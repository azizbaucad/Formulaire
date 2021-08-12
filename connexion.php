<?php
 //require_once '../config.php';
  
  
        global $db;
       
		
     
       try{
	$db = new PDO ("mysql:host='mysql-saisie.alwaysdata.net';dbname='saisie_pfe'",'saisie','Aziz_2019');
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$db->exec("SET CHARACTER SET utf8 ");
	
     }catch(PDOEXCEPTION  $c){
	
	 echo "Error ".$c->getMessage();
	 exit();
	 
	}

 
?>