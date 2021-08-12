<?php
require("connexion.php");
class Fournisseur{	 

      public $id_f;
	  public $nom_f;
	  public $tele_f;
	  public $adresse_f;
	 
	  
	  public function __construct($id_f,$n,$te,$ad){
		  $this->id_f=$id_f;
		  $this->nom_f=$n;
		  $this->tele_f=$te;
		  $this->adresse_f=$ad;
		 
		  
	  }
	  
	  
	  

	public static function afficherGlobal($re)
		{
            global $db;
		  $req =$db->prepare("SELECT * FROM `fournisseur` WHERE 
		     nom_f LIKE '$re%' OR
		    tele_f LIKE '$re%' OR
			 adresse_f LIKE '$re%'
			  
			 
			  ");
		  $req->execute();
		  
		   return $req->fetchAll(PDO::FETCH_OBJ);
		
		}
		
		public static function getAllByPage($re,$page,$limit)
		{
            global $db;
		  $req =$db->prepare("SELECT * FROM `fournisseur` WHERE 
		     nom_f LIKE '$re%' OR
		    tele_f LIKE '$re%' OR
			 adresse_f LIKE '$re%'
			 LIMIT $page,$limit
			  
			 
			  ");
		  $req->execute();
		  
		   return $req->fetchAll(PDO::FETCH_OBJ);
		
		}
		
		
		
		
		
		
		
		
		/*public static function afficherAll()
		{
            global $db;
		  $req =$db->prepare("SELECT * FROM `fournisseur`"); 
			 
		     
			 
		  $req->execute();
		  
		   return $req->fetchAll(PDO::FETCH_OBJ);
		
		}*/
	
	
	
	
		public  function Add()
		{
            global $db;
		  $req =$db->prepare("INSERT INTO `fournisseur`( `nom_f`, `tele_f`, `adresse_f`) VALUES (:nom,:tele,:ad)"); 
			 
		    $ok=$req->execute(Array(
			                      'nom'=>$this->nom_f,
								  'tele'=>$this->tele_f,
								  'ad'=>$this->adresse_f
			  ));
			  
			  
			  $this->id_f=$db->lastInsertId();
			 
		 
		  
		 return $ok;
		
		}
	
	
	
	
	public static function getAllById($id)
		{
            global $db;
		  $req =$db->prepare("SELECT * FROM `fournisseur` WHERE id_f='$id'"); 
			 
		     
			 
		  $req->execute();
		  
		   return $req->fetchAll(PDO::FETCH_OBJ);
		
		}
	
	
	
		public  function Edit()
		{
            global $db;
		  $req =$db->prepare("UPDATE `fournisseur` SET `nom_f`=:nom,`tele_f`=:tele,`adresse_f`=:ad WHERE id_f=:idf "); 
			 
		    $ok=$req->execute(Array(
			                        'idf'=>$this->id_f,
			                      'nom'=>$this->nom_f,
								  'tele'=>$this->tele_f,
								  'ad'=>$this->adresse_f
								 
			  ));
			  
			  
			 
		 
		  
		 return $ok;
		
		}
	
	
		public static function delet($id)
		{
            global $db;
		  $req =$db->prepare("DELETE FROM `fournisseur` WHERE id_f ='$id'"); 
			  $req->execute();
		  	}
		 
		
	
	
	
	
	
	
		
		
}
	
	?>

