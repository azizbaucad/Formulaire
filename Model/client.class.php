<?php 


require("connexion.php");
class Client{	 

      public $id_clt;
	  public $CIN;
	  public $Nom;
	  public $Prenom;
	  public $tele;
	 	  
	  public $Adresse;
	  
	  public function __construct($id_c,$cin,$n,$pre,$te,$ad){
		  $this->id_clt=$id_c;
		  $this->CIN=$cin;
		  $this->Nom=$n;
		  $this->Prenom=$pre;
		  $this->tele=$te;
		 
		  $this->Adresse=$ad;
		  
	  }
	  
	  //**********************************Fonction pour afficher les Client avec Pagination****************************
	  
     public static function afficherGlobal($re){
		global $db;
		 $req=$db->prepare("SELECT * FROM `client` WHERE 
		   CIN LIKE '$re%' OR
		   Nom  LIKE '$re%' 
		    
		   ");
		  
		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	
	public static function getAllByPage($re,$page,$limit){
		global $db;
		 $req=$db->prepare("SELECT * FROM `client` WHERE 
		  CIN LIKE '$re%' OR
		   Nom  LIKE '$re%' 
		    LIMIT $page,$limit
			 
		   ");
		  
		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	//*****************************************Fonction pour l'insertion des Client***************************************
	
	public  function Add()
		{
            global $db;
		  $req =$db->prepare("INSERT INTO `client`(`CIN`, `Nom`, `Prenom`, `tele`,`Adresse`) VALUES (:cin,:nom,:pre,:tele,:ad)"); 
			 
		    $ok=$req->execute(Array(
			                      'cin'=>$this->CIN,
								  'nom'=>$this->Nom,
								  'pre'=>$this->Prenom,
								  'tele'=>$this->tele,
								   'ad'=>$this->Adresse
			  ));
			  
			  
			  $this->id_clt=$db->lastInsertId();
			 
		 
		  
		 return $ok;
		
		}
		//*****************************************Fonction pour afficher les client***************************************
	
	
	public static function getAllById($id){
		global $db;
		$req=$db->prepare("SELECT * FROM client WHERE id_clt='$id'");
		
		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
		
		
		
		
	}
	
	//*****************************************Fonction pour La modification des client***************************************
	
	
		public  function Edit()
		{
            global $db;
		  $req =$db->prepare("UPDATE `client` SET `CIN`=:cin,`Nom`=:nom,`Prenom`=:pre,`tele`=:tele,`Adresse`=:ad WHERE id_clt=:idd "); 
			 
		    $ok=$req->execute(Array(
			                        'idd'=>$this->id_clt,
									'cin'=>$this->CIN,
									'nom'=>$this->Nom,
			                        'pre'=>$this->Prenom,
								    'tele'=>$this->tele,
								    'ad'=>$this->Adresse
								 
			  ));
			  
			  
			 
		 
		  
		 return $ok;
		
		}
		
		//*****************************************Fonction pour la suppresion des client***************************************
	
	
	public static function delet($id)
		{
            global $db;
		  $req =$db->prepare("DELETE FROM `client` WHERE id_clt ='$id'"); 
			  $req->execute();
		  	}
	//*****************************************Fonction pour afficher tout les client***************************************
	
	public static function GetAll(){
		global $db;
		 $req=$db->prepare("SELECT * FROM `client`");
		    
		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	//*************************************Fonction pour Calculer la somme de nombre des client*****************************
	
	
	public static  function NbrClt()
	{
		global $db;
		
		 $req=$db->prepare("SELECT SUM(CIN) FROM `client` GROUP BY id_clt");
		    	$req->execute();
				
		return $req->fetchAll(PDO::FETCH_OBJ);
		 
		  
	
	}
	
	
	
	
	
	
	 
	
}

?>
