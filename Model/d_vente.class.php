<?php 


require("connexion.php");

class D_Vente{
	
	
	public $id_dv;
	public $id_v;
	public $id_m;
	public $qte_v;
	public $prix_v;
	
	
	
	
	
	public  function __construct($id,$ida,$idm,$qt,$px){
		$this->id_dv=$id;
		$this->id_v=$id;
		$this->id_m=$idm;
		$this->qte_v=$qt;
		$this->prix_v=$px;
	}
	
    //****************************Fonction pour afficher les detaille Vente avec la Pagination****************************

     public static function GetAllD($id){
		global $db;
		$req=$db->prepare("SELECT * FROM d_vente dv, medicament m WHERE m.id_m = dv.id_m AND dv.id_v='$id' ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	
		    //****************************Fonction pour afficher les detaille Vente*********************************************

	
	  public static function getById($id){
		global $db;
		$req=$db->prepare("SELECT * FROM `d_vente` WHERE id_v='$id'");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	//****************************Fonction pour l'insertion des detaille Vente*********************************************
		public static function AjouDetVente($id,$idm,$qte,$px){
		global $db;
		$req=$db->prepare("INSERT INTO `d_vente`(`id_dv`, `id_v`, `id_m`, `qte_v`, `prix_v`) VALUES ('','$id','$idm','$qte','$px')");
		$req->execute();
	    
	  }
	
   //****************************Fonction pour la suppression des detaille Vente************************************

	
	public static function DeById($id){
			global $db; 
		  $req =$db->prepare("DELETE FROM d_vente WHERE id_dv='$id'");
		  $req->execute();
		}
			
			
    //****************************Fonction pour le calcule de la somme de qunatité de vente ************************************

	
	  public static function getPrixVente($id){
		global $db;
		$req=$db->prepare("SELECT SUM(qte_v) as pr FROM d_vente WHERE id_m='$id' GROUP BY id_m ");
		$req->execute();
				foreach($req->fetchAll(PDO::FETCH_OBJ) as $result);
				
				return @$result->pr;
		 
		
	}
	
	 //****************************Fonction pour le calcule de la somme de qunatité de Achat ************************************
	  public static function getPrixAchat($id){
		global $db;
		$req=$db->prepare("SELECT SUM(qte_a) as pr FROM d_achat WHERE id_m='$id' GROUP BY id_m ");
		$req->execute();
				foreach($req->fetchAll(PDO::FETCH_OBJ) as $result);
				
				return @$result->pr;
		 
		 
		 
	}
	

}


























?>