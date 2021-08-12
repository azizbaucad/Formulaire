<?php
		$cpt = $_SESSION['id_cpt'];
?>
<?php 


require("connexion.php");

class Achat{
	
	public $id_br;
	public $id_cpt;
	public $date;
	
	
	
	public function __construct($id,$idcpt,$dte){
		$this->id_br=$id;
		$this->id_cpt=$idcpt;
		$this->date=$dte;
	}
	
	//*****************************************Fonction pour afficher les Bon de recouvrement / au lieu de achat***************************************
	 
	public static function GetAll($re){
		global $db;
		$req=$db->prepare(" SELECT * FROM br b,compte c WHERE c.id_cpt = b.id_cpt AND c.nom_u LIKE '$re%' ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	
	public static function GetAllPag($re,$page,$limit){
		global $db;
		$req=$db->prepare("SELECT * FROM br b ,compte c WHERE c.id_cpt = b.id_cpt AND c.nom_u LIKE '$re%'  LIMIT $page,$limit ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
		
	}
	//*********************************Fonction pour afficher les coompte au lieu de fournisseur sur selected**********************************
	
	
	
	public static function GetByF($idd){
		global $db;
		$req=$db->prepare("SELECT * FROM br b , compte c WHERE c.id_cpt = b.id_cpt AND b.id_br='$idd' ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	
	
	
	
	
	//*********************************Fonction pour l'Ajoute BR au lieu de Achat****************************************************
	
	
		
		public static function ADDAchat($fo,$dt){
			global $db; 
		  $req =$db->prepare("INSERT INTO `br`(`id_br`, `id_cpt`, `date`) VALUES ('','$fo','$dt')");
		  $req->execute();
		  $ok=$db->lastInsertId();
			 return $ok;
		}
	
	
	
	
	
	//*********************************Fonction pour la suppresion**********************************
	
	
	
	
	
	public static function DeByIdA($id){
			global $db; 
			try{
				$db->beginTransaction();
		        $req =$db->prepare("DELETE FROM br WHERE id_br='$id'");
		        $sql =$db->prepare("DELETE FROM d_br WHERE id_br='$id'");
		        $sql->execute();
				$req->execute();
		        $db->commit();
		  
			}catch(Exeception $e){
				$db->rollBack();
			}
		}
		
		
		//*********************************Fonction pour Calculer la somme d'achat Veillez commentez non interessant pour le moment*********************************
	
	
public static function NbrBl(){
		global $db;
		$req=$db->prepare("SELECT SUM(id_a) FROM achat GROUP BY id_a ");
		$req->execute();
	    
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
		
}

?>