<?php 
require("connexion.php");


class Compte{
	
	public $id_cpt;
	public $login;
	public $nom_u;
	public $prenom_u;
	public $password;
	
	
	
	public function __construct($id,$log,$nom,$pre,$pass){
		$this->id_cpt=$id;
		$this->login=$log;
		$this->nom_u=$nom;
		$this->prenom_u=$pre;
		$this->password=$pass;
		
		
	}

								/* fonction afficherAll() des comptes */
    
	public static function afficherAll()
	{
		global $db;
		$req = $db->prepare("SELECT * FROM `compte`");

		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
	}


    //**********************************Fonction pour afficher les Compte avec Pagination****************************
	public static function afficherGlobal($re){
		global $db;
		 $req=$db->prepare("SELECT * FROM `compte` WHERE 
		   nom_u LIKE '$re%' OR
		   prenom_u  LIKE '$re%' 
		   ");
		  
		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	
	public static function getAllByPage($re,$page,$limit){
		global $db;
		 $req=$db->prepare("SELECT * FROM `compte` WHERE 
		   nom_u LIKE '$re%' OR
		   prenom_u  LIKE '$re%' 
		    LIMIT $page,$limit
		   ");
		  
		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
		//*****************************************Fonction pour l'insertion des compte***************************************

	public  function Add()
		{
            global $db;
		  $req =$db->prepare("INSERT INTO `compte`(`login`, `nom_u`, `prenom_u`, `password`) VALUES (:lg,:nom,:pre,:pass)"); 
			 
		    $ok=$req->execute(Array(
			                      'lg'=>$this->login,
								  'nom'=>$this->nom_u,
								  'pre'=>$this->prenom_u,
								  'pass'=>$this->password
			  ));
			  
			  
			  $this->id_cpt=$db->lastInsertId();
			 
		 
		  
		 return $ok;
		
		}
    //**********************************Fonction pour afficher les Compte ****************************************
	
	
	public static function getAllById($id){
		global $db;
		$req=$db->prepare("SELECT * FROM compte WHERE id_cpt='$id'");
		
		$req->execute();
		return $req->fetchAll(PDO::FETCH_OBJ);
		
		
		
		
	}
	
	
	 //**********************************Fonction pour la modification**************************************************

	
		public  function Edit()
		{
            global $db;
		  $req =$db->prepare("UPDATE `compte` SET `login`=:lg, `nom_u`=:nom,`prenom_u`=:pre,`password`=:pass WHERE id_cpt=:idd "); 
			 
		    $ok=$req->execute(Array(
			                        'idd'=>$this->id_cpt,
									'lg'=>$this->login,
			                        'nom'=>$this->nom_u,
								    'pre'=>$this->prenom_u,
								    'pass'=>$this->password
								 
			  ));
			  
			  
			 
		 
		  
		 return $ok;
		
		}
	
	    //**********************************Fonction pour la suppression  *********************************************

	public static function delet($id)
		{
            global $db;
		  $req =$db->prepare("DELETE FROM `compte` WHERE id_cpt ='$id'"); 
			  $req->execute();
		  	}
	    //**********************************Fonction pour la verification de login et le mot de passe****************************

	
public static function login($login,$pass)
	{
		 global $db;
		  $req =$db->prepare("SELECT * FROM `compte` WHERE `login`='$login' AND `password`='$pass'"); 
			  $req->execute();
		
		
		
		return $req->fetchAll(PDO::FETCH_OBJ);	
	}

	public static function detail($nom,$dat)
	{
		 global $db;
		  $req =$db->prepare("SELECT * FROM `compte` c , br b 
		                    WHERE br.id_cpt=c.id_cpt
							AND  `nom_u`='$nom'
							AND `date`='$dat'"); 
			  $req->execute();

		return $req->fetchAll(PDO::FETCH_OBJ);	
	}
		 
	
}

?>
